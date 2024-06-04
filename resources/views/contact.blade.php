@extends('layout.app')
@section('content')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container">

        <div class="section-title">
            <span>{{__('index.contact.title')}}</span>
            <h2>{{__('index.contact.title')}}</h2>
            <p>{{__('index.contact.call')}}</p>
        </div>

        <div class="row" data-aos="fade-up">
            <div class="col-lg-6">
                <div class="info-box mb-4">
                    <i class="bx bx-map"></i>
                    <h3>{{__('index.contact.address')}}</h3>
                    <p>{{$user->address}}</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="bx bx-envelope"></i>
                    <h3>{{__('index.contact.email')}}</h3>
                    <p>{{$user->email}}</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>{{__('index.contact.call_us')}}</h3>
                    <p>{{$user->tel}}</p>
                </div>
            </div>

        </div>

        <div class="row" data-aos="fade-up">

            <div class="col-lg-6 ">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d188.9881532982176!2d60.631639074661955!3d41.57045670020718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41dfcf849d140c6d%3A0x88b459606f5b07d1!2z0KLQsNGI0LrQtdC90YLRgdC60LjQuSDRg9C90LjQstC10YDRgdC40YLQtdGCINC40L3RhNC-0YDQvNCw0YbQuNC-0L3QvdGL0YUg0YLQtdGF0L3QvtC70L7Qs9C40Y_RhQ!5e1!3m2!1sru!2s!4v1686740519590!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-lg-6">
                <form action='{{route('contact.store')}}' method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="{{__('index.contact.firstname')}}" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="{{__('index.contact.your_email')}}" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="{{__('index.contact.subject')}}" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="{{__('index.contact.message')}}" required></textarea>
                    </div>
                    <div class="text-center mt-2"><button type="submit">{{__('index.contact.send')}}</button></div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->
@endsection
