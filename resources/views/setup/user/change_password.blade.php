@extends('layouts.app')

@section('page_styles')
    
@endsection

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
    <li class="breadcrumb-item">Basic</li>
    <li class="breadcrumb-item"><a href="{{ action('UserController@index') }}">User</a></li>
    <li class="breadcrumb-item active" aria-current="page">Change Password</li>
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
                <h2>User <small>Change Password</small></h2>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                {!! Form::open(['action' => 'UserController@changePassword',
                                'method' => 'post',
                                'class' => ['form-horizontal'],
                                'id' => 'user-change-password-form',
                                'autocomplete' => 'off']) !!}

                    @include('setup.user._change_password_form')

                    <div class="row form-group">
                        <div class="col-md-4 col-sm-6 col-xs-10 col-md-offset-2">
                            <input type="reset" class="btn btn-default" value="Reset" />
                            <input type="submit" class="btn btn-success" id="btnSave" value="Change Password" />
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
@endsection

@section('page_script')

    @include('setup.user._change_password_form_script')

@endsection
