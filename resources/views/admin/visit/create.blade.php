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
                    Visit About
                </h1>
                <form method="post" action="{{route('visit.store')}}" enctype="multipart/form-data">
                    @csrf
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Country uzb name</span>
                        <input type="text" name="country_uz" value="{{ old('Country_uz') }}"
                               class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        />
                    </label>

                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Country rus name</span>
                        <input type="text" name="country_ru" value="{{ old('Country_ru') }}"
                               class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        />
                    </label>

                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Country eng name</span>
                        <input type="text" name="country_en" value="{{ old('Country_en') }}"
                               class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        />
                    </label>

                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">University uzb name</span>
                        <input type="text" name="university_uz_en" value="{{ old('university_uz_en') }}"
                               class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        />
                    </label>
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">University rus name</span>
                        <input type="text" name="university_ru" value="{{ old('university_ru') }}"
                               class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        />
                    </label>

                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400"> Description uzb version </span>
                        <input type="text" name="description_uz" value="{{ old('description_uz') }}"
                               class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        />
                    </label>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400"> Description rus version </span>
                        <input type="text" name="description_ru" value="{{ old('description_ru') }}"
                               class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        />
                    </label>
                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Description eng version</span>
                        <input type="text" name="description_en" value="{{ old('description_en') }}"
                               class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        />
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400"> Date </span>
                        <input type="date" name="date" value="{{ old('date') }}"
                               class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        />
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">photo</span>
                        <input type="file" name="photo" value="{{ old('photo') }}"
                               class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                        />
                    </label>

                    <!-- You should use a button here, as the anchor is only used for the example  -->
                    <button type="submit"
                            class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                    >
                        Save
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
                    footer: '<a href="{{route('visit.create')}}">Why do I have this issue?</a>'
                })
            </script>
        @endforeach
    @endif
@endsection
