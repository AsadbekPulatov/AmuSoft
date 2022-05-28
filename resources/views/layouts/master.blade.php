<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AmuSoft</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Yuklanmoqda...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-search me-2"></i>A<span class="fs-5">mu</span>S<span class="fs-5">oft</span></h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('index') }}" class="nav-item nav-link @if($route=='index') active @endif"><b>Uy sahifasi</b></a>
                    <a href="{{ route('about') }}" class="nav-item nav-link @if($route=='about') active @endif"><b>Haqida</b></a>
                    <a href="{{ route('Services') }}" class="nav-item nav-link @if($route=='services') active @endif"><b>Xizmat</b></a>
                    <a href="{{ route('portfolio') }}" class="nav-item nav-link @if($route=='portfolio') active @endif"><b>Loyiha</b></a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link @if($route=='contact') active @endif"><b>Aloqa</b></a>
                    <a href="{{ route('blog') }}" class="nav-item nav-link @if($route=='blog') active @endif"><b>Yangiliklar</b></a>

                </div>
                <butaton type="button" class="btn text-secondary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
            </div>
        </nav>
        <div class="container-xxl py-5 bg-primary hero-header mb-5">
            <div class="container my-5 py-5 px-lg-5">
                <div class="row g-5 py-5">
                    @yield('hero')
                </div>
            </div>
        </div>

    </div>
    <!-- Navbar & Hero End -->

    @yield('content')

<!-- Footer Start -->
    <div class="container-fluid bg-primary text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5 px-lg-5">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3">
                    <h5 class="text-white mb-4">Aloqa qilish</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>Urganch shahri Al-Xorazmiy ko'chkasi 110-uy</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+998 977913883</p>
                    <p><i class="fa fa-envelope me-3"></i>AmuSoft@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://github.com/Bekmurod3388"><i class="fab fa-github"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://facebook.com/bekmurodkhujamuratov"><i class="fab fa-facebook-f"></i></a>
{{--                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>--}}
                        <a class="btn btn-outline-light btn-social" href="https://instagram.com/bekmurodkhujamuratov"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://t.me/Bekmurod3388"><i class="fab fa-telegram"></i></a>

                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h5 class="text-white mb-4">Ommabop havola</h5>
                    <a class="btn btn-link" href="{{route('about')}}">Biz haqimizda</a>
                    <a class="btn btn-link" href="{{route('Services')}}">Xizmat</a>
                    <a class="btn btn-link" href="{{route('portfolio')}}">Loyiha</a>
{{--                    <a class="btn btn-link" href="{{route('')}}">Loyiha</a>--}}
                    <a class="btn btn-link" href="{{route('contact')}}">Biz bilan bog'lanish</a>
                    <a class="btn btn-link" href="">Karyera</a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h5 class="text-white mb-4">Loyiha galereyasi</h5>
                    <div class="row g-2">
                        @foreach($projects as $key => $project)
                            @if($key > 5) @break @endif
                            <div class="col-4">
                                <img class="img-fluid" src="{{ asset('assets/img/project/'.$project->img) }}" alt="Image">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <h5 class="text-white mb-4">Axborot byulleteni</h5>
                    <p>Biz bilan bog'laning</p>
                    <div class="position-relative w-100 mt-3">
{{--                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Emailingiz" style="height: 48px;">--}}
                    <a href="{{route('contact')}}" class="btn btn-link">Aloqa</a>
                       </div>
                </div>
            </div>
        </div>
        <div class="container px-lg-5">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Saytingiz nomi</a>, Barcha huquqlar himoyalangan.
                        tomonidan ishlab chiqilgan<a class="border-bottom" href="http://amusoft.uz">AmuSoft</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/lib/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
