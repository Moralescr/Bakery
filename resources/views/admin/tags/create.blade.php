@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card card-info">
                <div class="card-body">
                    <a href="{{ route('tags.index') }}" class="pull-right btn btn-sm btn-danger">
                        <i class="fa fa-reply"></i> Regresar 
                    </a>
                    <h4>Creación de una etiqueta</h4>
                    <hr>
                    {!! Form::open(['route' => 'tags.store']) !!}
                    
                    @include('admin.tags.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
