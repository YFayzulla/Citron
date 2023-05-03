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
            <form action="{{route('abouts.update',$about->id)}}" class="" enctype="multipart/form-data" method="post">
                @csrf
                @method('PUT')
                <input type="text" class="form-control m-2" value="{{$about->name}}" name="name">
                <input type="text" class="form-control m-2" value="{{$about->specialty_uz}}" name="specialty_uz">
                <input type="text" class="form-control m-2" value="{{$about->specialty_ru}}" name="specialty_ru">
                <input type="text" class="form-control m-2" value="{{$about->specialty_en}}" name="specialty_en">
                <input type="email" class="form-control m-2" value="{{$about->email}}" name="email">
                <input type="file" class="form-control m-2"  name="thumbnail">
                <button type="submit" class="btn-outline-warning btn m-2">saqlash</button>
            </form>


        </div>
    </div>




@endsection