@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card card-default">
                <div class="card-body">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fa fa-warning"></i>
                        <strong>En este apartado solo se muestran los productos creados por el usuario.</strong> 
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <a href="{{ route('products.create') }}" class="pull-right btn btn-sm btn-success">
                        Crear
                    </a>
                    <h4 class="card-title">Listado de productos</h4>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">Clave</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
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
@endsection
