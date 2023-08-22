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

@endsection

{{--for modal--}}

{{--@php $users=DB::table('project_has_user')->where('project_id', '=', $project->id)->get(); @endphp--}}

{{--<p class="text-center"> {{__('index.loyixa_ishtirokchilari')}} </p>--}}
{{--@foreach($users as $user)--}}
{{--    <td class="px-4 py-3 text-sm">{{$user->user_id}}</td>--}}
{{--@endforeach--}}