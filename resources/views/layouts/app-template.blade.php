<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Well-Done Real Estate</title>
    <meta name="author" content="Well-done Real Estate">
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
                                                <img src="{{ asset('assets/images/avatar/avt-2.jpg') }}" alt="avt">
                                            </div>
                                            <p class="name"> {{ Auth::user()->name }}<span
                                                    class="icon icon-arr-down"></span></p>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="my-profile.html"> Profile</a>
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
                </header>
                <!-- end header -->
                <!-- sidebar dashboard -->
                <div class="sidebar-menu-dashboard">
                    <ul class="box-menu-dashboard">
                        <li class="nav-menu-item active"><a class="nav-menu-link" href="{{ route('dashboard') }}"><span
                                    class="icon icon-home"></span>@lang('dashboard')</a></li>

                                    <li class="nav-menu-item"><a class="nav-menu-link" href="{{ route('dashboard.user') }}"><span
                                        class="icon icon-profile"></span>Utilisateurs</a></li>

                            <li class="nav-menu-item"><a class="nav-menu-link" href="{{ route('terrain') }}"><span
                                        class="icon icon-review"></span>Messages</a></li>

                        {{-- <li class="nav-menu-item"><a class="nav-menu-link" href="{{ route('terrain') }}"><span
                                    class="icon icon-list-dashes"></span>Terrains</a></li>
                        <li class="nav-menu-item"><a class="nav-menu-link" href="{{ route('lotissement') }}"><span
                                    class="icon icon-list-dashes"></span>Lotissement</a></li>
                        <li class="nav-menu-item"><a class="nav-menu-link" href="{{ route('engin') }}"><span
                                    class="icon icon-car"></span>Engins</a></li>
                        <li class="nav-menu-item"><a class="nav-menu-link" href="{{ route('ajout') }}">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19.5 3H4.5C4.10218 3 3.72064 3.15804 3.43934 3.43934C3.15804 3.72064 3 4.10218 3 4.5V19.5C3 19.8978 3.15804 20.2794 3.43934 20.5607C3.72064 20.842 4.10218 21 4.5 21H19.5C19.8978 21 20.2794 20.842 20.5607 20.5607C20.842 20.2794 21 19.8978 21 19.5V4.5C21 4.10218 20.842 3.72064 20.5607 3.43934C20.2794 3.15804 19.8978 3 19.5 3ZM19.5 19.5H4.5V4.5H19.5V19.5ZM16.5 12C16.5 12.1989 16.421 12.3897 16.2803 12.5303C16.1397 12.671 15.9489 12.75 15.75 12.75H12.75V15.75C12.75 15.9489 12.671 16.1397 12.5303 16.2803C12.3897 16.421 12.1989 16.5 12 16.5C11.8011 16.5 11.6103 16.421 11.4697 16.2803C11.329 16.1397 11.25 15.9489 11.25 15.75V12.75H8.25C8.05109 12.75 7.86032 12.671 7.71967 12.5303C7.57902 12.3897 7.5 12.1989 7.5 12C7.5 11.8011 7.57902 11.6103 7.71967 11.4697C7.86032 11.329 8.05109 11.25 8.25 11.25H11.25V8.25C11.25 8.05109 11.329 7.86032 11.4697 7.71967C11.6103 7.57902 11.8011 7.5 12 7.5C12.1989 7.5 12.3897 7.57902 12.5303 7.71967C12.671 7.86032 12.75 8.05109 12.75 8.25V11.25H15.75C15.9489 11.25 16.1397 11.329 16.2803 11.4697C16.421 11.6103 16.5 11.8011 16.5 12Z"
                                        fill="#A3ABB0" />
                                </svg>
                                Ajout
                        </li> --}}


                        <li class="nav-menu-item"><a class="nav-menu-link" href="{{ route('profile.edit') }}"><span
                                    class="icon icon-profile"></span>Profile</a></li>
                    </ul>
                </div>
                <!-- end sidebar dashboard -->

                @yield('content')

                <div class="overlay-dashboard"></div>


            </div>
        </div>
        <!-- /#page -->


    </div>


    <!-- progression -->
    {{ include 'assets/components/progress.html' }}


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
