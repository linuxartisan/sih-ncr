@extends('layouts._staff_')

@section('page_styles')
    <!-- Select2 -->
    <link href="{{ URL::asset('vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet">
@endsection

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item">Basic</li>
    <li class="breadcrumb-item"><a href="{{ action('StaffController@index') }}">Staff</a></li>
    <li class="breadcrumb-item active" aria-current="page">New</li>
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
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Staff <small>Create</small></h2>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                {!! Form::open(['action' => 'StaffController@store',
                                'method' => 'post',
                                'class' => ['form-horizontal'],
                                'id' => 'staff-form',
                                'autocomplete' => 'off']) !!}

                    @include('staff.setup.staff._form')

                    <div class="row form-group">
                        <div class="col-md-4 col-sm-6 col-xs-10 col-md-offset-2">
                            <input type="reset" class="btn btn-default" value="Reset" />
                            <input type="submit" class="btn btn-success" id="btnSave" value="Create" />
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>


@endsection

@section('plugins')
    <!-- jQuery -->
    <script src="{{ URL::asset('js/jquery-validate/jquery.validate.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ URL::asset('vendors/select2/dist/js/select2.full.min.js') }}"></script>
@endsection

@section('page_script')

    @include('staff.setup.staff._form_script')

@endsection
