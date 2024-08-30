@extends('layouts.front')
@section('seoSection')
    <!-- SEO Meta Tags -->
    <title>{{ config('app.name', 'Well-Done REAL Estate. SCI.') }} | @yield('title')</title>
    <meta name="description" content="@yield('meta_description', 'Découvrez les meilleures offres de vente et location de terrains et propriétés au Cameroun avec Well Done Real Estate.SCI')">
    <meta name="keywords" content="@yield('meta_keywords', 'immobilier Cameroun, achat terrain, vente propriété, location immobilière, Well Done Real Estate SCI, terrains à douala,terrain à louer ,terrain à KAKE,terrain à Missole ,terrain à Mbanga,terrain à acheter à SOUZA ,agence immobilièere au cameroun')">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('og_title', 'Well Done Real Estate | Achat, Vente et Location de Propriétés au Cameroun')">
    <meta property="og:description" content="@yield('og_description', 'Well Done Real Estate SCI  vous accompagne dans tous vos projets immobiliers. Découvrez nos offres au Cameroun.')">
    <meta property="og:image" content="@yield('og_image', asset('assets/images/logo/logo.jpg'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Well Done Real Estate | Immobilier au Cameroun')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Découvrez les meilleures offres immobilières au Cameroun avec Well Done Real Estate.SCI')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('assets/images/logo/logo.jpg'))">


@endsection
@section('title', __('Home'))
@push('js')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var video = document.getElementById('promo-video');
            video.addEventListener('canplaythrough', function() {
                video.play();
            }, false);
        });
    </script>
@endpush
@push('css')
    <style>
        .flat-section.flat-banner-about {
            padding: 20px 0;
        }

        .flat-section.flat-banner-about h3 {
            font-size: 2em;
            margin-bottom: 10px;
        }

        .flat-section.flat-banner-about h6.text-primary {
            font-size: 1em;
            jq color: #007bff;
            margin-bottom: 20px;
        }

        .flat-section.flat-banner-about p {
            font-size: 1.1em;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .banner-video {
            position: relative;
            text-align: center;
        }

        .banner-video video {
            max-width: 100%;
            border-radius: 8px;
        }

        .banner-video a.btn-video {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 3em;
            color: #fff;
            text-decoration: none;
        }

        .banner-video a.btn-video .icon-play {
            display: inline-block;
            width: 1em;
            height: 1em;
            background: url('path_to_play_icon.png') no-repeat center center;
            background-size: contain;
        }
    </style>
@endpush
@section('content')
    <!-- Slider -->
    <section class="flat-slider home-1">
        <div class="container relative">
            <div class="row">
                <div class="col-lg-12">
                    <div class="slider-content">
                        <div class="heading text-center">
                            <h1 class="text-white animationtext slide">
                                <span class="text-center">Find Your</span>
                                <span class="tf-text s1 cd-words-wrapper">
                                    <span class="item-text is-visible">Dream Land</span>
                                    <span class="item-text is-hidden text-primary">Perfect Ground</span>
                                    <span class="item-text is-hidden">Real Estate</span>
                                </span>
                            </h1>
                            <p class="subtitle text-center text-white body-1 wow fadeIn" data-wow-delay=".8s"
                                data-wow-duration="2000ms"> Nous sommes une agence immobilière qui vous aidera à trouver la
                                meilleure résidence et/ou Terrains dont vous rêvez, discutons-en pour la maison de vos rêves
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="overlay"></div>
    </section>
    <!-- End Slider -->


    <!-- Recommended -->
    <!-- Location -->
    <section class="flat-section-v3 flat-location bg-surface">
        <div class="container-full">
            <div class="box-title text-center wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration="2000ms">
                <div class="text-subtitle text-primary">Explorez Nos Terrains</div>
                <h4 class="mt-4">Des Terrains Titrés Et Lotis Pour Vous</h4>
            </div>
            <div class="wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration="2000ms">
                <div class="swiper tf-sw-location overlay" data-preview-lg="4.1" data-preview-md="3" data-preview-sm="2"
                    data-space="30" data-centered="true" data-loop="true">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">

                            <a href="#" class="box-location">
                                <div class="image">

                                    <img src="{{ asset('assets/images/welldone/lotis1.jpg') }}" width="347px"
                                        height="300px" alt="image-location">
                                    <style>
                                        div.image {
                                            width: 347px;
                                            height: 300px;
                                            margin-right: 300px;
                                        }
                                    </style>
                                </div>
                                <div class="content">
                                    <span class="sub-title"> --- </span>
                                    <h6 class="title">KAKE (Souza vers usine cacao)</h6>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="box-location">
                                <div class="image">
                                    <img src="{{ asset('assets/images/welldone/missole.jpg') }}" width="80px"
                                        height="100px" alt="image-location">
                                </div>
                                <div class="content">
                                    <span class="sub-title">---</span>
                                    <h6 class="title">Missole 2</h6>
                                </div>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a href="#" class="box-location">
                                <div class="image">
                                    <img src="{{ asset('assets/images/welldone/terrain3.jpg') }}" width="80px"
                                        height="100px" alt="image-location">
                                </div>
                                <div class="content">
                                    <span class="sub-title"> --- </span>
                                    <h6 class="title">Missole 2 </h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="box-navigation">
                        <div class="navigation swiper-nav-next nav-next-location"><span class="icon icon-arr-l"></span>
                        </div>
                        <div class="navigation swiper-nav-prev nav-prev-location"><span class="icon icon-arr-r"></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Location -->

    <section class="flat-section flat-recommended">
        <div class="container">
            <div class="text-center wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration="2000ms">
                <div class="text-subtitle text-primary">Explorez</div>
                <h4 class="mt-4">Nos Differents Sites</h4>
            </div>
            <div class="flat-tab-recommended wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration="2000ms">
                <ul class="nav-tab-recommended justify-content-center" role="tablist">
                    <li class="nav-tab-item" role="presentation">
                        <a href="#Tous" class="nav-link-item" data-bs-toggle="tab">Tous</a>
                    </li>
                    <li class="nav-tab-item" role="presentation">
                        <a href="#Bekoko" class="nav-link-item " data-bs-toggle="tab">Bekoko</a>
                    </li>
                    <li class="nav-tab-item" role="presentation">
                        <a href="#Bepanda" class="nav-link-item" data-bs-toggle="tab">Bepanda</a>
                    </li>
                    <li class="nav-tab-item" role="presentation">
                        <a href="#Bomono" class="nav-link-item" data-bs-toggle="tab">Bomono</a>
                    </li>
                    <li class="nav-tab-item" role="presentation">
                        <a href="#Dibamba" class="nav-link-item" data-bs-toggle="tab">Dibamba</a>
                    </li>
                    <li class="nav-tab-item" role="presentation">
                        <a href="#Kendeck" class="nav-link-item" data-bs-toggle="tab">Kendeck</a>
                    </li>
                    <li class="nav-tab-item" role="presentation">
                        <a href="#Lendi" class="nav-link-item" data-bs-toggle="tab">Lendi</a>
                    </li>
                    <li class="nav-tab-item" role="presentation">
                        <a href="#Missole" class="nav-link-item" data-bs-toggle="tab">Missole I & II</a>
                    </li>
                    <li class="nav-tab-item" role="presentation">
                        <a href="#Souza" class="nav-link-item" data-bs-toggle="tab">Souza</a>
                    </li>
                    <li class="nav-tab-item" role="presentation">
                        <a href="#Village" class="nav-link-item" data-bs-toggle="tab">Ngoma Village</a>
                    </li>
                </ul>
                @livewire('show-estate')
            </div>

        </div>

    </section>

    <!-- banner video -->
    <section class="flat-section flat-banner-about">
        <div class="container">
            <div class="row">

                <div class="box-left">
                    <div class="text-subtitle text-primary text-center">Découvrez Nos Réalisations</div>
                    <h4 class="mt-4 text-center">Présentation Vidéo</h4>
                </div>

            </div>
            <div class="banner-video">

                <video id="promo-video" controls preload="auto" loop width="900"
                    poster="{{ asset('assets/images/logo/logo.jpg') }}"
                    poster="{{ asset('assets/images/banner/img-video.jpg') }}">
                    <source src="{{ asset('assets/video/video.mp4') }}" type="video/mp4">

                </video>
            </div>
        </div>
    </section>

    <!-- end banner video -->

    <!-- Service & Counter  -->
    <section class="flat-section" id="services">
        <div class="container">
            <div class="box-title style-1 wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration="2000ms">
                <div class="box-left">
                    <div class="text-subtitle text-primary">Nos Services</div>
                    <h4 class="mt-4">Que faisons-nous ?</h4>
                </div>
                <a href="/#services" class="btn-view"><span class="text">Nos Services</span>
                    {{-- <span class="icon icon-arrow-right2"></span> --}}
                </a>
            </div>
            <div class="flat-service wrap-service wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration="2000ms">
                <div class="box-service hover-btn-view">
                    <div class="icon-box">
                        <span class="icon icon-buy-home"></span>
                    </div>
                    <div class="content">
                        <h6 class="title">Acheter un nouveau logement</h6>
                        <p class="description">Découvrez la maison de vos rêves sans effort. Explorez diverses propriétés
                            et bénéficiez des conseils d'experts pour une expérience d'achat sans faille.</p>
                        {{-- <a href="#" class="btn-view style-1"><span class="text">Learn More</span> <span class="icon icon-arrow-right2"></span> </a> --}}
                    </div>
                </div>
                <div class="box-service hover-btn-view">
                    <div class="icon-box">
                        <span class="icon icon-rent-home"></span>
                    </div>
                    <div class="content">
                        <h6 class="title">Louer un logement</h6>
                        <p class="description">Découvrez sans effort la location qui vous convient. Explorez une grande
                            variété d'offres adaptées précisément à vos besoins et à votre style de vie.</p>
                        {{-- <a href="#" class="btn-view style-1"><span class="text">Learn More</span> <span class="icon icon-arrow-right2"></span> </a> --}}
                    </div>
                </div>
                <div class="box-service hover-btn-view">
                    <div class="icon-box">
                        <span class="icon icon-sale-home"></span>
                    </div>
                    <div class="content">
                        <h6 class="title">Vendre</h6>
                        <p class="description">Vendez en toute confiance grâce aux conseils d'un expert et à des
                            stratégies
                            efficaces, en mettant en valeur les meilleurs atouts de votre propriété pour une vente réussie.
                        </p>
                        {{-- <a href="#" class="btn-view style-1"><span class="text">Learn More</span> <span class="icon icon-arrow-right2"></span> </a> --}}
                    </div>
                </div>
                <div class="box-service hover-btn-view">
                    <div class="icon-box">
                        <span class="icon icon-profile"></span>
                    </div>
                    <div class="content">
                        <h6 class="title">Etude Et conseils</h6>
                        <p class="description">Notre section dediée à l'étude et aux conseils vous propose une analyse
                            approfondie du marché immobilier local ,des conseils strtégiques pour optimiser la valeur de vos
                            biens.
                        </p>
                        {{-- <a href="#" class="btn-view style-1"><span class="text">Learn More</span> <span class="icon icon-arrow-right2"></span> </a> --}}
                    </div>
                </div>
            </div>
            <div class="container-fluid row  mb-5 justify-content">
                <h6 class="title col-md-4 col-sm-4 col-xl-4 col-xxl-3">Travaux de Lotissement</h6>
                <h6 class="title col-md-4 col-sm-4 col-xl-4 col-xxl-3">Achat/vente de Terrains</h6>
                <h6 class="title col-md-4 col-sm-4 col-xl-4 col-xxl-3">Prestations Immobilières</h6>
                <h6 class="title col-md-4 col-sm-4 col-xl-4 col-xxl-3">Construction de Batiment Complet</h6>
                <h6 class="title col-md-4 col-sm-4 col-xl-4 col-xxl-3">Locations D'engins</h6>
                <h6 class="title col-md-4 col-sm-4 col-xl-4 col-xxl-3">Exploitation de mines/carrièrres</h6>

            </div>
            <div class="flat-counter tf-counter wrap-counter wow fadeInUpSmall" data-wow-delay=".4s"
                data-wow-duration="2000ms">
                <div class="counter-box">
                    <div class="count-number">
                        <div class="number" data-speed="2000" data-to="85" data-inviewport="yes">+ 85</div>
                    </div>
                    <div class="title-count">Clients satisfaits</div>
                </div>
                <div class="counter-box">
                    <div class="count-number">
                        <div class="number" data-speed="2000" data-to="112" data-inviewport="yes">+ 100</div>
                    </div>
                    <div class="title-count">Recomandations</div>
                </div>

                <div class="counter-box">
                    <div class="count-number">
                        <div class="number" data-speed="2000" data-to="66" data-inviewport="yes">+ 66</div>
                    </div>
                    <div class="title-count">Tavaux Trimestriels</div>
                </div>
            </div>
        </div>
    </section>

    <section class="flat-section flat-benefit bg-surface">
        <div class="container">
            <div class="box-title text-center wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration="2000ms">
                <div class="text-subtitle text-primary">Nos avantages</div>
                <h4 class="mt-4">Pourquoi choisir {{ env('APP_NAME') }}</h4>
            </div>
            <div class="wrap-benefit wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration="2000ms">
                <div class="box-benefit">
                    <div class="icon-box">
                        <span class="icon icon-proven"></span>
                    </div>
                    <div class="content text-center">
                        <h6 class="title">Une expertise Reconnue</h6>
                        <p class="description">Notre équipe expérimentée excelle dans l'immobilier avec des années de
                            navigation réussie sur le marché, offrant des décisions informées et des résultats optimaux.</p>
                    </div>
                </div>
                <div class="box-benefit">
                    <div class="icon-box">
                        <span class="icon icon-double-ruler"></span>
                    </div>
                    <div class="content text-center">
                        <h6 class="title">Solutions personnalisées</h6>
                        <p class="description">Nous sommes fiers d'élaborer des stratégies personnalisées pour répondre à
                            vos objectifs uniques, garantissant ainsi un parcours immobilier sans faille.</p>
                    </div>
                </div>
                <div class="box-benefit">
                    <div class="icon-box">
                        <span class="icon icon-hand"></span>
                    </div>
                    <div class="content text-center">
                        <h6 class="title">Des partenariats transparents</h6>
                        <p class="description">La transparence est essentielle dans nos relations avec les clients. Nous
                            privilégions une communication claire et des pratiques éthiques, favorisant ainsi la confiance
                            et la fiabilité.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonial -->
    <section class="flat-section-v3 bg-surface flat-testimonial">
        <div class="cus-layout-1">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="box-title">
                        <div class="text-subtitle text-primary">Témoignages</div>
                        <h4 class="mt-4">Avis des clients</h4>
                    </div>
                    <p class=" text-variant-1 p-16">"Notre équipe expérimentée excelle dans l'immobilier avec des années
                        de
                        navigation réussie sur le marché, offrant des décisions informées et des résultats optimaux."
                    </p>
                    <div class="box-navigation">
                        <div class="navigation swiper-nav-next nav-next-testimonial"><span class="icon icon-arr-l"></span>
                        </div>
                        <div class="navigation swiper-nav-prev nav-prev-testimonial"><span class="icon icon-arr-r"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="swiper tf-sw-testimonial" data-preview-lg="2.6" data-preview-md="2" data-preview-sm="2"
                        data-space="30">
                        @include('include.front.testimonials')

                    </div>


                </div>

            </div>
        </div>
    </section>
    <!-- End Testimonial -->
    <!-- Agents -->
    <section class="flat-section flat-agents">
        <div class="container">
            <div class="box-title text-center wow fadeIn" data-wow-delay=".2s" data-wow-duration="2000ms">
                <div class="text-subtitle text-primary">Notre Equipe</div>
                <h4 class="mt-4">Rencontrez nos Responsables</h4>
            </div>
            <div class="row">
                <div class="box col-lg-3 col-sm-6 offset-md-2">
                    <div class="box-agent hover-img wow fadeIn" data-wow-delay=".2s" data-wow-duration="2000ms">
                        <style>
                            a.box-img.img-style {
                                max-height: 170px;
                            }
                        </style>
                        <a href="#" class="img-style">
                            <img style="max-height: 200px;" src="{{ asset('assets/images/agents/boss.jpg') }}"
                                alt="image-agent">
                        </a>
                        <a target="_blank" href="https://wa.me/+23799591992" class="content">
                            <div class="info">
                                <h6 class="link">Mireille Biloa</h6>
                                <p class="mt-4 text-variant-1">Directrice Générale</p>
                            </div>
                            <span class="icon-phone"> </span>

                        </a>
                    </div>
                </div>
                <div class="box col-lg-3 col-sm-6">
                    <div class="box-agent hover-img wow fadeIn" data-wow-delay=".4s" data-wow-duration="2000ms">
                        <a href="#" class="img-style">
                            <img style="max-height: 200px;" src="{{ asset('assets/images/agents/agent7.jpg') }}"
                                alt="image-agent">
                        </a>
                        <a target="_blank" href="https://wa.me/+23799591992" class="content">
                            <div class="info">
                                <h6 class="link">Elisabeth NOAH</h6>
                                <p class="mt-4 text-variant-1">Assistant & Community Manager</p>
                            </div>
                            <span class="icon-phone"></span>
                        </a>
                    </div>
                </div>
                <div class="box col-lg-3 col-sm-6">
                    <div class="box-agent hover-img wow fadeIn" data-wow-delay=".6s" data-wow-duration="2000ms">
                        <a href="#" class="img-style">

                            <img style="height: 200px;" src="{{ asset('assets/images/agents/agent3.jpg') }}"
                                alt="image-agent">
                        </a>
                        <a target="_blank" href="https://wa.me/+23799591992" class="content">
                            <div class="info">
                                <h6 class="link">Jean Yves KAMGA</h6>
                                <p class="mt-4 text-variant-1"> Responsable Commercial & Logistique</p>
                            </div>
                            <span class="icon-phone"></span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Agents -->
    <!-- Latest New -->

@endsection
