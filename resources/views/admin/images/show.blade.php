@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-xl-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-content">
                @if($image->file)
                    <img src="{{$image->file}}" class="card-img-top" alt="...">
                @endif
                <div class="card-body">
                    <h4 class="card-title">{{ $image->name }}</h4>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
