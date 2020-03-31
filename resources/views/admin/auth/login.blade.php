<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name', 'Aladdin || Log In') }}</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  @include('admin.partials.link_login')
</head>

<body class="hold-transition skin-blue sidebar-mini">

  <form class="text-center border border-light p-5" action="#" method="post">
    @csrf

    <p class="h4 mb-4">Sign in</p>

    <!-- Email -->
    <input type="email" id="email" name="email" class="form-control mb-4 @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail">

      @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
      <!-- Password -->
      <input id="password" type="password" class="form-control mb-4 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

        @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror

        <div class="d-flex justify-content-around">

          @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
              {{ __('Forgot Your Password?') }}
            </a>
          @endif
        </div>

        <!-- Sign in button -->
        <button class="btn btn-info btn-block my-4" type="submit">{{ __('Login') }}</button>



        <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
        <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
        <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
        <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

      </form>
      <!-- Default form login -->





      <!-- ./wrapper -->

      <!-- REQUIRED JS SCRIPTS -->
      @include('admin.partials.script')

    </body>
    </html>
