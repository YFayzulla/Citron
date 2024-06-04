@extends('layout.app')
@section('content')

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <span>{{__('index.navbar.services')}}</span>
                <h2>{{__('index.navbar.services')}}</h2>
                <p>{{__('index.services.solutions')}}</p>
            </div>

            <div class="row">
                @foreach($services as $service)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
                        <div class="member">
                            <img src="Aphoto/{{$service->image}}" alt="">
                            <h4>{{($service->{'name_' . app()->getLocale()})}}</h4>
                            <p>
                                {{($service->{'desc_' . app()->getLocale()})}}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Services Section -->

@endsection
