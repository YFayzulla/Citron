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
                        <button type="button">
                            <img src="Aphoto/{{$project->image}}" class="img-thumbnail" alt="">
                            <div class="portfolio-info">
                                <center>
                                    <h4 class="container">{{($project->{'name_'.app()->getLocale()})}}</h4>
                                </center>
                                <p class="mt-2">{{($project->{'desc_' . app()->getLocale()})}}</p>
                            </div>
                        </button>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Projects Section -->

@endsection

{{--for modal--}}

{{--@php $users=DB::table('project_has_user')->where('project_id', '=', $project->id)->get(); @endphp--}}

{{--<p class="text-center"> {{__('index.loyixa_ishtirokchilari')}} </p>--}}
{{--@foreach($users as $user)--}}
{{--    <td class="px-4 py-3 text-sm">{{$user->user_id}}</td>--}}
{{--@endforeach--}}