@extends('layouts.site')

@section('content')
    <div class="page-cover">
        <div class="video-container  d-md-block">
            <video id="coverVideo" autoplay="autoplay" muted loop="loop" width="640" height="360"
                   style="height: 975px; width: 1733px; margin-top: 0px; margin-left: -583.5px;">
                <source src="{{app_asset('recommended.ae/videos/background.mp4')}}" type="video/mp4">
            </video>
        </div>
    </div>
    <div class="zoom-out">

        <header>
            <div class="container-fluid">

                <div class="dropdown langMenu d-none d-lg-block">
                    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        @if(get_lang() == 'en')
                            EN
                        @elseif(get_lang() == 'ar')
                            العربية
                        @endif


                    </button>
                    <div class="dropdown-menu" aria-labelledby="langMenu">
                        <a data-show="EN" data-lang="en" class="dropdown-item @if(get_lang() == 'en') active @endif" href="{{route_url('switchLang','en')}}">English</a>
                        <a data-show="العربية" data-lang="ar" class="dropdown-item @if(get_lang() == 'ar') active @endif" href="{{route_url('switchLang','ar')}}">العربية</a>
                    </div>
                </div>
                <button id="secondary_nav_btn" class="d-lg-none d-md-block"><img src="{{app_asset('/images/icons/list-text.png')}}" data-open="{{app_asset('recommended.ae/images/icons/list-text.png')}}" data-close="{{app_asset('recommended.ae/images/icons/close.png')}}" alt=""></button>
                <div class="secondary_nav_md">
                    <ul class="navbar-nav">
                        <li class="nav-item active" data-slide="1">
                            <a href="#">
                                <!-- <i class="icon ion-home"></i> -->
                                <div class="menu_icon">
                                    <img src="{{app_asset('recommended.ae/images/icons/menu/home-active.png')}}" data-src="{{app_asset('recommended.ae/images/icons/menu/home.png')}}"
                                         data-active="{{app_asset('recommended.ae/images/icons/menu/home-active.png')}}" alt="">
                                </div>
                                @if(get_lang() == 'ar')
                                    <span class="txt">الرئيسية</span>
                                @elseif(get_lang() == 'en')
                                    <span class="txt">The Main</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item " data-slide="2">
                            <a href="#">
                                <div class="menu_icon">
                                    <img src="{{app_asset('recommended.ae/images/icons/menu/introduction.png')}}"
                                         data-src="{{app_asset('recommended.ae/images/icons/menu/introduction.png')}}"
                                         data-active="{{app_asset('recommended.ae/images/icons/menu/introduction-active.png')}}" alt="">
                                </div>
                                @if(get_lang() == 'ar')
                                    <span class="txt">المقدمة</span>
                                @elseif(get_lang() == 'en')
                                    <span class="txt">Introduction</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item" data-slide="3">
                            <a href="#">
                                <div class="menu_icon">
                                    <img src="{{app_asset('recommended.ae/images/icons/menu/vision.png')}}" data-src="{{app_asset('recommended.ae/images/icons/menu/vision.png')}}"
                                         data-active="{{app_asset('recommended.ae/images/icons/menu/vision-active.png')}}" alt="">
                                </div>
                                @if(get_lang() == 'ar')
                                    <span class="txt">الرؤية و الرسالة</span>
                                @elseif(get_lang() == 'en')
                                    <span class="txt">Vision And Mission</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item" data-slide="4">
                            <a href="#">
                                <div class="menu_icon">
                                    <img src="{{app_asset('recommended.ae/images/icons/menu/gols.png')}}" data-src="{{app_asset('recommended.ae/images/icons/menu/gols.png')}}"
                                         data-active="{{app_asset('recommended.ae/images/icons/menu/gols-active.png')}}" alt="">
                                </div>
                                @if(get_lang() == 'ar')
                                    <span class="txt">أهداف البرنامج</span>
                                @elseif(get_lang() == 'en')
                                    <span class="txt">Program Goals</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item" data-slide="5">
                            <a href="#">
                                <div class="menu_icon">
                                    <img src="{{app_asset('recommended.ae/images/icons/menu/subsicribe.png')}}" data-src="{{app_asset('recommended.ae/images/icons/menu/subsicribe.png')}}"
                                         data-active="{{app_asset('recommended.ae/images/icons/menu/subsicribe-active.png')}}" alt="">
                                </div>
                                @if(get_lang() == 'ar')
                                    <span class="txt">شروط الاشتراك</span>
                                @elseif(get_lang() == 'en')
                                    <span class="txt">Condition Subscription</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item" data-slide="6">
                            <a href="#">
                                <div class="menu_icon">
                                    <img src="{{app_asset('recommended.ae/images/icons/menu/statistics.png')}}" data-src="{{app_asset('recommended.ae/images/icons/menu/statistics.png')}}"
                                         data-active="{{app_asset('recommended.ae/images/icons/menu/statistics-active.png')}}" alt="">
                                </div>
                                @if(get_lang() == 'ar')
                                    <span class="txt">الإحصائيات</span>
                                @elseif(get_lang() == 'en')
                                    <span class="txt">Statistics</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item" data-slide="7">
                            <a href="#">
                                <div class="menu_icon">
                                    <img src="{{app_asset('recommended.ae/images/icons/menu/galary.png')}}" data-src="{{app_asset('recommended.ae/images/icons/menu/galary.png')}}"
                                         data-active="{{app_asset('recommended.ae/images/icons/menu/galary-active.png')}}" alt="">
                                </div>
                                @if(get_lang() == 'ar')
                                    <span class="txt">المركز الإعلامي</span>
                                @elseif(get_lang() == 'en')
                                    <span class="txt">Media Center</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item" data-slide="8">
                            <a href="#">
                                <div class="menu_icon">
                                    <img src="{{app_asset('recommended.ae/images/icons/menu/contact.png')}}" data-src="{{app_asset('recommended.ae/images/icons/menu/contact.png')}}"
                                         data-active="{{app_asset('recommended.ae/images/icons/menu/contact-active.png')}}" alt="">
                                </div>
                                @if(get_lang() == 'ar')
                                    <span class="txt">اتصل بنا</span>
                                @elseif(get_lang() == 'en')
                                    <span class="txt">Call Us</span>
                                @endif
                            </a>
                        </li>
                    </ul>
                    <div>
{{--                        <ul>--}}

{{--                            <li><a class="btn" href="#"> تسجيل الدخول</a></li>--}}
{{--                        </ul>--}}
                        <div class="dropdown langMenu">
                            <button class="btn dropdown-toggle" type="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                EN
                            </button>
                            <div class="dropdown-menu" aria-labelledby="langMenu">
                                <a data-show="EN" data-lang="en" class="dropdown-item active" href="{{route_url('switchLang','en')}}">English</a>
                                <a data-show="العربية" data-lang="ar" class="dropdown-item" href="{{route_url('switchLang','ar')}}">العربية</a>
                            </div>
                        </div>
                    </div>
                </div>
                @isset($logo)
                    <img class="logo" src="{{$logo->logo}}" alt="EMIRATI Grim logo">
                @endisset
            </div>
        </header>
        <main>
            <div class="container mt-2">
                <div class="row">
                    <!-- Swiper -->
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <!---------------------------------------------------------------------- start home section-->
                            <div class="swiper-slide" data-slide="1" id="home">
                                @isset($main)
                                    <div class="main_content">
                                    @if(get_lang() == 'ar')
                                        <h1>{{$main->title_ar}}</h1>
                                    @elseif(get_lang() == 'en')
                                        <h1>{{$main->title_en}}</h1>
                                    @endif


                                    <p>
                                        @if(get_lang() == 'ar')
                                            {!! $main->description_ar !!}
                                        @elseif(get_lang() == 'en')
                                            {!! $main->description_en !!}
                                        @endif

                                    </p>



                                </div>
                                @endisset
                            </div>
                            <!---------------------------------------------------------------------- end home section -->
                            <!---------------------------------------------------------------------- start introduction section-->
                            <div class="swiper-slide" data-slide="2" id="introduction">
                                @isset($introduction)
                                    <div class="main_content">
                                        @if(get_lang() == 'ar')
                                            <h1>{{$introduction->title_ar}}</h1>
                                        @elseif(get_lang() == 'en')
                                            <h1>{{$introduction->title_en}}</h1>
                                        @endif

                                        <div class="read">
                                            <p>
                                                @if(get_lang() == 'ar')
                                                    {!! $introduction->description_ar !!}
                                                @elseif(get_lang() == 'en')
                                                    {!! $introduction->description_en !!}
                                                @endif

                                            </p>

                                        </div>
                                        <div class="playIntroVideo" style="background-image: url({{$introduction->image}})">
                                            <img class="play" src="{{app_asset('recommended.ae/images/icons/play.png')}}" data-toggle="modal"
                                                 data-target="#introVideoModal" alt="">
                                        </div>

                                    </div>
                                @endisset

                            </div>
                            <!---------------------------------------------------------------------- End introduction section-->
                            <!---------------------------------------------------------------------- Start Vision section-->
                            <div class="swiper-slide" data-slide="3" id="vision">
                                <div class="main_content">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="box">
                                                @isset($vision)
                                                    @if(get_lang() == 'ar')
                                                        <h1>{{$vision->title_ar}}</h1>
                                                    @elseif(get_lang() == 'en')
                                                        <h1>{{$vision->title_en}}</h1>
                                                    @endif

                                                    <div class="read">
                                                        <p>
                                                            @if(get_lang() == 'ar')
                                                                {!! $vision->description_ar !!}
                                                            @elseif(get_lang() == 'en')
                                                                {!! $vision->description_en !!}
                                                            @endif

                                                        </p>
                                                    </div>
                                                @endisset
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="box">
                                                @isset($mission)
                                                    @if(get_lang() == 'ar')
                                                        <h1>{{$mission->title_ar}}</h1>
                                                    @elseif(get_lang() == 'en')
                                                        <h1>{{$mission->title_en}}</h1>
                                                    @endif

                                                    <div class="read">
                                                        <p>
                                                            @if(get_lang() == 'ar')
                                                                {!! $mission->description_ar !!}
                                                            @elseif(get_lang() == 'en')
                                                                {!! $mission->description_en !!}
                                                            @endif

                                                        </p>
                                                    </div>
                                                @endisset

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---------------------------------------------------------------------- End Vision section-->
                            <!---------------------------------------------------------------------- Start Goles section-->
                            <div class="swiper-slide" data-slide="4" id="goles">
                                @isset($goals)
                                    <div class="main_content">
                                        @if(get_lang() == 'ar')
                                            <h1>{{$goals->title_ar}}</h1>
                                        @elseif(get_lang() == 'en')
                                            <h1>{{$goals->title_en}}</h1>
                                        @endif

                                        <div class="row">
                                            <div class="col-md-8 offset-md-2 offset-lg-0  col-lg-4 ">
                                                <div class="gole">
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <div class="icon">
                                                                <img src="{{app_asset('recommended.ae/images/icons/genom.png')}}" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-10">
                                                            <p>
                                                                @if(get_lang() == 'ar')
                                                                    {{$goals->description1_ar}}
                                                                @elseif(get_lang() == 'en')
                                                                    {{$goals->description1_en}}
                                                                @endif

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 ">
                                                <div class="gole">
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <div class="icon">
                                                                <img src="{{app_asset('recommended.ae/images/icons/genom.png')}}" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-10">
                                                            <p>
                                                                @if(get_lang() == 'ar')
                                                                    {{$goals->description2_ar}}
                                                                @elseif(get_lang() == 'en')
                                                                    {{$goals->description2_en}}
                                                                @endif

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 ">
                                                <div class="gole">
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <div class="icon">
                                                                <img src="{{app_asset('recommended.ae/images/icons/genom.png')}}" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-10">
                                                            <p>
                                                                @if(get_lang() == 'ar')
                                                                    {{$goals->description3_ar}}
                                                                @elseif(get_lang() == 'en')
                                                                    {{$goals->description3_en}}
                                                                @endif

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4 offset-lg-2 offset-md-0">
                                                <div class="gole active">
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <div class="icon">
                                                                <img src="{{app_asset('recommended.ae/images/icons/genom.png')}}" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-10">
                                                            <p>
                                                                @if(get_lang() == 'ar')
                                                                    {{$goals->description4_ar}}
                                                                @elseif(get_lang() == 'en')
                                                                    {{$goals->description4_en}}
                                                                @endif

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 ">
                                                <div class="gole ">
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <div class="icon">
                                                                <img src="{{app_asset('recommended.ae/images/icons/genom.png')}}" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-10">
                                                            <p>
                                                                @if(get_lang() == 'ar')
                                                                    {{$goals->description5_ar}}
                                                                @elseif(get_lang() == 'en')
                                                                    {{$goals->description5_en}}
                                                                @endif

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                @endisset

                            </div>
                            <!---------------------------------------------------------------------- End Goles section-->
                            <!---------------------------------------------------------------------- Start Subsicribe info section-->
                            <div class="swiper-slide" data-slide="5" id="subsicribe_info">
                                @isset($condition_subscriptions)
                                    <div class="main_content">
                                        @if(get_lang() == 'ar')
                                            <h1>{{$condition_subscriptions->title_ar}}</h1>
                                        @elseif(get_lang() == 'en')
                                            <h1>{{$condition_subscriptions->title_en}}</h1>
                                        @endif


                                        <div class="row">
                                            <div class="col-lg-4 col-md-8 offset-md-2 offset-lg-0">
                                                <div class="gole">
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <div class="icon">
                                                                <img src="{{app_asset('recommended.ae/images/icons/genom.png')}}" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-10">
                                                            <p>
                                                                @if(get_lang() == 'ar')
                                                                    {{$condition_subscriptions->description1_ar}}
                                                                @elseif(get_lang() == 'en')
                                                                    {{$condition_subscriptions->description1_en}}
                                                                @endif

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="gole">
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <div class="icon">
                                                                <img src="{{app_asset('recommended.ae/images/icons/genom.png')}}" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-10">
                                                            <p>
                                                                @if(get_lang() == 'ar')
                                                                    {{$condition_subscriptions->description2_ar}}
                                                                @elseif(get_lang() == 'en')
                                                                    {{$condition_subscriptions->description2_en}}
                                                                @endif

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6">
                                                <div class="gole active">
                                                    <div class="row">
                                                        <div class="col-2">
                                                            <div class="icon">
                                                                <img src="{{app_asset('recommended.ae/images/icons/genom.png')}}" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-10">
                                                            <p>
                                                                @if(get_lang() == 'ar')
                                                                    {{$condition_subscriptions->description3_ar}}
                                                                @elseif(get_lang() == 'en')
                                                                    {{$condition_subscriptions->description3_en}}
                                                                @endif

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">

                                                <div class="description_info">
                                                    <p>
                                                        @if(get_lang() == 'ar')
                                                            {!! $condition_subscriptions->description4_ar !!}
                                                        @elseif(get_lang() == 'en')
                                                            {!! $condition_subscriptions->description4_en !!}
                                                        @endif

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endisset


                            </div>
                            <!---------------------------------------------------------------------- End Subsicribe info section-->
                            <!---------------------------------------------------------------------- Start Statistics section-->
                            <div class="swiper-slide" data-slide="6" id="statistics">

                                <div class="main_content">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="subsicriberNum">
                                                <h5><img src="{{app_asset('recommended.ae/images/icons/subsicriber-number.png')}}" alt=""> عدد المشاركين</h5>
                                                <p class="num">6000 <span>مشارك</span></p>
                                                <p class="label"><span class="women">نساء</span> <span class="men">رجال</span></p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="chart_1">
                                                <canvas id="chart_1"> </canvas>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="chart_2">
                                                <div id="chart_2" style="width: 100%; height: 260px"> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row statistics_holder">
                                        <div class="col-md-3">
                                            <div class="statistic" style="background-color: #3065AF;">
                                                <img src="{{app_asset('recommended.ae/images/icons/genom.png')}}" alt="">
                                                <h5>إنشاء</h5>
                                                <p><span style="color: #FEC82F;">25</span></p>
                                                <h6>شجرة القرمة</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="statistic" style="background-color: #009F6F;">
                                                <img src="{{app_asset('recommended.ae/images/icons/company.png')}}" alt="">
                                                <h5>التعاون مع</h5>
                                                <p><span style="color: #FEC82F;">3</span></p>
                                                <h6>مراكز وطنية في الإمارات</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="statistic" style="background-color: #00ADDE;">
                                                <img src="{{app_asset('recommended.ae/images/icons/nirce.png')}}" alt="">
                                                <h5 style="color: #3065AF;">عدد التسجيل في الزراعي</h5>
                                                <p><span>3500</span></p>
                                                <h6 style="color: #3065AF;">فحص</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="statistic last_statistic" style="background-color: #11D499;">
                                                <img src="{{app_asset('recommended.ae/images/icons/doctor.png')}}" alt="">
                                                <h4 style="margin-top: 10px;"> إستقطاب الكوادر
                                                    الإماراتية وتدريبها</h4>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---------------------------------------------------------------------- End Statistics section-->
                            <!---------------------------------------------------------------------- Start Gallery section-->

                            <div class="swiper-slide" data-slide="7" id="gallery">
                                <div class="main_content">
                                    @isset($media_centers)
                                        <div class="row">
                                            <div class="col-md-4  col-sm-6">
                                                <div class="item" data-type="img" data-src="{{$media_centers->image1}}">
                                                    <img src="{{$media_centers->image1}}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-4  col-sm-6">
                                                <div class="item" data-type="img" data-src="{{$media_centers->image2}}">
                                                    <img src="{{$media_centers->image2}}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-4  col-sm-6">
                                                <div class="item" data-type="video" data-src="{{$media_centers->getVideo($media_centers->video)}}">
                                                    <img src="{{$media_centers->image_video_cover}}" alt="">
                                                </div>
                                            </div>

                                            <div class="col-md-4  col-sm-6">
                                                <div class="item" data-type="img" data-src="{{$media_centers->image3}}">
                                                    <img src="{{$media_centers->image3}}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-4  col-sm-6">
                                                <div class="item" data-type="img" data-src="{{$media_centers->image4}}">
                                                    <img src="{{$media_centers->image4}}" alt="">
                                                </div>
                                            </div>
                                            <div class="col-md-4  col-sm-6">
                                                <div class="item" data-type="img" data-src="{{$media_centers->image5}}">
                                                    <img src="{{$media_centers->image5}}" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    @endisset


                                </div>
                            </div>
                            <!---------------------------------------------------------------------- Start Gallery section-->
                            <!---------------------------------------------------------------------- Start Contact us section-->
                            <div class="swiper-slide" data-slide="8" id="contact_us">

                                <div class="main_content">
                                    <div class="row">
                                        <div class="col-md-5 center col-flag">
                                            <div class="contact_info">
                                                @if(get_lang() == 'ar')
                                                    <h3>تواصل معنا</h3>
                                                @elseif(get_lang() == 'en')
                                                    <h3>Contact Us</h3>
                                                @endif

                                                @isset($contact_us_page)
                                                    <ul>
                                                        <li><img src="{{app_asset('recommended.ae/images/icons/contact/website.png')}}" alt="">
                                                            {{$contact_us_page->website}}</li>
                                                        <li><img src="{{app_asset('recommended.ae/images/icons/contact/phone.png')}}" alt=""> {{$contact_us_page->phone}}
                                                        </li>
                                                        <li><img src="{{app_asset('recommended.ae/images/icons/contact/email.png')}}" alt="">
                                                            {{$contact_us_page->email}}</li>
                                                        <li class="location"><img src="{{app_asset('recommended.ae/images/icons/contact/location.png')}}" alt="">
                                                            @if(get_lang() == 'ar')
                                                                <span>{{$contact_us_page->location_ar}}</span>
                                                            @elseif(get_lang() == 'en')
                                                                <span>{{$contact_us_page->location_en}}</span>
                                                            @endif

                                                        </li>
                                                    </ul>
                                                @endisset

                                            </div>
                                        </div>
                                        <div class="col-md-7 center col-flag">
                                            <div class="contact_form">
                                                @if(get_lang() == 'ar')
                                                    <h3>أترك رسالتك هنا</h3>
                                                @elseif(get_lang() == 'en')
                                                    <h3>Leave Your Message Here</h3>
                                                @endif

                                                <form id="contact_us_form">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <input type="text" name="first_name" id="first_name" class="form-control"
                                                                       placeholder="@if(get_lang() == 'ar') الإسم الأول
                                                                                    @elseif(get_lang() == 'en') First Name
                                                                                    @endif">
                                                                <span id="first_name_error" class="text-danger"></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <input type="text" name="last_name" id="last_name" class="form-control"
                                                                       placeholder="@if(get_lang() == 'ar') إسم العائلة
                                                                                    @elseif(get_lang() == 'en') Family Name
                                                                                    @endif">
                                                                <span id="last_name_error" class="text-danger"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <input type="text" name="phone" id="phone" class="form-control"
                                                                       placeholder="@if(get_lang() == 'ar') رقم الهاتف
                                                                                    @elseif(get_lang() == 'en') Phone
                                                                                    @endif">
                                                                <span id="phone_error" class="text-danger"></span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <input type="email" name="email" id="email" class="form-control"
                                                                       placeholder="@if(get_lang() == 'ar') البريد الالكتروني
                                                                                    @elseif(get_lang() == 'en') Email
                                                                                    @endif">
                                                                <span id="email_error" class="text-danger"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                            <textarea name="message" id="message"
                                                                      placeholder="@if(get_lang() == 'ar')قم بكتابة الرسالة
                                                                                    @elseif(get_lang() == 'en') Write The Message
                                                                                    @endif"></textarea>
                                                                <span id="message_error" class="text-danger"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-footer">
                                                        <button type="button" class="btn btn-primary btn-sent"
                                                                data-dismiss="modal" data-toggle="modal"
                                                                id="sendMessage">@if(get_lang() == 'ar')إرسال رسالة
                                                            @elseif(get_lang() == 'en') Sending A Message
                                                            @endif</button>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!---------------------------------------------------------------------- End Contact us section-->

                        </div>
                        <!-- end warper -->
                    </div>
                    <!-- end container -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->

            <ul class="social">
                @isset($instagram)
                    <li><a href="{{$instagram->link}}"><img src="{{app_asset('recommended.ae/images/icons/inst.png')}}" alt=""></a></li>
                    @endisset
                    @isset($twiter)
                        <li><a href="{{$twiter->link}}"><img src="{{app_asset('recommended.ae/images/icons/twitter.png')}}" alt=""> </a></li>
                    @endisset
                    @isset($telegram)
                        <li><a href="{{$telegram->link}}"><img src="{{app_asset('recommended.ae/images/icons/telegram.png')}}" alt=""> </a></li>
                    @endisset
                    @isset($watsapp)
                        <li><a href="{{$watsapp->link}}"><img src="{{app_asset('recommended.ae/images/icons/phone.png')}}" alt=""> </a></li>
                    @endisset

            </ul>

            <div class="cover_video_sound muted  d-md-flex" >
                <img src="{{app_asset('recommended.ae/images/icons/mute.png')}}" data-muted="{{app_asset('recommended.ae/images/icons/mute.png')}}" data-unmuted="{{app_asset('recommended.ae/images/icons/volume.png')}}" alt="">
            </div>

        </main>
        <footer>
            <!-- Add Pagination -->
            <div class="swiper-pagination">
                <!-- Start of nav menu -->
                <nav class="navbar d-none d-md-block">
                    <ul class="navbar-nav">
                        <li class="nav-item active" data-slide="1">
                            <a href="#">
                                <!-- <i class="icon ion-home"></i> -->
                                <div class="menu_icon">
                                    <img src="{{app_asset('recommended.ae/images/icons/menu/home-active.png')}}" data-src="{{app_asset('recommended.ae/images/icons/menu/home.png')}}"
                                         data-active="{{app_asset('recommended.ae/images/icons/menu/home-active.png')}}" alt="">
                                </div>
                                @if(get_lang() == 'ar')
                                    <span class="txt">الرئيسية</span>
                                @elseif(get_lang() == 'en')
                                    <span class="txt">The Main</span>
                                @endif

                            </a>
                        </li>
                        <li class="nav-item " data-slide="2">
                            <a href="#">
                                <div class="menu_icon">
                                    <img src="{{app_asset('recommended.ae/images/icons/menu/introduction.png')}}"
                                         data-src="{{app_asset('recommended.ae/images/icons/menu/introduction.png')}}"
                                         data-active="{{app_asset('recommended.ae/images/icons/menu/introduction-active.png')}}" alt="">
                                </div>
                                @if(get_lang() == 'ar')
                                    <span class="txt">المقدمة</span>
                                @elseif(get_lang() == 'en')
                                    <span class="txt">Introduction</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item" data-slide="3">
                            <a href="#">
                                <div class="menu_icon">
                                    <img src="{{app_asset('recommended.ae/images/icons/menu/vision.png')}}" data-src="{{app_asset('recommended.ae/images/icons/menu/vision.png')}}"
                                         data-active="{{app_asset('recommended.ae/images/icons/menu/vision-active.png')}}" alt="">
                                </div>
                                @if(get_lang() == 'ar')
                                    <span class="txt">الرؤية و الرسالة</span>
                                @elseif(get_lang() == 'en')
                                    <span class="txt">Vision And Mission</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item" data-slide="4">
                            <a href="#">
                                <div class="menu_icon">
                                    <img src="{{app_asset('recommended.ae/images/icons/menu/gols.png')}}" data-src="{{app_asset('recommended.ae/images/icons/menu/gols.png')}}"
                                         data-active="{{app_asset('recommended.ae/images/icons/menu/gols-active.png')}}" alt="">
                                </div>
                                @if(get_lang() == 'ar')
                                    <span class="txt">أهداف البرنامج</span>
                                @elseif(get_lang() == 'en')
                                    <span class="txt">Program Goals</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item" data-slide="5">
                            <a href="#">
                                <div class="menu_icon">
                                    <img src="{{app_asset('recommended.ae/images/icons/menu/subsicribe.png')}}" data-src="{{app_asset('recommended.ae/images/icons/menu/subsicribe.png')}}"
                                         data-active="{{app_asset('recommended.ae/images/icons/menu/subsicribe-active.png')}}" alt="">
                                </div>
                                @if(get_lang() == 'ar')
                                    <span class="txt">شروط الاشتراك</span>
                                @elseif(get_lang() == 'en')
                                    <span class="txt">Condition Subscription</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item" data-slide="6">
                            <a href="#">
                                <div class="menu_icon">
                                    <img src="{{app_asset('recommended.ae/images/icons/menu/statistics.png')}}" data-src="{{app_asset('recommended.ae/images/icons/menu/statistics.png')}}"
                                         data-active="{{app_asset('recommended.ae/images/icons/menu/statistics-active.png')}}" alt="">
                                </div>
                                @if(get_lang() == 'ar')
                                    <span class="txt">الإحصائيات</span>
                                @elseif(get_lang() == 'en')
                                    <span class="txt">Statistics</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item" data-slide="7">
                            <a href="#">
                                <div class="menu_icon">
                                    <img src="{{app_asset('recommended.ae/images/icons/menu/galary.png')}}" data-src="{{app_asset('recommended.ae/images/icons/menu/galary.png')}}"
                                         data-active="{{app_asset('recommended.ae/images/icons/menu/galary-active.png')}}" alt="">
                                </div>
                                @if(get_lang() == 'ar')
                                    <span class="txt">المركز الإعلامي</span>
                                @elseif(get_lang() == 'en')
                                    <span class="txt">Media Center</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item" data-slide="8">
                            <a href="#">
                                <div class="menu_icon">
                                    <img src="{{app_asset('recommended.ae/images/icons/menu/contact.png')}}" data-src="{{app_asset('recommended.ae/images/icons/menu/contact.png')}}"
                                         data-active="{{app_asset('recommended.ae/images/icons/menu/contact-active.png')}}" alt="">
                                </div>
                                @if(get_lang() == 'ar')
                                    <span class="txt">اتصل بنا</span>
                                @elseif(get_lang() == 'en')
                                    <span class="txt">Call Us</span>
                                @endif
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- End of nav menu -->

                <div class="mobile-nav">

                    <div class="pervSlide d-md-none">
                        <img src="{{app_asset('recommended.ae/images/icons/down-arrow.png')}}"  alt="">
                    </div>
                    <div class="nextSlide d-md-none">
                        <img src="{{app_asset('recommended.ae/images/icons/down-arrow.png')}}" alt="">
                    </div>
                </div>
            </div>
        </footer>

        <!-- Booking Modal -->
        <div class="modal fade bookingModal" id="bookingModal" tabindex="-1" role="dialog"
             aria-labelledby="bookingModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><i class="icon ion-android-notifications-none"></i> حجز موعد المشاركة</h5>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <img src="images/icons/person.png">
                                        <input type="text" class="form-control" placeholder="الإسم الأول">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <img src="images/icons/person.png">
                                        <input type="text" class="form-control" placeholder="إسم العائلة">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group phone">
                                        <img src="images/icons/data.png">
                                        <input type="text" class="form-control" placeholder="رقم الهاتف">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group date">
                                        <img src="images/icons/clock.png">
                                        <input id="datepicker" type="text" class="form-control" placeholder="تاريخ سحب العينة">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <img src="images/icons/data.png">
                                        <select class="form-control" name="" id="numberOfPerson">
                                            <option value="0" disabled selected>عدد الأشخاص المشاركين</option>
                                        </select>
                                        <!-- <input type="text" class="form-control" placeholder="عدد الأشخاص المشاركين"> -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <img src="images/icons/mail.png">
                                        <input type="text" class="form-control" placeholder="البريد الإلكتروني">
                                    </div>
                                </div>
                            </div>
                            <div class="form-footer">
                                <button type="button" class="btn btn-primary btn-sent" data-dismiss="modal"
                                        data-toggle="modal" data-target="#confirmationMsg">إرسال طلب</button>

                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>

        <!-- Confirmation Modal -->
        <div class="modal fade confirmationMsg" id="confirmationMsg" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content">
                    <div class="modal-body">
                        <p>
                            الرسالة تقتصر على مواطنين دولة الامارات فقط
                            يجب احضار بطاقة الهوية
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">إالغاء</button>
                        <button type="button" class="btn btn-primary">موافق</button>
                    </div>
                </div>

            </div>
        </div>

        <!-- Introduction Video Modal -->
        <div class="modal fade introVideoModal media" id="introVideoModal" tabindex="-1" role="dialog" aria-labelledby="introVideoModalTitle"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content" style="border: 0;width: 100%; margin: 0 auto;">
                    <video id="introductionVideo" controls width="100%" height="100%" data-poster="">
                        @isset($introduction)
                            <source src="{{$introduction->getVideo($introduction->video)}}" type="video/mp4" />
                        @endisset
                    </video>
                </div>
            </div>
        </div>


        <!-- Gellery video Modal -->
        <div class="modal fade galleryVideoModal media" id="galleryVideoModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content" style="border: 0;width: 100%; margin: 0 auto;">
                    <video class="" id="galleryVideo"  width="100%" height="100%" data-poster="">
                        @isset($media_centers)
                            <source src="{{$media_centers->getVideo($media_centers->video)}}" type="video/mp4" />
                        @endisset

                    </video>
                </div>
            </div>
        </div>
        <!-- Gellery image Modal -->
        <div class="modal fade galleryImgModal media" id="galleryImgModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content" style="border: 0;width: 100%; margin: 0 auto;">
                    <img src="" alt="">
                </div>
            </div>
        </div>

    </div>
    @endsection


@section('script')
    <script type="text/javascript">

        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // send message
            $(document).on('click', '#sendMessage', function (e) {
                e.preventDefault();
                var formData = new FormData($('#contact_us_form')[0]);
                $('#first_name_error').text('');
                $('#last_name_error').text('');
                $('#phone_error').text('');
                $('#email_error').text('');
                $('#message_error').text('');

                $.ajax({
                    type: 'post',
                    url: "{{route('contactUs')}}",
                    enctype: 'multipart/form-data',
                    data: formData,
                    processData: false,
                    contentType: false,
                    cache: false,
                    dataType: 'json',

                    success: function (data) {
                        if (data.status == true) {
                            $('#contact_us_form').trigger('reset');
                            toastr.success(data.msg);
                        } else {
                            toastr.error(data.msg);
                            $('#contact_us_form').trigger('reset');
                        }

                    },

                    error: function (reject) {
                        console.log('Error: not added', reject);
                        var response = $.parseJSON(reject.responseText);
                        $.each(response.errors, function (key, val) {
                            $("#" + key + "_error").text(val[0]);


                        });

                    }

                });
            });



        });
    </script>
@endsection
