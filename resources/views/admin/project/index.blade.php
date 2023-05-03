@extends('layout.index')
@section('content')



    <div class="card m-4" >
        <div class="container">
            <a href="{{route('projects.create')}}" class="btn btn-outline-success m-2">yangi</a>
            <table class="table table-hover m-1 ">
                <tr>
                    <td>id</td>
                    <td>name</td>
                    <td>malumot</td>
                    <td>rasm</td>
                    <td>action</td>
                </tr>
                <tr>
                    @foreach($projects as $project)
                    <th>{{$project->id}}</th>
                    <th>{{$project->name_uz}}</th>
                    <th>{{$project->desc_uz}}</th>
                    <th>
                        <img src="Aphoto/{{$project->image}} " width="80px">
                    </th>
                    <th>
                        <a href="{{route('projects.edit',$project->id)}}" class="btn btn-outline-warning float-left" type="button">o`zgartirish</a>
                        <form action="{{route('projects.destroy',$project->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                        <button class="btn-outline-danger btn" type="submit">o`chirish</button>
                        </form>
                    </th>
                    @endforeach
                </tr>
            </table>
        </div>
    </div>


@endsection