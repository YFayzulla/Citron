@extends('layout.index')
@section('content')

    @if ($errors->any())
        @foreach($errors->all() as $error)
            <h2>{{$error}}</h2>
        @endforeach
    @endif
    <div class="card m-3" >
        <div class="container">
            <br>
            <form action="{{route('projects.update',$project->id)}}" class="" enctype="multipart/form-data" method="post">
    @csrf
    @method('PUT')
                <input type="text" name="name_uz" class="form-control m-3" value="{{$project->name_uz}}">
                <input type="text" name="name_ru" class="form-control m-3" value="{{$project->name_ru}}">
                <input type="text" name="name_en" class="form-control m-3" value="{{$project->name_en}}">
                <input type="text" name="desc_uz" class="form-control m-3" value="{{$project->desc_uz}}">
                <input type="text" name="desc_ru" class="form-control m-3" value="{{$project->desc_ru}}">
                <input type="text" name="desc_en" class="form-control m-3" value="{{$project->desc_en}}">
                <input type="file" name="thumbnail" class="form-control m-3">
                <button class="btn btn-outline-success m-3 float-right" type="submit">save</button>
            </form>
        </div>
    </div>
@endsection