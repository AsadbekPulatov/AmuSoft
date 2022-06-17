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
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Roboto:wght@400;500;700&display=swap"
          rel="stylesheet">

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
    <div id="spinner"
         class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Yuklanmoqda...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                {{--                <h1 class="m-0"><i class="fa fa-search me-2"></i>A<span class="fs-5">mu</span>S<span class="fs-5">oft</span></h1>--}}
                <img src="{{ asset('assets/img/logo.svg') }}" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ route('index') }}" class="nav-item nav-link @if($route=='index') active @endif"><b>
                          @if($lang=="uz")  Bosh sahifa @endif
                          @if($lang=="ru")  Glavniy @endif
                          @if($lang=="en")  Home @endif
                        </b></a>
                    <a href="{{ route('blog') }}" class="nav-item nav-link @if($route=='blog') active @endif"><b>Yangiliklar</b></a>
                    <a href="{{ route('Services') }}"
                       class="nav-item nav-link @if($route=='services') active @endif"><b>Xizmatlar</b></a>
                    <a href="{{ route('portfolio') }}" class="nav-item nav-link @if($route=='portfolio') active @endif"><b>Loyihalar</b></a>
                    <a href="{{ route('course') }}" class="nav-item nav-link @if($route=='course') active @endif"><b>Kurslar</b></a>
                    <a href="{{ route('about') }}" class="nav-item nav-link @if($route=='about') active @endif"><b>Biz
                            haqimizda</b></a>
                    <a href="{{ route('contact') }}" class="nav-item nav-link @if($route=='contact') active @endif"><b>Bog'lanish</b></a>
                    <div class="dropdown">

                    <a class="btn nav-item nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        @if($lang=="uz")
                            UZ
                        @endif @if($lang=="ru")
                            RU
                        @endif @if($lang=="en")
                            EN
                        @endif
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="locale/uz">UZ</a></li>
                        <li><a class="dropdown-item" href="locale/ru">RU</a></li>
                        <li><a class="dropdown-item" href="locale/en">EN</a></li>
                    </ul>
                    </div>

                </div>


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
                <div class="col-md-6 col-lg-4">
                    <h5 class="text-white mb-4">Aloqa qilish</h5>
                    <p><i class="fa fa-map-marker-alt me-3"></i>Urganch shahri Al-Xorazmiy ko'chasi 110-uy</p>
                    <p><i class="fa fa-phone-alt me-3"></i>+998 977913883</p>
                    <p><i class="fa fa-envelope me-3"></i>AmuSoft@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://github.com/Bekmurod3388"><i
                                class="fab fa-github"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://facebook.com/bekmurodkhujamuratov"><i
                                class="fab fa-facebook-f"></i></a>
                        {{--                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>--}}
                        <a class="btn btn-outline-light btn-social" href="https://instagram.com/bekmurodkhujamuratov"><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://t.me/Bekmurod3388"><i
                                class="fab fa-telegram"></i></a>

                    </div>
                </div>
                <div class="col-md-6 col-lg-2">
                    <h5 class="text-white mb-4">Ommabop havola</h5>
                    <a class="btn btn-link" href="{{route('about')}}">Biz haqimizda</a>
                    <a class="btn btn-link" href="{{ route('blog') }}">Yangiliklar</a>
                    <a class="btn btn-link" href="{{route('Services')}}">Xizmatlar</a>
                    <a class="btn btn-link" href="{{route('portfolio')}}">Loyihalar</a>
                    <a class="btn btn-link" href="{{route('course')}}">Kurslar</a>
                    <a class="btn btn-link" href="{{route('contact')}}">Biz bilan bog'lanish</a>
                </div>

                <div class="col-md-6 col-lg-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2984.9423360673563!2d60.629394215036505!3d41.57049259258736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41dfcec63d012a49%3A0xa2280e571ee2fa3e!2z0KPRgNCz0LXQvdGH0YHQutC40Lkg0YTQuNC70LjQsNC7INCi0LDRiNC60LXQvdGC0YHQutC-0LPQviDRg9C90LjQstC10YDRgdC40YLQtdGC0LAg0LjQvdGE0L7RgNC80LDRhtC40L7QvdC90YvRhSDRgtC10YXQvdC-0LvQvtCz0LjQuSDQuNC80LXQvdC4INCc0YPRhdCw0LzQvNCw0LTQsCDQkNC70Ywt0KXQvtGA0LXQt9C80Lg!5e0!3m2!1sru!2s!4v1655407533276!5m2!1sru!2s"
                        width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="container px-lg-5">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; Barcha huquqlar himoyalangan.
                        <a class="border-bottom" href="http://amusoft.uz">AmuSoft</a> tomonidan ishlab chiqilgan
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
