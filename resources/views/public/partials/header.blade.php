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
    {!!Html::style('assets/public/css/select2.min.css')!!}
    {!!Html::style('assets/public/css/stylePersonalizado.css')!!}


    
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
#tituloReserva{
    font-family: 'NewsGoth CN BT';
    font-size: 16px;
}

 
   @media (min-width: 200px) and (max-width: 480px) {
  
   #logoTerandes {
       width: 100%;
  }

  #aprendaMas
  {
    font-size: 8px;
  }
}

  @media (min-width: 481px) and (max-width: 767px) {
  
   #logoTerandes {
       width: 110%;
  }
   #aprendaMas
  {
    font-size: 9px;
  }
  
}
 @media (min-width: 768px) and (max-width: 1200px) {
  
   #logoTerandes {
       width: 110%;
  }
  #aprendaMas
  {
    font-size: 11px;
  }
  
}

</style>