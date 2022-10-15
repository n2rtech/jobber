<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dalton TV CRM | Forgot Password</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }} ">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }} ">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }} ">
    <!-- Custom.css -->
    <link rel="stylesheet" href="{{ asset('dist/css/custom.css') }}">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="login-logo">
            <a href="{{ route('home') }}"><img src="{{ asset('dist/img/logo.png') }}"/></a>
        </div>
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Forgot Your Password ?</p>

                <form method="POST" action="{{ route('password.email') }}" id="emailForm">
                    @csrf
                    <div class="input-group mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" autocomplete="email" placeholder="Email Address"
                            autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('email')
                            <span id="email-error" class="error invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                </form>

                <div class="social-auth-links text-center mb-3">
                    <button type="submit" form="emailForm" class="btn btn-block btn-black">
                        {{ __('Send Password Reset Link') }}
                    </button>
                    <a href="{{ route('login') }}" class="text-orange mt-2">Back to Login</a>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
</body>

</html>
