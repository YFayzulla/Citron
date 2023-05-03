@extends('layout.app')
@section('content')


    <div class="container-xxl py-5 bg-primary hero-header">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated slideInDown">Biz haqimizda</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Asosiy</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Saxifalar</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Malumotlar</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    </div>
{{--    @dd($i)--}}

{{--        <!-- Feature Start -->--}}
{{--        <div class="container-xxl py-5">--}}
{{--            <div class="container py-5 px-lg-5">--}}
{{--                <div class="row g-4">--}}
{{--                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">--}}
{{--                        <div class="feature-item bg-light rounded text-center p-4">--}}
{{--                            <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>--}}
{{--                            <h5 class="mb-3">Digital Marketing</h5>--}}
{{--                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">--}}
{{--                        <div class="feature-item bg-light rounded text-center p-4">--}}
{{--                            <i class="fa fa-3x fa-search text-primary mb-4"></i>--}}
{{--                            <h5 class="mb-3">SEO & Backlinks</h5>--}}
{{--                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">--}}
{{--                        <div class="feature-item bg-light rounded text-center p-4">--}}
{{--                            <i class="fa fa-3x fa-laptop-code text-primary mb-4"></i>--}}
{{--                            <h5 class="mb-3">Design & Development</h5>--}}
{{--                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- Feature End -->


{{--        <!-- About Start -->--}}
{{--        <div class="container-xxl py-5">--}}
{{--            <div class="container py-5 px-lg-5">--}}
{{--                <div class="row g-5 align-items-center">--}}
{{--                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">--}}
{{--                        <p class="section-title text-secondary">About Us<span></span></p>--}}
{{--                        <h1 class="mb-5">#1 Digital solution with 10 years of experience</h1>--}}
{{--                        <p class="mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit clita duo justo eirmod magna dolore erat amet</p>--}}
{{--                        <div class="skill mb-4">--}}
{{--                            <div class="d-flex justify-content-between">--}}
{{--                                <p class="mb-2">Digital Marketing</p>--}}
{{--                                <p class="mb-2">85%</p>--}}
{{--                            </div>--}}
{{--                            <div class="progress">--}}
{{--                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="skill mb-4">--}}
{{--                            <div class="d-flex justify-content-between">--}}
{{--                                <p class="mb-2">SEO & Backlinks</p>--}}
{{--                                <p class="mb-2">90%</p>--}}
{{--                            </div>--}}
{{--                            <div class="progress">--}}
{{--                                <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="skill mb-4">--}}
{{--                            <div class="d-flex justify-content-between">--}}
{{--                                <p class="mb-2">Design & Development</p>--}}
{{--                                <p class="mb-2">95%</p>--}}
{{--                            </div>--}}
{{--                            <div class="progress">--}}
{{--                                <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <a href="" class="btn btn-primary py-sm-3 px-sm-5 rounded-pill mt-3">Read More</a>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/about.png">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <!-- About End -->--}}


        <!-- Facts Start -->
        <div class="container-xxl bg-primary fact py-1 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-4" >
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-certificate fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">1234</h1>
                        <p class="text-white mb-0">Yillki tajriba</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-users-cog fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">1234</h1>
                        <p class="text-white mb-0">Jamo`a a`zolarimiz</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-users fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">1234</h1>
                        <p class="text-white mb-0">Homiylar</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-check fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">1234</h1>
                        <p class="text-white mb-0">Tugallangan loyihalar</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->
        

        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>Bizning Jamoa<span></span></p>
                    <h1 class="text-center mb-5">Bizning A`zolar</h1>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        @foreach($abouts as $about)

                        <div class="team-item bg-light rounded"  style="width: 370px; height: 500px">
                            <div class="text-center border-bottom p-4">
                                <img class="img-fluid rounded-circle mb-4" src="Aphoto/{{$about->image}}" width="350px" HEIGHT="300PX"  alt="">
                                <h5>{{$about->name}}</h5>
                                <span>{{$about->specialty_uz}}</span>
                            </div>
                            <div class="d-flex justify-content-center p-4">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

@endsection