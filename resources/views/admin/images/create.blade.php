@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 col-md-offset-2">
        <div class="card card-info">
            <div class="card-header">
                <h3>Subir fotografía</h3>
                <a href="{{ route('imagess.index') }}" class="pull-right btn btn-sm btn-danger">
                    <i class="fa fa-reply"></i> Regresar 
                </a>
            </div>
            <div class="card-body">
                {!! Form::open(['route' => 'imagess.store', 'files' => true]) !!}
                    
                    @include('admin.images.partials.form')

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
