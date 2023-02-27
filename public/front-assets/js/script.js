"use strict";

// NAVBAR
$(window).scroll(function () {
  if ($(this).scrollTop() > 50) {
    $(".header").addClass("sticky");
  } else {
    $(".header").removeClass("sticky");
  }
});

AOS.init({ duration: 1000 });

// SLICK SLIDERS
$(".projects-slider").slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ],
});

$(".manu-slider").slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ],
});

// BUTTER JS
butter.init({
  wrapperId: "butter",
  cancelOnTouch: true,
  wrapperDamper: 0.05,
});

// GSAP
gsap.from(".section--main", { duration: 2, y: 300, opacity: 0 });
gsap.from(".anim-text", {
  duration: 2,
  x: -300,
  opacity: 0,
  stagger: 0.5,
  delay: 1,
});
