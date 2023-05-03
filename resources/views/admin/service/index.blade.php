@extends('layout.index')
@section('content')

<?php $i=1?>
    <div class="card m-4" >
        <div class="container">
            <a href="{{route('services.create')}}" class="btn-outline-success btn m-2" type="button">yaratish</a>
            <table class="table table-hover m-1 ">
                <tr>
                    <td>ID</td>
                    <td>nomi</td>
                    <td>malumot</td>
                    <td>image</td>
                    <td>action</td>
                </tr>
@foreach($services as $service)
                <tr>
<th>{{$i}}</th>
                    <th>{{$service->name_uz}}</th>
                    <th>{{$service->desc_uz}}</th>
                    <th><img src="Aphoto/{{$service->image}}" alt="" width="60px"></th>
                    <th>
                        <a href="{{route('services.edit',$service->id)}}" class="btn-outline-warning btn">edit</a>
                        <form action="{{route('services.destroy',$service->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">del</button>
                        </form>
                    </th>
                </tr>
    <?php $i++ ?>
                @endforeach

            </table>
        </div>
    </div>


@endsection