<section class="section section--company">
    <div class="container">
        <div class="row align-items-center">
            @php
            $custom_fit_img1 = $about->custom_fit_img1??null;
            $custom_fit_img2 = $about->custom_fit_img2??null;
            @endphp
            <div data-aos="fade-right" class="col-md-6">
                <figure class="company-img">
                    <img src='{{asset("documents/about/$custom_fit_img1")}}' alt="" class="img-fluid">
                </figure>
            </div>
            <div data-aos="fade-left" data-aos-delay="500" class="col-md-6">
                <div class="section-intro">
                    <h4>Company</h4>
                    <h2>{{$about->custom_fit??null}}</h2>
                    <p>
                       {{$about->custom_fit_desc??null}}
                    </p>
                    <a href="#!" class="theme-btn">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <figure data-aos="fade-left" data-aos-delay="700" class="solar-img">
        <img src='{{asset("documents/about/$custom_fit_img2")}}' alt="" class="img-fluid">
    </figure>
</section>