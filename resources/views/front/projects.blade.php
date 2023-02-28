@extends('front/master')
@section('title','Projects')
@section('body-section')
<!-- NAVBAR -->

<!-- SECTION: MAIN -->
<section class="section0 section--inner-main">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="inner-main-content">
                    <h1>Projects</h1>
                    <h3>Home/<b>Projects</b></h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SECTION: MAIN -->

<!-- SECTION: PROJECTS -->
<section class="section section--projects-main">
    <div class="container">
        <div data-aos="fade-right" class="section-intro text-center mb-5">
            <h4>Our Projects</h4>
            <h2>Recently <br> Completed Work</h2>
        </div>
        <div class="row">
            @if(count($projects)>0)
                @foreach($projects as $item)
                <div data-aos="fade-up" data-aos-delay="300" class="col-md-4">
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
<!-- SECTION: PROJECTS -->

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