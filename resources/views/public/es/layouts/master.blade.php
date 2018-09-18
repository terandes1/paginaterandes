<!DOCTYPE html>
<html lang="en">

<head>
    <title>Terandes | Agence de voyages au Pérou</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- FAV ICON -->
    <link rel="shortcut icon" href="/assets/public/images/icons.png">
    <!-- GOOGLE FONTS -->
    <!-- link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:400,500,700" rel="stylesheet"> -->
    {!! Html::style('assets/public/css/lovelo.css') !!}
    <!-- FONT-AWESOME ICON CSS -->
    {!!Html::style('assets/public/css/font-awesome.min.css')!!} 
    <!--== ALL CSS FILES ==-->
    {!!Html::style('assets/public/css/style.css')!!}
    {!!Html::style('assets/public/css/materialize.css')!!}
    {!!Html::style('assets/public/css/bootstrap.css')!!}
    {!!Html::style('assets/public/css/mob.css')!!}
    {!!Html::style('assets/public/css/animate.css')!!}
    {!!Html::style('assets/public/video/css/video.css')!!}

    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->


<style type="text/css">/* Global */

a {
  -webkit-transition: all 150ms ease;
  -moz-transition: all 150ms ease;
  -ms-transition: all 150ms ease;
  -o-transition: all 150ms ease;
  transition: all 150ms ease; 
  }
    a:hover {
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)"; /* IE 8 */
        filter: alpha(opacity=50); /* IE7 */
        opacity: 0.6;
        text-decoration: none;
    }

/* Page Header */
.page-header {
    background: #f9f9f9;
    margin: -30px -40px 40px;
    padding: 20px 40px;
    border-top: 4px solid #ccc;
    color: #999;
    text-transform: uppercase;
    }
    .page-header h3 {
        line-height: 0.88rem;
        color: #000;
        }



/* Boxes
------------------------------------------------ */

/* List style */
ul.thumbnails { 
  list-style: none; 
  margin: 0;
  padding: 0;
  }

.caption-box h4 {
    font-size: 0.94rem;
    color: #444;
    }
    .caption-box p {
        font-size: 0.75rem;
        color: #999;
        }
        .btn.btn-mini {
            font-size: 0.63rem;
            }



/* Control box 
------------------------------------------------ */
.control-box {
    width: 100%;
    }
    .carousel-control{
     
        border: 0px;
        border-radius: 0px;
        display: inline-block;
        font-size: 34px;
        font-weight: 200;
        line-height: 18px;
        opacity: 0.5;
        padding: 4px 10px;
        margin: 30px -20px 0;
        height: 30px;
        width: 30px;
        }



/* Mobile only
------------------------------------------------ */
@media (max-width: 767px) {
    .page-header { text-align: center; } 
}
@media (max-width: 479px) {
    .caption-box { word-break: break-all; }
    ul.thumbnails li { margin-bottom: 30px; }
}


/* Footer 
------------------------------------------------ */
footer.info { text-align: center; color: #888; margin: 30px 0; }
footer.info a { color: #fff; }
footer.info p { color: #ccc; margin: 10px 0; }

::selection { background: #ff5e99; color: #FFFFFF; text-shadow: 0; }
::-moz-selection { background: #ff5e99; color: #FFFFFF; }

a, a:focus, a:active, a:hover, object, embed { outline: none; }
:-moz-any-link:focus { outline: none; }
input::-moz-focus-inner { border: 0; }
.errorValidacion
{
  color:red;
  font-size: 11px;
}
#titulo{
  font-family: Lovelo Black; font-size: 1.8em;font-weight: 100; letter-spacing: 3px;line-height: 1.4em;  text-transform: uppercase;
}
#tituloNosotros{
  font-family: Lovelo Black; font-size: 1.2em;font-weight: 100; letter-spacing: 3px;line-height: 1.4em;  text-transform: uppercase;
}
#tituloEvento{
  font-family: Lovelo Black; font-size: 0.8em;font-weight: 100; letter-spacing: 3px;line-height: 1.4em;  text-transform: uppercase;
}
#tituloTous{
  font-family: Lovelo Black; font-size: 1.2em;font-weight: 100; letter-spacing: 3px;line-height: 1.4em;  text-transform: uppercase;
}
#tituloTouLateral{
  font-family: Lovelo Black; font-size: 0.9em;font-weight: 100; letter-spacing: 3px;line-height: 1.4em;  text-transform: uppercase;
}
#tituloTousPrincipal{
  font-family: Lovelo Black; font-size: 1.5em;font-weight: 100; letter-spacing: 3px;line-height: 1.4em;  text-transform: uppercase;
}
#subtituloTousPrincipal{
  font-family: NewsGoth CN BT;
  font-size: 1.1em;
}
#tituloTou{
  font-family: Lovelo Black; font-size: 1.2em;font-weight: 100; letter-spacing: 3px;line-height: 1.4em;  text-transform: uppercase;
}
#tituloTouRelacionados{
  font-family: Lovelo Black; font-size: 0.8em;font-weight: 100; letter-spacing: 3px;line-height: 1.4em;  text-transform: uppercase;
}
#subtitulo{
  font-family: NewsGoth CN BT;
}
</style>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>

    @include('public.es.layouts.navbar')


    @yield('content')



    @include('public.es.layouts.footer')

    <!--========= Scripts ===========-->
    {!!Html::script('assets/public/js/jquery-latest.min.js')!!}
    {!!Html::script('assets/public/js/jquery-ui.js')!!}
    {!!Html::script('assets/public/js/bootstrap.js')!!}
    {!!Html::script('assets/public/js/wow.min.js')!!}
    {!!Html::script('assets/public/js/materialize.min.js')!!}
    {!!Html::script('assets/public/js/custom.js')!!}
    {!!Html::script('assets/public/video/js/video.js')!!}
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
