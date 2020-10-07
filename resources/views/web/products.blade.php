@extends('layouts.app1')
@section('content')	
<!-- Section Blog -->
<section id="blog-main">
    <div class="jumbotron"></div>
    <div class="page-title" data-0="background-position:98% 40px,2% 40px;" data-end="background-position:98% -400px,2% -400px">
    <h1>Nuestro blog</h1>
    <!-- breadcrumb --> 
    <ul class="breadcrumb">
        <li><a href="{{ route('index')}}">Inicio</a> <span class="divider"></span></li>
        <li class="active">Nuestro blog</li>
    </ul>
    <!-- /breadcrumb --> 
    </div>
    <div class="container">
    <div class="row">
        <!-- Blog Home -->
        <div class="col-md-8">
            <div class="row">
                @foreach($products as $product)
                <!-- Blog Post 1 -->
                <div class="blog-post col-md-12">
                <!-- blog image -->
                <div class="img-zoom">
                    @if($product->file)
                       <a href="{{ route('post', $product->slug) }}">
                          <img class="img-responsive" src="{{ $product->file }}" alt="">
                      </a>
                    @endif
                </div>
                <!-- post info -->
                <div class="post-review">
                    <!-- Comments -->
                    <ul class="post-comment">
                        <li>28<small>Oct</small></li>
                        <li><i class="fa fa-comments-o"></i><a href="#"><small>12</small></a></li>
                    </ul>
                    <!-- Title -->
                    <h4 class="post-title">
                        <a href="{{ route('post', $product->slug) }}">{{ $product->name }}</a>
                    </h4>
                    <!-- Description -->
                    <p class="post-description">
                        {{ $product->excerpt }}
                    </p>
                    <!-- Button -->
                    <div class="text-center page-scroll">
                        <a class="btn" href="{{ route('post', $product->slug) }}">
                            <div class="btn-line"></div>
                            <div class="btn-line btn-line-shift"></div>
                            Read More
                        </a>
                    </div>
                </div>
                <!-- /Post-review -->
                </div>
                <!-- /blog-post-->
                @endforeach
            </div>
            <!-- /row-->                  
        </div>
        <!-- /col-md-8 -->
        
        @include('web.sections.sidebar')
        <!-- Pagination -->
        {{ $products->render() }} 
    </div>
    <!-- /row --> 
    </div>
    <!-- /container-->
</section>
<!-- /Section ends -->
@endsection