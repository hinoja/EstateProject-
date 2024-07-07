@extends('layouts.AppAuth')

@section('title', __('Log in'))

@section('content')
    <div class="card card-danger ">
        <div class="flat-account bg-surface">

            <h5 class="title text-center">@lang('Log in')</h5>

            <form method="POST" class="row gap-3" action="{{ route('login') }}">
                @csrf
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
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="password" class="control-label">@lang('Password')</label>
                    <div class="box-password">
                        <input style="height: 2.5rem;" type="password" type="password" name="password" tabindex="2"
                            required class="form-contact style-1 password-field" placeholder="Password">
                        <span class="show-pass p-0 m-0">
                            <i class="icon-pass icon-eye"></i>
                            <i class="icon-pass icon-eye-off"></i>
                        </span>
                    </div>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-between flex-wrap gap-12">
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="remember" class="custom-control-input" tabindex="3"
                                id="remember-me">
                            <label class="custom-control-label" for="remember-me">@lang('Remember Me')</label>
                        </div>
                    </div>
                    <div class="float-right">
                        @if (Route::has('password.request'))
                            <small><a href="{{ route('password.request') }}"
                                    class="caption-1 text-primary">@lang('Forgot your password?')</a></small>
                        @endif
                    </div>
                </div>

                <button type="submit" class="tf-btn primary w-80 text-center">@lang('Log in')</button>


                <small class="float-left fs-12"><a href="{{ route('home') }}" style="color: rgb(81,132,197)"
                        class="text-small"><i class="fas fa-arrow-left"></i>
                        @lang('Back to home')</a>

            </form>

        </div>
    </div>
@endsection
