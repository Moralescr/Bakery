<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8">
   <!--[if IE]>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <![endif]-->
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="">
   <meta name="author" content="Adrian Morales Guadamúz">
   <!-- Page title -->
   <title>Welcome - Ale's Cake</title>
   <!--[if lt IE 9]>
   <script src="js/respond.js"></script>
   <![endif]-->
   <!-- Bootstrap Core CSS -->
   <link href="{{ asset('bakery/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
   <!-- Icon fonts -->
   <link href="{{ asset('bakery/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
   <link href="{{ asset('bakery/fonts/flaticons/flaticon.css') }}" rel="stylesheet" type="text/css">
   <link href="{{ asset('bakery/fonts/glyphicons/bootstrap-glyphicons.css') }}" rel="stylesheet" type="text/css">
   <!-- Google fonts -->
   <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Paytone+One" rel="stylesheet">
   <!-- Style CSS -->
   <link href="{{ asset('bakery/css/style.css') }}" rel="stylesheet">
   <!-- Color Style CSS -->
   <link href="{{ asset('bakery/styles/sweet.css') }}" rel="stylesheet">
   <!-- CSS Plugins -->
   <link rel="stylesheet" href="{{ asset('bakery/css/plugins.css') }}">
   <!-- Favicons-->
   <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('bakery/apple-icon-72x72.png') }}">
   <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('bakery/apple-icon-114x114.png') }}">
   <link rel="shortcut icon" href="{{ asset('bakery/favicon.ico') }}" type="image/x-icon">

	<!--Alternate CSS -->
   <link rel="alternate stylesheet" type="text/css" href="{{ asset('bakery/styles/sweet.css') }}" title="sweet" media="all" />
   <link rel="alternate stylesheet" type="text/css" href="{{ asset('bakery/styles/candy.css') }}" title="candy" media="all" />
   <link rel="alternate stylesheet" type="text/css" href="{{ asset('bakery/styles/chocopink.css') }}" title="chocopink" media="all" />
   <link rel="alternate stylesheet" type="text/css" href="{{ asset('bakery/styles/pastel.css') }}" title="pastel" media="all" />
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    @include('web.sections.navbar')
      
    @yield('content')

    @include('web.sections.footer')
</body>
    <!-- Fixed prevent scroll -->
    <script src="{{ asset('bakery/js/fixprevent.js') }}"></script>
    <!-- Core JavaScript Files -->
    <script src="{{ asset('bakery/js/jquery.min.js') }}"></script>
    <script src="{{ asset('bakery/js/bootstrap.min.js') }}"></script>
    <!-- Main Js -->
    <script src="{{ asset('bakery/js/main.js') }}"></script>
    <!--  map -->
    <!-- <script src="{{ asset('bakery/js/map.js') }}"></script> -->
    <!--Mail Chimp validator -->
    <!-- src="{{ asset('bakery/js/mc-validate.js') }}"></!-->
    <!--Other Plugins -->
    <script src="{{ asset('bakery/js/plugins.js') }}"></script>
    <!-- Prefix free CSS -->
    <script src="{{ asset('bakery/js/prefixfree.js') }}"></script>	  
    <!-- Slider -->
    <script src="{{ asset('bakery/js/slider.js') }}"></script>   
</html>
