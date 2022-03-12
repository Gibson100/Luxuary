@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>Spice Hotel | Bootstrap 4 Admin Dashboard Template + UI Kit</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="assets/plugins/iconic/css/material-design-iconic-font.min.css">
    <!-- bootstrap -->
    <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="/assets/css/pages/extra_pages.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="/assets/img/favicon.ico" />
</head>
<body>
<div class="limiter">
    <div class="container-login100 page-background">
        <div class="wrap-login100">
{{--            {{ dd(route('login')) }}--}}
            <form class="login100-form" method="POST" action="{{ route('login') }}">
            @csrf
            <span class="login100-form-logo">
						<i class="zmdi zmdi-flower"></i>
					</span>
            <span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
            <div class="wrap-input100">
                <input class="input100" type="text" name="email" placeholder="Email">
                <span class="focus-input100  @error('email') is-invalid @enderror" data-placeholder="&#xf207;"></span>
                @error('email')
                <span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
                @enderror
            </div>
            <div class="wrap-input100 validate-input">
                <input class="input100  @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                @error('password')
                <span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
                @enderror
            </div>
            <div class="contact100-form-checkbox">
                <input class="input-checkbox100" id="checkbox" type="checkbox" name="remember-me">
                <label class="label-checkbox100" for="checkbox">
                    Remember me
                </label>
            </div>

            <div class="container-login100-form-btn">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="login100-form-btn">
                        {{ __('Login') }}
                    </button>
                </div>
                <div class="text-center p-t-90">
                    @if (Route::has('password.request'))
                        <a class="txt1" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- start js include path -->
<script src="/assets/plugins/jquery/jquery.min.js" ></script>
<!-- bootstrap -->
<script src="/assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
<script src="/assets/js/pages/extra_pages/login.js" ></script>
<!-- end js include path -->
</body>
</html>
@endsection
