<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

  public function blog()
  {
    //   $data['galleries'] = DB::table('galleries')->where('status', 'active')->get();
      return view('frontend.pages.blog.blog');
  }

}
