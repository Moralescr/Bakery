@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 ">
            <h1>Listado de productos</h1>
            @foreach($products as $product)
            <div class="panel panel-default">
                <div class="panel-heading">{{ $product->name }}</div>

                <div class="panel-body">
                    @if($product->file)
                        <img src="{{ $product->file }}" class="img-responsive">
                    @endif
                    
                    {{ $product->excerpt }}
                    <a href="{{ route('product', $product->slug) }}" class="pull-right">Leer más</a>
                </div>
            </div>
            @endforeach
            {{ $products->render() }}
        </div>
    </div>
</div>
@endsection