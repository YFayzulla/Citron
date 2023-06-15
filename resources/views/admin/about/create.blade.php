@extends('layout.index')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card m-3" >
    <div class="container">
        <br>
        <form action="{{route('abouts.store')}}" class="" enctype="multipart/form-data" method="post">
            @csrf
            <input type="text" class="form-control m-2" placeholder="ism" name="name">
            <input type="text" class="form-control m-2" placeholder="soxasining o1zbekcha nomi" name="specialty_uz">
            <input type="text" class="form-control m-2" placeholder="soxasining ruscha nomi" name="specialty_ru">
            <input type="text" class="form-control m-2" placeholder="soxasining inglischa nomi " name="specialty_en">
            <input type="email" class="form-control m-2" placeholder="pochta" name="email">
            <input type="tel" class="form-control m-2" placeholder="tel raqam" name="tel">
            <input type="file" class="form-control m-2" placeholder="rasim" name="image">
            <button type="submit" class="btn-outline-warning btn m-2">saqlash</button>
        </form>


    </div>
</div>




@endsection