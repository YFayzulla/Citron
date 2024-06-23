@extends('layout.app')
@section('content')

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        /*.container {*/
        /*    display: flex;*/
        /*    flex-direction: column;*/
        /*    padding: 50px;*/
        /*}*/

        .item {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .create-section, .form-section {
            flex: 1;
            margin: 10px;
            max-width: calc(50% - 20px);
        }

        .create-section h1 {
            color: #00a3e0;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .create-section p, .create-section h3 {
            font-size: 20px;
            line-height: 1.5;
        }

        .form-section {
            background-color: #fff;
            padding: 5px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .form-card img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            .create-section, .form-section {
                max-width: 100%;
                margin: 10px 0;
            }

            .create-section h1, .create-section h2, .create-section h3, .create-section p {
                font-size: 18px;
            }
        }

        @media (max-width: 480px) {
            .create-section h1, .create-section h2, .create-section h3, .create-section p {
                font-size: 16px;
            }
        }
    </style>

    <div class="section-title">
        <span>{{__('index.navbar.visit')}}</span>
        <h2>{{__('index.navbar.visit')}}</h2>
        <p>{{__('index.navbar.visit')}}</p>
    </div>

    <div class="container">
        @php
            $count = 0;
        @endphp

        @foreach($visits as $post)
            <div class="item">
                @if($count % 2 == 0)
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
                @else
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
                @endif
            </div>
            @php
                $count++;
            @endphp
        @endforeach
    </div>

@endsection
