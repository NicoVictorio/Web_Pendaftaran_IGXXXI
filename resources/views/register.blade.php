@extends('layouts.app')

@section("title", "Register")

@section('content')
    <link href="{{ asset('assets/css/register.css') }}" rel="stylesheet">
    <div class="register-page pt-4 px-5 py-5">
        {{-- Register title with horizontal line --}}
        <div class="row mt-3 mt-lg-5">
            <div class="col-12 col-lg-5 offset-0 offset-lg-7 row align-items-center">
                <div class="col-6 col-sm-7"><hr class="horizontal-line"/></div>
                <div class="col-6 col-sm-5 register-text">REGISTER</div>
            </div>
        </div>

        {{-- Content --}}
        <div class="row p-0 p-lg-5 mt-0 mt-lg-5">
            {{-- Invitation sentence --}}
            <div class="col-12 col-lg-7 px-4 pt-5 title-text">
                <div>What you waiting for ?</div>
                <div>Join the <span class="fw-bold">GAMES</span></div>
                <div>now !</div>

                <a href="http://bit.ly/IG_Ubaya" target="_blank">
                    <button class="btn-register rounded-pill px-4 py-2 mt-4">REGISTER NOW</button>
                </a>
            </div>

            {{-- Registration flow --}}
            <div class="col-12 col-lg-5 mt-5 py-5 py-lg-0 mt-lg-0">
                <img src="{{ asset('assets/img/alur_register.png') }}" alt="registration_flow" class="w-100">
            </div>
        </div>

        {{-- Sponsor --}}
        @include('layouts.sponsor')
    </div>
@endsection