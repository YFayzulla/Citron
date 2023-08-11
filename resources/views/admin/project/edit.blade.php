@extends('layout.index')
@section('content')

    <div class="flex flex-col overflow-y-auto md:flex-row">
        <div class="h-32 md:h-auto md:w-1/2">
            <img
                aria-hidden="true"
                class="object-cover w-full h-full dark:hidden"
                src="{{ asset('admin/assets/img/create-account-office.jpeg') }}"
                alt="Office"
            />
            <img
                aria-hidden="true"
                class="hidden object-cover w-full h-full dark:block"
                src="{{ asset('admin/assets/img/create-account-office-dark.jpeg') }}"
                alt="Office"
            />
        </div>
        <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
                <h1
                    class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200"
                >
                    Edit Project
                </h1>

                <form method="post" action="{{route('projects.update',$project->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <label class="block mt-1 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Loyixa nomi uz</span>
                        <input type="text" name="name_uz" value="{{$project->name_uz}}"
                               class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        />
                    </label>
                    <label class="block mt-1 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Loyixa nomi en</span>
                        <input type="text" name="name_en" value="{{$project->name_en}}"
                               class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        />
                    </label>
                    <label class="block mt-1 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Loyixa nomi ru</span>
                        <input type="text" name="name_ru" value="{{$project->name_ru}}"
                               class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        />
                    </label>
                    <label class="block mt-1 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Malumot uz</span>
                        <input type="text" name="desc_uz" value="{{$project->desc_uz}}"
                               class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        />
                    </label>
                    <label class="block mt-1 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Malumot en</span>
                        <input type="text" name="desc_en" value="{{$project->desc_en}}"
                               class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        />
                    </label>
                    <label class="block mt-1 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Malumot ru</span>
                        <input type="text" name="desc_ru" value="{{$project->desc_ru}}"
                               class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        />
                    </label>
                    <label class="block mt-1 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">User</span>
                        <select name="user_id" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input">
                            @foreach($abouts as $about)
                                <option>{{ $about->name }}</option>
                            @endforeach
                        </select>
                    </label>
                    <label class="block mt-1 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Rasim</span>
                        <input type="file" name="thumbnail" value="{{$project->image}}"
                               class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        />
                    </label>

                    <!-- You should use a button here, as the anchor is only used for the example  -->
                    <button type="submit"
                            class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    >
                        Saqlash
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection


@section('script')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: '{{ $error }}',
                    footer: '<a href="{{route('projects.edit')}}">Why do I have this issue?</a>'
                })
            </script>
        @endforeach
    @endif
@endsection
