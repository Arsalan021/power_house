<!DOCTYPE html>
<html lang="en">

<head>
    @php 
    
    $header_background_image = $setting->header_background_image??null;
    $icon_title = $setting->icon_title??null;
    @endphp

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href='{{ asset("documents/setting/$icon_title") }}'>
    <!-- BOOTRSTRAP CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" />

    <!-- SLICKSLIDER CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- FONTAWESONE CSS -->
    <link rel="stylesheet" href="{{asset('front-assets/css/fontawesome.min.css')}}" />

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="{{asset('front-assets/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('front-assets/css/responsive.css')}}" />
    <link rel="stylesheet" href="{{asset('app-assets/css/toastr.min.css')}}" />
    
    <style type="text/css">
    
    .section--inner-main{
        background-image: url('{{ asset("documents/setting/$header_background_image") }}') !important
    }

    </style>

<title> @yield('title') | Power House</title>
</head>

<!-- NAVBAR -->
<body>

    <!-- PRELOADER -->

    <!-- PRELOADER -->

    

    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.php">
                    <img src='{{asset("documents/setting/$setting->header_logo??null")}}' alt="powerhouse logo" class="img-fluid" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item  @if(Route::currentRouteName() == 'index' ) active  @endif ">
                            <a class="nav-link" href="{{route('index')}}">Home</a>
                        </li>
                        <li class="nav-item @if(Route::currentRouteName() == 'about-us' ) active  @endif ">
                            <a class="nav-link" href="{{route('about-us')}}">About Us</a>
                        </li>
                        <li class="nav-item @if(Route::currentRouteName() == 'services' ) active  @endif ">
                            <a class="nav-link" href="{{route('services')}}">Services</a>
                        </li>
                        <li class="nav-item @if(Route::currentRouteName() == 'projects' ) active  @endif">
                            <a class="nav-link" href="{{route('projects')}}">Project</a>
                        </li>
                        <li class=" @if(Route::currentRouteName() == 'contact-us' ) active  @endif">
                            <a href="{{route('contact-us')}}" class="theme-btn">Contact us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <div id="butter">
<!-- NAVBAR -->

<div class="body-section">
 @yield("body-section")
</div>


<!-- FOOTER -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-content">
                    <a href="#" class="footer-logo">
                        <img src='{{asset("documents/setting/$setting->footer_logo??null")}}' alt="powerhouse logo" class="img-fluid" />
                    </a>
                    <p class="footer-text">
                       {{$setting->text??null}}
                    </p>
                    <ul class="footer-social">
                        <li>
                            <a href="{{$setting->twitter??null}}" target="_blank"><i class="fab fa-twitter fa-fw"></i></a>
                        </li>
                        <li>
                            <a href="{{$setting->instagram??null}}" target="_blank"><i class="fab fa-instagram fa-fw"></i></a>
                        </li>
                        <li>
                            <a href="{{$setting->facebook??null}}" target="_blank"><i class="fab fa-facebook-f fa-fw"></i></a>
                        </li>
                        <li>
                            <a href="{{$setting->youtube??null}}" target="_blank"><i class="fab fa-youtube fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 offset-md-1">
                <div class="footer-content">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Portolio</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="footer-content">
                    <h3>Contact Us</h3>
                    <ul class="footer-links">
                        <li>
                            <a href="#"><i class="far fa-phone fa-fw"></i> {{$setting->phone_number??null}}</a>
                        </li>
                        <li>
                            <a href="#"><i class="far fa-at fa-fw"></i> {{$setting->email??null}}</a>
                        </li>
                        <li>
                            <a href="#"><i class="fal fa-map-marker-alt fa-fw"></i> {{$setting->address??null}}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-content">
                    <h3>Newsletter</h3>
                    <small>Subscribe to our Newsletter to be updated. We promise not to
                        spam.</small>
                    <form action="#" class="form--newsletter">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Email" />
                            <div class="input-group-append">
                                <button class="btn theme-btn theme-btn--newsletter" type="button">
                                    <i class="far fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-12">
                <hr />
                <ul class="privacy-links">
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Legal Info</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER -->

</div>

<!-- SCRIPT: BOOTSTRAP -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

<!-- SCRIPT: GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>

<!-- SCRIPT: SLICKSLIDER -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<!-- SCRIPT: AOS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- SCRIPT: BUTTER JS -->
<script src="{{asset('front-assets/js/butter.js')}}"></script>

<!-- SCRIPT: CUSTOM -->
<script src="{{asset('front-assets/js/script.js')}}"></script>

<script src="{{asset('app-assets/js/toastr.min.js')}}"></script>
<script>
       var type = "{{ Session::get('type') }}";
      switch (type) {
          case 'info':
              toastr.info("{{ Session::get('message') }}");
              break;

          case 'warning':
              toastr.warning("{{ Session::get('message') }}");
              break;

          case 'success':
              toastr.success("{{ Session::get('message') }}");
              break;

          case 'error':
              toastr.error("{{ Session::get('message') }}");
              break;

      }
    </script>
</body>

</html>
<!-- FOOTER -->