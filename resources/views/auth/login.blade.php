@extends('layouts.auth')
@section('content')
@include('errors.formerror')
<form method="POST" action="{{ route('login') }}" autocomplete="off" class="card card-md">
  @csrf
  <div class="card-body">
    <h2 class="card-title text-center mb-4">{{ __('auth.login') }}</h2>
    <div class="mb-3">
      <label class="form-label">{{ __('auth.fields.email') }}</label>
      <input class="form-control" type="email" name="email" placeholder="{{ __('auth.placeholder.email') }}"
        value="{{ old('email') }}" required autofocus tabindex="1" />
    </div>
    <div class="mb-2">
      <label class="form-label">
        {{ __('auth.fields.password') }}
      </label>
      <div class="input-group input-group-flat">
        <input class="form-control" type="password" name="password" placeholder="{{ __('auth.placeholder.password') }}"
          value="{{ old('password') }}" required tabindex="2" />
      </div>
    </div>
    <div class="form-footer">
        <button type="submit" class="btn btn-primary w-100" tabindex="4">{{ __('auth.loginbutton') }}</button>
    </div>
  </div>
</form>
<div class="text-center text-muted mt-3">
    <a href="{{ route('sociallogin') }}" class="btn btn-google w-100">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M17.788 5.108a9 9 0 1 0 3.212 6.892h-8"></path></svg>
        Google Login
    </a>
</div>
@if(Route::has('register'))
<div class="text-center text-muted mt-3">
  <a href="{{ route('register') }}" tabindex="-1">{{ __('auth.createaccount') }}</a>
</div>
@endif
@endsection
