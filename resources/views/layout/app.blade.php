<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Citron</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    {{--    <!-- Favicons -->--}}
    {{--        <link href="{{asset('assets/img/favicon.png')}}" rel="icon">--}}
    {{--        <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">--}}

    <!-- Google Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    {{--        <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">--}}
    {{--        <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">--}}
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    {{-- for modal --}}
    <style>
        .modal-content img {
            /* Ensure the image doesn't exceed modal content width */
            max-height: 80vh; /* Limit image height to 80% of viewport height */
            display: block;
            margin: 0 auto; /* Center the image horizontally */
        }

        .modal-content {
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

    </style>

    <!-- =======================================================
    * Template Name: Day
    * Updated: May 30 2023 with Bootstrap v5.3.0
    * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>


<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">citronlab@gmail.com</a>
            <i class="bi bi-phone-fill phone-icon"></i> +998 90 578 64 78
        </div>
        <div class="social-links d-none d-md-block">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
    </div>
</section>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <img  style="height: 4em;" src="{{ asset('logo.jpg') }}" alt="Logo">

        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    <a class="nav-link scrollto @if(Route::Is('home')) active @endif" href="{{route('home')}}">
                        {{__('index.navbar.home')}}
                    </a>
                </li>
                <li><a class="nav-link scrollto @if(Route::Is('service')) active @endif" href="{{route('service')}}">
                        {{__('index.navbar.services')}}
                    </a>
                </li>
                <li>
                    <a class="nav-link scrollto @if(Route::Is('about')) active @endif" href="{{route('about')}}">
                        {{__('index.navbar.about')}}
                    </a>
                </li>
                <li>
                    <a class="nav-link scrollto @if(Route::Is('grant_projects')) active @endif" href="{{route('grant_projects')}}">
                        {{__('index.navbar.grant_projects')}}
                    </a>
                </li>
                <li>
                    <a class="nav-link scrollto @if(Route::Is('project')) active @endif" href="{{route('project')}}">
                        {{__('index.navbar.project')}}
                    </a>
                </li>
                <li>
                    <a class="nav-link scrollto @if(Route::Is('gallery')) active @endif" href="{{route('gallery')}}">
                        {{__('index.navbar.gal')}}
                    </a>
                </li>
                <li>
                    <a class="nav-link scrollto @if(Route::Is('contact')) active @endif"
                       href="{{route('contact')}}">
                        {{__('index.navbar.contact')}}
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <span>{{__('index.navbar.Language')}}</span>
                        <i class="bi bi-chevron-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="locale/en">
                                {{__('index.navbar.Inglis_tili')}}
                                <img src="{{ asset('assets/vendor/flag/uk.png') }}" width="30" height="30" alt="En flag"/>
                            </a>
                        </li>
                        <li>
                            <a href="locale/ru">{{__('index.navbar.Rus_tili')}}
                                <img src="{{ asset('assets/vendor/flag/russia.png') }}" width="30" height="30" alt="Ru flag"/>
                            </a>
                        </li>
                        <li><a href="locale/uz">
                                {{__('index.navbar.Uzbek_tili')}}
                                <img src="{{ asset('assets/vendor/flag/uzb.png') }}" width="30" height="30" alt="Uz flag"/>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

@yield('content')

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6">
                    <div class="footer-info">
                        <h3>{{__('index.Day')}}</h3>
                        <p>
                            {{__('index.navbar.address')}}:<br>
                            {{__('index.navbar.address2')}}
                            <br><br>
                            <strong>{{__('index.navbar.phone')}}:</strong> +998 90 578 64 78<br>
                            <strong>{{__('index.navbar.home')}}</strong> citronlab@gmail.com<br>
                        </p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="{{route('home')}}">{{__('index.navbar.home')}}</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="{{route('about')}}">{{__('index.navbar.about')}}</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="{{route('service')}}">{{__('index.navbar.services')}}</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="{{route('project')}}">{{__('index.navbar.project')}}</a>
                        </li>
                        <li>
                            <i class="bx bx-chevron-right"></i>
                            <a href="{{route('gallery')}}">{{__('index.navbar.gal')}}</a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor white" class="bi bi-arrow-up"
         viewBox="0 0 16 16">
        <path fill-rule="evenodd"
              d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
    </svg>
</a>
<div id="preloader"></div>

{{--google--}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
<!-- Vendor JS Files -->
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
