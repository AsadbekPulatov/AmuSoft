@extends('layouts.master')
@section('content')

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="{{asset('assets/img/breadcrumb-bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>About us</h2>
                        <div class="breadcrumb__links">
                            <a href="#">Home</a>
                            <span>About</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Portfolio Section Begin -->
    <section class="portfolio spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="portfolio__filter">
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".branding">Branding</li>
                        <li data-filter=".digital-marketing">Digital marketing</li>
                        <li data-filter=".web">Web</li>
                        <li data-filter=".photography">Photography</li>
                        <li data-filter=" .ecommerce">eCommerce</li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio__gallery">
                <div class="col-lg-4 col-md-6 col-sm-6 mix branding">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="{{asset('assets/img/portfolio/portfolio-1.jpg')}}">
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                                    class="fa fa-play"></i></a>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>VIP Auto Tires & Service</h4>
                            <ul>
                                <li>eCommerce</li>
                                <li>Magento</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mix digital-marketing">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="{{asset('assets/img/portfolio/portfolio-2.jpg')}}">
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                                    class="fa fa-play"></i></a>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>VIP Auto Tires & Service</h4>
                            <span>Photography</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mix web">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="{{asset('assets/img/portfolio/portfolio-3.jpg')}}">
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                                    class="fa fa-play"></i></a>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>VIP Auto Tires & Service</h4>
                            <ul>
                                <li>eCommerce</li>
                                <li>Magento</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mix photography">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="{{asset('assets/img/portfolio/portfolio-4.jpg')}}">
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                                    class="fa fa-play"></i></a>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>VIP Auto Tires & Service</h4>
                            <ul>
                                <li>eCommerce</li>
                                <li>Magento</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mix ecommerce">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="{{asset('assets/img/portfolio/portfolio-5.jpg')}}">
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                                    class="fa fa-play"></i></a>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>VIP Auto Tires & Service</h4>
                            <span>Photography</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mix branding">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="{{asset('assets/img/portfolio/portfolio-6.jpg')}}">
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                                    class="fa fa-play"></i></a>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>VIP Auto Tires & Service</h4>
                            <ul>
                                <li>eCommerce</li>
                                <li>Magento</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mix web">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="{{asset('assets/img/portfolio/portfolio-7.jpg')}}">
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                                    class="fa fa-play"></i></a>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>VIP Auto Tires & Service</h4>
                            <ul>
                                <li>eCommerce</li>
                                <li>Magento</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mix photography">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="{{asset('assets/img/portfolio/portfolio-8.jpg')}}">
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                                    class="fa fa-play"></i></a>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>VIP Auto Tires & Service</h4>
                            <span>Photography</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mix ecommerce">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="{{asset('assets/img/portfolio/portfolio-9.jpg')}}">
                            <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                                    class="fa fa-play"></i></a>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>VIP Auto Tires & Service</h4>
                            <ul>
                                <li>eCommerce</li>
                                <li>Magento</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination__option">
                        <a href="#" class="arrow__pagination left__arrow"><span class="arrow_left"></span> Prev</a>
                        <a href="#" class="number__pagination">1</a>
                        <a href="#" class="number__pagination">2</a>
                        <a href="#" class="arrow__pagination right__arrow">Next <span class="arrow_right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Section End -->

    @endsection