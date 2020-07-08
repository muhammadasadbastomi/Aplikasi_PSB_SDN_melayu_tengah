@extends('layouts.app')

@section('content')


<form method="POST" action="{{ route('register') }}">
    @csrf
    <input id="name" type="text" placeholder="Nama Lengkap" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    @error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

    <input id="email" type="email" placeholder="E-mail" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

    <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

    <input id="password-confirm" placeholder="Konfirmasi Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
    <button type="submit" class="btn btn-primary">
        {{ __('Register') }}
    </button>

</form>
</div>

@endsection
