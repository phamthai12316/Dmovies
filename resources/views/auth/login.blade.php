
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
     <link rel="icon" type="image/png" href="{{ asset('/images/icons/darkmovies.png') }}" />
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body style="background-color: #222222;">

 <div class="login-clean">
            <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="illustration"><img class="adlogo" src="{{ URL::to('images/admin/admin.png') }}" data-bs-hover-animate="rubberBand"></div>
            <div class="form-group"><input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  required autofocus>
               @if ($errors->has('email'))
                     <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
               @endif
            </div>
            <div class="form-group"><input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                              @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
            </div>
            <div class="form-group"><button class="btn btn-primary btn-block"  type="submit">Log In</button></div>@if (Route::has('dm.admin.password.request'))
            <a href="{{ route('dm.admin.password.request') }}" class="forgot">Forgot your email or password?</a>
              @endif</form>

</div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>

</html>
