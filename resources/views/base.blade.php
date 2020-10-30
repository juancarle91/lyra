<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Lyra Salud</title>
        <!-- Bootstrap -->
        <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Google Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,100italic,300italic,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
        <!-- Template CSS Files  -->
        <link href="{{ asset('/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('/js/plugins/camera/css/camera.css') }}" rel="stylesheet">
        <link href="{{ asset('/js/plugins/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/responsive.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/style1.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/responsive1.css') }}" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('/images/Lyrafav.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('/images/Lyrafav.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('/images/Lyrafav.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('/images/Lyrafav.png') }}">
        <link rel="shortcut icon" href="{{ asset('/images/Lyrafav.png') }}">
        <!-- font awesome -->
        <script src="https://kit.fontawesome.com/fac8bfd862.js" crossorigin="anonymous"></script>
        
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    </head>
    <body id="body">

        @include ('inc.header')

        @yield ('principal')

        @include ('inc.footer')
        
        <!-- Template JS Files -->
        <script src="{{ asset('/js/jquery-1.11.3.min.js') }}"></script>
        <script src="{{ asset('/js/jquery-migrate-1.2.1.min.js') }}"></script>	
        <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/js/plugins/camera/js/jquery.mobile.customized.min.js') }}"></script>
        <script src="{{ asset('/js/plugins/camera/js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('/js/plugins/camera/js/camera.min.js') }}"></script>	
        <script src="{{ asset('/js/plugins/shuffle/jquery.shuffle.modernizr.min.js') }}"></script>
        <script src="{{ asset('/js/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('/js/plugins/range-slider/js/bootstrap-slider.min.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js"></script>	
        <script src="{{ asset('/js/custom.js') }}"></script>	
        <!-- masonry -->
    </body>
</html>