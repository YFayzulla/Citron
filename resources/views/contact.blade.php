@extends('layout.app')
@section('content')


    <div class="container-xxl py-5 bg-primary hero-header">
        <div class="container my-5 py-5 px-lg-5">
            <div class="row g-5 py-5">
                <div class="col-12 text-center">
                    <h1 class="text-white animated slideInDown">{{__('index.Bog’lanish')}}</h1>
                    <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{route('index')}}">{{__('index.Bosh_sahifa')}}</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">{{__('index.Bog’lanish')}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span>{{__('index.Biz_bilan_bog’lanish')}}<span></span></p>
                    <h1 class="text-center mb-5">{{__('index.Har_qanday_so’rov_uchun_murojaat_qiling')}}</h1>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <form action="{{route('contact.store')}}" method="post">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="To`liq ismingiz">
                                            <label for="name">{{__('index.Toliq_ismingiz')}}</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" name='email' id="email" placeholder="Email">
                                            <label for="email">{{__('index.Email')}}</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Mavzu">
                                            <label for="subject">{{__('index.Mavzu')}}</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Bu yerda xabar qoldiring" name='message'id="message" style="height: 150px"></textarea>
                                            <label for="message">{{__('index.Xabar')}}</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">{{__('index.Xabarni_yuborish')}}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

@endsection
