
@extends('layouts.app.auth')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <!--register area start-->
        <div class="col-lg-6 col-md-12">
            <div class="login_title">
                <h2>Register</h2>
            </div>
            <div class="login_form form_register ">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="login_input">
                        <label>Name<span>*</span></label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="login_input">
                        <label>Email address <span>*</span></label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="login_input">
                        <label>Password <span>*</span></label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="login_input">
                        <label>Confirm Password<span>*</span></label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="login_submit">
                        <button type="submit">Register</button>
                        <a href="{{route('login')}}">Already have an account?</a>
                    </div>
                </form>
            </div>
        </div>
        <!--register area end-->
    </div>
</div>
@endsection
