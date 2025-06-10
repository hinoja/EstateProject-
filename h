@extends('layouts.AppAuth')

@section('title', __('Log in'))

@section('content')
<div class="card card-danger shadow-sm border-0">
    <div class="flat-account bg-surface p-4 rounded-3">
        <div class="text-center mb-4">
            <h4 class="title fw-bold text-primary mb-2">@lang('Welcome Back!')</h4>
            <p class="text-muted">@lang('Log in to your account')</p>
        </div>

        <form method="POST" class="row g-4" action="{{ route('login') }}">
            @csrf
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="email" class="form-label fw-medium mb-2">@lang('Email')</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0">
                        <i class="fas fa-envelope text-muted"></i>
                    </span>
                    <input type="email" id="email"
                        class="form-control border-start-0 ps-0 @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}"
                        placeholder="@lang('Enter your email')"
                        tabindex="1" required autofocus>
                </div>
                @error('email')
                    <div class="invalid-feedback d-block mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                <label for="password" class="form-label fw-medium mb-2">@lang('Password')</label>
                <div class="input-group">
                    <span class="input-group-text bg-light border-end-0">
                        <i class="fas fa-lock text-muted"></i>
                    </span>
                    <input type="password" id="password"
                        class="form-control border-start-0 ps-0 password-field @error('password') is-invalid @enderror"
                        name="password"
                        placeholder="@lang('Enter your password')"
                        tabindex="2" required>
                    <button type="button" class="btn btn-light border border-start-0 show-pass"
                            onclick="togglePassword()"
                            aria-label="@lang('Toggle password visibility')">
                        <i class="fas fa-eye text-muted" id="toggleIcon"></i>
                    </button>
                </div>
                @error('password')
                    <div class="invalid-feedback d-block mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
                <div class="form-check">
                    <input type="checkbox" name="remember" class="form-check-input"
                        id="remember-me" tabindex="3">
                    <label class="form-check-label text-muted" for="remember-me">
                        @lang('Remember Me')
                    </label>
                </div>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}"
                        class="text-primary text-decoration-none small">
                        @lang('Forgot your password?')
                    </a>
                @endif
            </div>

            <div class="d-grid gap-2 mt-2">
                <button type="submit" class="tf-btn primary btn-lg">
                    <i class="fas fa-sign-in-alt me-2"></i>@lang('Log in')
                </button>
                <a href="{{ route('home') }}" class="btn btn-light">
                    <i class="fas fa-arrow-left me-2"></i>@lang('Back to home')
                </a>
            </div>
        </form>
    </div>
</div>

<script>
function togglePassword() {
    const password = document.getElementById('password');
    const icon = document.getElementById('toggleIcon');
    if (password.type === 'password') {
        password.type = 'text';
        icon.classList.replace('fa-eye', 'fa-eye-slash');
    } else {
        password.type = 'password';
        icon.classList.replace('fa-eye-slash', 'fa-eye');
    }
}
</script>
@endsection
