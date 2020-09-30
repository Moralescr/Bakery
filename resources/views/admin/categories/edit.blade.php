@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card card-info">
                <div class="card-body">
                   <a href="{{ route('categories.index') }}" class="pull-right btn btn-sm btn-danger">
                   <i class="fa fa-reply"></i> Regresar 
                    </a>
                    <h4 class="card-title">Editar una categoría</h4>
                    <hr>
                    {!! Form::model($category, ['route' => ['categories.update', $category->id], 'method' => 'PUT']) !!}
                        
                        @include('admin.categories.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
