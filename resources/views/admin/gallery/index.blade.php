@extends('layout.index')
@section('content')



    <div class="card m-3" >
        <div class="container">
            <table class="table table-hover m-1">
                <a href="{{route('gallery.create')}}" class="btn btn-outline-success m-2" type="button">Yangi</a>
                <tr>
                    <td>ID</td>
                    <td>Ismi</td>
                    <td>Tavsifnoma</td>
                    <td>Rasmi</td>
                    <td>Action</td>
                </tr>
                <?php $i=1  ?>
                @foreach($galleries as $gallery)
                    <tr>
                        <th>{{$i}}</th>
                        <th>{{$gallery->name}}</th>
                        <th>{{$gallery->desc}}</th>
                        <th>
                            <img src="Aphoto/{{$gallery->image}}" width="80px">
                        </th>
                        <th>
                            <a href="{{route('gallery.edit',$gallery->id)}}" type="button" class="btn btn-outline-warning">Edit</a>
                            <form action="{{route('gallery.destroy',$gallery->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                        </th>
                    </tr>
                        <?php $i++?>
                @endforeach
                <a href="{{route('gallery.show',$i)}}" type="hidden" ></a>
            </table>
        </div>
    </div>

@endsection
