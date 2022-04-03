<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class FrontendController extends Controller
{
    public function index()
    {
        $data['sliders'] = DB::table('sliders')->where('status', 'active')->limit(4)->get();
        return view('frontend.home.index',$data);
    }


    // MSc Engineer View
    public function msc()
    {
        return view('frontend.pages.engineers.msc');
    }

    // BSC Engineer View
    public function bsc()
    {
        return view('frontend.pages.engineers.bsc');
    }

    // BSC Diploma Engineer View
    public function bsc_diploma()
    {
        return view('frontend.pages.engineers.bsc_diploma');
    }

    // Diploma Engineer View
    public function diploma()
    {
        return view('frontend.pages.engineers.diploma');
    }

    // Gallery Vie
    public function gallery()
    {
        $data['galleries'] = DB::table('galleries')->where('status', 'active')->get();
        return view('frontend.pages.gallery',$data);
    }

    // User Profile
    // public function profile()
    // {
    //     return view('frontend.pages.user.profile');
    // }

}
