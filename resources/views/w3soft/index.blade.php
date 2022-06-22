@extends('layouts.master')
@section('hero')
    <div class="col-lg-6 text-center text-lg-start">
        <h1 class="text-white mb-4 animated zoomIn">
            @if($lang=='uz')
                Biz bilan o'z biznesingizni yanada rivojlantiring
            @endif
            @if($lang=='ru')
                Развивайте свой бизнес дальше вместе с нами
            @endif
            @if($lang=='en')
                Develop your business further with us
            @endif
        </h1>
        <p class="text-white pb-3 animated zoomIn">
            @php
                if($lang=='uz')  echo "Professional jamoamiz bunda sizga eng mukammal yechimlarni taklif qiladi!";
                if($lang=='ru') echo "Наша профессиональная команда предлагает вам самые совершенные решения!";
                if($lang=='en') echo "Our professional team offers you the most perfect solutions!";
            @endphp
        </p>

    </div>
    <div class="col-lg-6 text-center text-lg-start">
        <img class="img-fluid" src="{{ asset('assets/img/hero2.png') }}" alt="">
    </div>
@endsection
@section('content')
    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                               placeholder="Qidiruv kalit so'zini kiriting">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="section-title position-relative mb-4 pb-2">
                        <!--<h6 class="position-relative text-primary ps-4">About Us</h6>-->
                        <h2 class="mt-2">
                            @if($lang=='uz')
                                10 yillik tajribaga ega mutaxasislar
                            @endif
                            @if($lang=='ru')
                                Специалисты с 10-летним опытом
                            @endif
                            @if($lang=='en')
                                Specialists with 10 years of experience
                            @endif
                        </h2>
                    </div>
                    <p class="mb-4">
                        @if($lang=='uz')
                            Bizni Jamoamiz tajribali o'z ishing ustalaridan iborat bizga har qanday loyiha bo'yicha
                            murojat qilishingiz mumkin.
                        @endif
                        @if($lang=='ru')
                            Вы можете обратиться к нам по любому проекту, где наша команда состоит из опытных мастеров
                            своего дела.
                        @endif
                        @if($lang=='en')
                            You can contact us on any project where our team consists of experienced masters of their
                            craft.
                        @endif
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>
                                @if($lang=='uz')
                                    Mukammal proyektlar
                                @endif
                                @if($lang=='ru')
                                    Идеальные проекты
                                @endif
                                @if($lang=='en')
                                    Perfect projects
                                @endif
                            </h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>
                                @if($lang=='uz')
                                    Professional xodimlar
                                @endif
                                @if($lang=='ru')
                                    Профессиональный персонал
                                @endif
                                @if($lang=='en')
                                    Professional empoyes
                                @endif
                            </h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>
                                @if($lang=='uz')
                                    24/7 Qo'llab-quvvatlash
                                @endif
                                @if($lang=='ru')
                                    24/7 Поддерживать
                                @endif
                                @if($lang=='en')
                                    24/7 Support
                                @endif
                            </h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>
                                @if($lang=='uz')
                                    Adolatli narxlar
                                @endif
                                @if($lang=='ru')
                                    Справедливые цены
                                @endif
                                @if($lang=='en')
                                    Fair prices
                                @endif
                            </h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <a class="btn btn-primary rounded-pill px-4 me-3" href="{{route('about')}}">
                            @if($lang=='uz')
                                Ko'proq o'qish
                            @endif
                            @if($lang=='ru')
                                Читать далее
                            @endif
                            @if($lang=='en')
                                Read more
                            @endif
                        </a>
                        <a class="btn btn-outline-primary btn-square me-3"
                           href="https://facebook.com/bekmurodkhujamuratov"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3"
                           href="https://instagram.com/bekmurodkhujamuratov"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href="https://github.com/Bekmurod3388"><i
                                class="fab fa-github"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href="https://t.me/Bekmurod3388"><i
                                class="fab fa-telegram"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="{{asset('assets/img/about.jpg')}}">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    @foreach($courses as $course)
        <div class="row mb-5">
            <div class="col-11 container ">
                <div class="row">
                    <div class="card  col-11"  style="width: 100%; height: 100%; ">

                        <div class="card-header d-flex text  text-primary  " style="font-size: 20px;font-weight: 700">

                            @if($lang=="uz")
                                Biz o'quv kurslarimizga start berdik
                            @endif
                            @if($lang=="ru")
                                    Мы начали наши обучающие курсы
                            @endif
                            @if($lang=="en")
                                    We started our training courses
                            @endif

                        </div>

                        <div class="card-body">

                            <p class="card-text ">
                                <b class="text " style="color: #4306ab; font-size: 20px; ">

                                    @if($lang=="en")
                                        ATTENTION ADVERTISEMENT! <br> Training courses were organized by AmuSoft LLC. <br>
                                        About courses: <br>
                                        1. FrontEnd «3 months» <br>
                                        2. Backend (PHP) «3 months» <br>
                                    @endif

                                    @if($lang=="uz")

                                        Diqqat E’LON! <br>
                                        AmuSoft MCHJ tomonidan o'quv kurslari tashkil etildi. <br>
                                        Kurslar haqida:<br>
                                        1. FrontEnd «3 oy»<br>
                                        2. Backend(PHP) «3 oy»<br>

                                    @endif

                                    @if($lang=="ru")
                                            ВНИМАНИЕ, РЕКЛАМА! <br>
                                            Курсы обучения были организованы ООО «АмуСофт». <br>
                                            О курсах: <br>
                                            1. FrontEnd «3 месяца» <br>
                                            2. Backend (PHP) «3 месяца» <br>
                                    @endif

                                </b>
                            </p>

                            <button class="btn btn-primary">
                                <a style="color: white" href="{{ route('course') }}" class="nav-item nav-link @if($route=='course') active @endif"><b>
                                        @if( $lang == 'uz')    Kurslar @endif
                                        @if( $lang == 'ru')  Курсы   @endif
                                        @if( $lang == 'en')    Courses @endif
                                    </b>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


    <!-- Newsletter Start -->
    <div class="container-xxl bg-primary newsletter my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container px-lg-5">
            <div class="row align-items-center" style="height: 250px;">
                <div class="col-12 col-md-6">
                    <h3 class="text-white">
                        @if($lang=='uz')
                            Professional jamoamiz sizga o'z xizmatlarini taklif etadi
                        @endif
                        @if($lang=='ru')
                            Наша профессиональная команда предложит вам свои услуги
                        @endif
                        @if($lang=='en')
                            Our professional team will offer you their services
                        @endif
                    </h3>

                    <div class="position-relative w-100 mt-3">
                    </div>
                </div>
                <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                    <img class="img-fluid mt-5" style="height: 250px;" src="{{asset('assets/img/newsletter.png')}}">
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->


    <!-- Service Start -->
    <!-- Service End -->


    <!-- Portfolio Start -->
    @include('w3soft.libproject')
    <!-- Portfolio End -->


    <!-- Testimonial Start -->
    {{--    @include('w3soft.testimonial')--}}
    <!-- Testimonial End -->


    <!-- Team Start -->
    @include('w3soft.team')
    <!-- Team End -->

@endsection

