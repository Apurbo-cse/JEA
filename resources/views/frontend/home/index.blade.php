@extends('frontend.layouts.master')
@section('title', 'Joypurhat Engineers Association')
@section('content')
<br><br><br>
<title>JEA - | Joypurhat Engineer's Association </title>

<div class="header-bot">
    <div class="header-bot_inner_wthreeinfo_header_mid row">

        <div class="col-md-4 header-middle sm-ms-2">
            <form action="#" method="post">
                <input type="search" name="search" placeholder="Search here..." required="">
                <input type="submit" value=" ">

                <div class="clearfix"></div>
            </form>
        </div>

        <!-- header-bot -->
        <div class="col-md-5" style="text-align:center;">
            {{-- @foreach($contacts as $contact) --}}
            <div>
                <h1 class="ml11">
                    <img src="{{asset('frontend/images/logo.png')}}" alt="" style="width:70px;height:70px;">
                    <span class="text-wrapper">
                        <span class="line line1"></span>
                        <span class="letters">Joypurhat Engineers Association</span>
                    </span>
                </h1>
            </div>

        </div>

        <!-- header-bot -->
        <div class="col-md-3 agileits-social top_content">
            <ul class="social-nav model-3d-0 footer-social w3_agile_social">
                <li><a href="#" class="facebook">
                        <div class="front"><i class="fab fa-facebook-f" aria-hidden="true"></i></div>
                        <div class="back"><i class="fab fa-facebook-f" aria-hidden="true"></i></div>
                    </a></li>
                <li><a href="#" class="instagram">
                        <div class="front"><i class="fab fa-instagram" aria-hidden="true"></i></div>
                        <div class="back"><i class="fab fa-instagram" aria-hidden="true"></i></div>
                    </a></li>
                <li><a href="#" class="twitter">
                        <div class="front"><i class="fab fa-twitter" aria-hidden="true"></i></div>
                        <div class="back"><i class="fab fa-twitter" aria-hidden="true"></i></div>
                    </a></li>
                <li><a href="#" class="linkedin">
                        <div class="front"><i class="fab fa-linkedin" aria-hidden="true"></i></div>
                        <div class="back"><i class="fab fa-linkedin" aria-hidden="true"></i></div>
                    </a></li>
                <li><a href="mailto:" class="email">

                        <div class="front"><i class="fas fa-envelope" aria-hidden="true"></i></div>
                        <div class="back"><i class="fas fa-envelope" aria-hidden="true"></i></div>
                    </a></li>
                <li><a href="tel:+88" class="cell">
                        <div class="front"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="back"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    </a></li>
            </ul>
        </div>

        {{-- @endforeach --}}
        <div class="clearfix"></div>
    </div>
</div>
</div>

<section class="slider-area">
    <div class="sliders owl-carousel">
        @foreach($sliders as $slider)
        <div class="single-slide bg" style="background-image: url('{{asset($slider->image)}}');">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="slide-content">
                            <h4 style="color:white;">We are <span
                                    style="color:#11414B; font-weight:600;font-size:20px;text-shadow CardXS:5px slid white;">JEA</span>
                            </h4>
                            <h1 style="padding:15px;">{{$slider->title}}</h1>
                            <p style="padding:20px;">{{$slider->description}}</p>
                            <a href="about.html" class="box-btn">ccontact us <i
                                    class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section id="card" style="background-color: #fefefe !important;">
    <div class="container wrapper pt-5 pb-5">
      <div class="row">
        <div class="col-md-4 d-flex align-items-stretch">
          <div class="card mb-2" style="background-color: #00add7 !important; border: 2px solid #6EBACC;">
        <div class="card-body py-5">
          <h4 class="text-center text-white py-5">Flexibility</h4>
          <p class="text-center text-white content-text py-3" >We are able to quickly adapt to new circumstances as they arise and change our plans to navigate or overcome unanticipated obstacles with a pin point solution-based strategy</p>
        </div>
          </div>
        </div>

        <div class="col-md-4 d-flex align-items-stretch">
          <div class="card mb-2">

            <img class="img-fluid" src="{{asset('frontend/images/one.png')}}" alt="">

          </div>
        </div>

        <div class="col-md-4 d-flex align-items-stretch">
          <div class="card mb-2" style="background-color: #00add7 !important; border: 2px solid #6EBACC;">
        <div class="card-body py-5">
          <h4 class="text-center text-white">Strong Leaders</h4>
          <p class="text-center text-white content-text">Our strong leadership encourage, motivate, inspire and challenge our team to produce their best work and connects the team together for better solutions.</p>
        </div>
          </div>
        </div>


        <div class="col-md-4 d-flex align-items-stretch">
          <div class="card mb-2">

            <img class="img-fluid" src="{{asset('frontend/images/two.jpg')}}" alt="">

          </div>
        </div>

        <div class="col-md-4 d-flex align-items-stretch">
          <div class="card mb-2" style="background-color: #00add7 !important; border: 2px solid #6EBACC;">
        <div class="card-body py-5">
          <h4 class="text-center text-white">Best Quality</h4>
          <p class="text-center text-white content-text">We are committed to delivering outstanding, cutting-edge IT solutions that add real value that goes beyond what is expected. Our trustworthy, dedicated and experienced team will go the extra mile to solve your IT issues.</p>
        </div>
          </div>
        </div>

        <div class="col-md-4 d-flex align-items-stretch">
          <div class="card mb-2">

            <img class="img-fluid" src="{{asset('frontend/images/three.jpg')}}" alt="">

          </div>
        </div>
        <div class="col-md-4 d-flex align-items-stretch">
          <div class="card mb-2" style="background-color: #00add7 !important; border: 2px solid #6EBACC;">
        <div class="card-body py-5">
          <h4 class="text-center text-white">Client Oriented</h4>
          <p class="text-center text-white content-text">We strive to provide superior customer service and ensure that every client is completely satisfied with our work. Our client-oriented policy is what makes us top industry player.</p>
        </div>
          </div>
        </div>


        <div class="col-md-4 d-flex align-items-stretch">
          <div class="card mb-2">

            <img class="img-fluid" src="{{asset('frontend/images/four.jpeg')}}" alt="">

          </div>
        </div>

        <div class="col-md-4 d-flex align-items-stretch">
          <div class="card mb-2" style="background-color: #00add7 !important; border: 2px solid #6EBACC;">
        <div class="card-body py-5">
          <h4 class="text-center text-white content-text">Rich Experience</h4>
          <p class="text-center text-white">With 25 years of experience, we are on a mission to exceed your expectations and form a long-term, mutually beneficial relationship with ours clients.</p>
        </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="services" class="my-3">
    <div class="services-content wrapper mt-5">
        <h4 class="text-center">Visa Covid Service</h4>
        <div class="d-flex justify-content-center align-items-center">
            <div class="line"></div>
        </div>
        <div class="container">
            <p class="text-center mt-3 text-muted">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita dolorem officia fugit, perspiciatis numquam sequi itaque iusto tempora suscipit quae?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, provident. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur illum esse sit quisquam molestias autem eum aspernatur sed totam, Voluptates esse aperiam magni quasi atque rem enim.
            </p>
        </div>
    </div>

    <div class="container section-margin">
        <div class="row row-cols-1 row-cols-md-4 g-4 pb-2">
                            <div class="col">
                    <div class="card h-100 p-3 mx-auto card-width">
                        <div class=" card-top-img d-flex justify-content-center align-items-center ">
                            <img src="https://visacovid.xyz/assets/center-part/image/landing/icon1.png" class=" img-fluid card-icon my-3" alt="..." />
                        </div>

                        <div class="card-body text-center">
                            <h5 class="card-title mb-3 fw-bold">Vaccine</h5>
                            <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam,necessitatibus?</p>
                        </div>
                    </div>
                </div>
                            <div class="col">
                    <div class="card h-100 p-3 mx-auto card-width">
                        <div class=" card-top-img d-flex justify-content-center align-items-center ">
                            <img src="https://visacovid.xyz/assets/center-part/image/landing/icon2.png" class=" img-fluid card-icon my-3" alt="..." />
                        </div>

                        <div class="card-body text-center">
                            <h5 class="card-title mb-3 fw-bold">Booster</h5>
                            <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam,necessitatibus?</p>
                        </div>
                    </div>
                </div>
                            <div class="col">
                    <div class="card h-100 p-3 mx-auto card-width">
                        <div class=" card-top-img d-flex justify-content-center align-items-center ">
                            <img src="https://visacovid.xyz/assets/center-part/image/landing/icon3.png" class=" img-fluid card-icon my-3" alt="..." />
                        </div>

                        <div class="card-body text-center">
                            <h5 class="card-title mb-3 fw-bold">PCR</h5>
                            <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam,necessitatibus?</p>
                        </div>
                    </div>
                </div>
                            <div class="col">
                    <div class="card h-100 p-3 mx-auto card-width">
                        <div class=" card-top-img d-flex justify-content-center align-items-center ">
                            <img src="https://visacovid.xyz/assets/center-part/image/landing/icon4.png" class=" img-fluid card-icon my-3" alt="..." />
                        </div>

                        <div class="card-body text-center">
                            <h5 class="card-title mb-3 fw-bold">Add Country</h5>
                            <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam,necessitatibus?</p>
                        </div>
                    </div>
                </div>
                    </div>
    </div>
</section>

<!-- Flip Card Start -->
<section class="Modules about-container">

    <div class="about-right py-2 w-50 fw-bold text-center">
        <h2>mGES | Modules</h2>
    </div>
    <div class="container py-5 ">
        <div class="row mt-5">

            <div class="col-md-3 my-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <div class="card-body ">
                                <div class="text-center mt-4">
                                    <h1 class="fw-bold infoText">1</h1>
                                </div>
                                <p class="text-center mb-3 infoText">Employer</p>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="text-center mt-3">
                                <h6 class="fw-bold ">Employer</h6>
                            </div>
                            <p class="text-center px-1"> Employer can do most of the process except ground handling at
                                airport and
                                quarantine</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <div class="card-body ">
                                <div class="text-center mt-4">
                                    <h1 class="fw-bold infoText">2</h1>
                                </div>
                                <p class="text-center mb-3 infoText">EMP Agency (MY)</p>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="text-center mt-3">
                                <h6 class="fw-bold ">EMP Agency (MY)</h6>
                            </div>
                            <p class="text-center px-1">Will act on behalf of their clients (employers) on VDR
                                application and all
                                ground handling.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <div class="card-body ">
                                <div class="text-center mt-4">
                                    <h1 class="fw-bold infoText">3</h1>
                                </div>
                                <p class="text-center mb-3 infoText">KDN SSC</p>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="text-center mt-3">
                                <h6 class="fw-bold ">KDN SSC</h6>
                            </div>
                            <p class="text-center px-1">Employers will only able to access the approval once it is
                                shared by OSC.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <div class="card-body ">
                                <div class="text-center mt-4">
                                    <h1 class="fw-bold infoText">4</h1>
                                </div>
                                <p class="text-center mb-3 infoText">EMP. Agency (BGD)</p>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="text-center mt-3">
                                <h6 class="fw-bold ">EMP. Agency (BGD)</h6>
                            </div>
                            <p class="text-center px-1">Bangladesh’s licensed agencies will participate. Better
                                selection and faster
                                recruitment.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <div class="card-body ">
                                <div class="text-center mt-4">
                                    <h1 class="fw-bold infoText">5</h1>
                                </div>
                                <p class="text-center mb-3 infoText">Attestation</p>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="text-center mt-3">
                                <h6 class="fw-bold ">Attestation</h6>
                            </div>
                            <p class="text-center px-1">Bangladeshi High Commission in Kuala Lumpur will determine the
                                procedure and
                                after verification they will generate QR code of the employer.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <div class="card-body ">
                                <div class="text-center mt-4">
                                    <h1 class="fw-bold infoText">6</h1>
                                </div>
                                <p class="text-center mb-3 infoText">Candidates</p>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="text-center mt-3">
                                <h6 class="fw-bold ">Candidates</h6>
                            </div>
                            <p class="text-center px-1">Online interview will assist the employer to select the most
                                reliable
                                candidates.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <div class="card-body ">
                                <div class="text-center mt-4">
                                    <h1 class="fw-bold infoText">7</h1>
                                </div>
                                <p class="text-center mb-3 infoText">E-Medical</p>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="text-center mt-3">
                                <h6 class="fw-bold ">E-Medical</h6>
                            </div>
                            <p class="text-center px-1">All registered medical center in Bangladesh will upload the
                                medical result.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <div class="card-body ">
                                <div class="text-center mt-4">
                                    <h1 class="fw-bold infoText">8</h1>
                                </div>
                                <p class="text-center mb-3 infoText">Orientation</p>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="text-center mt-3">
                                <h6 class="fw-bold ">Orientation</h6>
                            </div>
                            <p class="text-center px-1">Orientation session and basic knowledge about work & terms for
                                employees.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <div class="card-body ">
                                <div class="text-center mt-4">
                                    <h1 class="fw-bold infoText">9</h1>
                                </div>
                                <p class="text-center mb-3 infoText">Immigration</p>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="text-center mt-3">
                                <h6 class="fw-bold ">Immigration</h6>
                            </div>
                            <p class="text-center px-1"> Integrated module for immigration department for calling visa
                                application,
                                Sticker, face matching through Artificial Intelligence (AI) and flights.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <div class="card-body ">
                                <div class="text-center mt-4">
                                    <h1 class="fw-bold infoText">10</h1>
                                </div>
                                <p class="text-center mb-3 infoText">VDR Sticker mGES</p>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="text-center mt-3">
                                <h6 class="fw-bold ">VDR Sticker mGES</h6>
                            </div>
                            <p class="text-center px-1">mGES official counter in Dhaka will handle all candidate's
                                documents
                                securely.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <div class="card-body ">
                                <div class="text-center mt-4">
                                    <h1 class="fw-bold infoText">11</h1>
                                </div>
                                <p class="text-center mb-3 infoText">VDR Sticker High Commission</p>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="text-center mt-3">
                                <h6 class="fw-bold ">VDR Sticker High Commission</h6>
                            </div>
                            <p class="text-center px-1">To ensure safety and data security, only authorized Immigration
                                officers
                                will be given the access to mGES data</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <div class="card-body ">
                                <div class="text-center mt-4">
                                    <h1 class="fw-bold infoText">12</h1>
                                </div>
                                <p class="text-center mb-3 infoText">BMET</p>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="text-center mt-3">
                                <h6 class="fw-bold ">BMET</h6>
                            </div>
                            <p class="text-center px-1">Bangladesh Bureau of Manpower, Employment, and Training (BMET)
                                will
                                determine the procedure and the service fees.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-3">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <div class="card-body ">
                                <div class="text-center mt-4">
                                    <h1 class="fw-bold infoText">13</h1>
                                </div>
                                <p class="text-center mb-3 infoText">Labor Department</p>
                            </div>
                        </div>
                        <div class="flip-card-back">
                            <div class="text-center mt-3">
                                <h6 class="fw-bold ">Labor Department</h6>
                            </div>
                            <p class="text-center px-1">Malaysian Labor Department will determine the kind of reports
                                they require
                                from the employers and the agencies</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>
<!-- Flip Card End -->


<div class="section">
    <div class="container">
        <div class="row cardPro mt-3 mb-3">

            <div class="col-md-4">
                <div class="card card bg-light shadow CardXS m-2">
                    <p>name</p>
                    <p>dsfg sdh fsdlfs adfs</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card bg-light shadow CardXS m-2">
                    <p>name</p>
                    <p>dsfg sdh fsdlfs adfs</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card bg-light shadow CardXS m-2">
                    <p>name</p>
                    <p>dsfg sdh fsdlfs adfs</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card bg-light shadow CardXS m-2">
                    <p>name</p>
                    <p>dsfg sdh fsdlfs adfs</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card bg-light shadow CardXS m-2">
                    <p>name</p>
                    <p>dsfg sdh fsdlfs adfs</p>
                </div>
            </div>
        </div>
    </div>
</div>



<style>
    .line{
    margin-top: 10px;
    height: 5px;
    width: 120px;
   background-color: #6C63FF;
   border-radius: 5px;
}
.card-icon{

    height: 50pt;
    width: 50pt;

}
.card {
    cursor: pointer;
    box-shadow: 0 9px 12px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    border-radius: 5px;
  }

  .card:hover {
    box-shadow: 0 12px 18px 0 rgba(0,0,0,0.2);
    transform:scale(1.05);
  }
.card-width{
    width: 85%;
}
.card-icon {
    height: 50pt;
    width: 50pt;
}
</style>

@endsection
