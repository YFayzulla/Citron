@extends('layout.index')
@section('content')


    <div class="card m-4" >
        <div class="container">
            <form action="{{route('projects.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="name_uz" class="form-control m-3" placeholder="loyixa nomi uz">
                <input type="text" name="name_ru" class="form-control m-3" placeholder="loyixa nomi ru">
                <input type="text" name="name_en" class="form-control m-3" placeholder="loyixa nomi en">
                <input type="text" name="desc_uz" class="form-control m-3" placeholder="malumot uz">
                <input type="text" name="desc_ru" class="form-control m-3" placeholder="malumot ru">
                <input type="text" name="desc_en" class="form-control m-3" placeholder="malumot en">
                <input type="file" name="image" class="form-control m-3">
                <button class="btn btn-outline-success m-3 float-left" type="submit">save</button>
            </form>
        </div>
    </div>

@endsection
