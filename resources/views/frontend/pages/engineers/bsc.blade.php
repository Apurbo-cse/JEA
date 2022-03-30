@extends('frontend.layouts.master')
@section('content')
<title>JEA - | BSc in Engineering </title>
<br><br>
<!-- /banner_bottom_agile_info -->
<div class="page-head_agile_info_w3l">
			<div class="container">
				<h3>BSc <span>Engineer </span></h3>
				<!--/w3_short-->
				<div class="services-breadcrumb">
					<div class="agile_inner_breadcrumb">
						<ul class="w3_short">
							<li><a href="/">Home</a><i>|</i></li>
							<li>Engineer List</li>
						</ul>
					</div>
				</div>
				<!--//w3_short-->
			</div>
		</div>
<!-- /banner_bottom_agile_info -->

 <!-- Class Start -->


 <div class="class">
        <div class="container">
            <div class="row class-container">
            {{-- @foreach($users as $user) --}}
                <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="class-wrap"><br>
                        <div class="class-text">
                            <div class="class-teacher">
                                <img src="{(url('images/user/profile.jpg')}" alt="Image">
                                {{-- <img src="{{(!empty($user->image))?url('images/user/'.$user->image):url('images/user/profile.jpg')}}" alt="Image"> --}}
                                <h3>Apurbo Kumar</h3>
                                <a href="">+</a>
                            </div>
                            <h2 style="font-size: 13.5px;">Software Engineer</h2>
                            <div class="class-meta">
                                <p><i class="far fa-location-alt"></i>TFP Solutions (Bangladesh) ltd.</p>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- @endforeach --}}
            </div>
        </div>
    </div>

    <!-- Class End -->
@endsection
