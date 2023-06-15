@extends('layout.app')
@section('content')

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
                            <h4 class="container">{{$project->name_uz}}</h4>
                            <img src="Aphoto/{{$project->image}}" class="img-thumbnail" alt="">
                            <div class="portfolio-info">
                                <p class="mt-2">{{$project->desc_uz}}</p>
                            </div>
                        </div>

                    @endforeach
                </div>
        </div>
    </section>
    <!-- End Projects Section -->

@endsection
