@extends('layout.index')
@section('content')


    <div class="card m-4 p-2" >
        <div class="container">
            <table class="table table-hover m-1 ">
                <tr>
                    <td>id</td>
                    <td>name</td>
                    <td>email</td>
                    <td>subject</td>
                    <td>massage</td>
                    <td>action</td>
                </tr>
                @foreach($data as $info)

                <tr>
                    <th>{{$info->id}}</th>
                    <th>{{$info->name}}</th>
                    <th>{{$info->email}}</th>
                    <th>{{$info->subject}}</th>
                    <th>{{$info->message}}</th>
                    <th>
                        <form action="{{route('contacts.destroy',$info->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class=" btn btn-outline-danger">o`chirish</button>
                        </form>
                    </th>
                </tr>
                @endforeach
            </table>
        </div>
    </div>


@endsection