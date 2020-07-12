@extends('layouts.app')

@section('info')
<p>Silahkan login jika anda sudah mempunyai akun.</p>
@endsection

@section('content')

<form method="POST" action="{{ route('login') }}">
    @csrf
    <input id="email" type="email" placeholder="E-mail" class="form-control @error('email') is-invalid @enderror"
        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    <input id="password" placeholder="password" type="password"
        class="form-control @error('password') is-invalid @enderror" name="password" required
        autocomplete="current-password">

    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror


    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="remember" id="remember"
            {{ old('remember') ? 'checked' : '' }}>

        <label class="form-check-label" for="remember">
            {{ __('Remember Me') }}
        </label>
    </div>

    <div class="form-button">
        <button id="submit" type="submit" class="ibtn">Login</button>
    </div>
</form>

@endsection
