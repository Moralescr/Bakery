@extends('layouts.app1')
@section('content')	
<!-- Section Blog -->
<section id="blog-main">
    <div class="jumbotron"></div>
    <div class="page-title" data-0="background-position:98% 40px,2% 40px;" data-end="background-position:98% -400px,2% -400px">
    <h3 style="color:white">Nuestro blog</h3>
    <!-- breadcrumb --> 
    <ul class="breadcrumb">
        <li><a href="{{ route('index')}}">Inicio</a> <span class="divider"></span></li>
        <li class="active">Nuestro blog</li>
    </ul>
    <!-- /breadcrumb --> 
    </div>
    <!-- Section Blogprev --> 
<section id="blog-preview">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div id="owl-blog" class="owl-carousel">
            @foreach($posts as $post)
               <!-- Blog Post 4 -->
               <div class="blog-post">
                  <!-- blog image -->
                  <div class="img-zoom">
                     @if($post->file)
                     <a href="#">
                     <img class="img-responsive" src="{{$post->file}}" alt="">
                     </a>
                     @endif
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
                     <h4 class="post-title text-justify">
                        <a href="{{route('post', $post->slug)}}">{{$post->name}}</a>
                     </h4>
                     <!-- Description -->
                     <p class="post-description text-justify">
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
      <!-- Pagination -->
      {{ $posts->render() }} 
   </div>
   <!--/container -->
</section>
<!--/section -->

</section>
<!-- /Section ends -->
@endsection