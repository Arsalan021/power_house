<section class="section section--contact" id="sectionContact">
    <div class="container">
        <div class="row">
            <div data-aos="fade-right" class="col-md-6">
                <form action="{{route('doContact')}}" method="POST" class="contact-form">
                    @csrf
                    <div class="section-intro text-center mb-5">
                        <h4>Our Testimonial</h4>
                        <h2>REQUEST A QUOTE</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="name" placeholder="Name*" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="phone" placeholder="Phone*" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="email" placeholder="Email*" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="social_installer" placeholder="Solar Installer*" required>
                        </div>
                    </div>
                    <textarea rows="3" class="form-control tt" name="msg" placeholder="Message*"></textarea>
                    <input type="submit" class="theme-btn" value="Submit Now">
                </form>
            </div>
            <div data-aos="fade-left" data-aos-delay="500" class="col-md-6">
                <div class="faq-accordion">
                    <div class="section-intro text-center mb-5">
                        <h4>Our Testimonial</h4>
                        <h2>Ask For Question</h2>
                    </div>
                    <div class="accordion" id="accordionExample">
                       @if(count($testimonial)>0)
                       @foreach($testimonial as $key => $item) 
                            <div class="card">
                                <div class="card-header" id="headingOne{{$key}}">
                                    <h2 class="mb-0">
                                        <button class="faq-btn" type="button" data-toggle="collapse"
                                            data-target="#collapseOne{{$key}}" aria-expanded="true" aria-controls="collapseOne{{$key}}">
                                            {{$item->title??null}}
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapseOne{{$key}}" class="collapse @if($key == 0) show @endif" aria-labelledby="headingOne{{$key}}"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                    {{$item->description??null}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        @endif


                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>