<!DOCTYPE html>
<html lang="en">

<head>
    
        <!--========= metaetiquetas ===========-->
        <TITLE>Tierras de los Andes</TITLE>
        <meta http-equiv="Content-Type" content="text/html; ISO-8859-1">
        <META NAME="DC.Language" SCHEME="RFC1766" CONTENT="English">
        <META NAME="AUTHOR" CONTENT="Tierra de los Andes">
        <META NAME="REPLY-TO" CONTENT="terandes@terandes.com">
        <LINK REV="made" href="mailto:terandes@terandes.com">
        <META NAME="DESCRIPTION" CONTENT="Tierras de los Andes we are a travel agency in Peru. Our specialty in Machu Picchu are adventure trips, we create custom trips from conventional routes.">
        <META NAME="KEYWORDS" CONTENT="machu picchu,machu picchu tours,machu picchu Trek,machu picchu vacation,trek machu picchu,machu picchu packages,machu picchu hiking tours,machu picchu inca trail tour,machu picchu travel deals,machu picchu excursions,machu picchu guided tour,machu picchu Trail tour,peru machu picchu tour,best machu picchu tours,hiking trips to machu picchu,best trips to machu picchu.">
        <META NAME="Resource-type" CONTENT="Document">
        <META NAME="DateCreated" CONTENT="Thu, 25 October 2018 00:00:00 GMT-5">
        <META NAME="Revisit-after" CONTENT="10 days">
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

    @include('public.en.layouts.navbar')


    @yield('content')



    @include('public.en.layouts.footer')

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
