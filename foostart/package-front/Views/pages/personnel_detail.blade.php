@extends('package-front::layouts.foostart')

<!--/TITLE-->
@section('title')
    {!! $title !!}
@stop

<!--ASSETS-->
@section('asset_lib')
    @foreach ($assets as $item)
        {!! $item !!}
    @endforeach
@stop

<!--CONTENT-->
@section('content')
    @include('package-front::blocks.133-content')
    
    @include('package-front::blocks.135-content')
    
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @include('package-front::blocks.147-content')
            </div>
            <div class="col-md-4">
                @include('package-front::blocks.152-content')
                @include('package-front::blocks.155-content')
            </div>
        </div>
    </div>
    
    @include('package-front::blocks.177-content')
@stop