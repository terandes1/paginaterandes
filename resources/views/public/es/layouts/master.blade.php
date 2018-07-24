<!DOCTYPE html>
<html lang="en">

<head>
    <title>The Travel - Tour Travel</title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- FAV ICON -->
    <link rel="shortcut icon" href="/assets/public/images/fav.ico">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:400,500,700" rel="stylesheet">
    <!-- FONT-AWESOME ICON CSS -->
    {!!Html::style('assets/public/css/font-awesome.min.css')!!}
    <!--== ALL CSS FILES ==-->
    {!!Html::style('assets/public/css/style.css')!!}
    {!!Html::style('assets/public/css/materialize.css')!!}
    {!!Html::style('assets/public/css/bootstrap.css')!!}
    {!!Html::style('assets/public/css/mob.css')!!}
    {!!Html::style('assets/public/css/animate.css')!!}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
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
    {!!Html::script('assets/public/js/bootstrap.js')!!}
    {!!Html::script('assets/public/js/wow.min.js')!!}
    {!!Html::script('assets/public/js/materialize.min.js')!!}
    {!!Html::script('assets/public/js/custom.js')!!}
</body>

</html>
