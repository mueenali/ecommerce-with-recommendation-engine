@extends('layouts.app.auth')
@section('content')
<div class="container" style="margin-top: 100px">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-12">
            <div class="account_form">
                <div class="login_title">
                    <h2>login</h2>
                </div>
                <div class="login_form login">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="login_input">
                            <label>Username or email <span>*</span></label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="login_input">
                            <label>Passwords  <span>*</span></label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="login_submit">
                            <button type="submit">login</button>
                            <label for="remember">
                                <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                Remember me
                            </label>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                            <a style="margin-right: 370px" class="btn btn-link" href="{{ route('register') }}">Don't have an account?</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--login area start-->
    </div>
</div>
@endsection
