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
                  <li class="active"><a href="#" data-toggle="tab" data-filter="*">Todas</a>
                  <li><a href="#" data-toggle="tab" data-filter=".Queques">Cakes & Pies</a></li>
                  <li><a href="#" data-toggle="tab" data-filter=".sweets">Otros dulces</a></li>
               </ul>
            </div>
            <!-- Gallery -->
            <div class="row">
               <div class="col-md-12 wow fadeInUp">
                  <div id="lightbox">
                     @foreach($images as $image)
                     <!-- Image 1 -->
                     <div class="{{$image->category}} col-lg-4 col-sm-6 col-md-6">
                        <div class="isotope-item">
                           <div class="gallery-thumb">
                              @if($image->file)
                              <img class="img-responsive" src="{{$image->file}}" alt="">
                              <a href="{{$image->file}}" data-gal="prettyPhoto[gallery]"  title="{{$image->name}}">
                              <span class="overlay-mask"></span>
                              </a>	
                              @endif						  							  
                           </div>
                        </div>
                     </div>
                     @endforeach
                  </div>
                  <!-- /lightbox-->
               </div>
               <!-- /col-md-12-->
            </div>
            <!-- /row -->
         </div>
         <!-- /container -->
      </section>
      <!-- /section -->
@endsection