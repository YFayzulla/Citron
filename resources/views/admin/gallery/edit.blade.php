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
            <form action="{{route('gallery.update', $gallery->id)}}" class="" enctype="multipart/form-data" method="post">
                @csrf
                @method('PUT')

                <input type="text" class="form-control m-2" value="{{$gallery->name}}" name="name">
                <input type="text" class="form-control m-2" value="{{$gallery->desc}}" name="desc">
                <input type="file" class="form-control m-2" value="{{$gallery->image}}" name="thumbnail">
                <button type="submit" class="btn-outline-warning btn m-2">Saqlash</button>

            </form>


        </div>
    </div>

@endsection
