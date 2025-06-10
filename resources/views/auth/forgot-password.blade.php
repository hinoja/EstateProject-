@extends('layouts.AppAuth')
@section('title', __('Forgot Password'))
@section('content')
    <div class="auth-card">
        <div class="text-center mb-4">
            <h4 class="text-primary mb-2">@lang('Mot de passe oublié ?')</h4>
            <p class="text-muted">
                {{ __('Pas de problème. Indiquez-nous simplement votre adresse e-mail et nous vous enverrons un lien de réinitialisation qui vous permettra d\'en choisir un nouveau.') }}
            </p>
        </div>

        <x-auth-session-status class="alert alert-success mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}" class="space-y-4">
            @csrf
            <div class="form-group">
                <label for="email" class="form-label fw-medium mb-2">@lang('Email')</label>
                <input type="email" id="email" name="email"
                    class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required
                    autofocus>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button style="border-top: 10px;"  type="submit" class="tx  w-100 mt-8 ">
                @lang('Envoyer le lien de réinitialisation')
            </button>

            <div class="text-center mt-4">
                <a href="{{ route('login') }}" class="text-muted text-decoration-none">
                    <i class="fas fa-arrow-left me-2"></i>@lang('Retour à la connexion')
                </a>
            </div>
        </form>
    </div>
@endsection
