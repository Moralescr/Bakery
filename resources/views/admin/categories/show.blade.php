@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-xl-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="card-content">
               
                <div class="card-body">
                    <h4 class="card-title">{{ $category->name }}</h4>
                    <p class="card-text">
                        {!!$category->body!!}
                    </p>
                    <p class="card-text"><span class="badge badge-danger">{{ $category->slug }}</span></p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
</div>
   
@endsection
