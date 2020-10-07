@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xl-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-content">
                @if($product->file)
                    <img src="{{$product->file}}" class="card-img-top" alt="...">
                @endif
                <div class="card-body">
                    <h4 class="card-title">{{ $product->name }}</h4>
                    <p class="card-text">
                        {!! $product->body !!}
                    </p>
                    <p class="card-text"><span class="badge badge-danger">{{ $product->slug }}</span></p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
