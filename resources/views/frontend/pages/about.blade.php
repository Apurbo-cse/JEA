@extends('frontend.layouts.master')
@section('title', 'JEA :: About')

@section('content')


 <!-- /banner_bottom_agile_info -->
 <div class="banner_bottom_agile_info">
    <div class="container">
        <!---728x90--->

        <div class="agile_ab_w3ls_info row">
            <div class="col-md-6 ab_pic_w3ls">
                <img src="{{ asset('frontend/images/team/team-2.jpg') }}" alt=" " class="img-responsive" />
            </div>
            <div class="col-md-6 ab_pic_w3ls_text_info">
                <h5>About Joypurhat Engineer's <span> Association</span> </h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie blandit ipsum auctor. Mauris volutpat augue dolor..</p>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore magna aliqua.</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div  style="background-color: rgb(9, 62, 97) " class="mt-4 p-4">
    <div class="justify-content-center d-flex">
     <div class="col-md-3 ">
         <h2 class="text-center text-bold text-light" style="border-bottom: 2px solid white">Advisor</h4>
     </div>
    </div>

 <section class="mt-4">

     {{-- style="background-image: url('{{asset($slider->image)}}');" --}}
     @foreach ( $advisors as $advisor)
     <div class="team" style="--img: url('{{asset($advisor->image)}}')">
         <img src="{{asset($advisor->image)}}" alt="">
         <div class="info">
             <div class="text-bold text-dark mt-3"><b>{{ $advisor->name }}</b></div>
             <div class="text-center">{{ $advisor->designation }} <small class="text-success">{{ $advisor->job }}</small></div>
             <div class="social">
                 <i class="fab fa-facebook-f"></i>
                 <i class="fab fa-instagram"></i>
                 <i class="fab fa-twitter"></i>
                 <i class="fab fa-snapchat-ghost"></i>
             </div>
         </div>
     </div>
     @endforeach

 </section>
 </div>

    {{-- <div class="row mainX">
        <div class="profile-card mb-5">
            <div class="img">
                <img src="{{asset('frontend/images/two.jpg')}}">
            </div>
            <div class="caption">
                <h3>Vin Diesel</h3>
                <p>Senior App Developer</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="profile-card mb-5">
            <div class="img">
                <img src="{{asset('frontend/images/two.jpg')}}">
            </div>
            <div class="caption">
                <h3>David Corner</h3>
                <p>Front End Developer</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="profile-card mb-5">
            <div class="img">
                <img src="{{asset('frontend/images/two.jpg')}}">
            </div>
            <div class="caption">
                <h3>Tom Cruise</h3>
                <p>Full Stact Developer</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="profile-card mb-5">
            <div class="img">
                <img src="{{asset('frontend/images/two.jpg')}}">
            </div>
            <div class="caption">
                <h3>Tom Cruise</h3>
                <p>Full Stact Developer</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="profile-card mb-5">
            <div class="img">
                <img src="{{asset('frontend/images/two.jpg')}}">
            </div>
            <div class="caption">
                <h3>Tom Cruise</h3>
                <p>Full Stact Developer</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="profile-card mb-5">
            <div class="img">
                <img src="{{asset('frontend/images/two.jpg')}}">
            </div>
            <div class="caption">
                <h3>Tom Cruise</h3>
                <p>Full Stact Developer</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="profile-card mb-5">
            <div class="img">
                <img src="{{asset('frontend/images/two.jpg')}}">
            </div>
            <div class="caption">
                <h3>Tom Cruise</h3>
                <p>Full Stact Developer</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="profile-card mb-5">
            <div class="img">
                <img src="{{asset('frontend/images/two.jpg')}}">
            </div>
            <div class="caption">
                <h3>Tom Cruise</h3>
                <p>Full Stact Developer</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="profile-card mb-5">
            <div class="img">
                <img src="{{asset('frontend/images/two.jpg')}}">
            </div>
            <div class="caption">
                <h3>Tom Cruise</h3>
                <p>Full Stact Developer</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="profile-card mb-5">
            <div class="img">
                <img src="{{asset('frontend/images/two.jpg')}}">
            </div>
            <div class="caption">
                <h3>Tom Cruise</h3>
                <p>Full Stact Developer</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="profile-card mb-5">
            <div class="img">
                <img src="{{asset('frontend/images/two.jpg')}}">
            </div>
            <div class="caption">
                <h3>Tom Cruise</h3>
                <p>Full Stact Developer</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>

    </div> --}}


@endsection
