  (function ($) {

  "use strict";


  $('.showlogin').on('click', function (event) {

      $("#id_login").val('');
      $("#id_password").val('');

      $("#cadastrarModal").modal('hide');
      $("#loginModal").modal('show');
  });

  $('.showCadastrar').on('click', function (event) {

      $("#id_login").val('');
      $("#id_password").val('');
      $("#user_img_src").html('<img id="user_img_src" class="" src="" style="max-height: 106px;max-width: 144px;">');

      $("#loginModal").modal('hide');
      $("#cadastrarModal").modal('show');
  });


    // MENU
    $('.navbar-collapse a').on('click',function(){
      $(".navbar-collapse").collapse('hide');
    });

    // CUSTOM LINK
    $('.smoothscroll').click(function(){
      var el = $(this).attr('href');
      var elWrapped = $(el);
      var header_height = $('.navbar').height();

      scrollToDiv(elWrapped,header_height);
      return false;

      function scrollToDiv(element,navheight){
        var offset = element.offset();
        var offsetTop = offset.top;
        var totalScroll = offsetTop-0;

        $('body,html').animate({
        scrollTop: totalScroll
        }, 300);
      }
    });

    $('.owl-carousel').owlCarousel({
        center: true,
        loop: true,
        margin: 30,
        autoplay: true,
        responsiveClass: true,
        responsive:{
            0:{
                items: 2,
            },
            767:{
                items: 3,
            },
            1200:{
                items: 4,
            }
        }
    });

  })(window.jQuery);
