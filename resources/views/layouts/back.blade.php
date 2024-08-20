<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Well-Done REAL Estate. SCI.') }} | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- font -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet"type="text/css" href="{{ asset('assets/css/styles.css') }}" />

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favicon.png') }}">

    {{-- -- Fontawesome Css --> --}}
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    @livewireStyles
</head>

<body class="body bg-surface counter-scroll">
    <div id="wrapper">
        <div id="page" class="clearfix">
            <div class="layout-wrap">
                <!-- header -->

                <header class="main-header fixed-header header-dashboard">
                    <!-- Header Lower -->
                    <div class="header-lower">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="inner-container d-flex justify-content-between align-items-center">
                                    <!-- Logo Box -->
                                    <div class="logo-box d-flex">
                                        <div class="logo"><a href="{{ route('home') }}"><img
                                                    src="{{ asset('assets/images/logo/logo.jpg') }}" alt="logo"
                                                    width="98" height="44"></a></div>
                                        <div class="button-show-hide">
                                            <span class="icon icon-categories"></span>
                                        </div>
                                    </div>
                                    <div class="header-account">
                                        <a href="#" class="box-avatar dropdown-toggle" data-bs-toggle="dropdown">
                                            <div class="avatar avt-40 round">
                                                <img src="{{ asset('assets/images/avatar/user-default.png') }}"
                                                    alt="avt">
                                            </div>
                                            <p class="name">{{ Auth::user()->name }}<span
                                                    class="icon icon-arr-down"></span></p>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="{{ route('home') }}">
                                                    @lang('Back to home')</a>

                                                <a class="dropdown-item"
                                                    href="{{ route('dashboard') }}">@lang('dashboard')</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('dashboard.users') }}">Utilisateurs</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('dashboard.messages') }}">Messages</a>
                                                <a class="dropdown-item"
                                                    href="{{ route('dashboard.estates') }}">Terrains</a>

                                                <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>
                                                <form method="POST" action="{{ route('logout') }}">
                                                    @csrf
                                                    <li>
                                                        <a href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                                    this.closest('form').submit();"
                                                            class="dropdown-item"> @lang('Log Out')
                                                        </a>
                                                    </li>
                                                </form>

                                            </div>
                                        </a>

                                    </div>

                                    <div class="mobile-nav-toggler mobile-button"><span></span></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Header Lower -->
                    @php
                        $currentUri = Route::current()->uri;
                    @endphp
                    <!-- Mobile Menu  -->
                    <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
                    <div class="mobile-menu">
                        <div class="menu-backdrop"></div>
                        <nav class="menu-box">
                            <div class="nav-logo"><a href="{{ route('home') }}"><img
                                        src="{{ asset('assets/images/logo/logo.jpg') }}" alt="nav-logo" width="144"
                                        height="55"></a></div>
                            <div class="bottom-canvas">
                                <div class="menu-outer"></div>
                                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">

                                        <li
                                            class=" dropdown2 nav-menu-item @if (Str::contains($currentUri, 'index')) active @endif">
                                            <a class="nav-menu-link" href="{{ route('dashboard') }}"><span
                                                    class="icon icon-home"></span>@lang('dashboard')</a>
                                        </li>

                                        @auth
                                            @if (Auth::user()->role_id < 3)
                                                <li class="nav-menu-item @if (Str::contains($currentUri, 'users')) active @endif"><a
                                                        class="nav-menu-link" href="{{ route('dashboard.users') }}"><span
                                                            class="fas fa-users"></span>Utilisateurs</a></li>
                                            @endif
                                        @endauth

                                        <li class="nav-menu-item @if (Str::contains($currentUri, 'message')) active @endif"><a
                                                class="nav-menu-link" href="{{ route('dashboard.messages') }}"><span
                                                    class="icon icon-review"></span>Messages</a></li>

                                        <li class="nav-menu-item @if (Str::contains($currentUri, 'estate')) active @endif"><a
                                                class="nav-menu-link" href="{{ route('dashboard.estates') }}"><span
                                                    class="icon icon-list-dashes"></span>Terrains</a></li>

                                        <li class="nav-menu-item @if (Str::contains($currentUri, 'profile')) active @endif"><a
                                                class="nav-menu-link" href="{{ route('profile.edit') }}"><span
                                                    class="icon icon-profile"></span>Profile</a></li>


                                    </ul>


                                </div>
                                <div class="mobi-icon-box">
                                    <div class="button-mobi-sell">

                                        {{-- <a class="tf-btn primary" href="add-property.html">Submit Property</a> --}}
                                    </div>
                                    <div class="box d-flex align-items-center">
                                        <span class="icon icon-phone2"></span>
                                        <div>(+237) 6 99 59 19 92</div>
                                    </div>
                                    <div class="box d-flex align-items-center">
                                        <span class="icon icon-mail"></span>
                                        <div><small style="font-size: 0.85em">
                                                contact@welldonerealestatesci.com</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <!-- End Mobile Menu -->

                </header>
                <!-- end header -->
                <!-- sidebar dashboard -->
                @include('include.sidebar')

                <!-- end sidebar dashboard -->

                @yield('content')

                <div class="overlay-dashboard"></div>
            </div>
        </div>
        <!-- /#page -->
    </div>
    <!-- go top -->
    <div class="progress-wrap active progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;">
            </path>
        </svg>
    </div>


    <!-- Javascript -->
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/plugin.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jqueryui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/shortcodes.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>

    @stack('js')
    @livewireScripts
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <x-livewire-alert::scripts />
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    {!! Toastr::message() !!}
</body>

</html>
