@extends('auth.layouts.app_auth')

@section('content')
<form class="form-signin" method="POST" action="{{ route('login') }}">
    @csrf
    <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">Вход</h1>
    </div>
    <div class="form-label-group">
        <input id="inputEmail" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
            value="{{ old('email') }}" placeholder="Email address" required autofocus>
        @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
        <label for="inputEmail">Email address</label>
    </div>
    <div class="form-label-group">
        <input id="inputPassword" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
            name="password" placeholder="Password" required autofocus>
        @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
        <label for="inputPassword">Password</label>
    </div>
    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}> Запомнить
            меня
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('Войти') }}</button>
    <a class="btn btn-link" href="{{ route('password.request') }}">
        {{ __('Забыли пароль?') }}
    </a>
    <p class="mb-3 text-muted text-center">All Rights Reserved</p>
</form>
@endsection
