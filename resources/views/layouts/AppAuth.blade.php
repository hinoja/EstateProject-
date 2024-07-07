<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>{{  config('app.name', 'Well-Done REAL Estate. SCI.')  }} | @yield('title') </title>

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
    {{-- -- Fontawesome Css --> --}}
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">

</head>

<body class="body counter-scroll">

    <body class="body counter-scroll">

        <div id="app">
            <section class="section">
                <div class="container mt-1">
                    <div class="row">
                        <div
                            class="col-12 col-sm-8 offset-sm-2 col-md-8 offset-md-2 col-lg-6 offset-lg-3 col-xl-6 offset-xl-3">

                            <div class="login-brand mb-3 text-center">
                                <a href="/"><img src="{{ asset('assets/images/logo/logo.jpg') }}" alt="logo"
                                        width="170px" class="shadow-light ">
                                </a>
                            </div>

                            <!-- popup login -->
                             @yield('content')

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
