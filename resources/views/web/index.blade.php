@extends('layouts.app1')
@section('content')      
<!-- Slider -->
<div class="slider-container">
   <!-- Controls -->
   <div class="slider-control left inactive"></div>
   <div class="slider-control right"></div>
   <ul class="slider-pagi"></ul>
   <!--Slider -->
   <div class="slider">
      <!-- Slide 0 -->
      <div class="slide slide-0 active">
         <!-- image -->
         <div class="slide__bg"></div>
         <div class="slide__content">
            <!-- SVG Overlay-->
            <svg version="1.1" class="slide__overlay" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 294.996 294.996" style="enable-background:new 0 0 294.996 294.996;" xml:space="preserve">
               <path d="M280.977,118.478c-13.619-10.807-20.563-27.57-18.574-44.845c1.3-11.3-2.566-22.393-10.607-30.432
                  c-8.044-8.043-19.136-11.909-30.434-10.607c-17.281,1.986-34.037-4.954-44.844-18.573C169.449,5.11,158.872,0,147.499,0
                  c-11.374,0-21.951,5.11-29.021,14.02c-10.807,13.618-27.564,20.56-44.841,18.575c-11.3-1.305-22.393,2.563-30.435,10.605
                  c-8.043,8.04-11.909,19.133-10.609,30.435c1.989,17.272-4.954,34.035-18.576,44.844C5.11,125.549,0,136.126,0,147.498
                  s5.109,21.949,14.019,29.021c13.62,10.808,20.563,27.57,18.574,44.845c-1.3,11.3,2.566,22.393,10.607,30.432
                  c8.044,8.043,19.145,11.911,30.434,10.607c17.274-1.988,34.037,4.954,44.844,18.573c7.069,8.91,17.646,14.021,29.021,14.021
                  c11.373,0,21.95-5.11,29.02-14.02c10.808-13.618,27.565-20.559,44.841-18.575c11.301,1.299,22.393-2.563,30.435-10.605
                  c8.043-8.04,11.909-19.133,10.609-30.434c-1.989-17.273,4.955-34.037,18.576-44.845c8.907-7.07,14.017-17.647,14.017-29.02
                  S289.886,125.549,280.977,118.478z"/>
            </svg>
            <!--Title -->
            <div class="slide__text">
               <h1><span>Bienvenidos</span><br>Ale's Cake</h1>
               <div class="hidden-xs hidden-sm hidden-md">
                  <p class="subtitle">"Nuestro ingrediente secreto siempre es el amor"</p>
                  <div class="page-scroll">
                     <!-- Button -->
                     <a class="btn" target="_blank" href="https://api.whatsapp.com/send?phone=50685407167&text=Me%20interesan%20sus%20postres">
                        <div class="btn-line"></div>
                        <div class="btn-line btn-line-shift"></div>
                        Contáctanos
                     </a>
                  </div>
               </div>
            </div>
            <!--/Slide__text -->
         </div>
         <!-- /Slide__content -->
      </div>
      <!-- /Slide -->
      <!-- Slide 1 -->
      <div class="slide slide-1">
         <!-- image -->
         <div class="slide__bg"></div>
         <div class="slide__content">
            <!-- SVG Overlay-->
            <svg version="1.1" class="slide__overlay" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 294.996 294.996" style="enable-background:new 0 0 294.996 294.996;" xml:space="preserve">
               <path d="M280.977,118.478c-13.619-10.807-20.563-27.57-18.574-44.845c1.3-11.3-2.566-22.393-10.607-30.432
                  c-8.044-8.043-19.136-11.909-30.434-10.607c-17.281,1.986-34.037-4.954-44.844-18.573C169.449,5.11,158.872,0,147.499,0
                  c-11.374,0-21.951,5.11-29.021,14.02c-10.807,13.618-27.564,20.56-44.841,18.575c-11.3-1.305-22.393,2.563-30.435,10.605
                  c-8.043,8.04-11.909,19.133-10.609,30.435c1.989,17.272-4.954,34.035-18.576,44.844C5.11,125.549,0,136.126,0,147.498
                  s5.109,21.949,14.019,29.021c13.62,10.808,20.563,27.57,18.574,44.845c-1.3,11.3,2.566,22.393,10.607,30.432
                  c8.044,8.043,19.145,11.911,30.434,10.607c17.274-1.988,34.037,4.954,44.844,18.573c7.069,8.91,17.646,14.021,29.021,14.021
                  c11.373,0,21.95-5.11,29.02-14.02c10.808-13.618,27.565-20.559,44.841-18.575c11.301,1.299,22.393-2.563,30.435-10.605
                  c8.043-8.04,11.909-19.133,10.609-30.434c-1.989-17.273,4.955-34.037,18.576-44.845c8.907-7.07,14.017-17.647,14.017-29.02
                  S289.886,125.549,280.977,118.478z"/>
            </svg>
            <!--Title -->
            <div class="slide__text">
               <h1><span>Repostería para</span><br>eventos</h1>
               <div class="hidden-xs hidden-sm hidden-md">
                  <p class="subtitle">Ofrecemos repostería para todo tipo de eventos.</p>
                  <div class="page-scroll">
                     <!-- Button -->
                     <a class="btn" target="_blank" href="https://api.whatsapp.com/send?phone=50685407167&text=Me%20interesan%20sus%20postres">
                        <div class="btn-line"></div>
                        <div class="btn-line btn-line-shift"></div>
                        Contáctanos
                     </a>
                  </div>
               </div>
            </div>
            <!--/Slide__text -->
         </div>
         <!-- /Slide__content -->
      </div>
      <!-- /Slide -->
      <!-- Slide 2 -->
      <div class="slide slide-2">
         <!-- image -->
         <div class="slide__bg"></div>
         <div class="slide__content">
            <!-- SVG Overlay-->
            <svg version="1.1" class="slide__overlay" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 294.996 294.996" style="enable-background:new 0 0 294.996 294.996;" xml:space="preserve">
               <path d="M280.977,118.478c-13.619-10.807-20.563-27.57-18.574-44.845c1.3-11.3-2.566-22.393-10.607-30.432
                  c-8.044-8.043-19.136-11.909-30.434-10.607c-17.281,1.986-34.037-4.954-44.844-18.573C169.449,5.11,158.872,0,147.499,0
                  c-11.374,0-21.951,5.11-29.021,14.02c-10.807,13.618-27.564,20.56-44.841,18.575c-11.3-1.305-22.393,2.563-30.435,10.605
                  c-8.043,8.04-11.909,19.133-10.609,30.435c1.989,17.272-4.954,34.035-18.576,44.844C5.11,125.549,0,136.126,0,147.498
                  s5.109,21.949,14.019,29.021c13.62,10.808,20.563,27.57,18.574,44.845c-1.3,11.3,2.566,22.393,10.607,30.432
                  c8.044,8.043,19.145,11.911,30.434,10.607c17.274-1.988,34.037,4.954,44.844,18.573c7.069,8.91,17.646,14.021,29.021,14.021
                  c11.373,0,21.95-5.11,29.02-14.02c10.808-13.618,27.565-20.559,44.841-18.575c11.301,1.299,22.393-2.563,30.435-10.605
                  c8.043-8.04,11.909-19.133,10.609-30.434c-1.989-17.273,4.955-34.037,18.576-44.845c8.907-7.07,14.017-17.647,14.017-29.02
                  S289.886,125.549,280.977,118.478z"/>
            </svg>
            <!--Title -->
            <div class="slide__text">
               <h1><span>Variedad de</span><br>precios</h1>
               <div class="hidden-xs hidden-sm hidden-md">
                  <p class="subtitle">Tenenos una amplia gama de precios que se ajusta a sus necesidades.</p>
                  <div class="page-scroll">
                     <!-- Button -->
                     <a class="btn" target="_blank" href="https://api.whatsapp.com/send?phone=50685407167&text=Me%20interesan%20sus%20postres">
                        <div class="btn-line"></div>
                        <div class="btn-line btn-line-shift"></div>
                        Contáctanos
                     </a>
                  </div>
               </div>
            </div>
            <!--/Slide__text -->
         </div>
         <!-- /Slide__content -->
      </div>
      <!-- /Slide -->
      <!-- Slide 3 -->
      <div class="slide slide-3">
         <!-- image -->
         <div class="slide__bg"></div>
         <div class="slide__content">
            <!-- SVG Overlay-->
            <svg version="1.1" class="slide__overlay" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               viewBox="0 0 294.996 294.996" style="enable-background:new 0 0 294.996 294.996;" xml:space="preserve">
               <path d="M280.977,118.478c-13.619-10.807-20.563-27.57-18.574-44.845c1.3-11.3-2.566-22.393-10.607-30.432
                  c-8.044-8.043-19.136-11.909-30.434-10.607c-17.281,1.986-34.037-4.954-44.844-18.573C169.449,5.11,158.872,0,147.499,0
                  c-11.374,0-21.951,5.11-29.021,14.02c-10.807,13.618-27.564,20.56-44.841,18.575c-11.3-1.305-22.393,2.563-30.435,10.605
                  c-8.043,8.04-11.909,19.133-10.609,30.435c1.989,17.272-4.954,34.035-18.576,44.844C5.11,125.549,0,136.126,0,147.498
                  s5.109,21.949,14.019,29.021c13.62,10.808,20.563,27.57,18.574,44.845c-1.3,11.3,2.566,22.393,10.607,30.432
                  c8.044,8.043,19.145,11.911,30.434,10.607c17.274-1.988,34.037,4.954,44.844,18.573c7.069,8.91,17.646,14.021,29.021,14.021
                  c11.373,0,21.95-5.11,29.02-14.02c10.808-13.618,27.565-20.559,44.841-18.575c11.301,1.299,22.393-2.563,30.435-10.605
                  c8.043-8.04,11.909-19.133,10.609-30.434c-1.989-17.273,4.955-34.037,18.576-44.845c8.907-7.07,14.017-17.647,14.017-29.02
                  S289.886,125.549,280.977,118.478z"/>
            </svg>
            <!--Title -->
            <div class="slide__text">
               <h1><span>Variedad de</span><br>Diseños</h1>
               <div class="hidden-xs hidden-sm hidden-md">
                  <p class="subtitle">Si deseas personalizar sus postres para una ocasión especial somos su mejor opción.</p>
                  <div class="page-scroll">
                     <!-- Button -->
                     <a class="btn" target="_blank" href="https://api.whatsapp.com/send?phone=50685407167&text=Me%20interesan%20sus%20postres">
                        <div class="btn-line"></div>
                        <div class="btn-line btn-line-shift"></div>
                        Contáctanos
                     </a>
                  </div>
               </div>
            </div>
            <!--/Slide__text -->
         </div>
         <!-- /Slide__content -->
      </div>
      <!-- /Slide -->
   </div>
   <!-- /Slider -->
</div>
<!-- /slider -->

<!-- Section offer -->	
<section id="offer" class="color-section">
   <div class="container" data-0="background-position:82% 20px;" data-end="background-position:82% 1200px">
      <div class="col-md-6 text-center">
         <h4>¿Quienes somos?</h4>
         <p>Somos una empresa 100% costarricense con el objetivo de endulzar sus hogares con nuestra repostería con un sabor único.</p>
         <!-- Button -->
         <div class="page-scroll">
            <a class="btn" href="#menu">
               <div class="btn-line"></div>
               <div class="btn-line btn-line-shift"></div>
               Revise nuestro menú
            </a>
         </div>
      </div>
   <!-- /col-md-6 -->
   </div>
   <!--  container -->
</section>
<!-- / section -->

<!-- Section Services -->
<section id="services">
   <div class="container">
      <div class="col-lg-12">
         <!-- Section heading -->
         <div class="section-heading">
            <h2>Nuestros servicios</h2>
            <div class="hr"></div>
         </div>
      </div>
      <!-- /col-lg-12 -->
      <div class="row services-row">
         <div class="col-lg-4 col-md-4 col-md-offset-1">
            <img class="img-responsive" src="bakery/img/servicesmain.png" alt="">
         </div>
         <!-- /col-lg-4-->
         <div class="col-lg-7 col-md-7">
            <h3>La felicidad no se puede comprar <br> pero puedes comprar REPOSTERÍA</h3>
            <h4><small>Desde ese punto de vista es lo mismo!</small></h4>
            <p class="text-justify">
               En Ale's Cake trabajamos con la premisa de que el postre es una parte fundamental en cualquier celebración o comida.
               Por ello, unimos nuestros conocimientos en técnicas y productos, tanto de cocina como de repostería, y los trabajamos para que el resultado 
               sea sorprendente tanto en texturas como en equilibrio de sabores. 
            </p>
            <!-- Button -->
            <div class="page-scroll">
               <a class="btn" target="_blank" href="https://api.whatsapp.com/send?phone=50685407167&text=Me%20interesan%20sus%20postres">
                  <div class="btn-line"></div>
                  <div class="btn-line btn-line-shift"></div>
                  Contactános y haz feliz a su familia
               </a>
            </div>
            <!-- /page-scroll-->				   
         </div>
         <!-- /col-lg-7 -->			   
      </div>
      <!-- /row -->
      <div class="row margin1">
         <!-- carousel -->
         <div class="owl-carousel" id="owl-services">
            <!-- Box 1 -->
            <div class="col-xs-12">
               <div class="box_icon">
                  <div class="icon">
                     <!-- image -->
                     <div class="image"> 
                        <img class="img-responsive img-circle" src="bakery/img/service1.jpg" alt="">
                     </div>
                     <div class="info">
                        <h5>Bodas</h5>
                        <p>Comparte con las personas más importantes este momento tan especial disfrutando de nuestros deliciosos postres.</p>
                        <!-- Button -->
                        <div class="page-scroll">
                           <a class="btn" target="_blank" href="https://api.whatsapp.com/send?phone=50685407167&text=Me%20interesan%20sus%20postres">
                              <div class="btn-line"></div>
                              <div class="btn-line btn-line-shift"></div>
                              Más información
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /box_icon -->
            </div>
            <!-- /col-xs-12 ends -->
            <!-- Box 2 -->
            <div class="col-xs-12">
               <div class="box_icon">
                  <div class="icon">
                     <!-- image -->
                     <div class="image"> 
                        <img class="img-responsive img-circle" src="bakery/img/service2.jpg" alt="">
                     </div>
                     <div class="info">
                        <h5>Eventos corporativos</h5>
                        <p>Endulza a tus clientes no solo con sus propuestas sino con nuestros deliciosos postres.</p>
                        <!-- Button -->
                        <div class="page-scroll">
                           <a class="btn" target="_blank" href="https://api.whatsapp.com/send?phone=50685407167&text=Me%20interesan%20sus%20postres">
                              <div class="btn-line"></div>
                              <div class="btn-line btn-line-shift"></div>
                              Más información
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /box_icon -->
            </div>
            <!-- /col-xs-12 ends -->
            <!-- Box 3 -->
            <div class="col-xs-12">
               <div class="box_icon">
                  <div class="icon">
                     <!-- image -->
                     <div class="image"> 
                        <img class="img-responsive img-circle" src="bakery/img/service3.jpg" alt="">
                     </div>
                     <div class="info">
                        <h5>Evento de cumpleaños</h5>
                        <p>Haz feliz a esa persona tan especial para ti, a su familia e invitados con nuestros deliciosos postres.</p>
                        <!-- Button -->
                        <!-- Button -->
                        <div class="page-scroll">
                           <a class="btn" target="_blank" href="https://api.whatsapp.com/send?phone=50685407167&text=Me%20interesan%20sus%20postres">
                              <div class="btn-line"></div>
                              <div class="btn-line btn-line-shift"></div>
                              Más información
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /box_icon -->
            </div>
            <!-- /col-xs-12 ends -->
            <!-- Box 4 -->
            <div class="col-xs-12">
               <div class="box_icon">
                  <div class="icon">
                     <!-- image -->
                     <div class="image"> 
                        <img class="img-responsive img-circle" src="bakery/img/service4.jpg" alt="">
                     </div>
                     <div class="info">
                        <h5>Gourmet</h5>
                        <p>Si quieres cerrar con broche de oro a una comida o cena, puedes optar por alguno de nuestros postres gourmet, 
                           elegantes y originales, pero también deliciosos</p>
                        <!-- Button -->
                        <div class="page-scroll">
                           <a class="btn" target="_blank" href="https://api.whatsapp.com/send?phone=50685407167&text=Me%20interesan%20sus%20postres">
                              <div class="btn-line"></div>
                              <div class="btn-line btn-line-shift"></div>
                              Más información   
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /box_icon -->
            </div>
            <!-- /col-xs-12 ends -->
         </div>
         <!-- /carousel -->
      </div>
      <!-- /row -->
   </div>
   <!-- /container-->
</section>
<!-- /section-->

<!-- Section About --> 
<section id="about" class="color-section2 hidden">
   <div class="container">
   </div>   
   <!--/container-->
</section>
<!--/section -->

<!-- Section testimonials --> 
<section id="testimonials" class="color-section">
   <div class="container">
      <!-- Parallax object -->
      <div class="parallax-object hidden-sm hidden-xs hidden-md" 
         data-bottom-top="left:0%;margin-top:-30px;transform:translatey(0%);"
         data-top="transform:translatey(-120%);">
         <!-- Image -->
         <img src="bakery/img/cake3.png" alt="">
      </div>
      <div class="parallax-object hidden-sm hidden-xs hidden-md" 
         data-bottom-top="left:60px;margin-top:120px;transform:translatey(0%);"
         data-top="transform:translatey(-120%);">
         <!-- Image -->
         <img src="bakery/img/cake1.png" alt="">
      </div>
      <div class="parallax-object hidden-sm hidden-xs hidden-md" 
         data-bottom-top="left:220px;margin-top:-70px;transform:translatey(40%);"
         data-top="transform:translatey(-120%);">
         <!-- Image -->
         <img src="bakery/img/cherry.png" alt="">
      </div>
      <!-- Section Heading -->
      <div class="section-heading">
         <h2>Recomendaciones</h2>
         <div class="hr"></div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <!-- Carousel -->
            <div id="owl-testimonial" class="owl-carousel">
               <!-- Testimonial 1 -->
               <div class="testimonial">
                  <div class="testimonial-pic">
                     <img src="bakery/img/testimonial1.jpg" alt="" class="img-circle">
                  </div>
                  <div class="testimonial-content">
                     <p class="description">
                        Me encantan demasiado, soy muy fan de degustar diversos postres pero desde que probé estos no los cambiaría.
                     </p>
                     <h3 class="testimonial-title">Monica Sánchez</h3>
                     <small class="post">/ Doctora</small>
                  </div>
               </div>
               <!-- Testimonial 2 -->
               <div class="testimonial">
                  <div class="testimonial-pic">
                     <img src="bakery/img/testimonial2.jpg" alt="" class="img-circle">
                  </div>
                  <div class="testimonial-content">
                     <p class="description">
                        Postres con un sabor único, además siempre buscan que uno como cliente quede satisfecho; muy recomendados.
                     </p>
                     <h3 class="testimonial-title">Adrián Morales</h3>
                     <small class="post">/ Ingeniero</small>
                  </div>
               </div>
            </div>
            <!--/owl-testimonials -->
         </div>
         <!-- /col-md-12-->
      </div>
      <!--/row --> 
   </div>
   <!--/container --> 
</section>
<!--/section-->

<!-- Section Blogprev --> 
<section id="blog-preview">
   <div class="container">
      <!-- Section Heading -->
      <div class="section-heading">
         <h2>Publicaciones</h2>
         <div class="hr"></div>
      </div>
      <div class="row">
         <div class="col-md-12">
            <div id="owl-blog" class="owl-carousel">
            @foreach($posts as $post)
               <!-- Blog Post 4 -->
               <div class="blog-post">
                  <!-- blog image -->
                  <div class="img-zoom">
                     <a href="#">
                     @if($post->file)
                     <img class="img-responsive" src="{{ $post->file }}" alt="">
                     @endif
                     </a>
                  </div>
                  <!-- post info -->
                  <div class="post-review">
                     <!-- Comments -->
                     <ul class="post-comment">
                        <li>
                            {{\Carbon\Carbon::parse($post->created_at)->isoformat('DD')}}
                            <small>{{\Carbon\Carbon::parse($post->created_at)->isoformat('MMMM')}}</small>
                        </li>
                        <li><i class="fa fa-comments-o"></i><a href="#"><small>0</small></a></li>
                     </ul>
                     <!-- Title -->
                     <h4 class="post-title">
                        <a href="{{ route('post', $post->slug)}}">{{$post->name}}</a>
                     </h4>
                     <!-- Description -->
                     <p class="post-description">
                        {{$post->excerpt}}
                     </p>
                     <!-- Button -->
                     <div class="text-center page-scroll">
                        <a class="btn" href="{{ route('post', $post->slug)}}">
                           <div class="btn-line"></div>
                           <div class="btn-line btn-line-shift"></div>
                           Leer más
                        </a>
                     </div>
                  </div>
                  <!-- /Post-review -->
               </div>
               <!-- /blog-post-->
               @endforeach					 
            </div>
            <!--/owl-blog -->
         </div>
         <!--/col-md-12 -->
      </div>
      <!--/row -->
   </div>
   <!--/container -->
</section>
<!--/section -->


<!-- Section Menu --> 
<section id="menu" class="color-section2">
   <div class="container">
         <!-- Section heading -->
         <div class="section-heading">
         <h2>Nuestro menú</h2>
         <div class="hr"></div>
      </div>
      <div class="col-md-12">
         <div class="col-md-12 no-padding">
            <!-- required for floating -->
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
               <li class="active"><a href="#tab1" data-toggle="tab">Cake</a></li>
               <li><a href="#tab2" data-toggle="tab">Otros</a></li>
               <!--<li><a href="#tab3" data-toggle="tab">Pie</a></li>-->
            </ul>
         </div>
         <div class="col-md-12 no-padding">
            <!-- Tab panes -->
            <div class="tab-content">
               <div class="tab-pane active in fade" id="tab1">
                  <div class="row">
                     <!-- Menu: Cakes-->
                     <h3>Cakes & Pie</h3>
                     <!-- column -->
                     <div class="col-md-6">
                        <div class="polaroid">
                           <p>Queque de chocolate</p>
                           <img src="bakery/img/menu1.jpg" alt="" class="img-responsive center-block" />
                        </div>
                     </div>
                     <!-- /col-md-6 -->	
                     <!-- column -->
                     <div class="col-md-6">
                        <div class="menu-body">
                           <div class="menu-section">
                              <!-- Item starts -->
                              <div class="menu-item">
                                 <div class="menu-item-name">
                                    Queque de higos con leche condensada.
                                 </div>
                                 <div class="menu-item-price">
                                   
                                 </div>
                                 <div class="menu-item-description">
                                     ☆☆☆☆☆
                                 </div>
                              </div>
                              <!-- Item ends -->
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                 <div class="menu-item-name">
                                    Queque de chocolate con mermelada de fresas
                                 </div>
                                 <div class="menu-item-price">
                                   
                                 </div>
                                 <div class="menu-item-description">
                                     ☆☆☆☆☆
                                 </div>
                              </div>
                              <!-- Item ends -->
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                 <div class="menu-item-name">
                                    Pie de Limón, Pie de manzana
                                 </div>
                                 <div class="menu-item-price">
                                   
                                 </div>
                                 <div class="menu-item-description">
                                     ☆☆☆☆☆
                                 </div>
                              </div>
                              <!-- Item ends -->
                          	                                                        
                           </div>
                           <!--/ menu section -->
                        </div>
                        <!-- / menu body -->
                     </div>
                     <!-- /col-md-6 -->				  
                  </div>
                  <!-- /.row -->
               </div>
               <!-- /#tab1 -->
               <div class="tab-pane fade" id="tab2">
                  <div class="row">
                     <!-- Menu: Pastries-->
                     <h3>Cupcakes & otros</h3>
                     <!-- column -->
                     <div class="col-md-6">
                        <div class="polaroid">
                           <p>Cupcakes, Chilenitas</p>
                           <img src="bakery/img/menu2.jpg" alt="" class="img-responsive center-block" />
                        </div>
                     </div>
                     <!-- /col-md-6 -->	
                     <!-- column -->
                     <div class="col-md-6">
                        <div class="menu-body">
                           <div class="menu-section">
                              <!-- Item starts -->
                              <div class="menu-item">
                                 <div class="menu-item-name">
                                    Tres leches de Chocolate
                                 </div>
                                 <div class="menu-item-price">
                                   
                                 </div>
                                 <div class="menu-item-description">
                                     ☆☆☆☆☆
                                 </div>
                              </div>
                              <!-- Item ends -->
                               <!-- Item starts -->
                               <div class="menu-item">
                                 <div class="menu-item-name">
                                    Chilenitas, suspiros, cupcakes de chocolate
                                 </div>
                                 <div class="menu-item-price">
                                   
                                 </div>
                                 <div class="menu-item-description">
                                     ☆☆☆☆☆
                                 </div>
                              </div>
                              <!-- Item ends -->
                                 <!-- Item starts -->
                                 <div class="menu-item">
                                 <div class="menu-item-name">
                                    Chescake de fresa & tortas chilenas
                                 </div>
                                 <div class="menu-item-price">
                                   
                                 </div>
                                 <div class="menu-item-description">
                                     ☆☆☆☆☆
                                 </div>
                              </div>
                              <!-- Item ends -->
                           </div>
                           <!--/ menu section -->
                        </div>
                        <!-- / menu body -->
                     </div>
                     <!-- /col-md-6 -->				  
                  </div>
                  <!-- /.row -->
               </div>
               <!-- /tab-pane -->
            </div>
            <!-- /tab-content-->	
         </div>
         <!-- /col-md-10 -->	
      </div>
      <!-- /.row -->	
   </div>
   <!-- /container -->	
</section>
<!-- /Section -->

<!-- Section Callout -->
<section id="callout" class="feature color-section">
   <div class="image-container col-lg-6 pull-left" data-top-bottom="opacity:0" data-center="opacity:1">
      <div class="background-image-holder"></div>
      <!-- Background Image -->
   </div>
   <div class="container">
      <div class="row">
         <div class="col-lg-5 col-lg-offset-7 col-md-12 text-center">
            <!-- Section heading -->                
            <h5>Entonces... ¿Te atreves a probar nuestra repostería?</h5>
            <p>Estamos seguro que la disfrutarás al máximo al lado de su familia. No sigas dudando y haz tu pedido.</p>
            <!-- Button -->
            <div class="page-scroll">
               <a class="btn" target="_blank" href="https://api.whatsapp.com/send?phone=50685407167&text=Me%20interesan%20sus%20postres">
                  <div class="btn-line"></div>
                  <div class="btn-line btn-line-shift"></div>
                  Envíar mensaje
               </a>
            </div>
            <!-- /page-scroll -->
         </div>
         <!-- /col-lg-5-->
      </div>
      <!-- /.row-->
   </div>
   <!-- /.container -->
</section>
<!-- /Section -->

<!-- Section Prices -->	
<section id="prices">
   <div class="container hidden">		
   </div>
   <!--/container -->
</section>
<!-- / section-->

<!-- Section Newsletter-->
<section id="newsletter" class="color-section hidden" data-0="background-position:0px -40px;" data-end="background-position:1000px -40px;">
   <div class="container">
   </div>
   <!-- /.container -->
</section>
<!-- / section-->

<!-- Section Promo -->	
<section id="promo">
   <div class="container text-center">
       <h3>"Nuestro ingrediente secreto siempre es el amor"</h3>
   </div>
   <!-- /.container -->
</section>
<!-- / section-->
   
<!-- Parallax object -->
<div class="parallax-object hidden-sm hidden-xs hidden-md" 
data-100-start="transform:rotate(-0deg); right:3%;" 
   data-center="transform:rotate(-370deg);">
   <!-- Image -->
   <img src="bakery/img/donut.png" alt="">
</div>

<!-- Section Team -->	
<section class="hidden" id="team">
   <div class="container">
   </div>   
</section>
<!--/ Section --> 

<!-- Section Contact -->
<section class="hidden" id="contact">
   <div class="container"> 
   </div>
   <!-- /container-->
</section>
<!-- / section-->

<!-- Map -->	  
<div class="container-fluid hidden">
   <div id="map-canvas"></div>
</div>
<!--/map-->

@endsection