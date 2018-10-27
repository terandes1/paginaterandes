 $(window).resize(function() {
          var width = $(window).width();
          if (width < 598){
                $( "#videoId" ).remove();
                $( ".contenedor_video" ).html( "<div id='portada'><img src='assets/public/images/portada-movil/portada.jpg'></img> </div>" );
          }else{
             $( "#portada" ).remove();
             var video="<source src='assets/public/video/Definitivo.mp4' type='video/mp4'>";
             var html= "<video id='videoId' playsinline='' autoplay='' loop='' preload='auto' muted=''>"+video+"</video>";
             $( ".contenedor_video" ).html(html);
          }
    });