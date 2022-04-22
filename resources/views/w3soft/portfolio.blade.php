@extends('layouts.master')
@section('hero')
    <div class="col-12 text-center">
        <h1 class="text-white animated zoomIn">Project</h1>
        <hr class="bg-white mx-auto mt-0" style="width: 90px;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Project</li>
            </ol>
        </nav>
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


@endsection
