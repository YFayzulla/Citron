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

    <!-- End Services Section -->

@endsection
