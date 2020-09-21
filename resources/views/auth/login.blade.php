@extends('layouts.auth')

@section('content')
<div class="login-box">
  <div class="login-logo">
    <a href=""><b>Broadband Client Management</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">
   
    </p>

    <form action="{{ route('login') }}" method="POST">
    @csrf
      <div class="form-group has-feedback">
        <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Email" autocomplete="email" required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
         @enderror
      </div>

      <div class="form-group has-feedback">
        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" autocomplete="password" required autofocus>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    @if (Route::has('password.request'))
    <a href="{{ route('password.request') }}">I forgot my password</a>
    @endif
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection
