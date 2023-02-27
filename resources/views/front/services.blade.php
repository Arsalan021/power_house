@extends('front/master')
@section('title','Services')
@section('body-section')
<!-- NAVBAR -->

<!-- SECTION: MAIN -->
<section class="section0 section--inner-main">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="inner-main-content">
                    <h1>Services</h1>
                    <h3>Home/<b>Services</b></h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SECTION: MAIN -->

<!-- SECTION: SERVICES -->
<section class="section section--services-main">
    <div class="container">
        <div class="section-intro text-center mb-5">
            <h4>Services</h4>
            <h2>What we Do</h2>
        </div>
        <div class="row">
            <div data-aos="fade-up" data-aos-delay="300" class="col-md-4">
                <div class="service-card main">
                    <img src="assets/img/ser1.png" alt="" class="img-fluid">
                    <h3>Manufacturing</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit sed deiusmod tempor incidi dunt ut
                        labore.
                    </p>
                    <a href="#" class="rm-link">Read More</a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="500" class="col-md-4">
                <div class="service-card main">
                    <img src="assets/img/ser2.png" alt="" class="img-fluid">
                    <h3>Manufacturing</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit sed deiusmod tempor incidi dunt ut
                        labore.
                    </p>
                    <a href="#" class="rm-link">Read More</a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="700" class="col-md-4">
                <div class="service-card main">
                    <img src="assets/img/ser3.png" alt="" class="img-fluid">
                    <h3>Manufacturing</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit sed deiusmod tempor incidi dunt ut
                        labore.
                    </p>
                    <a href="#" class="rm-link">Read More</a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="300" class="col-md-4">
                <div class="service-card main">
                    <img src="assets/img/ser1.png" alt="" class="img-fluid">
                    <h3>Manufacturing</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit sed deiusmod tempor incidi dunt ut
                        labore.
                    </p>
                    <a href="#" class="rm-link">Read More</a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="500" class="col-md-4">
                <div class="service-card main">
                    <img src="assets/img/ser2.png" alt="" class="img-fluid">
                    <h3>Manufacturing</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit sed deiusmod tempor incidi dunt ut
                        labore.
                    </p>
                    <a href="#" class="rm-link">Read More</a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="700" class="col-md-4">
                <div class="service-card main">
                    <img src="assets/img/ser3.png" alt="" class="img-fluid">
                    <h3>Manufacturing</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit sed deiusmod tempor incidi dunt ut
                        labore.
                    </p>
                    <a href="#" class="rm-link">Read More</a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="300" class="col-md-4">
                <div class="service-card main">
                    <img src="assets/img/ser1.png" alt="" class="img-fluid">
                    <h3>Manufacturing</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit sed deiusmod tempor incidi dunt ut
                        labore.
                    </p>
                    <a href="#" class="rm-link">Read More</a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="500" class="col-md-4">
                <div class="service-card main">
                    <img src="assets/img/ser2.png" alt="" class="img-fluid">
                    <h3>Manufacturing</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit sed deiusmod tempor incidi dunt ut
                        labore.
                    </p>
                    <a href="#" class="rm-link">Read More</a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="700" class="col-md-4">
                <div class="service-card main">
                    <img src="assets/img/ser3.png" alt="" class="img-fluid">
                    <h3>Manufacturing</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit sed deiusmod tempor incidi dunt ut
                        labore.
                    </p>
                    <a href="#" class="rm-link">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SECTION: SERVICES -->

<!-- SECTION: COMPANY -->
@include("front/includes/section--company")
<!-- SECTION: COMPANY -->

<!-- SECTION: CTA -->
@include("front/includes/section--cta")
<!-- SECTION: CTA -->

<!-- SECTION: MANUFACTURING -->
@include("front/includes/section--manufacturing")
<!-- SECTION: MANUFACTURING -->

<!-- SECTION: CONTACT -->
@include("front/includes/section--contact")
<!-- SECTION: CONTACT -->


@endsection