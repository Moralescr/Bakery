@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            @if($product->file)
              <img src="{{$product->file}}" class="card-img-top" alt="...">
            @endif
            <hr>
            <p class="lead">
               <b>Nombre:</b>
               <span class="badge badge-info">{{ $product->name }} </span>  | 
               <b>Slug:</b>
               <span class="badge badge-info">{{ $product->slug }}</span>  
            </p>
            <hr class="my-4">
            <p class="lead">
               <span class="badge badge-danger">Descripción:</span> {!! $product->body !!}
            </p>
        </div>
    </div>
</div>
@endsection
