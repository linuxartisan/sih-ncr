@extends('layouts.app')

@section('page_styles')
    <link rel="stylesheet" href="{{ URL::asset('vendors/morris.js/morris.css') }}">
@endsection

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item">Basic</li>
    <li class="breadcrumb-item"><a href="{{ action('UserController@index') }}">Chart</a></li>
    <li class="breadcrumb-item active" aria-current="page">Sample</li>
@endsection

@section('content')

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

<div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Example <small>1</small></h2>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div id="bar-chart" style="height: 250px;"></div>
            </div>
        </div>
    </div>

    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Example <small>2</small></h2>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div id="graph" style="height: 250px;"></div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('plugins')
    <!-- morris.js -->
    <script src="{{ URL::asset('vendors/raphael/raphael.min.js') }}"></script>
    <script src="{{ URL::asset('vendors/morris.js/morris.min.js') }}"></script>
@endsection

@section('page_script')
    @include('examples.charts.morris_script')
@endsection
