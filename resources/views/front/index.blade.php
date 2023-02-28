@extends('front/master')
@section('title','Home')
@section('body-section')
 <!-- SECTION: MAIN -->
<section class="section0 section--main section-vd">
    <video id="background-video" autoplay loop muted poster="assets/img/video-img.png">
        <source src="front-assets/img/video-bg.mp4" type="video/mp4">
    </video>
    <div id="vid-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="main-content">
                    <h1 class="anim-text">POWERHOUSE</h1>
                    <h2 class="anim-text">Reliable, Responsive & Competitive</h2>
                    <p class="anim-text">We support your PV Solar Projects and BESS foundation needs.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION: MAIN -->

<!-- SECTION: ABOUT -->
<section class="section section--about">
    <div class="about-content">
        <div data-aos="fade-down" class="white-box">
            <div data-aos="fade-left" data-aos-delay="500" class="about-inner">
                <div class="section-intro">
                    <h4>Company</h4>
                    <h2>{{$setting->company_about_us??null}}</h2>
                    <p>
                       {{$setting->company_desc??null}}
                    </p>
                    <a href="about-us.php" class="theme-btn">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SECTION: ABOUT -->

<!-- SECTION: SERVICES -->
<section class="section section--services">
    <div class="container">
        <div class="row justify-content-center">
            <div data-aos="fade-right" class="col-md-6">
                <div class="section-intro text-center mb-5">
                    <h4>Services</h4>
                    <h2>What we Do</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit sed deiusmod
                        tempor incididunt ut labore et dolore
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @if(count($services)>0)
                @foreach($services as $item)
                <div data-aos="fade-up" data-aos-delay="500" class="col-md-4">
                    <div class="service-card">
                        <img src='{{asset("documents/service/$item->image??null")}}' alt="" class="img-fluid">
                        <h3>{{$item->title??null}}</h3>
                        <p>
                        {{$item->description??null}}.
                        </p>
                        <a href="#" class="rm-link">Read More</a>
                    </div>
                </div>
                @endforeach
            @endif
            
            <div data-aos="fade-up" data-aos-delay="500" class="col-md-12 text-center">
                <a href="{{route('services')}}" class="theme-btn">View More</a>
            </div>
        </div>
    </div>
</section>
<!-- SECTION: SERVICES -->

<!-- SECTION: PROJECTS -->
<section class="section section--projects">
    <div class="container">
        <div class="section-intro">
            <div class="row align-items-end">
                <div data-aos="fade-right" class="col-md-6">
                    <h4>Our Projects</h4>
                    <h2>Recently <br />
                        Completed Work</h2>
                </div>
                <div data-aos="fade-left" data-aos-delay="500" class="col-md-6 text-right">
                    <a href="{{route('projects')}}" class="theme-btn">View More</a>
                </div>
            </div>
        </div>
        <div data-aos="fade-down" data-aos-delay="700" class="projects-slider">
            @if(count($projects)>0)
            @foreach($projects as $item)
            <div class="inner-slide">
                <div class="project-card">
                    <img src='{{asset("documents/project/$item->image??null")}}' alt="" class="img-fluid">
                    <div class="project-card-content">
                        <h3>{{$item->title??null}}</h3>
                        <h5><b>Capacity:</b> {{$item->capacity??null}}</h5>
                        <h5><b>Location:</b> {{$item->location??null}}</h5>
                        <a href="#" class="rm-link">Read More</a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif

           
        </div>
    </div>
</section>

@include("front/includes/section--cta") 

@include("front/includes/section--manufacturing") 

<section class="line-break">
    <div class="container">
        <hr>
    </div>
</section>

@include("front/includes/section--company") 

@include("front/includes/section--contact") 



@endsection