@extends('layout.app')
@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
            <h1>Welcome to Day</h1>
            <h2>We are team of talented designers making websites with Azamat</h2>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
                        <img src="assets/img/about.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                        <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                        </ul>
                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                            culpa qui officia deserunt mollit anim id est laborum
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">

                    <div class="col-lg-4" data-aos="fade-up">
                        <div class="box">
                            <span>01</span>
                            <h4>Lorem Ipsum</h4>
                            <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
                        <div class="box">
                            <span>02</span>
                            <h4>Repellat Nihil</h4>
                            <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="box">
                            <span>03</span>
                            <h4> Ad ad velit qui</h4>
                            <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Why Us Section -->

        <!-- ======= Projects Section ======= -->
        <section id="projects" class="services">
            <div class="container">

                <div class="section-title">
                    <span>{{__('index.Project')}}</span>
                    <h2>{{__('index.Project')}}</h2>
                    <p>{{__('index.Completed_Project')}}</p>
                </div>

                <div class="row">
                    @foreach($projects as $project)

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{$project->id}}">
                                <center>
                                    <img src="Aphoto/{{$project->image}}" class="img-thumbnail" alt="">
                                </center>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{$project->id}}" tabindex="-1"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content  ">
                                        <div class="modal-body">
                                            <img src="Aphoto/{{$project->image}}" class="img-thumbnail " alt="">
                                            <h5 class="text-center">{{($project->{'name_' . app()->getLocale()})}}</h5>
                                        </div>
                                        <p class="text"
                                           style="margin-left: 100px ;margin-right: 100px ">{{($project->{'desc_' . app()->getLocale()})}}</p>
                                        <ul>
                                            <h2>{{__('index.Loyixa_qatnashchilari')}}</h2>
                                            @foreach($project->project_has_user as $item)

                                                <li>
                                                    {{$item->user->name}}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Projects Section -->

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-in">

                <div class="row d-flex align-items-center">

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="http://amusoft.uz/assets/img/logo.svg" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                    </div>

                    {{--                <div class="col-lg-2 col-md-4 col-6">--}}
                    {{--                    <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">--}}
                    {{--                </div>--}}

                    {{--                <div class="col-lg-2 col-md-4 col-6">--}}
                    {{--                    <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">--}}
                    {{--                </div>--}}

                    {{--                <div class="col-lg-2 col-md-4 col-6">--}}
                    {{--                    <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">--}}
                    {{--                </div>--}}

                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Services Section ======= -->

                <div class="row">
                    <section id="services" class="services">
                        <div class="container">

                            <div class="section-title">
                                <span>{{__('index.services')}}</span>
                                <h2>{{__('index.services')}}</h2>
                                <p>{{__('index.Qanday_yechimlarni_taqdim_etamiz')}}</p>
                            </div>
                            <div class="row">

                                @foreach($services as $service)
                                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">

                                        <div class="card" style="width: 25rem">
                                            <center>
                                                <img src="Aphoto/{{$service->image}}" class="img-thumbnail" alt="">
                                                <h2>{{($service->{'name_' . app()->getLocale()})}}</h2>
                                            </center>
                                            <p style="margin-left: 20px ;margin-right: 20px">{{($service->{'desc_' . app()->getLocale()})}}</p>
                                            {{--                    </div>--}}
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </section>
                </div>

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="text-center">
                    <h3>Call To Action</h3>
                    <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <a class="cta-btn" href="#">Call To Action</a>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container">

                <div class="section-title">
                    <span>Pricing</span>
                    <h2>Pricing</h2>
                    <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="150">
                        <div class="box">
                            <h3>Free</h3>
                            <h4><sup>$</sup>0<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li class="na">Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="zoom-in">
                        <div class="box featured">
                            <h3>Business</h3>
                            <h4><sup>$</sup>19<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="150">
                        <div class="box">
                            <h3>Developer</h3>
                            <h4><sup>$</sup>29<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Pricing Section -->

        <!-- Start About -->
        <section id="team" class="team">
            <div class="container">

                <div class="section-title">
                    <span>{{__('index.about')}}</span>
                    <h2>{{__('index.about')}}</h2>
                    <p>{{__('index.Bizning A`zolar')}}</p>
                </div>

                    <div class="row">
                        @foreach($abouts as $about)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                                <div class="card" style="width: 25rem">
                                    <center>
                                        <img src="Aphoto/{{$about->image}}" class="img-thumbnail" alt="">
                                        <h2>{{($about->{'name_' . app()->getLocale()})}}</h2>
                                    </center>
                                    <p style="margin-left: 20px ;margin-right: 20px">{{($about->{'desc_' . app()->getLocale()})}}</p>
                                    {{--                    </div>--}}
                                </div>
                            </div>
                        @endforeach
                    </div>

            </div>
        </section>
        <!-- End About -->
    </main><!-- End #main -->

@endsection

