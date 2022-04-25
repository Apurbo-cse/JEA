<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        return view('frontend.pages.profile.index', compact('user'));
    }

    // public function index()
    // {
    // $projects = Project::whereIn('product_id',Product::where('user_id',Auth::id())->pluck('id')->toArray())->latest()->paginate(20);

    // $user = User::where('id', Auth::id())->where('id')->first();
    // return view('frontend.pages.profile.index', compact('users'));
    // return view('frontend.pages.profile.index', compact('projects'))
    //         ->with('i', (request()->input('page', 1) - 1) * 5);
    // }
    // public function index($id){

    //     $data['user'] =User::where('id', $id)->first();
    //     return view('frontend.profile', $data);
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $user = Auth::user();
        $user = User::find($id);
        return view('frontend.pages.profile.edit', compact('user'));
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
        $user = Auth::user();
        $user = User::find($id);

        $user->name = $request->name;
        $user->last_name = $request->input('last_name');

        // $user->email = $request->email;
        $user->phone = $request->input('phone');
        $user->user_type = $request->input('user_type');

        // $user->password = $request->input('password');


        $user->facebook = $request->input('facebook');
        $user->linkedin = $request->input('linkedin');

        $user->description = $request->input('description');
        $user->image = $request->input('image');


        if ($request->hasFile('image'))

        {
            $destination = 'images/user/'.$user->image;
            if (File::exists($destination)){
              File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = $extension;
            $file->move('images/user/', $filename);
            $user->image = $filename;
        }

        $user->course_name = $request->input('course_name');
        $user->course_subject = $request->input('course_subject');
        $user->course_status = $request->input('course_status');

        $user->job_type = $request->input('job_type');
        $user->job_designation = $request->input('job_designation');
        $user->job_work = $request->input('job_work');

        $user->hsc_group = $request->input('hsc_group');
        $user->hsc_institute = $request->input('hsc_institute');
        $user->hsc_status = $request->input('hsc_status');
        $user->hsc_passing_year = $request->input('hsc_passing_year');

        $user->diploma_subject = $request->input('diploma_subject');
        $user->diploma_institute = $request->input('diploma_institute');
        $user->diploma_status = $request->input('diploma_status');
        $user->diploma_passing_year = $request->input('diploma_passing_year');

        $user->bsc_subject = $request->input('bsc_subject');
        $user->bsc_institute = $request->input('bsc_institute');
        $user->bsc_status = $request->input('bsc_status');
        $user->bsc_passing_year = $request->input('bsc_passing_year');

        $user->msc_subject = $request->input('msc_subject');
        $user->msc_institute = $request->input('msc_institute');
        $user->msc_status = $request->input('msc_status');
        $user->msc_passing_year = $request->input('msc_passing_year');

        $user->mba_subject = $request->input('mba_subject');
        $user->mba_institute = $request->input('mba_institute');
        $user->mba_status = $request->input('mba_status');
        $user->mba_passing_year = $request->input('mba_passing_year');

        $user->father_name = $request->input('father_name');
        $user->mother_name = $request->input('mother_name');

        $user->present_add = $request->input('present_add');
        $user->permanent_add = $request->input('permanent_add');

        $user->nid = $request->input('nid');
        $user->religion = $request->input('religion');
        $user->blood = $request->input('blood');
        $user->save();

        return back();
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
