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
                    <h2>About Us</h2>
                    <p>
                        Powerhouse Is a local and global manufacturer of structural solutions for racking used in Solar
                        PV powerplants and BESS Projects. We fabricate high quality beams or roll-formed profiles ,
                        adding your unique punch patterns and galvanize them as needed all in house. Our strength comes
                        from our ability to collaborate with our customers and deploy the right production strategy with
                        our goal to provide a better product at a better price with better service.
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
            <div data-aos="fade-up" data-aos-delay="500" class="col-md-4">
                <div class="service-card">
                    <img src="assets/img/ser1.png" alt="" class="img-fluid">
                    <h3>Manufacturing</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit sed deiusmod tempor incidi dunt ut
                        labore.
                    </p>
                    <a href="#" class="rm-link">Read More</a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="700" class="col-md-4">
                <div class="service-card">
                    <img src="assets/img/ser2.png" alt="" class="img-fluid">
                    <h3>Manufacturing</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit sed deiusmod tempor incidi dunt ut
                        labore.
                    </p>
                    <a href="#" class="rm-link">Read More</a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="900" class="col-md-4">
                <div class="service-card">
                    <img src="assets/img/ser3.png" alt="" class="img-fluid">
                    <h3>Manufacturing</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit sed deiusmod tempor incidi dunt ut
                        labore.
                    </p>
                    <a href="#" class="rm-link">Read More</a>
                </div>
            </div>
            <div data-aos="fade-up" data-aos-delay="500" class="col-md-12 text-center">
                <a href="services.php" class="theme-btn">View More</a>
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
                    <a href="projects.php" class="theme-btn">View More</a>
                </div>
            </div>
        </div>
        <div data-aos="fade-down" data-aos-delay="700" class="projects-slider">
            <div class="inner-slide">
                <div class="project-card">
                    <img src="assets/img/work1.png" alt="" class="img-fluid">
                    <div class="project-card-content">
                        <h3>Lincoln County, TN 150MW</h3>
                        <h5><b>Capacity:</b> 120 MWS</h5>
                        <h5><b>Location:</b> Pinetown, CA</h5>
                        <a href="#" class="rm-link">Read More</a>
                    </div>
                </div>
            </div>
            <div class="inner-slide">
                <div class="project-card">
                    <img src="assets/img/work2.png" alt="" class="img-fluid">
                    <div class="project-card-content">
                        <h3>Lincoln County, TN 150MW</h3>
                        <h5><b>Capacity:</b> 120 MWS</h5>
                        <h5><b>Location:</b> Pinetown, CA</h5>
                        <a href="#" class="rm-link">Read More</a>
                    </div>
                </div>
            </div>
            <div class="inner-slide">
                <div class="project-card">
                    <img src="assets/img/work3.png" alt="" class="img-fluid">
                    <div class="project-card-content">
                        <h3>Lincoln County, TN 150MW</h3>
                        <h5><b>Capacity:</b> 120 MWS</h5>
                        <h5><b>Location:</b> Pinetown, CA</h5>
                        <a href="#" class="rm-link">Read More</a>
                    </div>
                </div>
            </div>
            <div class="inner-slide">
                <div class="project-card">
                    <img src="assets/img/work4.png" alt="" class="img-fluid">
                    <div class="project-card-content">
                        <h3>Lincoln County, TN 150MW</h3>
                        <h5><b>Capacity:</b> 120 MWS</h5>
                        <h5><b>Location:</b> Pinetown, CA</h5>
                        <a href="#" class="rm-link">Read More</a>
                    </div>
                </div>
            </div>
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