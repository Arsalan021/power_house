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
                    <h2>Power House</h2>
                    <p>
                        Powerhouse Is a local and global manufacturer of structural solutions for racking used in Solar
                        PV powerplants and BESS Projects. We fabricate high quality beams or roll-formed profiles ,
                        adding your unique punch patterns and galvanize them as needed all in house. Our strength comes
                        from our ability to collaborate with our customers and deploy the right production strategy with
                        our goal to provide a better product at a better price with better service
                    </p>
                    <a href="about-us.php" class="theme-btn">Read More</a>
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
                    <h2>Energy Generated <br>From Natural Resources!</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit sed deiusmod
                        tempor incididunt ut labore et dolore magna .Lorem ipsum dolor sit amet consectetur adipiscing
                        elit sed deiusmod tempor incididunt ut labore et dolore magna. Lorem ipsum dolor sit amet
                        consectetur adipiscing elit sed deiusmodtempor incididunt ut labore et dolore magn Lorem ipsum
                        dolor sit. Lorem ipsum dolor sit amet consectetur adipiscing elit sed deiusmod. <br>
                        Lorem ipsum dolor sit amet consectetur adipiscing elit sed deiusmod tempor incididunt ut labore
                        et dolore magn Lorem ipsum dolor sit.Lorem ipsum dolor sit amet consectetur adipiscing elit sed
                        deiusmod tempor incididunt ut labore.
                    </p>
                    <a href="#sectionContact" class="theme-btn">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <figure class="energy-img">
        <img src="assets/img/energy-img.png" alt="" class="img-fluid">
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







