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

    <style>
        .auth-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.18);
            padding: 2rem;
        }

        .form-control {
            border-radius: 10px;
            border: 1px solid #e0e0e0;
            padding: 0.75rem 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #5184c5;
            box-shadow: 0 0 0 0.2rem rgba(81, 132, 197, 0.25);
        }

        .input-group {
            position: relative;
        }

        .input-group .icon-pass {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #5184c5;
            z-index: 10;
        }

    .tx:hover{
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(81, 132, 197, 0.3);
    }
      .tx{

      background: linear-gradient(135deg, #5184c5, #3a5f8f);
            border-radius: 10px;
            padding: 0.75rem 2rem;
            border-color: #3a5f8f
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
      }
 
        /* .tf-btn.primary {
            background: linear-gradient(135deg, #5184c5, #3a5f8f);
            border-radius: 10px;
            padding: 0.75rem 2rem;
            border-color: #3a5f8f
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }

        .tf-btn.primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(81, 132, 197, 0.3);
        } */

        .custom-checkbox .custom-control-label::before {
            border-radius: 4px;
            border-color: #5184c5;
        }

        .invalid-feedback {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        .login-brand img {
            transition: transform 0.3s ease;
        }

        .login-brand img:hover {
            transform: scale(1.05);
        }
    </style>
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
