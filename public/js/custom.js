  (function ($) {

  "use strict";


  $('.showlogin').on('click', function (event) {

      $("#id_login").val('');
      $("#id_password").val('');

      $("#cadastrarModal").modal('hide');
      $("#loginModal").modal('show');
  });

  $('.showCadastrar').on('click', function (event) {

      $("#user_name").val('');
      $("#inst_id").val('');
      $("#user_email").val('');
      $("#user_password").val('');
      $("#user_bio").val('');
      $("#user_img_src").attr("src", "");
      $("#logoImg").css({
      display: "block",
      visibility: "visible"
      });

      $("#loginModal").modal('hide');
      $("#cadastrarModal").modal('show');
  });

  $("#form_user").submit(function (){
      $.ajax({
        type: "POST",
        url: BASE_URL + "cadastrar/ajax_save_user",
        dataType: json,
        data: $(this).serialize(),//serialize serve pra pegar as info do form e passar em formato q pode ser lido pelo metodo post
        sucess: function(response){
        }
      });
    return false;
  })

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
