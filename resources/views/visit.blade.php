@extends('layout.app')
@section('content')

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            /*background-color: #f5f5f5;*/
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            padding: 50px;
        }

        .create-section {
            max-width: 45%;
        }

        .create-section h1 {
            color: #00a3e0;
            font-size: 20px;
            margin-bottom: 10px;
        }

        /*.create-section h2 {*/
        /*    font-size: 28px;*/
        /*    margin-bottom: 20px;*/
        /*}*/

        .create-section p, .create-section h3 {
            font-size: 20px;
            line-height: 1.5;
        }

        .form-section {
            max-width: 45%;
            background-color: #fff;
            padding: 5px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-card {
            text-align: center;
            overflow: hidden; /* Ensures the image fits within the rounded corners */
            border-radius: 10px;
        }

        .form-card img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
    </style>

    <div class="section-title">

        <span>{{__('index.navbar.visit')}}</span>
        <h2>{{__('index.navbar.visit')}}</h2>
        <p>{{__('index.navbar.visit')}}</p>

    </div>

    @php
        $count = 0;
    @endphp

    @foreach($visits as $post)
        @if($count % 2 == 0)
            <div class="container">
                <div class="create-section">
                    <h1>{{($post->{'country_' . app()->getLocale()})}}</h1>
                    <h2>{{($post->{'university_' . app()->getLocale()})}}</h2>
                    <h3>{{($post->{'description_' . app()->getLocale()})}}</h3>
                </div>
                <div class="form-section">
                    <div class="form-card">
                        <img src="photo/{{$post->photo}}" alt="Profile Picture">
                    </div>
                </div>
            </div>
        @else
            <div class="container">
                <div class="form-section">
                    <div class="form-card">
                        <img src="photo/{{$post->photo}}" alt="Profile Picture">
                    </div>
                </div>
                <div class="create-section">
                    <h1>{{($post->{'country_' . app()->getLocale()})}}</h1>
                    <h2>{{($post->{'university_' . app()->getLocale()})}}</h2>
                    <h3>{{($post->{'description_' . app()->getLocale()})}}</h3>
                </div>
            </div>
        @endif
        @php
            $count++;
        @endphp
    @endforeach

@endsection
