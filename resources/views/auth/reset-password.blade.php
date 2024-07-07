@extends('layouts.AppAuth')
@section('title', __('Reset Password'))
@section('content')
    <div class="card card-danger ">
        <div class="flat-account bg-surface">



            <form method="POST" action="{{ route('password.store') }}">
                @csrf

                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

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

                <!-- Password -->

                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password" class="control-label">@lang('Password')</label>
                    <input style="height: 2.5rem;" id="password" type="password"
                        class="form-control  @error('password') is-invalid @enderror" name="password"
                        value="{{ old('password') }}" tabindex="1" required autocomplete="new-password">
                    @error('password')
                        <small style="font-size: 11px;" class="small invalid-feedback">{{ $message }}</small>
                    @enderror
                </div>
                <!-- Confirm Password -->

                <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                    <label for="password_confirmation" class="control-label">{{ __('Confirm Password') }}</label>
                    <input style="height: 2.5rem;" id="password_confirmation" type="password"
                        class="form-control  @error('password_confirmation') is-invalid @enderror"
                        name="password_confirmation" value="{{ old('password_confirmation') }}" tabindex="1" required
                        autofocus>
                    @error('password_confirmation')
                        <small style="font-size: 11px;" class="small invalid-feedback">{{ $message }}</small>
                    @enderror
                </div>

                <div class="d-flex justify-content-between flex-wrap gap-12">


                </div>

                <button type="submit" style="margin-left: auto;margin-right: auto;"
                    class="tf-btn primary w-100 ">{{ __('Reset Password') }}</button>


                <small class="float-left fs-12"><a href="{{ route('home') }}" style="color: rgb(81,132,197)"
                        class="text-small"><i class="fas fa-arrow-left"></i>
                        @lang('Back to home')</a>

            </form>

        </div>
    </div>
@endsection
