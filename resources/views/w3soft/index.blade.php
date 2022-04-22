@extends('layouts.master')
@section('hero')
    <div class="col-lg-6 text-center text-lg-start">
        <h1 class="text-white mb-4 animated zoomIn">All in one SEO tool need to grow your business rapidly</h1>
        <p class="text-white pb-3 animated zoomIn">Tempor rebum no at dolore lorem clita rebum rebum ipsum rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit justo amet ipsum vero ipsum clita lorem</p>
        <a href="" class="btn btn-light py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Free Quote</a>
        <a href="" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
    </div>
    <div class="col-lg-6 text-center text-lg-start">
        <img class="img-fluid" src="{{ asset('assets/img/hero.png') }}" alt="">
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
                        <h6 class="position-relative text-primary ps-4">About Us</h6>
                        <h2 class="mt-2">The best SEO solution with 10 years of experience</h2>
                    </div>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Award Winning</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Professional Staff</h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>24/7 Support</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Fair Prices</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <a class="btn btn-primary rounded-pill px-4 me-3" href="">Read More</a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
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
                    <h3 class="text-white">Ready to get started</h3>
                    <small class="text-white">Diam elitr est dolore at sanctus nonumy.</small>
                    <div class="position-relative w-100 mt-3">
                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Enter Your Email" style="height: 48px;">
                        <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
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
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">Our Services</h6>
                <h2 class="mt-2">What Solutions We Provide</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-home fa-2x"></i>
                        </div>
                        <h5 class="mb-3">SEO Optimization</h5>
                        <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-home fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Web Design</h5>
                        <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-home fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Social Media Marketing</h5>
                        <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-home fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Email Marketing</h5>
                        <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-home fa-2x"></i>
                        </div>
                        <h5 class="mb-3">PPC Advertising</h5>
                        <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                        <div class="service-icon flex-shrink-0">
                            <i class="fa fa-home fa-2x"></i>
                        </div>
                        <h5 class="mb-3">App Development</h5>
                        <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Portfolio Start -->
    <div class="container-xxl py-5">
        <div class="container px-lg-5">
            <div class="section-title position-relative text-center mb-5 pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="position-relative d-inline text-primary ps-4">Our Projects</h6>
                <h2 class="mt-2">Recently Launched Projects</h2>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="btn px-3 pe-4 active" data-filter="*">All</li>
                        <li class="btn px-3 pe-4" data-filter=".first">Design</li>
                        <li class="btn px-3 pe-4" data-filter=".second">Development</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.1s">
                    <div class="position-relative rounded overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('assets/img/portfolio-1.jpg')}}" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-light" href="{{asset('assets/img/portfolio-1.jpg')}}" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                            <div class="mt-auto">
                                <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.3s">
                    <div class="position-relative rounded overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('assets/img/portfolio-2.jpg')}}" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-light" href="{{asset('assets/img/portfolio-2.jpg')}}" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                            <div class="mt-auto">
                                <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.6s">
                    <div class="position-relative rounded overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('assets/img/portfolio-3.jpg')}}" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-light" href="{{asset('assets/img/portfolio-3.jpg')}}" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                            <div class="mt-auto">
                                <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.1s">
                    <div class="position-relative rounded overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('assets/img/portfolio-4.jpg')}}" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-light" href="{{asset('assets/img/portfolio-4.jpg')}}" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                            <div class="mt-auto">
                                <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item first wow zoomIn" data-wow-delay="0.3s">
                    <div class="position-relative rounded overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('assets/img/portfolio-5.jpg')}}" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-light" href="{{asset('assets/img/portfolio-5.jpg')}}" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                            <div class="mt-auto">
                                <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item second wow zoomIn" data-wow-delay="0.6s">
                    <div class="position-relative rounded overflow-hidden">
                        <img class="img-fluid w-100" src="{{asset('assets/img/portfolio-6.jpg')}}" alt="">
                        <div class="portfolio-overlay">
                            <a class="btn btn-light" href="{{asset('assets/img/portfolio-6.jpg')}}" data-lightbox="portfolio"><i class="fa fa-plus fa-2x text-primary"></i></a>
                            <div class="mt-auto">
                                <small class="text-white"><i class="fa fa-folder me-2"></i>Web Design</small>
                                <a class="h5 d-block text-white mt-1 mb-0" href="">Project Name</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio End -->


    <!-- Testimonial Start -->
    @include('w3soft.testimonial')
    <!-- Testimonial End -->


    <!-- Team Start -->
    @include('w3soft.team')
    <!-- Team End -->

@endsection

