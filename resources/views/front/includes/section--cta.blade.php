<section data-aos="fade-down" class="section section--cta">
    <div class="container">
        <div class="row">
            <div data-aos="fade-right" data-aos-delay="500" class="col-md-10">
                <div class="cta-intro">
                    <h2>{{$section->title??null}}</h2>
                    <p>{{$section->sub_title??null}}</p>
                    <a href="{{route('contact-us')}}" class="theme-btn">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    @php 
    $img = $section->image??null;
    @endphp
    <figure data-aos="fade-left" data-aos-delay="700" class="bulb-img">
        <img src='{{asset("documents/section/$img")}}' alt="" class="img-fluid">
    </figure>
</section>