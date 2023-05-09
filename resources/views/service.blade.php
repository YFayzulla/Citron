@extends('layout.app')
@section('content')
    <div class="container-xxl py-5 bg-primary hero-header">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated slideInDown">{{__('index.Hizmatlar')}}</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">{{__('index.Asosiy_sahifa')}}</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">{{__('index.Saxifalar')}}</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">{{__('index.Hizmatlar')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>{{__('index.Bizning_xizmatlar')}}<span></span></p>
                    <h1 class="text-center mb-5">{{__('index.Qanday_yechimlarni_taqdim_etamiz')}}</h1>
                </div>
                <div class="row g-4">
                    @foreach($service as $s)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <img src="Aphoto/{{$s->image}}" width="550px" height="200px" alt="">
                            </div>
                            <h5 class="mb-3">{{($s->{'name_'.app()->getLocale()})}}</h5>
                            <p class="m-0">{{($s->{'desc_'.app()->getLocale()})}}</p>
                            <a class="btn btn-square" href=""><i class="fa fa-arrow-right"></i></a>
                        </div>
                        @endforeach
                    </div>
                        @foreach($service as $project)
                            <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                                <div class="rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <img class="img-fluid w-100" src="Aphoto/{{$project->image}}" width="100px" alt="">
                                        <div class="portfolio-overlay">
                                            <a class="btn btn-square btn-outline-light mx-1" href="#" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                            <a class="btn btn-square btn-outline-light mx-1" href="#"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                    <div class="bg-light p-4">
                                        <p class="text-primary fw-medium mb-2">{{($project->{'name_'.app()->getLocale()})}}</p>
                                        <h5 class="lh-base mb-0">{{($project->{'desc_'.app()->getLocale()})}}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
        <!-- Service End -->


    {{--        <!-- Newsletter Start -->--}}
    {{--        <div class="container-xxl bg-primary newsletter py-5 wow fadeInUp" data-wow-delay="0.1s">--}}
    {{--            <div class="container py-5 px-lg-5">--}}
    {{--                <div class="row justify-content-center">--}}
    {{--                    <div class="col-lg-7 text-center">--}}
    {{--                        <p class="section-title text-white justify-content-center"><span></span>Newsletter<span></span></p>--}}
    {{--                        <h1 class="text-center text-white mb-4">Stay Always In Touch</h1>--}}
    {{--                        <p class="text-white mb-4">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo</p>--}}
    {{--                        <div class="position-relative w-100 mt-3">--}}
    {{--                            <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Enter Your Email" style="height: 48px;">--}}
    {{--                            <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <!-- Newsletter End -->--}}


    {{--        <!-- Testimonial Start -->--}}
    {{--        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">--}}
    {{--            <div class="container py-5 px-lg-5">--}}
    {{--                <p class="section-title text-secondary justify-content-center"><span></span>Testimonial<span></span></p>--}}
    {{--                <h1 class="text-center mb-5">What Say Our Clients!</h1>--}}
    {{--                <div class="owl-carousel testimonial-carousel">--}}
    {{--                    <div class="testimonial-item bg-light rounded my-4">--}}
    {{--                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo.</p>--}}
    {{--                        <div class="d-flex align-items-center">--}}
    {{--                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 65px; height: 65px;">--}}
    {{--                            <div class="ps-4">--}}
    {{--                                <h5 class="mb-1">Client Name</h5>--}}
    {{--                                <span>Profession</span>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="testimonial-item bg-light rounded my-4">--}}
    {{--                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo.</p>--}}
    {{--                        <div class="d-flex align-items-center">--}}
    {{--                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 65px; height: 65px;">--}}
    {{--                            <div class="ps-4">--}}
    {{--                                <h5 class="mb-1">Client Name</h5>--}}
    {{--                                <span>Profession</span>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="testimonial-item bg-light rounded my-4">--}}
    {{--                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit sed stet lorem sit clita duo justo.</p>--}}
    {{--                        <div class="d-flex align-items-center">--}}
    {{--                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 65px; height: 65px;">--}}
    {{--                            <div class="ps-4">--}}
    {{--                                <h5 class="mb-1">Client Name</h5>--}}
    {{--                                <span>Profession</span>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        <!-- Testimonial End -->--}}

@endsection
