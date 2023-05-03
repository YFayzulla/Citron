@extends('layout.index')
@section('content')

        <div class="card m-3" >
            <div class="container">
                <br>
                <form action="{{route('services.store')}}" class="" enctype="multipart/form-data" method="post">
                    @csrf
                    <input type="text" class="form-control m-2" placeholder="nomining o1zbekcha nomi" name="name_uz">
                    <input type="text" class="form-control m-2" placeholder="nomining ruscha nomi" name="name_ru">
                    <input type="text" class="form-control m-2" placeholder="nomining inglischa nomi " name="name_en">
                    <input type="text" class="form-control m-2" placeholder="malumot uz" name="desc_uz">
                    <input type="text" class="form-control m-2" placeholder="malumot ru" name="desc_ru">
                    <input type="text" class="form-control m-2" placeholder="malumot en" name="desc_en">
                    <input type="file" class="form-control m-2"  name="image">
                    <button type="submit" class="btn-outline-warning btn m-2">saqlash</button>
                </form>


            </div>
        </div>

@endsection