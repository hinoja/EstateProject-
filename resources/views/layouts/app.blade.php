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
        <div id="wrapper">
            <div id="pagee" class="clearfix">

                <!-- Main Header -->
                <header class="main-header fixed-header">
                    
                    <!-- Header Lower -->
                    <div class="header-lower">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="inner-container d-flex justify-content-between align-items-center">
                                    <!-- Logo Box -->
                                    <div class="logo-box">
                                        <div class="logo"><a href="{{ route('home') }}"><img
                                                    src="{{ asset('assets/images/logo/logo.jpg') }}" alt="logo"
                                                    width="80" height="44"></a></div>
                                    </div>
                                    <div class="nav-outer">
                                        <!-- Main Menu -->
                                        <nav class="main-menu show navbar-expand-md">
                                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                                <ul class="navigation clearfix">
                                                    <li class="current"><a href="{{ route('home') }}">Accueil</a> </li>
                                                    <li class=""><a href="#services">Services</a> </li>
                                                    <li class=""><a href="#">A propos De Nous</a></li>
                                                    <li class=""><a href="{{ route('contact') }}">Contact</a> </li>
                                                </ul>
                                            </div>
                                        </nav>
                                        <!-- Main Menu End-->
                                    </div>


                                    <div class="header-account">
                                        <div class="register">
                                            <ul class="d-flex">

                                                @auth
                                                    <div class="nav-item dropdown auth">
                                                        <button id="auth-btn" class="btn btn-primary dropdown-toggle"
                                                            type="button" id="dropdownMenuButton1"
                                                            data-bs-toggle="dropdown"
                                                            aria-expanded="false">{{ auth()->user()->name }}</button>
                                                        <ul class="dropdown-menu dropdown-menu-start"
                                                            aria-labelledby="dropdownMenuButton1">
                                                            @if (auth()->user()->role_id === 1)
                                                                <li><a class="dropdown-item"
                                                                        href="{{ route('dashboard') }}"><small>@lang('Go to dashboard')</small></a>
                                                                </li>
                                                            @endif
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
                                                        </ul>
                                                    </div>
                                                @else
                                                    <div class="nav-item nav-link auth">
                                                        <a href="{{ route('login') }}" type="button"
                                                            class="btn btn-primary mt-2 me-2">@lang('Log in')</a>
                                                    </div>
                                                @endauth

                                            </ul>
                                        </div>
                                    </div>

                                    <div class="mobile-nav-toggler mobile-button"><span></span></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Header Lower -->

                    <!-- Mobile Menu  -->
                    <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
                    <div class="mobile-menu">
                        <div class="menu-backdrop"></div>
                        <nav class="menu-box">
                            <div class="nav-logo"><a href="{{ route('home') }}"><img src="images/logo/logo%402x.png"
                                        alt="nav-logo" width="174" height="44"></a></div>
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
                                        <div>1-333-345-6868</div>
                                    </div>
                                    <div class="box d-flex align-items-center">
                                        <span class="icon icon-mail"></span>
                                        <div>themesflat@gmail.com</div>
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
                <footer class="footer">
                    <div class="top-footer">
                        <div class="container">
                            <div class="content-footer-top">
                                <div class="footer-logo">
                                    <img src="{{ asset('assets/images/logo/logo.jpg') }}" alt="logo-footer"
                                        width="174" height="44">
                                </div>
                                <div class="wd-social">
                                    <span>Follow Us:</span>
                                    <ul class="list-social d-flex align-items-center">
                                        <li><a href="#" class="box-icon w-40 social"><i
                                                    class="icon icon-facebook"></i></a></li>
                                        <li><a href="#" class="box-icon w-40 social"><i
                                                    class="icon icon-linkedin"></i></a></li>
                                        <li><a href="#" class="box-icon w-40 social">
                                                <svg width="16" height="16" viewBox="0 0 16 16"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_748_6323)">
                                                        <path
                                                            d="M9.4893 6.77491L15.3176 0H13.9365L8.87577 5.88256L4.8338 0H0.171875L6.28412 8.89547L0.171875 16H1.55307L6.8973 9.78782L11.1659 16H15.8278L9.48896 6.77491H9.4893ZM7.59756 8.97384L6.97826 8.08805L2.05073 1.03974H4.17217L8.14874 6.72795L8.76804 7.61374L13.9371 15.0075H11.8157L7.59756 8.97418V8.97384Z"
                                                            fill="white" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_748_6323">
                                                            <rect width="16" height="16" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </a></li>
                                        <li><a href="#" class="box-icon w-40 social"><i
                                                    class="icon icon-pinterest"></i></a></li>
                                        <li><a href="#" class="box-icon w-40 social"><i
                                                    class="icon icon-instagram"></i></a></li>
                                        <li><a href="#" class="box-icon w-40 social"><i
                                                    class="icon icon-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="inner-footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="footer-cl-1">

                                        <p class="text-variant-2">Spécialisée dans les visites de haut niveau pour
                                             les personnes dans le besoin. Contacter l'agence
                                        </p>
                                        <ul class="mt-12">
                                            <li class="mt-12 d-flex align-items-center gap-8">
                                                <i class="icon icon-mapPinLine fs-20 text-variant-2"></i>
                                                <p class="text-white">Akwa-nord, Douala Cameroun</p>
                                            </li>
                                            <li class="mt-12 d-flex align-items-center gap-8">
                                                <i class="icon icon-phone2 fs-20 text-variant-2"></i>
                                                <a href="tel:1-333-345-6868"
                                                    class="text-white caption-1">+237699591992</a>
                                            </li>
                                            <li class="mt-12 d-flex align-items-center gap-8">
                                                <i class="icon icon-mail fs-20 text-variant-2"></i>
                                                <p class="text-white">welldonerealestate237@yahoo.com</p>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-6 col-6">
                                    <div class="footer-cl-2">
                                        <div class="fw-7 text-white">Categories</div>
                                        <ul class="mt-10 navigation-menu-footer">
                                            <li> <a href="#" class="caption-1 text-variant-2">Nos
                                                    Services</a> </li>

                                            <li> <a href="#" class="caption-1 text-variant-2">A propos de nous</a>
                                            </li>

                                            <li> <a href="{{route('contact')}}" class="caption-1 text-variant-2">laisser un message </a> </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-4 col-6">
                                    <div class="footer-cl-3">
                                        <div class="fw-7 text-white">Notre Companie</div>
                                        <ul class="mt-10 navigation-menu-footer">
                                            <li> <a href="topmap-list.html" class="caption-1 text-variant-2">Vente de maison</a> </li>

                                            <li> <a href="#" class="caption-1 text-variant-2">Location de maison</a> </li>
                                            <li> <a href="#" class="caption-1 text-variant-2">Achat maison</a> </li>
                                            <li> <a href="#" class="caption-1 text-variant-2">Votre Agence</a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="footer-cl-4">
                                        <div class="fw-7 text-white">
                                            Newsletter
                                        </div>
                                        <p class="mt-12 text-variant-2">Votre dose hebdomadaire/mensuelle de connaissances et d'inspiration</p>
                                        <form class="mt-12" id="subscribe-form" action="#" method="post"
                                            accept-charset="utf-8" data-mailchimp="true">
                                            <div id="subscribe-content">
                                                <span class="icon-left icon-mail"></span>
                                                <input type="email" name="email-form" id="subscribe-email"
                                                    placeholder="address email" />
                                                <button type="button" id="subscribe-button"
                                                    class="button-subscribe"><i class="icon icon-send"></i></button>
                                            </div>
                                            <div id="subscribe-msg"></div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="bottom-footer">
                        <div class="container">
                            <div class="content-footer-bottom">
                                <div class="copyright">©2024 Well-done Real Estate. All Rights Reserved.</div>

                                <ul class="menu-bottom">
                                    <li><a href="our-service.html">Terms Of Services</a> </li>

                                    <li><a href="pricing.html">Privacy Policy</a> </li>
                                    <li><a href="contact.html">Cookie Policy</a> </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end footer -->

            </div>
            <!-- /#page -->

        </div>

        <!-- progression -->
        {{ include 'assets/components/progress.html' }}

        <!-- login -->
        {{ include 'assets/components/modal-login.html' }}

        <!-- register -->
        {{ include 'assets/components/modal-register.html' }}


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
