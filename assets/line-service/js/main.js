$(document).ready(function() {

  // Carrossel

  $('#banner').owlCarousel({
      loop:true,
      nav:true,
      navText: ["",""],
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

  // End: Carrossel

  // Ancora

  $(".acr").click(function(event){        
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top - $(".navbar").outerHeight(true) - 20}, 800);
   });

  // End: Ancora

  // Fixa menu

  $(window).scroll(function() {
    var windscroll = $(window).scrollTop();
    if (windscroll >= 40) {
      $('nav.bg-faded').addClass('fixed');
    } else {
      $('nav.bg-faded').removeClass('fixed');
    }
  }).scroll();

  // End: Fixa menu

  // vagas

  $('#vagas').owlCarousel({
    //loop:true,
    nav:true,
    navText: ["&larr;","&rarr;"],
    stagePadding: 40,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:2
      },
      1000:{
        items:4
      }
    }
  })

  // End: vagas

  // noticias

  $('#noticias').owlCarousel({
    //loop:true,
    nav:true,
    navText: ["&larr;","&rarr;"],
    stagePadding: 40,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:2
      },
      1000:{
        items:3
      }
    }
  })

  // End: noticias

});