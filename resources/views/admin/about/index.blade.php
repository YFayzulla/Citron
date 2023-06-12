@extends('layout.index')
@section('content')



    <div class="card m-3" >
        <div class="container">
            <table class="table table-hover m-1">
                <a href="{{route('abouts.create')}}" class="btn btn-outline-success m-2" type="button">yangi</a>
                <tr>
                    <td>ID</td>
                    <td>ismi</td>
                    <td>soxasi</td>
                    <td>email</td>
                    <td>rasim</td>
                    <td>action</td>
                </tr>
                <?php $i=1  ?>
                @foreach($abouts as $about)
                <tr>
                    <th>{{$i}}</th>
                    <th>{{$about->name}}</th>
                    <th>{{$about->specialty_uz}}</th>
                    <th>{{$about->email}}</th>
                    <th>
                        <img src="Aphoto/{{$about->image}}" width="80px">
                    </th>
                    <th>
                        <a href="{{route('abouts.edit',$about->id)}}" type="button" class="btn btn-outline-warning">edit</a>
                        <form action="{{route('abouts.destroy',$about->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">ochirish</button>
                        </form>
                    </th>
                </tr>
                    <?php $i++?>
                @endforeach
                <a href="{{route('abouts.show',$i)}}" type="hidden" ></a>
            </table>
        </div>
    </div>

@endsection