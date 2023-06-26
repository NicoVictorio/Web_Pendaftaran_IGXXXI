@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <link href="{{ asset('assets/css/register.css') }}" rel="stylesheet">
    <div class="register-page pt-4 px-5 py-5">
        {{-- Register title with horizontal line --}}
        <div class="row mb-5">
            <div class="col-md-7 d-xs-none"></div>
            <div class="col-md-5 col-xs-12">
                <div class="row align-items-center">
                    <div class="col col-md-4 col-lg-7 col-xs-7">
                        <hr class="horizontal-line" />
                    </div>
                    <div class="col col-md-8 col-lg-5 col-xs-5 register-text">
                        <p class="pe-5 mb-0 text-end fs-1">REGISTER</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Content --}}
        <div class="row mt-0 mb-5">
            {{-- Invitation sentence --}}
            <div class="col-12 col-lg-6">
                <div class="cta-box px-5 py-4 mb-5">
                    <p class="mb-0 fs-1">What you waiting for ?</p>
                    <p class="mb-0 fs-1">Join the <span class="fw-bold">GAMES</span></p>
                    <p class="fs-1">now !</p>

                    <a href="https://bit.ly/PendaftaranIGXXXI2023" target="_blank" class="btn btn-register rounded-pill px-4 py-2 mb-3">
                        REGISTER NOW
                    </a>
                </div>
            </div>

            {{-- Registration flow --}}
            <div class="col-12 col-lg-6 px-5">
                <div class="row mb-5">
                    <div class="col-12 col-lg-9 step-box">
                        <p class="mb-2 fs-4 fw-bold">REGISTRATION</p>
                        <p class="mb-2">By clicking the button on the left</p>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-12 col-lg-9 offset-lg-3 step-box">
                        <p class="mb-2 fs-4 fw-bold">PAYMENT</p>
                        <p class="mb-2">Can be done via bank transfer to account:<br><strong>BCA 1300-425-816 (Jessica Yolanda)</strong></p>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-12 col-lg-9 step-box">
                        <p class="mb-2 fs-4 fw-bold">CONFIRMATION</p>
                        <p class="mb-2">Confirm your payment to:<br><br><strong>Line</strong>: joyceline_24  (Joyceline)<br><strong>WhatsApp</strong>: 0812395570281<br><strong>Format:</strong> "(Team name)_(Bank account holder's name)</p>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-12 col-lg-9 offset-lg-3 step-box text-center">
                        <p class="fs-4 fw-bold mt-2 mb-2">DONE</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Sponsor --}}
        @include('layouts.sponsor')
    </div>
@endsection
