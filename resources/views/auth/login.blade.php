<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Well-Done Real Estate</title>

    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- font -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fonts.css') }}">
    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet"type="text/css" href="{{ asset('assets/css/styles.css') }}" />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/logo.jpg') }}">
    <!-- <link rel="apple-touch-icon-precomposed" href="images/logo/favicon.png"> -->

</head>

<body class="body counter-scroll">

    <body class="body counter-scroll">

        <div id="app">
            <section class="section">
                <div class="container mt-1">
                    <div class="row">
                        <div
                            class="col-12 col-sm-8 offset-sm-2 col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">

                            <div class="login-brand mb-3 text-center">
                                <a href="/"><img src="{{ asset('assets/images/logo/logo.jpg') }}" alt="logo"
                                        width="150px" class="shadow-light rounded-circle">
                                </a>
                            </div>

                            <!-- popup login -->
                            <div class="card card-danger ">
                                <div class="flat-account bg-surface">

                                    <h4 class="title text-center">Se Connecter</h4>

                                    <form method="POST" class="row gap-3" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                            <label for="email" class="control-label">@lang('Email')</label>
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="@if (session()->has('subscription')) {{ session()->get('subscription')['email'] }} @elseif(session()->has('email')){{ session('email') }} @else {{ old('email') }} @endif"
                                                tabindex="1" required autofocus>
                                            @error('email')
                                                <small style="font-size: 11px;"
                                                    class="small invalid-feedback">{{ $message }}</small>
                                            @enderror
                                        </div>

                                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                            <label for="password" class="control-label">@lang('Password')</label>
                                            <div class="box-password">
                                                <input type="password" type="password" name="password" tabindex="2"
                                                    required class="form-contact style-1 password-field"
                                                    placeholder="Password">
                                                <span class="show-pass">
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
                                                    <input type="checkbox" name="remember" class="custom-control-input"
                                                        tabindex="3" id="remember-me">
                                                    <label class="custom-control-label"
                                                        for="remember-me">@lang('Remember Me')</label>
                                                </div>
                                            </div>
                                            <div class="float-right">
                                                @if (Route::has('password.request'))
                                                    <small><a href="{{ route('password.request') }}"
                                                        class="caption-1 text-primary">@lang('Forgot your password?')</a></small>
                                                @endif
                                            </div>
                                        </div>
                                        <button type="submit" class="tf-btn primary w-100">@lang('Log in')</button>
                                        <div class="float-left">
                                            <small><a href="#" class="text-small">@lang('Back to home')</a>
                                        </div>
                                    </form>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </section>
        </div>


        <!-- Javascript -->
        <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/carousel.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/plugin.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/rangle-slider.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/countto.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/shortcodes.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/animation_heading.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>

    </body>

</html>
