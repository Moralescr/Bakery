@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        	<h1>{{ $product->name }}</h1>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Categoría 
                    <a href="{{ route('category', $product->category->slug) }}">
                        {{ $product->category->name }}
                    </a>
                </div>

                <div class="panel-body">
                    @if($product->file)
                        <img src="{{ $product->file }}" class="img-responsive">
                    @endif
                    
                    {{ $product->excerpt }}
                    <hr>
                    {!! $product->body !!}
                    <hr>

                    Etiquetas
                    @foreach($product->tags as $tag)
                    <a href="{{ route('tag', $tag->slug) }}">
                        {{ $tag->name }}
                    </a>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</div>
@endsection