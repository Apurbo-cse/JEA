<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $sliders = Slider::orderBy('created_at', 'DESC')->paginate(20);
        return view('admin.slider.index',compact('sliders'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $slider =new Slider();
        $slider->title = $request->input('title');
        $slider->description = $request->input('description');
        $slider->status = $request->input('status');
        // $slider->course = $request->input('course');
        // $slider->section = $request->input('section');


        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $path ='images/slider';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $slider['image']= $path.'/'. $file_name;
        }

        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'status'=>'required|in:'.Slider::ACTIVE_STATUS.','.Slider::INACTIVE_STATUS,
            // 'course'=>'required',
            // 'section'=>'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,JPEG,PNG,JPG|max:2048',
        ]);

        $slider->save();
        session()->flash('success', 'slider added successfully');
        return back();
        // return back()->with('status', 'slider added successfully');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
