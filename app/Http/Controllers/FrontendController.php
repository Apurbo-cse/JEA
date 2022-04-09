<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Models\ThanaCommittee;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class FrontendController extends Controller
{
    public function index()
    {
        $data['sliders'] = DB::table('sliders')->where('status', 'active')->limit(4)->get();
        return view('frontend.home.index',$data);
    }

  //About Vie
  public function about()
  {
    //   $data['galleries'] = DB::table('galleries')->where('status', 'active')->get();
      return view('frontend.pages.about');
  }


  // Thana Committee

  public function joypurhat()
  {

    $thana_committees = ThanaCommittee::where('thana_type', 'Joypuraht Sadar',)
    ->where('status', '1')->orderBy('created_at', 'ASC')->get();
    // $sliders = Slider::orderBy('created_at', 'DESC')->paginate(20);
    return view('frontend.pages.committee.joypurhat',compact('thana_committees'));
  }

  public function panchbibi()
  {
    $thana_committees = ThanaCommittee::where('thana_type', 'Panchbibi',)->where('status', '1')->orderBy('created_at', 'ASC')->get();
      return view('frontend.pages.committee.panchbibi',compact('thana_committees'));
  }

  public function kalai()
  {
    $thana_committees = ThanaCommittee::where('thana_type', 'Kalai',)->where('status', '1')->orderBy('created_at', 'ASC')->get();
      return view('frontend.pages.committee.kalai',compact('thana_committees'));
  }

  public function akkelpur()
  {
    $thana_committees = ThanaCommittee::where('thana_type', 'Akkelpur',)->where('status', '1')->orderBy('created_at', 'ASC')->get();
      return view('frontend.pages.committee.akkelpur',compact('thana_committees'));
  }
  public function khetlal()
  {
    $thana_committees = ThanaCommittee::where('thana_type', 'Khetlal',)->where('status', '1')->orderBy('created_at', 'ASC')->get();
      return view('frontend.pages.committee.khetlal',compact('thana_committees'));
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
