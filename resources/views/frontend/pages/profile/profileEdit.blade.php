@extends('frontend.layouts.master')

@section('css')
<link rel="stylesheet" href="{{ asset('frontend/profile.css') }}">

<!-- CSS Libraries -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Core CSS -->
<link href="https://students.yesinstitutebd.com/admin/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">

@endsection

@section('content')

<br><br><br><br><br>

<form action="{{route('web.profileUpdate')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- ======= About Sectionn ======= -->
    <section id="about" style="margin-top:30px;">

        <!-- ======= About Me ======= -->
        <div class="about-me container">

            <div class="sectionn-title">

                <p style="color:#038b77;font-size:28px;" class="mb-3">Update Profile</p>
                <h2>Hello!!! I'm</h2>
                <p style="color:#007B98;font-size:25px;">{{ $user->name}} {{ $user->last_name}}</p>
            </div>

            <div class="row">
                <div class="col-lg-4" data-aos="fade-right">
                    <img src="{{asset($user->image)}}" class="img-fluid object-fit" alt=""
                        style="height:350px; width:330px; "> <br> <br>
                    <input type="file" name="image" id="">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <h3 style="color:#DE3163;font-size:18px;">{{ $user->job_digination }}</h3>
                    <br>
                    <div class="row">
                        <div class="row form-group">
                            <div class="col-md-2"><label for="father_name">Frist Name </label></div>
                            <div class="col-md-4"><input class="form-control" name="name" type="text" value="{{ $user->name }}"
                                    id="father_name"></div>
                            <div class="col-md-2"><label for="mother_name">Last Name </label></div>
                            <div class="col-md-4"><input class="form-control" name="last_name" type="text" value="{{ $user->last_name }}"
                                    id="mother_name">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-2"><label for="father_name">Email </label></div>
                            <div class="col-md-4"><input class="form-control" name="email" type="text" value="{{ $user->email }}" disabled
                                    id="father_name"></div>
                            <div class="col-md-2"><label for="mother_name">Phone </label></div>
                            <div class="col-md-4"><input class="form-control" name="phone" type="text" value="{{ $user->phone }}"
                                    id="mother_name">
                            </div>
                        </div>

                        <div class="row form-group">
                           <div class="col-12">
                            <label for="father_name">Description </label>
                            <textarea name="description" class="form-control text-left">{{ $user->description }}</textarea>
                           </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <!-- End About Me -->

    </section>
    <!-- End About Sectionn -->

    <div class="container">
        <hr>

        <div class='col-lg-12 col-lg-offset-4' style="margin-bottom: 20px">

            <div class="row form-group">
                <div class="col-md-1"><label for="course_id">Engineer <span style="color: red;">*</span></label>
                </div>
                <div class="col-md-3">
                    <select name="course_name" id="" class="form-control" required>
                        <option value="{{ $user->course_name }}">{{ $user->course_name }}</option>
                        <option>Diploma in Engineering</option>
                        <option>BSc in Engineering (Diploma)</option>
                        <option>BSc in Engineering</option>
                        <option>MSc in Engineering / MBA </option>
                    </select>
                </div>
                <div class="col-md-1"><label for="admission_date">Subject <span style="color: red;">*</span></label>
                </div>
                <div class="col-md-4"><input class="form-control" name="course_subject" type="text" required
                        value="{{ $user->course_subject }}" placeholder="Computer Science & Engineering"></div>
                <div class="col-md-1"><label for="admission_date">Course <span style="color: red;">*</span></label>
                </div>
                <div class="col-md-2">
                    <select name="course_status" id="" class="form-control required">
                        <option value="{{ $user->course_status }}">{{ $user->course_status }}</option>
                        <option>Complete</option>
                        <option>Running</option>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-2"><label for="genderd">Gender <span style="color: red;">*</span></label></div>
                <div class="col-md-4"> <select class="form-control" id="genderd" name="gender" required>
                        <option value="{{ $user->gender }}">{{ $user->gender }}</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select></div>
                <div class="col-md-2"><label for="date_of_birth">Date Of Birth</label></div>
                <div class="col-md-4"><input class="form-control" name="date_of_birth" type="date" value=""
                        id="date_of_birth"></div>
            </div>

            <div class="row form-group">
                <div class="col-md-2"><label for="father_name">Father&#039;s Name </label></div>
                <div class="col-md-4"><input class="form-control" name="father_name" type="text" value=""
                        id="father_name"></div>
                <div class="col-md-2"><label for="mother_name">Mother&#039;s Name </label></div>
                <div class="col-md-4"><input class="form-control" name="mother_name" type="text" value=""
                        id="mother_name"></div>
            </div>


            <div class="row form-group">
                <div class="col-md-2"><label for="present_address">Permanent Address
                    </label></div>
                <div class="col-md-4"> <input class="form-control" rows="2" cols="40" name="present_address" type="text"
                        value="" id="present_address"></div>
                <div class="col-md-2"><label for="permanent_address">Present Address</label></div>
                <div class="col-md-4"> <input class="form-control" rows="2" cols="40" name="permanent_address"
                        type="text" value="" id="permanent_address"></div>
            </div>
            <div class="row form-group">

                <div class="col-md-2"><label for="blood_group">Blood Group </label>
                </div>
                <div class="col-md-4"><select class="form-control" id="blood_group" name="blood">
                        <option value="{{ $user->blood }}" >{{ $user->blood }}</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                </div>
                <div class="col-md-2"><label for="blood_group">Religion </label>
                </div>
                <div class="col-md-4">
                    <select class="form-control" id="blood_group" name="religion">
                        <option value="{{ $user->religion }}">{{ $user->religion }}</option>
                        <option >Islam</option>
                        <option >Hindusim</option>
                        <option >Christian</option>
                        <option>Buddhism</option>
                    </select>
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-2"><label for="nationality">Facbook Link</label>
                </div>
                <div class="col-md-4"><input class="form-control" name="facebook" type="text" value=""
                        id="nationality">
                </div>
                <div class="col-md-2"><label for="home_telephone">Linkedin Link</label></div>
                <div class="col-md-4"><input class="form-control" name="linkedin" type="text" value=""
                        id="home_telephone"></div>

            </div>


            <div class="row form-group">
                <div class="col-md-1"><label for="nid_no">NID No</span> </label></div>
                <div class="col-md-3"><input class="form-control" name="district" type="text" value="" id="nid_no">
                </div>
                <div class="col-md-1"><label for="zip_code">District</label>
                </div>
                <div class="col-md-3">
                    <select class="form-control" id="blood_group" name="blood">
                        <option value="{{ $user->district }}" >{{ $user->thana }}</option>
                        <option >Joypurhat</option>
                        <option >Other</option>
                    </select>
                </div>
                <div class="col-md-1"><label for="zip_code">Thana</label>
                </div>
                <div class="col-md-3">
                    <select class="form-control" id="blood_group" name="thana">
                        <option value="{{ $user->thana }}">{{ $user->thana }}</option>
                        <option >Joypurhat Sadar</option>
                        <option >Panchbibi</option>
                        <option >Kalai</option>
                        <option >Khetlal</option>
                        <option >Akkelpur</option>
                        <option >Other</option>
                    </select>
                </div>
            </div>



            <div class="row form-group">
                <div class="col-md-1"><label for="course_id"> Job</label>
                </div>
                <div class="col-md-3">
                    <select name="job_type" id="" class="form-control">
                        <option value="{{ $user->job_type }}">{{ $user->job_type }}</option>
                        <option>Govt</option>
                        <option >Company</option>
                        <option >Student</option>
                    </select>
                </div>
                <div class="col-md-1"><label for="email">Digination</label></div>
                <div class="col-md-3"><input class="form-control" name="job_designation" type="text" value="{{ $user->job_designation }}" id="email">
                </div>
                <div class="col-md-1"><label for="email">
                        Workplace</label></div>
                <div class="col-md-3"><input class="form-control" name="job_work" type="text" value="{{ $user->job_work }}" id="email">
                </div>
            </div>
            <br>

            <center>
                <button class="btn bg-warning px-5" type="reset">Clear</button>
                <button class="btn bg-primary px-5" type="submit">Update</button>
            </center>
            <br><br>

        </div>

    </div>

</form>

{{-- <div class="container">
        <form action="{{route('web.profileUpdate')}}" method="POST" enctype="multipart/form-data">
@csrf
<input type="text" class="bg-dark" name="name" value="{{ $user->name }}">
<input type="text" class="bg-dark" name="last_name" id="" value="{{ $user->last_name }}">
<button type="submit" class="btn-success">submit</button>
</form>
</div> --}}

@endsection
