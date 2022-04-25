@extends('frontend.layouts.master')

@section('css')

@endsection

@section('content')


<br><br> <br>
<div class="container bootstrap snippets bootdey">
    <div class="row">
        <div class="profile-nav col-md-3">
            <div class="panel">
                <div class="user-heading round">
                    <a href="#">
                        <img src="assets/apurbo.jpg" alt="">
                    </a>
                    <h1>Apurbo Roy</h1>
                    <p>Software Engineer</p>
                </div>

                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#"> <i class="fa fa-user"></i> Profile</a></li>
                    <li><a href="#"> <i class="fa fa-calendar"></i> Recent Activity <span
                                class="label label-warning pull-right r-activity">9</span></a></li>
                    <li><a href="#"> <i class="fa fa-edit"></i> Edit profile</a></li>
                </ul>
            </div>
        </div>
        <div class="profile-info col-md-9">

            <div class="panel">

                <div class="panel-body bio-graph-info">
                    <h1>Bio Graph</h1>
                    <div class="row">
                        <div class="bio-row">
                            <p><span>Name</span>: Apurbo Roy</p>
                        </div>
                        <div class="bio-row">
                            <p><span>Designation </span>: Software Engineer</p>
                        </div>
                        <div class="bio-row">
                            <p><span>Workplace</span>: FTP Solution ltd. Dhaka</p>
                        </div>
                        <div class="bio-row">
                            <p><span>Job Type</span>: Company</p>
                        </div>
                        <div class="bio-row">
                            <p><span>Email </span>: apurboka@gmail.com</p>
                        </div>
                        <div class="bio-row">
                            <p><span>Phone </span>: +880 1732 955973</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="bio-desk">
                                    <h4 class="red" style="color: seagreen;">Education</h4>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="bio-desk">
                                    <h4 class="red">Computer Science & Engineering</h4>
                                    <p>Daffodil International University</p>
                                    <p>MSc in Engineering (Study Level)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="bio-desk">
                                    <h4 class="terques">Computer Science & Engineering</h4>
                                    <p>Daffodil International University</p>
                                    <p>BSc in Engineering</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Guardian-->
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="bio-desk">
                                    <h4 class="green">Guardian</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="bio-desk">
                                    <h4 class="red">Father</h4>
                                    <p>Sunil Kumar Sarkar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="bio-desk">
                                    <h4 class="terques">Mother</h4>
                                    <p>Nibha Rani Sarkar</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Guardian End-->

                    <!-- Address -->
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="bio-desk">
                                    <h4 class="purple">Address</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="bio-desk">
                                    <h4 class="green">Present Address</h4>
                                    <p>Mirpur-2, Dhaka</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="bio-desk">
                                    <h4 class="terques">Permanent Address</h4>
                                    <p>Kenduly, Amdai, Joypuhat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Address End -->

                    <!--Others-->
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="bio-desk">
                                    <h4 class="green">Others</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="bio-desk">
                                    <h4 class="red">Date Of Birth</h4>
                                    <p>01/01/1998</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="bio-desk">
                                    <h4 class="red">Blood Group</h4>
                                    <p>A+ve</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="bio-desk">
                                    <h4 class="terques">NID</h4>
                                    <p>8128542242</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--othersEnd-->
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
