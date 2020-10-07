@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12 col-md-offset-2">
        <div class="card card-default">
            <div class="card-body">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fa fa-warning"></i>
                    <strong>En este apartado solo se muestran las etiquetas creadas por el usuario.</strong> 
                </div>
                <a href="{{ route('tags.create') }}" class="pull-right btn btn-sm btn-success">
                    Crear
                </a>
                <h4 class="card-title">Listado de etiquetas</h4>

                <table class="table table-hover-animation mb-1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Creado</th>
                            <th colspan="3">Ver detalle - Editar - Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tags as $tag)
                        <tr>
                            <td class="product-name">{{ $tag->id }}</td>
                            <td>
                                <div class="chip chip-success">
                                    <div class="chip-body">
                                        <div class="chip-text">{{ $tag->name }}</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="chip chip-danger">
                                    <div class="chip-body">
                                        <div class="chip-text">{{$tag->created_at}}</div>
                                    </div>
                                </div>
                            </td>
                            <td width="10px">
                                <a href="" class="btn btn-sm btn-info">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </td>
                            <td width="10px">
                                <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-sm btn-warning">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                            <td width="10px">
                                {!! Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) !!}
                                    <button class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>                           
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>   
                </table>     	

                {{ $tags->render() }}
            </div>
        </div>
    </div>
</div>

@endsection
