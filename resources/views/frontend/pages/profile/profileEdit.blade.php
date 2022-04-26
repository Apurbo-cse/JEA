@extends('frontend.layouts.master')

@section('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('frontend/profile.css') }}">

@endsection

@section('content')

<br><br><br><br><br>
<style>
    .lfcs {
        float: left !important;
    }
</style>
<!-- ======= About Sectionn ======= -->
<section id="about" style="margin-top:30px;">

    <!-- ======= About Me ======= -->
    <div class="about-me container">

        <div class="sectionn-title">
            <h2>Hello!!! I'm</h2>
            <p style="color:#007B98;font-size:25px;">{{ $user->name}} {{ $user->last_name}}</p>
        </div>

        <div class="row ">
            <div class="col-lg-4" data-aos="fade-right">
                <div>
                    <img src="{{asset($user->image)}}" class="img-fluid object-fit" alt=""
                        style="height:350px; width:330px; "></div>
                <div>

                    <ul class="lfcs social-nav model-3d-0 footer-social w3_agile_social two ">
                        <li><a target="_blank" href="{{ $user->facebook }}" class="facebook">
                                <div class="front"><i class="fa fa-facebook" aria-hidden="true"
                                        style="color:white;margin-top:5px;"></i></div>
                                <div class="back"><i class="fa fa-facebook" aria-hidden="true" style="color:black;"></i>
                                </div>
                            </a></li>
                        <li><a target="_blank" href="{{ $user->linkedin }}" class="linkedin">
                                <div class="front"><i class="fa fa-linkedin" aria-hidden="true"
                                        style="color:white;margin-top:5px;"></i></div>
                                <div class="back"><i class="fa fa-linkedin" aria-hidden="true" style="color:black;"></i>
                                </div>
                            </a></li>

                        <li><a target="_blank" href="{{ $user->email }}" class="email">
                                <div class="front"><i class="fa fa-envelope-o" aria-hidden="true"
                                        style="color:white;margin-top:5px;"></i></div>
                                <div class="back"><i class="fa fa-envelope-o" aria-hidden="true"
                                        style="color:black;"></i>
                                </div>
                            </a></li>

                        <li><a target="_blank" href="{{ $user->phone }}" class="phone">
                                <div class="front"><i class="fa fa-phone" aria-hidden="true"
                                        style="color:white;margin-top:5px;"></i></div>
                                <div class="back"><i class="fa fa-phone" aria-hidden="true" style="color:black;"></i>
                                </div>
                            </a></li>
                    </ul>
                </div>

            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                <h3 style="color:#DE3163;font-size:18px;">{{ $user->job_digination }}</h3>
                <br>
                <p class="font-italic" style="color:#CCCCFF;font-size:12px;text-align:justify;">
                    {{ $user->description }}
                </p>
                <br>

                <div class="row">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="icofont-rounded-right"></i> <strong
                                    style="color:#174044;font-size:13px;">Qualification : </strong> <b
                                    style="color:#174044;font-size:13px;">{{ $user->job_designation }} <small
                                        style="font-size:7px;color:#581845;">{{ $user->course_status }}</small>
                                </b></li>
                            <li><i class="icofont-rounded-right"></i> <strong
                                    style="color:#174044;font-size:13px;">Subject :</strong> <b
                                    style="color:#174044;font-size:13px;">{{ $user->course_subject}}</b></li>
                            <li><i class="icofont-rounded-right"></i> <strong style="color:#174044;font-size:13px;">Job
                                    : </strong> <b style="color:#174044;font-size:13px;"> {{ $user->job_type}} </b></li>
                            <li><i class="icofont-rounded-right"></i> <strong
                                    style="color:#174044;font-size:13px;">Workplace : </strong> <b
                                    style="color:#174044;font-size:13px;">{{ $user->job_work }}</b></li>
                        </ul>
                    </div>

                    <div class="col-lg-6">
                        <ul>
                            <li><i class="icofont-rounded-right"></i> <strong
                                    style="color:#174044;font-size:13px;">Email : </strong> <b
                                    style="color:#174044;font-size:13px;">{{ $user->email}}</b></li>
                            <li><i class="icofont-rounded-right"></i> <strong
                                    style="color:#174044;font-size:13px;">Phone : </strong> <b
                                    style="color:#174044;font-size:13px;">{{ $user->phone }}</b></li>
                            <li><i class="icofont-rounded-right"></i> <strong
                                    style="color:#174044;font-size:13px;">Religion : </strong> <b
                                    style="color:#174044;font-size:13px;"> {{ $user->religion }}</b></li>
                            <li><i class="icofont-rounded-right"></i> <strong
                                    style="color:#174044;font-size:13px;">Blood Group : </strong> <b
                                    style="color:#174044;font-size:13px;"> {{ $user->blood }}</b></li>
                        </ul>
                    </div>

                </div>
                <br>
                <p style="color:gray;font-size:12px;text-align:justify;">
                    {{ $user->description }}
                </p>

                <br>

                <button class="btn border-success px-4">Save</button>
            </div>

        </div>

    </div><!-- End About Me -->

    <!-- ======= Counts ======= -->
    <div class="counts container">

        <div class="row">
            <div class="sectionn-title d-flex justify-content-between" style="margin-bottom:20px;">
                <h2>Education</h2>
                <span class="btn text-success " data-bs-toggle="modal" href="#exampleModalToggle"
                    role="button">Edit</span>

            </div>
            <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
                tabindex="-1">
                <form action="{{route('web.profileUpdate', $user->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <h4 class="text-dark fw-bold">Add College</h4>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="hsc_institute">Institute :</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="hsc_institute" name="hsc_institute">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2" for="hsc_group">Group :</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="hsc_group" name="hsc_group">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-default">Submit</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
        <div class="count-box">
            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
            <b style="color:white;font-size:12px;">HSC</b>
            <span data-toggle="counter-up" style="font-size:12px;">{{ $user->hsc_group }}</span>
            <p style="color:orange;fon-weight:400;font-size:11px;"> {{ $user->hsc_institute }}</p>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="count-box">
            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
            <b style="color:white;font-size:12px;">Diploma in Engineering</b>
            <span data-toggle="counter-up" style="font-size:12px;">{{ $user->diploma_subject }}</span>
            <p style="color:orange;fon-weight:400;font-size:11px;">{{ $user->diploma_institute }}</p>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="count-box">
            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
            <b style="color:white;font-size:12px;">BSc in Engineering (Dip.) </b>
            <span data-toggle="counter-up" style="font-size:12px;">{{ $user->bscdipsub }}</span>
            <p style="color:orange;fon-weight:400;font-size:11px;">{{ $user->bscdipname }}</p>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
        <div class="count-box">
            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
            <b style="color:white;font-size:12px;">BSc in Engineering</b>
            <span data-toggle="counter-up" style="font-size:12px;">{{ $user->bsc_subject}}</span>
            <p style="color:orange;fon-weight:400;font-size:11px;">{{ $user->bsc_institute }}</p>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mt-5 md-lg-0">
        <div class="count-box">
            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
            <b style="color:white;font-size:12px;">MSc in Engineering</b>
            <span data-toggle="counter-up" style="font-size:12px;">{{ $user->msc_subject }}</span>
            <p style="color:orange;fon-weight:400;font-size:11px;">{{ $user->msc_institute }}</p>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 mt-5 md-lg-0">
        <div class="count-box">
            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
            <b style="color:white;font-size:12px;">EMBA / MBA</b>
            <span data-toggle="counter-up" style="font-size:12px;">{{ $user->mba_subject }}</span>
            <p style="color:orange;fon-weight:400;font-size:11px;">{{ $user->mba_institute }}</p>
        </div>
    </div>

    </div>

    </div><!-- End Counts -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

        <div class="sectionn-title" style="margin-bottom:20px;">
            <h2>Parents Name</h2>
        </div>

        <div class="col-md-4 mb-3" style="font-size:14px;font-weight:600;">
            <label style="font-size:14px;font-weight:400;" for="validationServer01">Father Name</label> :
            {{ $user->father_name}}
        </div>

        <div class="col-md-4 mb-3" style="font-size:14px;font-weight:600;">
            <label style="font-size:14px;font-weight:400;" for="validationServer02">Mother Name</label> :
            {{ $user->mother_name }}
        </div>

    </div>
    <!-- End Interests -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

        <div class="sectionn-title" style="margin-bottom:20px;">
            <h2>Address</h2>
        </div>

        <div class="col-md-4 mb-3" style="font-size:14px;font-weight:600;">
            <label style="font-size:14px;font-weight:400;" for="validationServer01">Present Address</label> :
            {{ $user->present_add }}
        </div>

        <div class="col-md-4 mb-3" style="font-size:14px;font-weight:600;">
            <label style="font-size:14px;font-weight:400;" for="validationServer02">Permanent Address</label> :
            {{ $user->permanent_add }}
        </div>

    </div>
    <!-- End Interests -->

    <!-- ======= Interests ======= -->
    <div class="interests container">

        <div class="sectionn-title" style="margin-bottom:20px;">
            <h2>Others</h2>
        </div>

        <div class="col-md-3 mb-3" style="font-size:14px;font-weight:600;">
            <label style="font-size:14px;font-weight:400;" for="validationServer01">Alternate Phone</label> :
            {{ $user->phone }}
        </div>

        <div class="col-md-3 mb-3" style="font-size:14px;font-weight:600;">
            <label style="font-size:14px;font-weight:400;" for="validationServer01">NID</label> :
            {{ $user->nid }}
        </div>

        <div class="col-md-3 mb-3" style="font-size:14px;font-weight:600;">
            <label style="font-size:14px;font-weight:400;" for="validationServer02">Religion</label> :
            {{ $user->religion }}
        </div>

        <div class="col-md-3 mb-3" style="font-size:14px;font-weight:600;">
            <label style="font-size:14px;font-weight:400;" for="validationServer02">Blood Group</label> :
            {{ $user->blood }}
        </div>

    </div>
    <!-- End Interests -->
    </div>

    <br> <br>
</section><!-- End About Sectionn -->

@endsection
