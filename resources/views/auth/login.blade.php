@extends('layouts.auth')

@section('content')

<div class="login_wrapper">
    <div class="animate form login_form">
      <section class="login_content">
        @if($errors->any())
          <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
            </ul>
          </div>
        @endif
        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
          @csrf
          <h1>{{ __('Login') }}</h1>
          <div>
            <input type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required="" autofocus />
          </div>
          <div>
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
          </div>
          <div>
            <button type="submit" class="btn btn-info btn-lg submit">Log in</button>
            {{-- <a class="reset_pass" href="{{ route('password.request') }}">Lost your password?</a> --}}
          </div>

          <div class="clearfix"></div>

          <div class="separator">

            <div class="clearfix"></div>
            <br />

            <div>
              <h1><i class="fa fa-paw"></i> {{ config('app.name', 'Laravel') }}</h1>
            </div>
          </div>
        </form>
      </section>
    </div>
</div>
@endsection