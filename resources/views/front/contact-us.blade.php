@extends('front/master')
@section('title','Contact Us')
@section('body-section')
<!-- NAVBAR -->

<!-- SECTION: MAIN -->
<section class="section0 section--inner-main">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="inner-main-content">
                    <h1>Contact Us</h1>
                    <h3>Home/<b>Contact Us</b></h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SECTION: MAIN -->

<!-- SECTION: CONTACT MAIN -->
<div class="section section section--contact-main">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="contact-info">
                    <div class="section-intro">
                        <h2>Contact us</h2>
                    </div>
                    <ul>
                        <li>
                            <a href="tel:1234567890">
                                <i class="far fa-phone fa-fw"></i>
                                <div>
                                    <h5><b>Phone</b></h5>
                                    +123-(4567)-890
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:info@pwrhp.com">
                                <i class="far fa-at fa-fw"></i>
                                <div>
                                    <h5><b>Email</b></h5>
                                    info@pwrhp.com
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;">
                                <i class="fal fa-map-marker-alt fa-fw"></i>
                                <div>
                                    <h5><b>Location</b></h5>
                                    ABCD Road, Melbourne VIC 3004,
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-7">
                <form action="#" class="contact-form main">
                    <div class="section-intro text-center mb-5">
                        <h4>Our Testimonial</h4>
                        <h2>REQUEST A QUOTE</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Name*" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Phone*" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Email*" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Solar Installer*" required>
                        </div>
                    </div>
                    <textarea rows="3" class="form-control tt" placeholder="Message*"></textarea>
                    <input type="submit" class="theme-btn" value="Submit Now">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- SECTION: CONTACT MAIN -->

@endsection