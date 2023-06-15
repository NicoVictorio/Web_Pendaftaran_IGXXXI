@extends('layouts.app')

@section("title", "Gallery")

@section('content')
<style>
    @font-face {
        font-family: 'Morton Bold';
        font-style: normal;
        font-weight: normal;
        src: local('Morton Bold'), url('assets/font/Morton-Bold.otf');
    }

    .indicator{
        border-radius: 50%;
        height: 25px;
        width: 25px;
    }
    .spacing-bawah{
        height:50px;
    }
</style>

<div id="carouselIndicator" class="carousel slide" data-bs-ride="true">
    {{-- Element --}}
    <img  src="{{ asset('assets/img/Gallery_Element.png') }}" alt="Element Gallery" style="position: absolute;
    z-index:1; width: 400px;">
    <h1 style="font-family: 'Morton Bold'; position: absolute; z-index: 2; color: #ffff;
    margin-top: 30px; margin-left: 90px;">GALERI</h1>
    
    {{-- Indikator Galeri --}}
    <div class="carousel-indicators">
        @for ($i = 0; $i < 10; $i++)
            @if ($i == 0)
                <button type="button" data-bs-target="#carouselIndicator" data-bs-slide-to="{{ $i }}" class="active" aria-current="true" aria-label="Slide {{ $i + 1 }}" style="background-color: #f17489" ></button>
            @else
                <button type="button" data-bs-target="#carouselIndicator" data-bs-slide-to="{{ $i }}" aria-label="Slide {{ $i + 1 }}" style="background-color: #f17489"></button>
            @endif
        @endfor
    </div>

    {{-- Foto Galeri --}}
    <div class="carousel-inner">
        @for ($i = 0; $i < 10; $i++)
            @if ($i == 0)
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/Images_Gallery/img' . ($i + 1) . '.jpg') }}" class="d-block w-100" alt="image {{ $i + 1 }}">
                </div>
            @else
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/Images_Gallery/img' . ($i + 1) . '.jpg') }}" class="d-block w-100" alt="image {{ $i + 1 }}">
                </div>
            @endif
        @endfor
    </div>

    {{-- Tombol Next & Prev --}}
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicator" data-bs-slide="prev">
        <img  src="{{ asset('assets/img/Prev_Gallery.png') }}" alt="Prev" style="width: 20px;">
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicator" data-bs-slide="next" >
        <img  src="{{ asset('assets/img/Next_Gallery.png') }}" alt="Next" style="width: 20px;">
        <span class="visually-hidden">Next</span>
    </button>
  </div>
  
  {{--Sponsor--}}
        @include('layouts.sponsor')
        {{-- <div class="row spacing-bawah"></div> --}}
@endsection