<section id="team" class="team">
    <div class="container">

        <div class="section-title">
            <span>{{__('index.about')}}</span>
            <h2>{{__('index.about')}}</h2>
            <p>{{__('index.Bizning A`zolar')}}</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in">
                @foreach($abouts as $about)
                    <div class="member">
                        <img src="Aphoto/{{$about->image}}" alt="" >
                        <h4>{{$about->name}}</h4>
                        <span>{{($about->{'specialty_' . app()->getLocale()})}}</span>
                        <p>
                        </p>
                        <div class="social">
                            <a href=""></a>
                            <a href=""></a>
                            <a href=""></a>
                            <a href=""></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</section><!-- End Team Section -->

