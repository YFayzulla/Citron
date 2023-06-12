@extends('layout.index')
@section('content')


    <div class="card m-4 p-2" >
        <div class="container">
            <table class="table table-hover m-1 ">
                <tr>
                    <td>ID</td>
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
                            <button type="submit" class=" btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                </svg></button>
                        </form>
                    </th>
                </tr>
                @endforeach
            </table>
        </div>
    </div>


@endsection