@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 col-md-offset-2">
        <div class="card card-info">
            <div class="card-header">
                <h3>Crear publicación</h3>
                <a href="{{ route('products.index') }}" class="pull-right btn btn-sm btn-danger">
                    <i class="fa fa-reply"></i> Regresar 
                </a>
            </div>
            <div class="card-body">
                {!! Form::open(['route' => 'products.store', 'files' => true]) !!}
                    
                    @include('admin.products.partials.formcreate')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
