<section class="section section--manufacturing">
    <div class="container">
        <div data-aos="fade-right" class="section-intro text-center mb-5">
            <h4>Our Project</h4>
            <h2>manufacturing</h2>
        </div>
        <div data-aos="fade-down" data-aos-delay="500" class="manu-slider">
            @if(count($manufacturing)>0)
                @foreach($manufacturing as $item)
                <div class="inner-slide">
                    <figure>
                        <img src='{{asset("documents/project/$item->image")}}' alt="" class="img-fluid">
                    </figure>
                </div>
                @endforeach
            @endif

            
        </div>
    </div>
</section>