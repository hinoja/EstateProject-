@extends('layouts.AppAuth')

@section('title', __('Log in'))

@section('content')
    <div class="auth-card">
        <div class="text-center mb-4">
            <h4 class="text-primary mb-2">Bienvenue à nouveau !</h4>
            <p class="text-muted"> Veuillez vous connecter à votre compte </p>
        </div>

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf
            <div class="form-group">
                <label for="email" class="form-label fw-medium mb-2">@lang('Email')</label>
                <input type="email" id="email" name="email"
                    class="form-control @error('email') is-invalid @enderror"
                    value="{{ old('email') }}" required autofocus>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group mt-3">
                <label for="password" class="form-label fw-medium mb-2">@lang('Password')</label>
                <div class="input-group">
                    <input type="password" id="password" name="password"
                        class="form-control @error('password') is-invalid @enderror"
                        required>
                    <span class="icon-pass">
                        <i class="fas fa-eye" id="togglePassword"></i>
                    </span>
                </div>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex justify-content-between align-items-center mt-4">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="remember" class="custom-control-input" id="remember-me">
                    <label class="custom-control-label" for="remember-me">@lang('Remember Me')</label>
                </div>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-primary text-decoration-none">
                        @lang('Forgot your password?')
                    </a>
                @endif
            </div>


            <button   type="submit" class=" btn btn-primary  w-100 mt-4 tx">@lang('Log in')</button>

            <div class="text-center mt-4">
                <a href="{{ route('home') }}" class="text-muted text-decoration-none">
                    <i class="fas fa-arrow-left me-2"></i>@lang('Back to home')
                </a>
            </div>
        </form>
    </div>

    @push('js')
    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            const password = document.getElementById('password');
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script>
    @endpush
@endsection
