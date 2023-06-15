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
            <form action="{{route('gallery.store')}}" class="" enctype="multipart/form-data" method="post">
                @csrf

                <input type="text" class="form-control m-2" placeholder="ism" name="name">
                <input type="text" class="form-control m-2" placeholder="Desc" name="desc">
                <input type="file" class="form-control m-2" placeholder="Rasim" name="image">
                <button type="submit" class="btn-outline-warning btn m-2">Saqlash</button>

            </form>


        </div>
    </div>

@endsection
