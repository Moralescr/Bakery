@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h3>Visualizar etiqueta</h3>
            <hr>
            <p class="lead">
                <b>Nombre:</b>
                <span class="badge badge-info">{{ $tag->name }} </span>  | 
                <b>Slug:</b>
                <span class="badge badge-info">{{ $tag->slug }}</span>  
            </p>
            <hr class="my-4">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fa fa-warning"></i>
                <strong>En este apartado solo se muestran las etiquetas creadas por el usuario.</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
