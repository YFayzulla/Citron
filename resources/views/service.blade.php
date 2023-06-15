@extends('layout.app')
@section('content')

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <span>{{__('index.services')}}</span>
                <h2>{{__('index.services')}}</h2>
                <p>{{__('index.Qanday_yechimlarni_taqdim_etamiz')}}</p>
            </div>
            @foreach($services as $service)
                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="icon-box">
                            <div><img src="Aphoto/{{$service->image}}" alt="" width="200px" height="100px"></div>
                            <h4><a href="">{{($service->{'name_' . app()->getLocale()})}}</a></h4>
                            <p>{{($service->{'desc_' . app()->getLocale()})}}</p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section><!-- End Services Section -->

@endsection
