@extends('layouts.app')

@section("title", "Industrial Games 30")

@section('css')
<style>
    body {
        background: url("/assets/background/background_home.png") no-repeat center center;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    h2 {
        font-family: 'TT Norms Bold';
    }

    h3,
    h4 {
        font-family: 'TT Norms Medium';
    }

    p {
        font-family: 'TT Norms Light';
    }

    .fix-image {
        max-width: 100%;
        max-height: 100%;
        display: block;
        transition: all 0.2s ease;
    }

    .fix-image:hover {
        -webkit-transform: scale(1.05);
    }

    .text-red {
        color: #ea435e;
    }

    .spacer {
        height: 100px;
        width: auto;
    }

    .spacer-1 {
        height: 100px;
        width: auto;
    }

    .container-info {
        transition: all 0.2s ease;
        background-color: #faf0dc;
        border-radius: 24px;
    }

    .container-info:hover {
        -webkit-transform: scale(1.05);
        box-shadow: 0 6px 10px rgba(0, 0, 0, .08)
    }


    .button-regis {
        border: 1px solid #ea435e;
        border-radius: 1.5rem;
        box-sizing: border-box;
        color: #ea435e;
        cursor: pointer;
        display: inline-block;
        font-size: 1.1rem;
        font-weight: 600;
        line-height: 1;
        padding: 1rem 1.6rem;
        text-align: center;
        text-decoration: none #0d172a solid;
        text-decoration-thickness: auto;
        transition: all .1s cubic-bezier(.4, 0, .2, 1);
        box-shadow: 0px 1px 2px rgba(166, 175, 195, 0.25);
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
    }

    .button-regis:hover {
        background-color: #ea435e;
        color: #fff;
    }

    .spacer-2 {
        margin-right: -30px;
        margin-left: -30px;
    }

    @media (min-width: 768px) {
        .button-regis {
            font-size: 1.125rem;
            padding: 1rem 2rem;
        }
    }

    @media (max-width: 768px) {
        body {
            background: url("/assets/background/background_home.png") no-repeat center bottom;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: auto;
        }

        .spacer {
            height: 100px;
        }

        .spacer-1 {
            height: 70px;
            width: auto;
        }

        .spacer-2 {
            margin-right: 0px;
            margin-left: 0px;
            height: 30px;
            width: auto;
        }

        .spacer-3 {
            height: 100px;
        }

        .container-1 {
            padding: 0px !important;
            margin: 0px !important;
        }

        .poster {
            max-height: 400px !important;
        }

        .timeline {
            max-height: 350px !important;
        }

        .maskot {
            max-height: 300px !important;
        }

        .prize {
            max-height: 230px !important;
        }

        .headline {
            max-height: 200px !important;
        }
    }
</style>
@endsection

@section('content')
<div class="container">
    <div class="spacer"></div>
    <div class="spacer"></div>
    {{-- Logo IG --}}
    <div class="row my-5">
        <div class="col-12 d-flex flex-wrap justify-content-end">
            <img class="fix-image headline" src="{{ asset('assets') }}/logo/Logo Besar_Home.png"
                style="max-height: 400px;">
        </div>
    </div>
    {{-- End Of Logo IG --}}

    <div class="spacer"></div>
    <div class="spacer"></div>
    <div class="spacer"></div>

    {{-- Prize dan Maskot --}}
    <div class="container-1 row my-5 mx-5 px-5">
        <div class="col-lg-6 col-sm-12  my-4 d-flex flex-wrap justify-content-start">
            <img class="fix-image prize" src="{{ asset('assets') }}/img/Font_Home.png" style="max-height: 800px;">
        </div>
        <div class="col-lg-6 col-sm-12 d-flex flex-wrap justify-content-center">
            <img class="fix-image maskot" src="{{ asset('assets') }}/img/Maskot_Home.png" style="max-height: 450px;">
        </div>
    </div>
    {{-- End Of Prize dan Maskot --}}

    <div class="spacer-1"></div>

    {{-- Timeline --}}
    <div class="row">
        <div class="col-12 d-flex flex-wrap justify-content-end align-items-center mb-3 mt-5">
            <div style="background-color: #ea435e; height:2.5px; width:50%"></div>
            <h2 class="ms-5 text-red">TIMELINE</h2>
        </div>
        <div class="col-12 d-flex flex-wrap justify-content-center">
            <img class="fix-image timeline" src="{{ asset('assets') }}/img/Timeline_Home.png"
                style="max-height: 700px;">
        </div>
    </div>
    {{-- End Of Timeline --}}

    <div class="spacer-1"></div>

    {{-- Info --}}
    <div class="row">
        <div class="col-12 d-flex flex-wrap justify-content-start align-items-center mb-3 mt-5">
            <h2 class="me-5 text-red">INFO</h2>
            <div style="background-color: #ea435e; height:2.5px; width:50%"></div>
        </div>

        {{--  col-lg-4 col-sm-12 d-flex flex-wrap justify-content-center">
            <img class="fix-image poster" src="{{ asset('assets') }}/img/poster_open_registration.jpg" style="max-height: 700px;">
        </div>

        <div class="col-lg-1 col-sm-12 spacer-2">

            {{-- Info Details --}}
        </div>
        <div class="col-lg-7 col-sm-12">
            <h2 class="text-red">PENDAFTARAN EARLY BIRD <br> SUDAH DIBUKA !</h2>
            {{-- Button --}}
            <button class="button-regis my-4" role="button" onclick="location.href='{{ route('register') }}'">REGISTER NOW</button>

            {{-- See More Info --}}
            {{-- <h4 class="text-red mt-4">See More Info</h4> --}}
            <div class="row">
                {{-- Info 1 --}}
                {{-- <div class="col-lg-6 col-sm-12">
                    <div class="container-info p-4 mt-3">
                        <h3 class="text-red">Lorem ipsum dolor sit.</h3>
                        <p class="text-red"><i>00 Month 2022 <span style="color:#D3D3D3; font-weight:100">00:00
                                    PM</span></i></p>

                        <p class="text-red mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing. Lorem ipsum dolor
                            sit amet consectetur, adipisicing elit. Praesentium deserunt quo, minus autem distinctio
                            quibusdam fugit odio harum eveniet excepturi.</p>
                    </div>
                </div> --}}
                {{-- End Of Info 1 --}}
                {{-- Info 2 --}}
                {{-- <div class="col-lg-6 col-sm-12">
                    <div class="container-info p-4 mt-3">
                        <h3 class="text-red">Lorem ipsum dolor sit.</h3>
                        <p class="text-red"><i>00 Month 2022 <span style="color:#D3D3D3; font-weight:100">00:00
                                    PM</span></i></p>

                        <p class="text-red mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing. Lorem ipsum dolor
                            sit amet
                            consectetur, adipisicing elit. Praesentium deserunt quo, minus autem distinctio quibusdam
                            fugit odio harum
                            eveniet excepturi.</p>
                    </div>
                </div> --}}
                {{-- End Of Info 2 --}}
            </div>
        </div>
    </div>
    {{-- End Of Info --}}
</div>
<div style="height: 500px; width: auto"></div>
@endsection