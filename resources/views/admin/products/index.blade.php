@extends('layouts.app')

@section('content')
<div class="row">
 <div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="mb-0">Dispatched Orders</h4>
        </div>
        <div class="card-content">
            <div class="card card-default">
                <div class="card-body">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fa fa-warning"></i>
                        <strong>En este apartado solo se muestran las publicaciones creadas por el usuario.</strong> 
                    </div>
                    <a href="{{ route('products.create') }}" class="pull-right btn btn-sm btn-success">
                        Crear
                    </a>
                    <h4 class="card-title">Lista de publicaciones</h4>
                    <table class="table table-hover-animation mb-1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Título de la publicación</th>
                                <th>Foto</th>
                                <th>Creado</th>
                                <th>Estado</th>
                                <th colspan="3">Ver detalle - Editar - Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td class="p-1">
                                @if($product->file)
                                    <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="{{ $product->name }}" class="avatar pull-up">
                                            <img class="media-object rounded-circle" src="{{ $product->file}}" alt="Avatar" height="30" width="30">
                                        </li>
                                    </ul>
                                @endif
                                </td>
                                <td>
                                    <div class="chip chip-danger">
                                        <div class="chip-body">
                                            <div class="chip-text">{{ $product->created_at }}</div>
                                        </div>
                                    </div>
                                </td>
                                <th><i class="fa fa-circle font-small-3 text-success mr-50"></i>{{ $product->status}}</th>
                                <td width="10px">
                                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-sm btn-info">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                                <td width="10px">
                                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route' => ['products.destroy', $product->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>                           
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>   
                    </table>     	

                    {{ $products->render() }}
                </div>
            </div>  
        </div>
    </div>
  </div>
</div>
@endsection
