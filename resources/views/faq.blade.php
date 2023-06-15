@extends('layouts.app')

@section("title", "FAQ")

@section('content')
    <Style>
        @font-face {
            font-family: 'TT Norms Light';
            font-style: normal;
            font-weight: normal;
            src: local('TT Norms Light'), url('assets/font/TTNorms-Light.otf');
        }
        @font-face {
            font-family: 'Amiko Bold';
            font-style: normal;
            font-weight: normal;
            src: local('Amiko Bold'), url('assets/font/Amiko-Bold.woff') format('woff');
        }
        .row{
            margin-right:0;
            margin-left:0;
        }        
        .horizontal-line {
            background: #EA435E;
            border: 2px solid #EA435E;
            opacity: 1;
        }
        .faq-text {
            font-size: 48px;
            color: #ea435e;
            font-weight: 700;
            letter-spacing: 3px;
        }
        .faq-page{
            margin-bottom: 40px;
        }
        .card-title{
            margin-top: 40px;
        }
        .card{
            font-family:"TT Norms Light",sans-serif;
            color:#ffffff;
            letter-spacing:0px;
            text-align:justify;
        }
        .card-body{
            border-radius: 20px;
            transition: all 0.2s ease;
        }
        .card-body:hover{
            -webkit-transform:scale(1.05);
            box-shadow: 0 6px 10px rgba(0,0,0,.08)
        }
        .card-text{
            font-weight:100;
        }
    </style>    

<body style="background: url('{{ asset('assets') }}/background/Background Faq_1.png') top / cover no-repeat;background-attachment: fixed;">
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
                    <h4 class="card-title" style="font-family: Amiko Bold, sans-serif; color:#ea435e;">Industrial Games XXX diadakan secara online atau offline?</h4>
                    <div class="card-body" style="background: #8888ba; padding:1.5rem;">
                        <!----FAQ Text---->
                        <p class="card-text">
                        Industrial Games XXX diadakan secara hybrid, dimana babak game besar dan semi final diadakan secara online dan babak final diadakan secara offline di Universitas Surabaya.</p>
                        <!----End FAQ Text----> 
                    </div>
                <!----End FAQ Card---->

                <!----FAQ Card---->
                    <h4 class="card-title" style="font-family: Amiko Bold, sans-serif; color:#ea435e;">Satu tim terdiri dari berapa orang? Apa boleh berbeda sekolah?</h4>
                    <div class="card-body" style="background: #8888ba; padding:1.5rem;">
                        <!----FAQ Text---->
                        <p class="card-text">
                        Satu tim terdiri dari 3 orang dari sekolah yang sama. Tim boleh terdiri dari angkatan yang berbeda.</p>
                        <!----End FAQ Text----> 
                    </div>
                <!----End FAQ Card---->

                <!----FAQ Card---->
                <h4 class="card-title" style="font-family: Amiko Bold, sans-serif; color:#ea435e;">Industrial Games XXX diadakan kapan?</h4>
                    <div class="card-body" style="background: #8888ba; padding:1.5rem;">
                        <!----FAQ Text---->
                        <p class="card-text">
                        Hari H Industrial Games akan diadakan pada 20-21 Agustus 2022, dan 27-28 Agustus 2022.</p>
                        <!----End FAQ Text----> 
                    </div>
                <!----End FAQ Card---->

                <!----FAQ Card---->
                <h4 class="card-title" style="font-family: Amiko Bold, sans-serif; color:#ea435e;">Bagaimana cara mendaftar Industrial Games XXX?</h4>
                    <div class="card-body" style="background: #8888ba; padding:1.5rem;">
                        <!----FAQ Text---->
                        <p class="card-text">
                        Peserta dapat mengisi Google Form yang tersedia dan mengikuti langkah-langkah yang ada atau dapat mendaftar langsung tanggal 10 Juni 2021 di East Atrium Grand City Surabaya dan dapatkan voucher menarik.</p>
                        <!----End FAQ Text----> 
                    </div>
                <!----End FAQ Card---->

                <!----FAQ Card---->
                <h4 class="card-title" style="font-family: Amiko Bold, sans-serif; color:#ea435e;">Berapa biaya pendaftaran Industrial Games XXX?</h4>
                    <div class="card-body" style="background: #8888ba; padding:1.5rem;">
                        <!----FAQ Text---->
                        <p class="card-text">
                        Pendaftaran Early Bird (23 Mei-30 Juni 2022) dikenakan biaya Rp60.000 dan pendaftaran Normal (1 Juli - 31 Juli) dikenakan biaya Rp75.000 </p>
                        <!----End FAQ Text----> 
                    </div>
                <!----End FAQ Card---->

                <!----FAQ Card---->
                <h4 class="card-title" style="font-family: Amiko Bold, sans-serif; color:#ea435e;">Materi apa saja yang akan digunakan selama perlombaan Industrial Games XXX?</h4>
                    <div class="card-body" style="background: #8888ba; padding:1.5rem;">
                        <!----FAQ Text---->
                        <p class="card-text">
                        Materi yang akan diguanakan adalah pengetahuan umum, pengetahuan umum Teknik Industri, dan IPA SMA.</p>
                        <!----End FAQ Text----> 
                    </div>
                <!----End FAQ Card---->

                <!----FAQ Card---->
                <h4 class="card-title" style="font-family: Amiko Bold, sans-serif; color:#ea435e;">Ada berapa babak di Industrial Games XXX?</h4>
                    <div class="card-body" style="background: #8888ba; padding:1.5rem;">
                        <!----FAQ Text---->
                        <p class="card-text">
                        Peserta akan bermain dalam 3 babak utama, yaitu Game Besar, Semifinal, dan Final.</p>
                        <!----End FAQ Text----> 
                    </div>
                <!----End FAQ Card---->

                <!----FAQ Card---->
                <h4 class="card-title" style="font-family: Amiko Bold, sans-serif; color:#ea435e;">Bagaimana bentuk lomba IG XXX? Apakah essay, cerdas cermat, atau desain?</h4>
                    <div class="card-body" style="background: #8888ba; padding:1.5rem;">
                        <!----FAQ Text---->
                        <p class="card-text">
                        Sesuai namanya, Industrial Games adalah kompetisi yang dikemas dalam bentuk games yang didasarkan pada industri seperti simulasi industri, proses distribusi, dan lain-lainnya yang menguji kreativitas dan kemampuan strategi peserta dengan pengerjaan soal sebagai salah satu komponen dalam games.</p>
                        <!----End FAQ Text----> 
                    </div>
                <!----End FAQ Card---->

                <!----FAQ Card---->
                <h4 class="card-title" style="font-family: Amiko Bold, sans-serif; color:#ea435e;">Apakah peserta kelas 12 boleh ikut?</h4>
                    <div class="card-body" style="background: #8888ba; padding:1.5rem;">
                        <!----FAQ Text---->
                        <p class="card-text">
                        Tentu saja! Kesempatan memenangkan beasiswa Teknik Industri Universitas Surabaya terbuka bagi seluruh siswa kelas 10, 11, maupun 12 SMA/SMK/Sederajat.</p>
                        <!----End FAQ Text----> 
                    </div>
                <!----End FAQ Card---->
                
                </div>
            </div>
            <!----End FAQ Body---->
        </div>
    </div>
</body>
@endsection