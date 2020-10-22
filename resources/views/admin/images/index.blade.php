@extends('layouts.app')

@section('content')
<div class="row">
 <div class="col-md-12 col-md-offset-2">
    <div class="card card-info">
        <div class="card-header">
           <!-- <h4 class="mb-0">Dispatched Orders</h4> -->
        </div>
        <div class="card-content">
            <div class="card card-default">
                <div class="card-body">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <i class="fa fa-warning"></i>
                        <strong>En este apartado solo se muestran las fotos subidas por el usuario.</strong> 
                    </div>
                    <a href="{{ route('imagess.create') }}" class="pull-right btn btn-sm btn-success">
                        Crear
                    </a>
                    <h4 class="card-title">Lista de publicaciones</h4>
                    <table class="table table-responsive-xl table-hover-animation mb-1">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Foto</th>
                                <th colspan="3">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($images as $image)
                            <tr>
                                <td>{{ $image->name}}</td>
                                <td class="p-1">
                                @if($image->file)
                                    <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                        <li data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="{{ $image->name }}" class="avatar pull-up">
                                            <img class="media-object rounded-circle" src="{{ $image->file }}" alt="Avatar" height="30" width="30">
                                        </li>
                                    </ul>
                                @endif
                                </td>
                                <td>
                                    <a href="{{ route('imagess.show', $image->id) }}" class="btn btn-sm btn-info">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('imagess.edit', $image->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                                <td>
                                    {!! Form::open(['route' => ['imagess.destroy', $image->id], 'method' => 'DELETE']) !!}
                                       <button class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>                           
                                    {!! Form::close() !!} 
                                </td>
                             
                            </tr>
                            @endforeach
                        </tbody>   
                    </table>     	

                    {{ $images->render() }}
     
                </div>
            </div>  
        </div>
    </div>
  </div>
</div>
@endsection
