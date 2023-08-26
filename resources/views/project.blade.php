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
            {{--            @dd($users)--}}

            <div class="row">
                @foreach($projects as $project)

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{$project->id}}">
                            <center>
                                <img src="Aphoto/{{$project->image}}" class="img-thumbnail" alt="">
                            </center>
                        </button>

                        <!-- Modal -->
                        <div class="row">
                            <div class="modal fade" id="exampleModal{{$project->id}}" tabindex="-1"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <img src="Aphoto/{{$project->image}}" class="img-thumbnail " alt="">
                                            <h3 class="text-center">{{($project->{'name_' . app()->getLocale()})}}</h3>
                                            <p class="text-center mt-2">{{($project->{'desc_' . app()->getLocale()})}}</p>
                                        </div>

                                        <h5>{{__('index.Loyixa_qatnashchilari')}}:
                                            @foreach($project->project_has_user as $item)
                                                <lf>
                                                    {{$item->user->name }}<?php echo ","." "?>
                                                </lf>
                                            @endforeach
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Projects Section -->

@endsection
