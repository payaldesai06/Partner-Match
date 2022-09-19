@extends('layouts.auth')
@section('css_after')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">@endsection
@section('js_after')
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="{{ asset('js/pages/user.js') }}"></script>
@endsection
@section('content')
<form method="POST" action="{{ route('register') }}" class="card card-md">
    @csrf
    <div class="card-body">
        <h2 class="mb-3 text-center">{{ __('auth.register') }}</h2>
        <h4 class="mb-3 text-center">Basic Information</h4>
        <div class="mb-3">
            <label class="form-label required">First Name</label>
            <input type="text" maxlength="255" name="first_name" value="{{ old('first_name') }}" required autofocus autocomplete="first_name"
                class="form-control" placeholder="First name" tabindex="1">
        </div>
        <div class="mb-3">
            <label class="form-label required">Last Name</label>
            <input type="text" maxlength="255" name="last_name" value="{{ old('last_name') }}" required autofocus autocomplete="last_name"
                class="form-control" placeholder="Last name" tabindex="1">
        </div>
        <div class="mb-3">
            <label class="form-label required">Email</label>
            <input type="email" maxlength="255" name="email" value="{{ old('email') }}" required class="form-control"
                placeholder="Email" tabindex="2">
        </div>
        <div class="mb-3">
            <label class="form-label required">{{ __('auth.fields.password') }}</label>
            <div class="input-group input-group-flat">
                <input type="password" maxlength="255" name="password" required autocomplete="new-password" class="form-control"
                    placeholder="{{ __('auth.placeholder.password') }}" tabindex="3">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label required">{{ __('auth.fields.passwordconfirmation') }}</label>
            <input type="password" name="password_confirmation" required autocomplete="new-password"
                class="form-control" placeholder="{{ __('auth.placeholder.passwordconfirmation') }}" tabindex="4">
        </div>
        <div class="mb-3">
            <label class="form-label required">Gender</label>
            <input type="radio" name="gender" value="male" class="form-check-input"> Male
            <input type="radio" name="gender" value="female" class="form-check-input"> Female
        </div>
        <div class="mb-3">
            <label class="form-label required">Date Of Birth</label>
            <input type="date" name="dob" value="{{ old('dob') }}" max="<?php echo date("Y-m-d"); ?>" autofocus autocomplete="dob"
                class="form-control" placeholder="Date Of Birth" tabindex="1" required>
        </div>
        <div class="mb-3">
            <label class="form-label required">Annual income($)</label>
            <input type="number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" name="annual_income" value="{{ old('annual_income') }}" autofocus autocomplete="annual_income"
                class="form-control" placeholder="Annual income" tabindex="1" required>
        </div>
        <div class="mb-3">
            <label class="form-label required">Occupation</label>
            <select class="form-control" name="occupation" required>
                <option value="">Select</option>
                <option>Private job</option>
                <option>Government Job</option>
                <option>Business</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label required">Family type</label>
            <select class="form-control" name="family_type" required>
                <option value="">Select</option>
                <option>Joint family</option>
                <option>Nuclear family</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label required">Manglik</label>
            <select class="form-control" name="manglik_status" required>
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </div>
        <h4 class="mb-3 text-center">Partner Preference</h4>
        <div class="mb-3">
            <label class="form-label required">Expected annual income($)</label>
            <input type="text" id="expected_annual_income" name="expected_annual_income" class="form-control">
            <div id="slider-range"></div>
        </div>
        <div class="mb-3">
            <label class="form-label required">Expected occupation</label>
            <select class="form-control" name="expected_occupation" required>
                <option value="">Select</option>
                <option>Private job</option>
                <option>Government Job</option>
                <option>Business</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label required">Expected family type</label>
            <select class="form-control" name="expected_family_type" required>
                <option value="">Select</option>
                <option>Joint family</option>
                <option>Nuclear family</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label required">Expected manglik status</label>
            <select class="form-control" name="expected_manglik_status" required>
                <option value="0">No</option>
                <option value="1">Yes</option>
            </select>
        </div>
        <div class="form-footer">
            <button type="submit" class="btn btn-primary btn-block"
                tabindex="5">{{ __('auth.registerbutton') }}</button>
        </div>
    </div>
</form>
<div class="text-center text-muted">
    <a href="{{ route('login') }}" tabindex="-1">{{ __('auth.login') }}</a>
</div>
@endsection
