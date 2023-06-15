@extends('layouts.app')

@section("title", "Announcements")

@section('content')
    <Style>
        @font-face {
            font-family: 'TT Norms Bold';
            font-style: normal;
            font-weight: normal;
            src: local('TT Norms Bold'), url('assets/font/TTNorms-Bold.woff') format('woff');
        }
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
        
        .hr{
            opacity:1;
        }
        .horizontal-lines:after{
            content:"";
            height: 5px;
            width: 300px;
            background: #ea435e;
            display: inherit;
            position: absolute;
        }
        .horizontal-lines{
            position: relative;
        }

        .card{
            font-family:"TT Norms Light",sans-serif;
            color:#ea435e;
            letter-spacing:0px;
            text-align:justify;
        }
        .card-body{
            transition: all 0.2s ease;
            border-radius:3px;
        }
        .card-body:hover{
            -webkit-transform:scale(1.05);
            box-shadow: 0 6px 10px rgba(0,0,0,.08)
        }
        .card-subtitle{
            color:#ea435e;
        }
        .card-text{
            font-weight:100;
        }
    </style>    

<body style="background: url('{{ asset('assets') }}/background/Background Announce_1.png') top / cover no-repeat;background-attachment: fixed;">
    <div class="announcement-page pt-4 px-5">

        {{--Announcement Title--}}
        <div class="row">   
            <div class="row md-5">
                <div class="col" style="padding-left:1.5rem;max-width:500px;">
                    <h1 style="margin: 1rem; font-family:TT Norms Bold, sans-serif; letter-spacing:3px;color:#ea435e;">ANNOUNCEMENTS</h1>
                </div>
                <div class="col" style="width:200px;left:0px">
                    <hr class="horizontal-lines" style="height:5px;color:#ea435e;opacity:1;background-color:rgba(255, 255, 255, 0);top:50%;margin:0px;"></hr>
                </div>
            </div>
        </div>
        
        
        <div class="row">

            {{--Announcement coloumn--}}
            <div class="col-md-6" style="height: auto;min-width: 65%;padding-left:1.5rem;">
            <!----Announcement body---->
                <div class="card" style="border-style: none;background: rgba(255,255,255,0);padding-bottom:1rem;padding-top:1rem;">

                <!----Announcement Card---->
                    <!-- <div class="card-body" style="background: #faf0dc;margin: 1rem;padding:1.5rem;">
                        <h4 class="card-title" style="font-family: Amiko Bold, sans-serif;">Pengumuman Terkait Lorem Ipsum</h4>
                        <h6 class="card-subtitle mb-2" style="font-style: italic; color:#ea435e;padding-bottom:10px;">00 Month 2022 / 00.00 PM</h6> -->
                        <!----Annoucement Text---->
                        <!-- <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div> -->
                        <!----End Annoucement Text----> 
                <!----End Announcement Card---->

                <!----Announcement Card---->
                    <!-- <div class="card-body" style="background: #faf0dc;margin: 1rem;padding:1.5rem;">
                        <h4 class="card-title" style="font-family: Amiko Bold, sans-serif;">Pengumuman Terkait Lorem Ipsum</h4>
                        <h6 class="card-subtitle mb-2" style="font-style: italic; color:#ea435e;padding-bottom:10px;">00 Month 2022 / 00.00 PM</h6> -->
                        <!----Annoucement Text---->
                        <!-- <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div> -->
                        <!----End Annoucement Text----> 
                <!----End Announcement Card---->
                </div>
            </div>
            <!----End Announcement Body---->

            {{--Maskot--}}
            <div class="col-md-6 flex-wrap text-center" style="max-width: 35%;height: auto;background: rgba(255,255,255,0); padding-top:75px;padding-left:0px;">
                <img class="img-fluid float-none" src="{{ asset('assets') }}/img/Maskot_Announce.png" style="width: 350px;" />
            </div>
        
        </div>
    </div>
</body>

@endsection