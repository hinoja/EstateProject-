@extends('layouts.AppAuth')
@section('title', __('Forgot Password'))
@section('content')
    <div class="card card-danger ">
        <div class="flat-account bg-surface">

            <h6 class="title text-center mb-4 text-gray-600">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}

            </h6>

            <x-auth-session-status class="mb-4 text text-primary" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <!-- Email Address -->
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email" class="control-label">@lang('Email')</label>
                    <input style="height: 2.5rem;" id="email" type="email"
                        class="form-control  @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" tabindex="1" required autofocus>
                    @error('email')
                        <small style="font-size: 11px;" class="small invalid-feedback">{{ $message }}</small>
                    @enderror
                </div>
                <br>


                <div class="d-flex justify-content-between flex-wrap gap-12">


                </div>

                <button type="submit" style="background-color: rgb(237,44,89): auto;margin-right: auto;"
                    class="tf-btn primary w-100 ">{{ __('Email Password Reset Link') }}</button>


                <small class="float-left fs-12"><a href="{{ route('home') }}" style="color: rgb(81,132,197)"
                        class="text-small"><i class="fas fa-arrow-left"></i>
                        @lang('Back to home')</a>

            </form>

        </div>
    </div>
@endsection
