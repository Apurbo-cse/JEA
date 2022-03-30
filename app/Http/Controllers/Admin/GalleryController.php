<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::orderBy('created_at', 'DESC')->paginate(20);
        return view('admin.gallery.index',compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gallery =new Gallery();
        $gallery->title = $request->input('title');
        $gallery->description = $request->input('description');
        $gallery->status = $request->input('status');



        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $path ='images/gallery';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $gallery['image']= $path.'/'. $file_name;
        }

        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'status'=>'required|in:'.Gallery::ACTIVE_STATUS.','.Gallery::INACTIVE_STATUS,
            // 'image' => 'required|image|mimes:jpeg,png,jpg,JPEG,PNG,JPG|max:2048',
        ]);

        $gallery->save();
        session()->flash('success', 'Gallery Created Successfully');
        return redirect()->route('admin.gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->title = $request->input('title');
        $gallery->description = $request->input('description');
        $gallery->status = $request->input('status');



        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $path ='images/gallery';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $gallery['image']= $path.'/'. $file_name;
        }

        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'status'=>'required|in:'.Gallery::ACTIVE_STATUS.','.Gallery::INACTIVE_STATUS,
            // 'image' => 'required|image|mimes:jpeg,png,jpg,JPEG,PNG,JPG|max:2048',
        ]);

        $gallery->save();
        session()->flash('success', 'Gallery Updated Successfully');
        return redirect()->route('admin.gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        if($gallery){
            if(file_exists(($gallery->image))){
                unlink($gallery->image);
            }
            $gallery->delete();
            session()->flash('success', 'Gallery deleted successfully');
            return back();
        }
    }
}
