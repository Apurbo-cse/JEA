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



    // Gallery View
    public function gallery()
    {
        $data['galleries'] = DB::table('galleries')->where('status', 'active')->get();
        return view('frontend.pages.gallery',$data);
    }

}
