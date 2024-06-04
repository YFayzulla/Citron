@extends('layout.app')
@section('content')
{{--@dd($galleries)--}}
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title">
                <span>{{__('index.gallery.title')}}</span>
                <h2>{{__('index.gallery.title')}}</h2>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">
                @foreach($galleries as $gallery)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <img src="Aphoto/{{$gallery->image}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>{{$gallery->name}}</h4>
                        <p>{{$gallery->desc}}</p>
                        <a href="Aphoto/{{$gallery->image}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
{{--                        <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>--}}
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Portfolio Section -->

@endsection
