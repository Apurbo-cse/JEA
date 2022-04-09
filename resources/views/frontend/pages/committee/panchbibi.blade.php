@extends('frontend.layouts.master')
@section('title', 'JEA :: About')

@section('content')

    <div class="container mt-5 mb-5">
        <div class="container">
            {{-- <div class="row">
            <div class="col-md-6 d-flex">
                <div class="header_about">
                    <img src="{{asset('frontend/images/logo.png')}}" style="width:120px;padding-top:2px;">
    </div>
    <div class="header_about mt-4 me-2 fw-bold">
        <h6 class="JyPText">Joypurhat</h6>
        <h6 class="JyTPext">Engineers Association</h6>
    </div>
</div>

<div class="col-md-6 text-end pt-4">
    <p>Central Bus Terminal, Jouypurhat <i class="fas fa-map-marker-alt"></i></p>
    <p>info@jeabd.org <i class="fas fa-envelope"></i></p>
    <p>+880 1763 493649 <i class="fas fa-phone"></i></p>
</div>
</div> --}}

            <div class="row ">
                <div class=" d-flex justify-content-center">
                    <div class="header_about">
                        <img src="{{ asset('frontend/images/logo.png') }}" style="width:120px;padding-top:2px;">
                    </div>
                    <div class="header_about mt-4 me-2 fw-bold">
                        <h4 class="Thana">Panchbibi Thana Committee</h4>
                        <p><span class="Joyouhat">Joypurhat</span> <span class="Enginners">Engineer's
                                Association</span></p>
                    </div>
                </div>

                <div class="row justify-content-between Thak_Border_top">
                    <small class="col-md-6">
                        Source : jea/thak/b/2022/no-04
                    </small>
                    <small class="col-md-6 date_Thak text-end ">
                        Date : 18th Feb 2022
                    </small>
                </div>
                <div class="row mt-3">
                    <p class="text-gray text-bold text-gray-100 text-success text-justify">
                        The following executive members were approved by the Joypurhat Engineers Association in the Joypuhat
                        Thana Committee.
                    </p>
                </div>



                <div class="row justify-content-center mt-4 text-center">

                    <div class="row justify-content-center mt-4 text-center">
                        @foreach ($thana_committees as $thana)
                            <div class="col-md-3">
                                <div class="mt-5 mb-3">
                                    <img src="{{ asset($thana->image) }}" class="ImgThak" alt="">
                                    <p>Engr. {{ $thana->name }}</p>
                                    <small>Department : {{ $thana->department }}</small>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>

        </div>
    </div>

    {{-- নিম্নোক্ত কার্যনির্বাহী সম্মানিত সদস্যবৃন্দের জয়পুরহাট ইঞ্জিনিয়ার এসোসিয়েশন কর্তৃক  ক্ষেতলাল থানা কমিটিতে অনুমোদন করা হলো। --}}

    <style>
        .Thana {
            color: rgb(255, 255, 255);
            text-shadow: 0 0 3px #0c0c0c, 0 0 5px #0000FF;
            font-weight: 600;
        }

        .Joyouhat {
            color: rgb(66, 10, 164);
            font-weight: 600;
        }

        .Enginners {
            color: rgb(107, 3, 39);
            font-weight: 600;
        }

        .Thak_Border_top {
            border-top: 2px solid #3e091b;
        }

        .date_Thak {
            float: right;
        }
        .ImgThak{
            width: 200px;
            height:250px;
            object-fit: cover;
            text-align: center;
        }

    </style>
@endsection
