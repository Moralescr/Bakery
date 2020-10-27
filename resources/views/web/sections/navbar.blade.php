<!-- Navbar -->
<nav class="navbar navbar-custom navbar-fixed-top"  id="navbar-custom">
    <div class="container">
    <!-- Logo and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand">
        <i class="fa fa-bars"></i>
        </button>
        <!-- Logo -->
        <div class="navbar-brand page-scroll">
            <a href="{{route('index')}}"><img src="{{ asset('bakery/img/logo.png') }}"  alt=""></a>
        </div>
    </div>
    <!-- /.navbar-header -->
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-brand">
        <ul class="nav navbar-nav page-scroll navbar-right">
            <li><a href="#page-top">Inicio</a></li>
            <li><a href="{{ route('about') }}">Nosotros</a></li>
            <li><a href="{{route('gallery')}}">Nuestros postres</a></li>
            <li><a href="{{ route('blog') }}">Nuestro blog</a></li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
    </div>
    <!-- /container -->
</nav>
<!-- /nav -->
<!-- Preloader -->
<div id="loading">
    <div id="loading-center">
    <div id="loading-center-absolute">
        <div class="object-load" id="object_one"></div>
        <div class="object-load" id="object_two"></div>
        <div class="object-load" id="object_three"></div>
    </div>
    </div>
</div>
<!-- /preloader -->