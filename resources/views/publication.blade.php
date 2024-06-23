@extends('layout.app')
@section('content')

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        /*.container {*/
        /*    max-width: 800px;*/
        /*    margin: 50px auto;*/
        /*    padding: 20px;*/
        /*    background-color: #fff;*/
        /*    border-radius: 10px;*/
        /*    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);*/
        /*}*/

        .section-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .section-title h2 {
            font-size: 28px;
            color: #333;
        }

        .section-title p {
            font-size: 16px;
            color: #666;
        }

        .publication-info {
            margin-bottom: 20px;
        }

        .publication-info p {
            font-size: 16px;
            line-height: 1.6;
            color: #333;
        }

        .icon-section {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .icon-section a {
            text-decoration: none;
            color: #00a3e0;
            font-size: 16px;
        }

        .icon-section a:hover {
            color: #0077b5;
        }

        .icon {
            font-size: 24px;
            margin-right: 8px;
            vertical-align: middle;
        }

        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            .section-title h2 {
                font-size: 24px;
            }

            .section-title p, .publication-info p {
                font-size: 14px;
            }

            .icon-section a {
                font-size: 14px;
            }

            .icon {
                font-size: 20px;
            }
        }

        @media (max-width: 480px) {
            .section-title h2 {
                font-size: 20px;
            }

            .section-title p, .publication-info p {
                font-size: 12px;
            }

            .icon-section a {
                font-size: 12px;
            }

            .icon {
                font-size: 18px;
            }
        }
    </style>

    <div class="container">
        <div class="section-title">
            <h2>{{ __('index.navbar.publication') }}</h2>
            <p>{{ __('index.navbar.publication') }}</p>
        </div>

        <div class="publication-info">
            @foreach($publications as $publication)
                <p><strong>{{ $publication->name }}</strong> by {{ $publication->author }} ({{ $publication->date }})</p>
                <p>{{ $publication->ex_name }}</p>
                <a href="files/{{ $publication->file }}" target="_blank">{{ __('index.download') }}</a>
            @endforeach
        </div>

        <div class="icon-section">
            <a href="#">
                <i class="icon fas fa-info-circle"></i> Imprint Information
            </a>
            <a href="#">
                <i class="icon fas fa-file-pdf"></i> Journal Flyer
            </a>
            <a href="#">
                <i class="icon fas fa-globe"></i> Open Access
            </a>
            <a href="#">
                <i class="icon fas fa-book"></i> ISSN: 2304-6775
            </a>
        </div>
    </div>

@endsection
@dd('working')
