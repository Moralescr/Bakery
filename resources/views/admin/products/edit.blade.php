@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 col-md-offset-2">
        <div class="card card-info">
            <div class="card-header">
               <h3 class="card-title">Editar publicación</h3>
               <a href="{{ route('products.index') }}" class="pull-right btn btn-sm btn-danger">
                  <i class="fa fa-reply"></i> Regresar 
               </a>
            </div>
            <div class="card-body">
                {!! Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT', 'files' => true]) !!}
                    
                    @include('admin.products.partials.form')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
