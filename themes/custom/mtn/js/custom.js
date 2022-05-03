jQuery(function ($) {
   var path = window.location.href;
   $('.main-header .navbar-nav li a').each(function () {
      if (this.href === path) {
         $(this).addClass('active');
      }
   });
});


$(document).ready(function () {
   $('#main-slider').owlCarousel({

      loop: true,

      center: true,

      margin: 10,

      URLhashListener: true,

      startPosition: 'URLHash',
      responsive: {
         0: {
            items: 1,
            nav: false
         },
         600: {
            items: 2,
            nav: false
         },
         1000: {
            items: 2,
            nav: true,
            loop: true
         }
      }

   });


   $("#cotinue-streaming-slider").owlCarousel({
      loop: true,
      margin: 10,
      responsiveClass: true,
      autoplay:true,
      autoplayTimeout:4000,
      autoplayHoverPause:true,
      responsive: {
         0: {
            items: 1,
            nav: false
         },
         600: {
            items: 2,
            nav: false
         },
         1000: {
            items: 3,
            nav: false,
            loop: true
         }
      }
   });

   $("#selection-for-you-slider").owlCarousel({
      loop: true,
      margin: 10,
      responsiveClass: true,
      autoplay:true,
      autoplayTimeout:4000,
      autoplayHoverPause:true,
      responsive: {
         0: {
            items: 2,
            nav: false
         },
         600: {
            items: 3,
            nav: false
         },
         1000: {
            items: 6,
            nav: false,
            loop: true
         }
      }
   });

   $("#podcost-slider").owlCarousel({
      loop: true,
      margin: 10,
      responsiveClass: true,
      autoplay:true,
      autoplayTimeout:4000,
      autoplayHoverPause:true,
      responsive: {
         0: {
            items: 2,
            nav: false
         },
         600: {
            items: 3,
            nav: false
         },
         1000: {
            items: 6,
            nav: false,
            loop: true
         }
      }
   });

   $("#music-slider").owlCarousel({
      loop: true,
      margin: 10,
      responsiveClass: true,
      autoplay:true,
      autoplayTimeout:4000,
      autoplayHoverPause:true,
      responsive: {
         0: {
            items: 2,
            nav: false
         },
         600: {
            items: 3,
            nav: false
         },
         1000: {
            items: 6,
            nav: false,
            loop: true
         }
      }
   });

   $("#movies-slider").owlCarousel({
      loop: true,
      margin: 10,
      responsiveClass: true,
      autoplay:true,
      autoplayTimeout:4000,
      autoplayHoverPause:true,
      responsive: {
         0: {
            items: 2,
            nav: false
         },
         600: {
            items: 3,
            nav: false
         },
         1000: {
            items: 6,
            nav: false,
            loop: true
         }
      }
   });

   $("#shows-slider").owlCarousel({
      loop: true,
      margin: 10,
      responsiveClass: true,
      autoplay:true,
      autoplayTimeout:4000,
      autoplayHoverPause:true,
      responsive: {
         0: {
            items: 2,
            nav: false
         },
         600: {
            items: 3,
            nav: false
         },
         1000: {
            items: 6,
            nav: false,
            loop: true
         }
      }
   });

   $("#livetv-slider").owlCarousel({
      loop: true,
      margin: 10,
      responsiveClass: true,
      autoplay:true,
      autoplayTimeout:4000,
      autoplayHoverPause:true,
      responsive: {
         0: {
            items: 2,
            nav: false
         },
         600: {
            items: 3,
            nav: false
         },
         1000: {
            items: 6,
            nav: false,
            loop: true
         }
      }
   });

   $("#trending-slider").owlCarousel({
      loop: true,
      margin: 30,
      responsiveClass: true,
      autoplay:true,
      autoplayTimeout:4000,
      autoplayHoverPause:true,
      responsive: {
         0: {
            items: 2,
            nav: false
         },
         600: {
            items: 3,
            nav: false
         },
         1000: {
            items: 5,
            nav: false,
            loop: true
         }
      }
   });

   $("#mtn-shortz-slider").owlCarousel({
      loop: true,
      margin: 10,
      responsiveClass: true,
      autoplay:true,
      autoplayTimeout:4000,
      autoplayHoverPause:true,
      responsive: {
         0: {
            items: 1,
            nav: false
         },
         600: {
            items: 2,
            nav: false
         },
         1000: {
            items: 3,
            nav: false,
            loop: true
         }
      }
   });

   $("#channels-news-slider").owlCarousel({
      loop: true,
      margin: 10,
      responsiveClass: true,
      autoplay:true,
      autoplayTimeout:4000,
      autoplayHoverPause:true,
      responsive: {
         0: {
            items: 2,
            nav: false
         },
         600: {
            items: 3,
            nav: false
         },
         1000: {
            items: 6,
            nav: false,
            loop: true
         }
      }
   });


   $("#trending-news-slider").owlCarousel({
      loop: true,
      margin: 10,
      responsiveClass: true,
      autoplay:true,
      autoplayTimeout:4000,
      autoplayHoverPause:true,
      responsive: {
         0: {
            items: 1,
            nav: false
         },
         600: {
            items: 2,
            nav: false
         },
         1000: {
            items: 3,
            nav: false,
            loop: true
         }
      }
   });
});