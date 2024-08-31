@extends('layouts.back')
@section('title', __('profile page'))
@section('content')
    <div class="main-content">
        <div class="main-content-inner wrap-dashboard-content-2">

            <div class="button-show-hide show-mb">
                {{-- <span class="body-1">Show Dashboard</span> --}}
            </div>

            <div class="widget-box-2">
                <div class="box">
                    <h6 class="title">Compte {{ Auth::user()->role->name }} </h6>
                    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                        @csrf
                    </form>

                </div>

                <h6 class="title">Information</h6>
                <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data"
                    class="mt-6 space-y-6">
                    @csrf
                    @method('patch')
                    <div class="row">
                        <div class="col-lg-6">
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                                :value="old('name', $user->name)" required autofocus autocomplete="name" />
                            <x-input-error class="mt-2 fs-12" :messages="$errors->get('name')" />

                        </div>
                        <div class="col-lg-6">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full"
                                :value="old('email', $user->email)" required autocomplete="username" />
                            <x-input-error class="mt-2 fs-12" :messages="$errors->get('email')" />
                            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                                <div>
                                    <p class="text-sm mt-2 text-gray-800">
                                        {{ __('Your email address is unverified.') }}

                                        <button form="send-verification"
                                            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            {{ __('Click here to re-send the verification email.') }}
                                        </button>
                                    </p>

                                    @if (session('status') === 'verification-link-sent')
                                        <p class="mt-2 font-medium text-sm text-green-600">
                                            {{ __('A new verification link has been sent to your email address.') }}
                                        </p>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </div><br>
                    <div class="box grid-4 gap-30 box-info-2">
                        <div class="box-fieldset">
                            <label for="job"> @lang('Created at')<span>
                                    {{ $user->formatDate($user->created_at) }}</span></label>
                        </div>

                    </div>

                    <div class="box">
                        <div class="flex items-center gap-4">
                            <button type="submit" class="tf-btn primary">
                                @lang('Update')
                            </button>
                            @if (session('status') === 'profile-updated')
                                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                    class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                            @endif
                        </div>
                    </div>
                </form>
                <br>
                <hr>
                <br>
                <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('put')
                    <h6 class="title">@lang('Update Password')</h6>
                    <div class="box grid-3 gap-30">
                        <div class="box-password">
                            {{-- <label for="old-pass">Old Password:<span>*</span></label>
                        <div class="box-password">
                            <input type="password" class="form-contact style-1 password-field" placeholder="Password">
                            <span class="show-pass">
                                <i class="icon-pass icon-eye"></i>
                                <i class="icon-pass icon-eye-off"></i>
                            </span>
                        </div> --}}

                            <x-input-label for="update_password_current_password" :value="__('Current password')" />
                            <x-text-input id="update_password_current_password" name="current_password" type="password"
                                class="mt-1 block w-full" autocomplete="current-password" />
                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />

                        </div>
                        <div class="box-password">
                            <div>
                                <x-input-label for="update_password_password" :value="__('New password')" />
                                <x-text-input id="update_password_password" name="password" type="password"
                                    class="mt-1 block w-full" autocomplete="new-password" />
                                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                            </div>
                        </div>
                        <div class="box-password">
                            <div>
                                <x-input-label for="update_password_password_confirmation" :value="__('Confirm Password')" />
                                <x-text-input id="update_password_password_confirmation" name="password_confirmation"
                                    type="password" class="mt-1 block w-full" autocomplete="new-password" />
                                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                            </div>
                        </div>
                    </div>


                    <div class="flex items-center gap-4">
                        <button type="submit" class="tf-btn primary">
                            @lang('Update Password')
                        </button>

                        @if (session('status') === 'password-updated')
                            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                        @endif
                    </div>
                </form>

            </div>

        </div>

    </div>
    <div class="footer-dashboard">
        <p class="text-variant-2">©2024 Homzen. All Rights Reserved.</p>
    </div>
    </div>
@endsection
