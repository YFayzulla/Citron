@extends('layout.app')
@section('content')

    <!-- ======= Projects Section ======= -->
    <section id="projects" class="services">
        <div class="container">

            <div class="section-title">
                <span>{{__('index.navbar.Publication')}}</span>
                <h2>{{__('index.navbar.Publication')}}</h2>
                <p>{{__('index.navbar.Publication')}}</p>
            </div>
            {{--            @dd($users)--}}


            <div class="row">
                @foreach($publication as $item)


                @endforeach
            </div>
        </div>
    </section>
    <!-- End Projects Section -->

@endsection
