@extends('layouts.app')

@section("title", "FAQ")

@section('content')

    <Style>
        
        .row{
            margin-right:0;
            margin-left:0;
        }        
        .horizontal-line {
            background: #2c56a7;
            border: 2px solid #2c56a7;
            opacity: 1;
        }
        .faq-text {
            font-family: "Montserrat", sans-serif;
            font-size: 48px;
            color: #2c56a7;
            font-weight: 700;
            letter-spacing: 3px;
        }
        .faq-page{
            margin-bottom: 40px;
        }
        .card-title{
            margin-top: 40px;
            font-family: "Montserrat", sans-serif;
            font-weight: 700;
            color:#2c56a7;
        }
        .card{
            font-family:"Montserrat",sans-serif;
            color:#2c56a7;
            letter-spacing:0px;
            text-align:justify;
        }
        .card-body{
            border-radius: 20px;
            transition: all 0.2s ease;
            background: #c3e2f6; 
            padding:1.5rem;
        }
        .card-body:hover{
            -webkit-transform:scale(1.05);
            box-shadow: 0 6px 10px rgba(0,0,0,.08)
        }
        .card-text{
            font-size: 20px;
            font-weight: 600;
        }
    </style>    

<body style="background: url('{{ asset('assets') }}/background/Background_FAQ.png') top / cover no-repeat;background-attachment: fixed;">
    <div class="faq-page pt-4 px-5">

        {{--FAQ Title--}}
        <div class="row mt-5">
            <div class="col-7"></div>
            <div class="col-5 row align-items-center">
                <div class="col-10"><hr class="horizontal-line"/></div>
                <div class="col-2 faq-text">FAQ</div>
            </div>
        </div>        

        <div class="row md-5">
            {{--FAQ coloumn--}}
            <div class="col md-6" style="height: auto;min-width: 65%;padding-left:1.5rem;">
            
            <!----FAQ body---->
                <div class="card" style="border-style: none;background: rgba(255,255,255,0);padding-bottom:1rem;padding-top:1rem;">

                <!----FAQ Card---->
                    <h4 class="card-title">Industrial Games XXXI diadakan secara online atau offline?</h4>
                    <div class="card-body">
                        <!----FAQ Text---->
                        <p class="card-text">
                        Industrial Games XXXI diadakan secara offline dimulai dari babak game besar, semi final, dan babak final yang berlokasi di Universitas Surabaya.</p>
                        <!----End FAQ Text----> 
                    </div>
                <!----End FAQ Card---->

                <!----FAQ Card---->
                    <h4 class="card-title">Satu tim terdiri dari berapa orang? Apa boleh berbeda sekolah?</h4>
                    <div class="card-body">
                        <!----FAQ Text---->
                        <p class="card-text">
                        Satu tim terdiri dari 3 orang dari sekolah yang sama. Tim boleh terdiri dari angkatan yang berbeda.</p>
                        <!----End FAQ Text----> 
                    </div>
                <!----End FAQ Card---->

                <!----FAQ Card---->
                <h4 class="card-title">Industrial Games XXXI diadakan kapan?</h4>
                    <div class="card-body">
                        <!----FAQ Text---->
                        <p class="card-text">
                        Hari H Industrial Games akan diadakan pada 9 - 10 September 2023.</p>
                        <!----End FAQ Text----> 
                    </div>
                <!----End FAQ Card---->

                <!----FAQ Card---->
                <h4 class="card-title">Bagaimana cara mendaftar Industrial Games XXXI?</h4>
                    <div class="card-body">
                        <!----FAQ Text---->
                        <p class="card-text">
                        Peserta dapat mengisi Google Form yang tersedia dan mengikuti langkah-langkah yang ada.</p>
                        <!----End FAQ Text----> 
                    </div>
                <!----End FAQ Card---->

                <!----FAQ Card---->
                <h4 class="card-title">Berapa biaya pendaftaran Industrial Games XXXI?</h4>
                    <div class="card-body">
                        <!----FAQ Text---->
                        <p class="card-text">
                        Pendaftaran Early Bird (1 - 25 Juli 2023) dikenakan biaya Rp 60.000 dan pendaftaran Normal (26 Juli - 28 Agustus 2023) dikenakan biaya Rp 75.000 </p>
                        <!----End FAQ Text----> 
                    </div>
                <!----End FAQ Card---->

                <!----FAQ Card---->
                <h4 class="card-title">Materi apa saja yang akan digunakan selama perlombaan Industrial Games XXXI?</h4>
                    <div class="card-body">
                        <!----FAQ Text---->
                        <p class="card-text">
                        Materi yang akan digunakan adalah pengetahuan umum, pengetahuan umum Teknik Industri, dan IPA SMA.</p>
                        <!----End FAQ Text----> 
                    </div>
                <!----End FAQ Card---->

                <!----FAQ Card---->
                <h4 class="card-title">Ada berapa babak di Industrial Games XXXI?</h4>
                    <div class="card-body">
                        <!----FAQ Text---->
                        <p class="card-text">
                        Peserta akan bermain dalam 3 babak utama, yaitu Game Besar, Semifinal, dan Final.</p>
                        <!----End FAQ Text----> 
                    </div>
                <!----End FAQ Card---->

                <!----FAQ Card---->
                <h4 class="card-title">Bagaimana bentuk lomba IG XXXI? Apakah essay, cerdas cermat, atau desain?</h4>
                    <div class="card-body">
                        <!----FAQ Text---->
                        <p class="card-text">
                        Sesuai namanya, Industrial Games adalah kompetisi yang dikemas dalam bentuk games yang didasarkan pada industri seperti simulasi industri, proses distribusi, dan lain-lainnya yang menguji kreativitas dan kemampuan strategi peserta dengan pengerjaan soal sebagai salah satu komponen dalam games.</p>
                        <!----End FAQ Text----> 
                    </div>
                <!----End FAQ Card---->

                <!----FAQ Card---->
                <h4 class="card-title">Apakah peserta kelas 12 boleh ikut?</h4>
                    <div class="card-body">
                        <!----FAQ Text---->
                        <p class="card-text">
                        Tentu saja! Kesempatan memenangkan beasiswa Teknik Industri Universitas Surabaya terbuka bagi seluruh siswa kelas 10, 11, maupun 12 SMA/SMK/Sederajat.</p>
                        <!----End FAQ Text----> 
                    </div>
                <!----End FAQ Card---->
                
                </div>
            </div>
            <!----End FAQ Body---->
            <div style="margin-top:3rem; font-family: Montserrat Thin; color: #2c56a7;">
                @include('layouts.sponsor')
            </div>

            <div class="row spacing-bawah sponsor-section">
                <div class="sponsor-list"></div>
            </div>
            
        </div>
    </div>
</body>
@endsection