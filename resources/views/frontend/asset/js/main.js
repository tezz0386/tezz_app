import $ from "jquery";
import "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js";
import 'owl.carousel';
import AOS from "aos" ;

$('.banner-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

$('.project-slider').owlCarousel({
    loop:true,
    margin:50,
    nav:true,
    responsive:{
        0:{
            items:1.5
        },
        600:{
            items:2.5
        },
        1000:{
            items:3.5
        }
    }
})

$('.testimonial-slider').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:2
        }
    }
})

AOS.init();

var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});

