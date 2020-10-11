@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-md-12 col-md-offset-2">
    <div class="card card-info">
        <div class="card-header">
            <h4>Editar categoria</h4>
            <a href="{{ route('categories.index') }}" class="pull-right btn btn-sm btn-danger">
                <i class="fa fa-reply"></i> Regresar 
            </a>   
        </div>
        <div class="card-body"> 
            {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}
                
                @include('admin.categories.partials.form')

            {!! Form::close() !!}
        </div>
    </div>
</div>
</div>
@endsection
