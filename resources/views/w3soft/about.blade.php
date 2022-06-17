@extends('layouts.master')
@section('hero')
    <div class="col-12 text-center">
        <h1 class="text-white animated zoomIn">
            @if( $lang == 'uz') Biz haqimizda @endif
            @if( $lang == 'ru') O нас @endif
            @if( $lang == 'en') About us @endif
        </h1>
        <hr class="bg-white mx-auto mt-0" style="width: 90px;">
    </div>
@endsection
@section('content')

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(29, 29, 39, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
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
{{--                        <h6 class="position-relative text-primary ps-4">About Us</h6>--}}
                        <h2 class="mt-2">
                            @if($lang=='uz')10 yillik tajribaga ega mutaxasislar @endif
                            @if($lang=='ru')Специалисты с 10-летним опытом @endif
                            @if($lang=='en')Specialists with 10 years of experience @endif
                        </h2>
                    </div>
                    <p class="mb-4">
                        @if($lang=='uz')Bizni Jamoamiz tajribali o'z ishing ustalaridan iborat bizga har qanday loyiha bo'yicha murojat qilishingiz mumkin. @endif
                        @if($lang=='ru')Вы можете обратиться к нам по любому проекту, где наша команда состоит из опытных мастеров своего дела. @endif
                        @if($lang=='en')You can contact us on any project where our team consists of experienced masters of their craft. @endif
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>
                                @if($lang=='uz')Mukammal proyektlar @endif
                                @if($lang=='ru')Идеальные проекты @endif
                                @if($lang=='en')Perfect projects @endif
                            </h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>
                                @if($lang=='uz')Professional xodimlar @endif
                                @if($lang=='ru')Профессиональный персонал @endif
                                @if($lang=='en')Professional empoyes @endif
                            </h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>
                                @if($lang=='uz')24/7 Qo'llab-quvvatlash @endif
                                @if($lang=='ru')24/7 Поддерживать @endif
                                @if($lang=='en')24/7 Support @endif
                            </h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>
                                @if($lang=='uz')Adolatli narxlar @endif
                                @if($lang=='ru')Справедливые цены @endif
                                @if($lang=='en')Fair prices @endif
                            </h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <a class="btn btn-primary rounded-pill px-4 me-3" href="">
                            @if($lang=='uz')Ko'proq o'qish @endif
                            @if($lang=='ru')Читать далее @endif
                            @if($lang=='en')Read more @endif
                        </a>
                        <a class="btn btn-outline-primary btn-square me-3" href="https://facebook.com/bekmurodkhujamuratov"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href="https://github.com/Bekmurod3388"><i class="fab fa-github"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href="https://instagram.com/bekmurodkhujamuratov"><i class="fab fa-instagram"></i></a>
{{--                        <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-youtube"></i></a>--}}
                        <a class="btn btn-outline-primary btn-square me-3" href="https://t.me/Bekmurod3388"><i class="fab fa-telegram"></i></a>


                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="{{asset('assets/img/about.jpg')}}">
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Newsletter Start -->
    <div class="container-xxl bg-primary newsletter my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container px-lg-5">
            <div class="row align-items-center" style="height: 250px;">
                <div class="col-12 col-md-6">
                    <h3 class="text-white">
                       @if($lang=='uz') Professional jamoamiz bilan bir qadam oldindasiz @endif
                       @if($lang=='ru') Вы на шаг впереди с нашей профессиональной командой @endif
                       @if($lang=='en') You are one step ahead with our professional team @endif
                    </h3>
                </div>
                <div class="col-md-6 text-center mb-n5 d-none d-md-block">
                    <img class="img-fluid mt-5" style="height: 250px;" src="{{asset('assets/img/newsletter.png')}}">
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->


    <!-- Team Start -->
    @include('w3soft.team')
    <!-- Team End -->


@endsection
