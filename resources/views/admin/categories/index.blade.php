@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-md-12 col-md-offset-2">
    <div class="card card-default">
        <div class="card-body">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fa fa-warning"></i>
                <strong>En este apartado solo se muestran las categorias creadas por el usuario.</strong> 
            </div>
            <a href="{{ route('categories.create') }}" class="pull-right btn btn-sm btn-success">
                Crear
            </a>
            <h4 class="card-title">Listado de categorias</h4>

            <table class="table table-responsive-xl table-hover-animation mb-1">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Creado</th>
                        <th colspan="3">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td>
                            <div class="chip chip-danger">
                                <div class="chip-body">
                                    <div class="chip-text">{{ $category->created_at }}</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-sm btn-info">
                                <i class="fa fa-eye"></i>
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-warning">
                                <i class="fa fa-edit"></i> 
                            </a>
                        </td>
                        <td>
                            {!! Form::open(['route' => ['categories.destroy', $category->id], 'method' => 'DELETE']) !!}
                                <button class="btn btn-sm btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>                           
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>   
            </table>     	

            {{ $categories->render() }}
        </div>
    </div>
</div>
</div>
@endsection
