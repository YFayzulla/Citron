<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DGital - Digital Agency HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="asset/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="asset/lib/animate/animate.min.css" rel="stylesheet">
    <link href="asset/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="asset/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="asset/css/style.css" rel="stylesheet">
</head>

<body>
<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
{{--    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">--}}
{{--        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">--}}
{{--            <span class="sr-only">Loading...</span>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="m-0">CiTroN</h1>
{{--                      <img src="asset/img/logo.png" alt="Logo">--}}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="{{route('index')}}" class="nav-item nav-link @if(request()->routeIs('index')) active @endif">{{__('index.home')}}</a>
                    <a href="{{route('about')}}" class="nav-item nav-link @if(request()->routeIs('about')) active @endif">{{__('index.about')}}</a>
                    <a href="{{route('service')}}" class="nav-item nav-link @if(request()->routeIs('service')) active @endif">{{__("index.service")}}</a>
                    <a href="{{route('project')}}" class="nav-item nav-link @if(request()->routeIs('project')) active @endif">{{__('index.project')}}</a>
                    <a href="{{route('testimonial')}}" class="nav-item nav-link @if(request()->routeIs('testimonial')) active @endif">{{__("index.gal")}}</a>

                    <a href="{{route('contact')}}" class="nav-item nav-link @if(request()->routeIs('contact')) active @endif">{{__('index.contact')}}</a>
                                    </div>
                <div class="dropdown btn rounded-pill py-1 px-1  d-lg-block">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">til tanlash</a>
                    <div class="dropdown-menu m-0">
                        <a href="locale/en" class="dropdown-item">Inglistili</a>
                        <a href="locale/ru" class="dropdown-item">Rus tili</a>
                        <a href="locale/uz" class="dropdown-item">Uzbek tili</a>
                    </div>
                </div>

            </div>
        </nav>
    <!-- Navbar & Hero End -->


    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
        <center>

        <div class="container py-5 px-lg-5">

            <div class="row g-5">
                <div class="col-md-6 col-lg-3">
                    <p class="section-title text-white h5 mb-4">Address<span></span></p>
{{--               /     <p><i class="fa fa-map-marker-alt me-3"></i>{{auth()->user()->address}}</p>--}}
{{--                    <p><i class="fa fa-phone-alt me-3"></i>{{auth()->user()->tel}}</p>--}}
{{--                    <p><i class="fa fa-envelope me-3"></i>{{auth()->user()->email}}</p>--}}
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <p class="section-title text-white h5 mb-4">Quick Link<span></span></p>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Privacy Policy</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Career</a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <p class="section-title text-white h5 mb-4">Gallery<span></span></p>
                    <div class="row g-2">
                        <div class="col-4">
                            <img class="img-fluid" src="asset/img/portfolio-1.jpg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid" src="asset/img/portfolio-2.jpg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid" src="asset/img/portfolio-3.jpg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid" src="asset/img/portfolio-4.jpg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid" src="asset/img/portfolio-5.jpg" alt="Image">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid" src="asset/img/portfolio-6.jpg" alt="Image">
                        </div>
                    </div>
                </div>
{{--                <div class="col-md-6 col-lg-3">--}}
{{--                    <p class="section-title text-white h5 mb-4">Newsletter<span></span></p>--}}
{{--                    <p>Lorem ipsum dolor sit amet elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulpu</p>--}}
{{--                    <div class="position-relative w-100 mt-3">--}}
{{--                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Your Email" style="height: 48px;">--}}
{{--                        <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>

        </div>
        </center>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="asset/img/wow/wow.min.js"></script>
<script src="asset/img/easing/easing.min.js"></script>
<script src="asset/img/waypoints/waypoints.min.js"></script>
<script src="asset/img/counterup/counterup.min.js"></script>
<script src="asset/img/owlcarousel/owl.carousel.min.js"></script>
<script src="asset/img/isotope/isotope.pkgd.min.js"></script>
<script src="asset/img/lightbox/js/lightbox.min.js"></script>

<!-- Template Javascript -->
<script src="asset/js/main.js"></script>
</body>

</html>