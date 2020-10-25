@extends('layouts.app1')
@section('content')
<!-- Section offer -->	
<section id="blog-main" class="color-section">
   <div class="jumbotron"></div>
   <div class="page-title" data-0="background-position:98% 40px,2% 40px;" data-end="background-position:98% -400px,2% -400px">
   <h3>Nuestra repostería</h3>
   <!-- breadcrumb --> 
   <ul class="breadcrumb">
      <li><a href="{{ route('index') }}">Inicio</a> <span class="divider"></span></li>
      <li class="active">Repostería</li>
   </ul>
   <!-- /breadcrumb --> 
   </div>
</section>
<!-- / section -->
 <!-- Section Gallery -->
 <section id="gallery" class="color-section2">
         <div class="container-fluid">
            <!-- Section heading -->
            <div class="section-heading">
               <h3>Repostería</h3>
               <div class="hr"></div>
            </div>
            <!-- Navigation -->
            <div class="text-center col-md-12">
               <ul class="nav nav-pills cat text-center" role="tablist" id="gallerytab">
                  <li class="active"><a href="#" data-toggle="tab" data-filter="*">Todos</a>
                  <li><a href="#" data-toggle="tab" data-filter=".Queques">Queques & Pies</a></li>
                  <li><a href="#" data-toggle="tab" data-filter=".Cupcakes">Cupcakes & otros</a></li>
               </ul>
            </div>
            <!-- Gallery -->
            <div class="row">
               <div class="col-md-12 wow fadeInUp">
                  <div id="lightbox">
                     @foreach($images as $image)
                        <div class="{{$image->category}}  col-md-4">
                           <div class="polaroid">
                              <p>{{$image->name}}</p>
                              <img src="{{$image->file}}" alt="" class="img-responsive center-block" />
                           </div>
                        </div>
                     @endforeach
                  </div>
                  <!-- /lightbox-->
                  {{ $images->render() }} 
               </div>
               <!-- /col-md-12-->
            </div>
            <!-- /row -->
         </div>
         <!-- /container -->
      </section>
      <!-- /section -->
@endsection