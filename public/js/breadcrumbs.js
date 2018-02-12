$(function() {
        $(window).scroll(function() {
          if($(window).scrollTop() < 520){
            $("#caja-flotante").fadeOut();
          }else if ($(window).scrollTop() > 520 && $(window).scrollTop() < 1150) {
            $("#caja-flotante").fadeIn();
            BreadCrumbsRaiz('Foro');
          } else if($(window).scrollTop() > 1150 && $(window).scrollTop() < 2600){
            BreadCrumbsRaiz('Denuncias');
          }else if($(window).scrollTop() > 2600 && $(window).scrollTop() < 3000){
            BreadCrumbsRaiz('Chat');
          }else{
            BreadCrumbsRaiz('Contacto');
          }
        });

        $('#FORopiniones').click(function(){
          BreadCrumbs('Foro-Opiniones');
        });
        $('#FORpreguntas').click(function(){
          BreadCrumbs('Foro-Preguntas');
        });
        $('#Formejoras').click(function(){
          BreadCrumbs('Foro-Mejoras');
        });
        $('#FORgeneral').click(function(){
          BreadCrumbs('Foro-General');
        });
        $('.fa-comments').click(function(){
          var titulo = $(this).parent().parent().find(':first-child').text();
          BreadCrumbs('Foro-');
        }); 
      });

      function BreadCrumbsRaiz(text){
        $("#caja-flotante").css("color","white");
        $("#caja-flotante").text(text);
      }

      function BreadCrumbs(textoIdenti){
        var texto = $('#caja-flotante').text();
        if(texto !== textoIdenti){
          $('#caja-flotante').text(textoIdenti);
        }
      }