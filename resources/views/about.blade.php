@extends('layout.app')
@section('content')
    <!-- ======= Team Section ======= -->
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
{{--                                <h2>{{($about->name}}</h2>--}}
                            </center>
                            <p style="margin-left: 20px ;margin-right: 20px">{{($about->{'desc_' . app()->getLocale()})}}</p>
                            {{--                    </div>--}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Team Section -->
@endsection
