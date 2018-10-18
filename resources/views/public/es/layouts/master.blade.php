<!DOCTYPE html>
<html lang="en">

<head>
    
        <!--========= metaetiquetas ===========-->
        <TITLE> Viajes de lujo y medida a Perú, Bolivia; especialistas en viajes privados, tickets de tren a Machupicchu, Puno y Arequipa, hoteles, ofertas de viaje, Tierra de los Andes</TITLE>
        <meta http-equiv="Content-Type" content="text/html; ISO-8859-1">
		<META NAME="DC.Language" SCHEME="RFC1766" CONTENT="Spanish">
		<META NAME="AUTHOR" CONTENT="Tierra de los Andes">
		<META NAME="REPLY-TO" CONTENT="seo-sistemas@terandes.com">
		<LINK REV="made" href="mailto:seo-sistemas@terandes.com">
		<META NAME="DESCRIPTION" CONTENT="Machu Picchu es una ciudadela inca ubicada en las alturas de las montañas de los Andes en Perú, sobre el valle del río Urubamba. Se construyó en el siglo XV y luego fue abandonada.">
		<META NAME="KEYWORDS" CONTENT="+tour de lujo cusco,+viaje +de +lujo +a +Perú +Bolivia,+Machu picchu, +agencias de viajes cusco,+tour cusco,+atrapalo,+renfe,+Ryanair,+Vueling,+guia+campsa,+travel +agency,+5 mejores agencias +del +cusco,+5 +mejores +agencias +del +Perú">
		<META NAME="Resource-type" CONTENT="Document">
		<META NAME="DateCreated" CONTENT="Wed, 19 September 2018 00:00:00 GMT+5">
		<META NAME="Revisit-after" CONTENT="1 days">
		<META NAME="robots" content="ALL">

        <!--========= fin  ===========-->

		<!--========= scrip header ===========-->
    	 @include('public.partials.header')
    	<!--========= fin  ===========-->

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    @include('public.es.layouts.navbar')


    @yield('content')



    @include('public.es.layouts.footer')

    	<!--========= scrip footer ===========-->
    	@include('public.partials.footer')
    	<!--========= fin  ===========-->

    @yield('script')
</body>
 <script>
    // sandbox disable popups
    if (window.self !== window.top && window.name!="view1") {;
      window.alert = function(){/*disable alert*/};
      window.confirm = function(){/*disable confirm*/};
      window.prompt = function(){/*disable prompt*/};
      window.open = function(){/*disable open*/};
    }
    
    // prevent href=# click jump
    document.addEventListener("DOMContentLoaded", function() {
      var links = document.getElementsByTagName("A");
      for(var i=0; i < links.length; i++) {
        if(links[i].href.indexOf('#')!=-1) {
          links[i].addEventListener("click", function(e) {
          console.debug("prevent href=# click");
              if (this.hash) {
                if (this.hash=="#") {
                  e.preventDefault();
                  return false;
                }
                else {
                  /*
                  var el = document.getElementById(this.hash.replace(/#/, ""));
                  if (el) {
                    el.scrollIntoView(true);
                  }
                  */
                }
              }
              return false;
          })
        }
      }
    }, false);
  </script>
  
  <!--scripts loaded here-->
  
   {!!Html::script('assets/public/js/bootstrap.js')!!}
  
  
  <script>
  // Carousel Auto-Cycle
  $(document).ready(function() {
    $('.carousel').carousel({
      interval: 6000
    })
  });
  </script>
  <script>
        $(".js-video-button").modalVideo({
            youtube:{
                controls:0,
                nocookie: true
            }
        });
    </script>
   
</html>
