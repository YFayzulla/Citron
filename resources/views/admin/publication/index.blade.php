@extends('layout.index')
@section('content')

    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <h2
                class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
                Publication
            </h2>
            <div class="w-full overflow-hidden rounded-lg shadow-xm">
                <div class="w-full overflow-x-auto">
                    <div class="w-full overflow-hidden rounded-lg shadow-xm">
                        <div class="flex items-center">
                            <a href="{{route('publication.create')}}"
                               class="text-sm mb-8 justify-between items-center flex p-4 font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none font-shadow-outline-purple">
                                Add publication
                            </a>
                        </div>
                    </div>
                    <table class="w-full whitespace-no-wrap hover:table-fixed">
                        <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th scope="col" class="px-4 py-3">ID</th>
                            <th scope="col" class="px-4 py-3">Name</th>
                            <th scope="col" class="px-4 py-3">Author</th>
                            <th scope="col" class="px-4 py-3">EX_name</th>
                            <th scope="col" class="px-4 py-3">Date</th>
                            <th scope="col" class="px-4 py-3">Action</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach($publications as $item)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">{{ $item->loop+1 }}</td>
                                <td class="px-4 py-3 text-sm">{{$item->name}}</td>
                                <td class="px-4 py-3 text-sm">{{$item->author->name}}</td>
                                <td class="px-4 py-3 text-sm">{{$item->ex_name}}</td>
                                <td class="px-4 py-3 text-sm">{{$item->date}}</td>
                                <td>
                                    <a href="{{ asset('storage/'. $item->file) }}" class="btn btn-primary mt-2">
                                        <i class="bx bx-download me-2"></i> Faylni Yuklab Olish</a>
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-4 text-sm">
                                        <a href="{{route('publication.edit',$item->id)}}"
                                           class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray">
                                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                 viewBox="0 0 20 20">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                            </svg>
                                        </a>
                                        <form action="{{route('publication.destroy',$item->id)}}" method="post"
                                              id="form-delete">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button"
                                                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                    onclick="delete_button({{$item->id}})">
                                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor"
                                                     viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                          d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </main>

@endsection

@section('script')
    <script>
        form = document.getElementById('form-delete');

        function delete_button(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.action = '/publication/' + id;
                    form.submit()
                }
            })
        }

        @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: '{{session('success')}}',
            showConfirmButton: false,
            timer: 2000
        })
        @endif

    </script>

@endsection
