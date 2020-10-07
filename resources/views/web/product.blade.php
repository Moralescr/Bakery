@extends('layouts.app1')
@section('content')
<!-- Section Blog -->
<section id="blog-main">
    <div class="jumbotron"></div>
    <div class="page-title" data-0="background-position:98% 40px,2% 40px;" data-end="background-position:98% -1200px,2% -1200px">
    <!-- breadcrumb --> 
    <ul class="breadcrumb">
        <li><a href="{{ route('index') }}">Inicio</a> <span class="divider"></span></li>
        <li><a href="{{ route('blog') }}">Nuestro blog</a> <span class="divider"></span></li>
        <li class="active">Post</li>
    </ul>
    <!-- /breadcrumb --> 
    </div>
    <div class="container">
    <div class="row">
        <!-- Blog Post -->
        <div class="col-md-8 blog-home">
            <!-- Content Row -->
            <div class="row">
                <div class="blog-post post-main">
                <h2>{{ $product->name }}</h2>
                <!-- Post Info -->
                <div class="post-info">
                    <p><i class="fa fa-clock-o"></i>Fecha: {{\Carbon\Carbon::parse($product->created_at)->isoformat('DD-MMMM-YYYY')}} </p>
                    <p><i class="fa fa-user"></i>Por <a href="#">{{ $product->user->name }}</a></p>
                    <!-- Post Comments -->
                    <p><i class="fa fa-comment"></i>3 Comments</p>
                </div>
                <!-- Image -->
                @if($product->file)
                <img class="img-responsive img-rounded" src="{{ $product->file }}" alt="">
                @endif
                <div class="post-info">
                    <!-- Tags -->
                    <div class="blog-tags">
                        <p><i class="fa fa-tags"></i>Etiquetas:</p>
                        @foreach($product->tags as $tag)
                        <a href="{{ route('tag', $tag->slug) }}">{{ $tag->name }}</a> 
                        @endforeach
                    </div>
                </div>
                <!-- /post-info -->	
                <!-- Post Content -->
                <blockquote>Men dolor sit amet, consectetur adipisiras sit amet nibh libero, in gravida nulla ulla vel metus scelerisque ante sollicitudin commodo cras purus.</blockquote>
                <p>
                    {{ $product->excerpt}}
                </p>
                <p>
                   {!! $product->body !!}
                </p>
                </div>
                <!-- /blog-post -->
            </div>
            <!-- /row -->
        </div>
        <!-- /blog-home -->
        @include('web.sections.sidebar')
    </div>
    <!-- /row --> 
    </div>
    <!-- /container-->
</section>
<!-- /Section ends -->
@endsection