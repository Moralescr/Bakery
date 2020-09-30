@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <p class="lead">
                    <b>Nombre:</b>
                    <span class="badge badge-info">{{ $category->name }} </span>  | 
                    <b>Slug:</b>
                    <span class="badge badge-info">{{ $category->slug }}</span>  
                    </p>
                    <hr class="my-4">
                    <p class="lead">
                         <span class="badge badge-danger">Descripción:</span> {!!$category->body!!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
