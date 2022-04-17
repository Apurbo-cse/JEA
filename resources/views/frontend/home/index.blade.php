@extends('frontend.layouts.master')
{{-- @section('title', 'Joypurhat Engineers Association') --}}
@push('title')
Joypurhat Engineers Association
@endpush

@section('content')
<br><br><br>

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

 <div class="banner_bottom_agile_info">
    <div class="container">
        <div class="banner_bottom_agile_info_inner_w3ls">
            <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                <figure class="effect-roxy">
                    <img src="{{ asset('frontend/images/team/team-2.jpg') }}" alt=" " class="img-responsive" />
                    <figcaption>
                        <h3><span>F</span>all Ahead</h3>
                        <p>New Arrivals</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-6 wthree_banner_bottom_grid_three_left1 grid">
                <figure class="effect-roxy">
                    <img src="{{ asset('frontend/images/team/team-2.jpg') }}" alt=" " class="img-responsive" />
                    <figcaption>
                        <h3><span>F</span>all Ahead</h3>
                        <p>New Arrivals</p>
                    </figcaption>
                </figure>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<section id="card" style="background-color: #fefefe !important;">
    <div class="container wrapper">
        <div class="row">
            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card mb-2">

                    <img class="img-fluid" src="{{asset('frontend/images/two.jpg')}}" alt="">

                </div>
            </div>

            <div class="col-md-4 d-flex align-items-stretch">
                <div class="card mb-2" style="background-color: #00add7 !important; border: 2px solid #6EBACC;">
                    <div class="card-body py-5">
                        <h4 class="text-center text-white">Best Quality</h4>
                        <p class="text-center text-white content-text">We are committed to delivering outstanding,
                            cutting-edge IT solutions that add real value that goes beyond what is expected. Our
                            trustworthy, dedicated and experienced team will go the extra mile to solve your IT issues.
                        </p>
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
                        <p class="text-center text-white content-text">We strive to provide superior customer service
                            and ensure that every client is completely satisfied with our work. Our client-oriented
                            policy is what makes us top industry player.</p>
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
                        <p class="text-center text-white">With 25 years of experience, we are on a mission to exceed
                            your expectations and form a long-term, mutually beneficial relationship with ours clients.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services" class="my-3">
    <div class="services-content wrapper mt-5">
        <h4 class="text-center">JEA Service</h4>
        <div class="d-flex justify-content-center align-items-center">
            <div class="line"></div>
        </div>
        <div class="container">
            <p class="text-center mt-3 text-muted">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita dolorem officia fugit, perspiciatis
                numquam sequi itaque iusto tempora suscipit quae?Lorem ipsum dolor sit amet, consectetur adipisicing
                elit. Enim, provident. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur illum esse
                sit quisquam molestias autem eum aspernatur sed totam, Voluptates esse aperiam magni quasi atque rem
                enim.
            </p>
        </div>
    </div>

    <div class="container section-margin">
        <div class="row row-cols-1 row-cols-md-4 g-4 pb-2">
            <div class="col">
                <div class="card h-100 p-3 mx-auto card-width">
                    <div class=" card-top-img d-flex justify-content-center align-items-center ">
                        <img src="https://visacovid.xyz/assets/center-part/image/landing/icon1.png"
                            class=" img-fluid card-icon my-3" alt="..." />
                    </div>

                    <div class="card-body text-center">
                        <h5 class="card-title mb-3 fw-bold">Vaccine</h5>
                        <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nam,necessitatibus?</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 p-3 mx-auto card-width">
                    <div class=" card-top-img d-flex justify-content-center align-items-center ">
                        <img src="https://visacovid.xyz/assets/center-part/image/landing/icon2.png"
                            class=" img-fluid card-icon my-3" alt="..." />
                    </div>

                    <div class="card-body text-center">
                        <h5 class="card-title mb-3 fw-bold">Booster</h5>
                        <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nam,necessitatibus?</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 p-3 mx-auto card-width">
                    <div class=" card-top-img d-flex justify-content-center align-items-center ">
                        <img src="https://visacovid.xyz/assets/center-part/image/landing/icon3.png"
                            class=" img-fluid card-icon my-3" alt="..." />
                    </div>

                    <div class="card-body text-center">
                        <h5 class="card-title mb-3 fw-bold">PCR</h5>
                        <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nam,necessitatibus?</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 p-3 mx-auto card-width">
                    <div class=" card-top-img d-flex justify-content-center align-items-center ">
                        <img src="https://visacovid.xyz/assets/center-part/image/landing/icon4.png"
                            class=" img-fluid card-icon my-3" alt="..." />
                    </div>

                    <div class="card-body text-center">
                        <h5 class="card-title mb-3 fw-bold">Add Country</h5>
                        <p class="card-text text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Nam,necessitatibus?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="header">
    Our Team
</div>

<section>
    <div class="team" style="--img: url({{asset('frontend/images/four.jpeg')}})">
        <img src="{{asset('frontend/images/four.jpeg')}}" alt="">
        <div class="info">
            <div class="name">Daniel Xavier</div>
            <div class="title">CEO and Founder</div>
            <div class="social">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-snapchat-ghost"></i>
            </div>
        </div>
    </div>
    <div class="team" style="--img: url({{asset('frontend/images/three.jpg')}})">
        <img src="{{asset('frontend/images/three.jpg')}}" alt="">
        <div class="info">
            <div class="name">Andrea piacquadio</div>
            <div class="title">Co-Founder</div>
            <div class="social">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-snapchat-ghost"></i>
            </div>
        </div>
    </div>

    <div class="team" style="--img: url(../res/image/pexels-creation-hill-1681010.jpg)">
        <img src="../res/image/pexels-creation-hill-1681010.jpg" alt="">
        <div class="info">
            <div class="name">Derek Antonio</div>
            <div class="title">Project Manager</div>
            <div class="social">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-snapchat-ghost"></i>
            </div>
        </div>
    </div>

    <div class="team" style="--img: url(../res/image/pexels-pixabay-220453.jpg)">
        <img src="../res/image/pexels-pixabay-220453.jpg" alt="">
        <div class="info">
            <div class="name">Stephen Marcus</div>
            <div class="title">Marketing Manager</div>
            <div class="social">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-snapchat-ghost"></i>
            </div>
        </div>
    </div>

</section>
<!-- Flip Card Start -->
<section class="Modules about-container">
    <div class="container py-5 ">

        <h2>JEA | Modules</h2>
        <div class="row">

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

        </div>
    </div>

</section>
<!-- Flip Card End -->



<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Testimonial</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 d-flex justify-content-center">
            <div id="testimonial-slider" class="owl-carousel">

                <div class="testimonial">
                    <div class="pic">
                        <img src="http://www.markharwood.plus.com/images/people%20large/people8.jpg" alt="" class="img-responsive">
                    </div>
                    <h3 class="testimonial-info">
                        Diana
                        <small>Web Designer</small>
                    </h3>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi facilisis.</p>
                </div>

                <div class="testimonial">
                    <div class="pic">
                        <img src="https://static.pexels.com/photos/529928/pexels-photo-529928.jpeg" alt="" class="img-responsive">
                    </div>
                    <h3 class="testimonial-info">
                        krystal
                        <small>Web Developer</small>
                    </h3>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi facilisis.</p>
                </div>

                <div class="testimonial">
                    <div class="pic">
                        <img src="http://www.markharwood.plus.com/images/people%20large/people8.jpg" alt="" class="img-responsive">
                    </div>
                    <h3 class="testimonial-info">
                        Diana
                        <small>Web Designer</small>
                    </h3>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi facilisis.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script>
    $(document).ready(function(){
        $("#testimonial-slider").owlCarousel({
            items:1,
            itemsDesktop:[1000,1],
            itemsDesktopSmall:[979,1],
            itemsTablet:[768,1],
            pagination:true,
            navigation:false,
            navigationText:["",""],
            slideSpeed:500,
            singleItem:true,
            autoPlay:true
        });
    });
</script>
</body>
</html>

@endsection
