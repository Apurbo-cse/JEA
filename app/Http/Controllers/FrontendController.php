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
}
