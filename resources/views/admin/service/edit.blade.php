@extends('layout.index')
@section('content')

    <div class="card m-3" >
        <div class="container">
            <br>
            <form action="{{route('services.update',$service->id)}}" class="" enctype="multipart/form-data" method="post">
                @csrf
                @method('PUT')
                <input type="text" class="form-control m-2" value="{{$service->name_uz}}" name="name_uz" required>
                <input type="text" class="form-control m-2" value="{{$service->name_ru}}" name="name_ru" required>
                <input type="text" class="form-control m-2" value="{{$service->name_en}}" name="name_en" required>
                <input type="text" class="form-control m-2" value="{{$service->desc_uz}}" name="desc_uz" required>
                <input type="text" class="form-control m-2" value="{{$service->desc_ru}}" name="desc_ru" required>
                <input type="text" class="form-control m-2" value="{{$service->desc_en}}" name="desc_en" required>
                <input type="file" class="form-control m-2"  name="thumbnail">
                <button type="submit" class="btn-outline-warning btn m-2">saqlash</button>
            </form>


        </div>
    </div>

@endsection