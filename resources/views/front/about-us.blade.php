@extends('front/master')
@section('title','About Us')
@section('body-section')
<!-- SECTION: MAIN -->
<section class="section0 section--inner-main">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="inner-main-content">
                    <h1>About Us</h1>
                    <h3>Home/<b>About Us</b></h3>
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
                    <h2>{{$about->about_us??null}}</h2>
                    <p>
                       {{$about->about_us_desc??null}}
                    </p>
                    <a href="#!" class="theme-btn">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SECTION: ABOUT -->

<!-- SECTION: ENERGY -->
<section class="section section--energy">
    <div class="container">
        <div class="row">
            <div data-aos="fade-right" class="col-md-6">
                <div class="section-intro">
                    <h4>Services</h4>
                    <h2>{{$about->services_title??null}}</h2>
                    <p>
                      {{$about->services_desc??null}}
                    </p>
                    <a href="#sectionContact" class="theme-btn">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    @php 
     $img = $about->services_image??null;
    @endphp
    <figure class="energy-img">
        <img src='{{asset("documents/about/$img")}}' alt="" class="img-fluid">
    </figure>
</section>
<!-- SECTION: ENERGY -->


<!-- SECTION: COMPANY -->
@include("front/includes/section--company")
<!-- SECTION: COMPANY -->

<!-- SECTION: CTA -->
@include("front/includes/section--cta")
<!-- SECTION: CTA -->

<!-- SECTION: MANUFACTURING -->
<@include("front/includes/section--manufacturing")
<!-- SECTION: MANUFACTURING -->

<!-- SECTION: CONTACT -->
@include("front/includes/section--contact")
<!-- SECTION: CONTACT -->

@endsection







