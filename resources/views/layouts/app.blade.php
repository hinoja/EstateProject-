<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Well-done Real Estate | @yield('title')</title>

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
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <!-- <link rel="apple-touch-icon-precomposed" href="images/logo/favicon.png"> -->
    @stack('css')
</head>

<body class="body counter-scroll">
    @include('sweetalert::alert')
    <div class="body counter-scroll">
        <div id="wrapper">
            <div id="pagee" class="clearfix">

                <!-- Main Header -->
                <header class="main-header fixed-header">

                    <!-- Header Lower -->
                    @include('include.navBarFront')
                    <!-- End Header Lower -->

                    <!-- Mobile Menu  -->
                    <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
                    <div class="mobile-menu">
                        <div class="menu-backdrop"></div>
                        <nav class="menu-box">
                            <div class="nav-logo"><a href="{{ route('home') }}"><img
                                        src="{{ asset('assets/images/logo/logo.jpg') }}" alt="nav-logo" width="144"
                                        height="55"></a></div>
                            <div class="bottom-canvas">
                                <div class="login-box flex align-items-center">
                                    <a href="#modalLogin" data-bs-toggle="modal">Login</a>
                                    <span>/</span>
                                    <a href="#modalRegister" data-bs-toggle="modal">Register</a>
                                </div>
                                <div class="menu-outer"></div>
                                <div class="mobi-icon-box">
                                    <div class="box d-flex align-items-center">
                                        <span class="icon icon-phone2"></span>
                                        <div>(+237) 6 99 59 19 92</div>
                                    </div>
                                    <div class="box d-flex align-items-center">
                                        <span class="icon icon-mail"></span>
                                        <div>welldonerealestate237@yahoo.com</div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <!-- End Mobile Menu -->
                </header>
                <!-- End Main Header -->


                @yield('content')

                <!-- footer -->
                @include('include.footer')
                <!-- end footer -->

            </div>
            <!-- /#page -->

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
        @stack('js')

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <x-livewire-alert::scripts />
        <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
    </div>

</html>
