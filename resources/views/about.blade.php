@extends('layouts.front')
@section('title', __('About'))
@section('seoSection')
    <!-- SEO Meta Tags -->

    <meta name="description" content="@yield('meta_description', 'Entrez en contact avec Well Done Real Estate .SCI pour toutes vos questions sur l\'achat, la vente ou la location de propriétés au Cameroun.')">
    <meta name="keywords" content="@yield('meta_keywords', 'En savoir plus sur Well Done Real Estate, votre partenaire de confiance pour acheter, vendre ou louer des propriétés et terrains au Cameroun.')">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="@yield('og_title', 'Well Done Real Estate | Achat, Vente et Location de Propriétés au Cameroun')">
    <meta property="og:description" content="@yield('og_description', 'Well Done Real Estate vous accompagne dans tous vos projets immobiliers. Découvrez nos offres au Cameroun.')">
    <meta property="og:image" content="@yield('og_image', asset('assets/images/logo/logo.jpg'))">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Well Done Real Estate | Immobilier au Cameroun')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Découvrez les meilleures offres immobilières au Cameroun avec Well Done Real Estate.SCI')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('assets/images/logo/logo.jpg'))">
@endsection
@section('content')
    <section class="flat-title-page style-2">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}">@lang('Home')</a></li>
                <li>/ @lang('About')</li>
            </ul>
            <h2 class="text-center">@lang('About') De Nous</h2>
        </div>
    </section>

    <!-- End Page Title -->



    <section class="flat-section flat-banner-about">
        <style>
            /* Ajoutez une police Google */
            @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');



            .lettrine::first-letter {
                font-size: 3em;
                font-weight: bold;
                float: left;
                margin-right: 0.1em;
                line-height: 1;
                color: #E0004D;
                /* Utilisez une couleur qui s'accorde avec votre thème */
            }

            .flat-banner-about p {
                text-align: justify;
                text-indent: 2em;
                line-height: 1.6;
                font-family: 'Roboto', sans-serif;
                font-size: 1.1em;
            }

            .flat-banner-about img {
                width: 100%;
                height: auto;
                margin-bottom: 20px;
            }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h3>Bienvenue à <br> {{ env('APP_NAME') }}</h3>
                    <div class="row"></div>
                    <hr style="color: white">
                    <hr style="color: white">
                    <img src="{{ asset('assets/images/team2.jpg') }}" alt="{{ env('APP_NAME') }}" height="250px"
                        style="width:100%; margin-bottom: 20px;">
                    <br>
                </div>
                <div class="col-md-7 hover-btn-view">
                    <p class="body-2 text-variant-1 text-justify lettrine" style="text-align: justify; text-indent: 2em;">
                        L'agence immobilière {{ env('APP_NAME') }} est une entreprise spécialisée dans l'amenagement des
                        espaces et la vente de terrrains.
                        Fondée en 2023 par Mireille Biloa, notre entreprise s'est construite sur des valeurs fortes :
                        l'expertise, la transparence et l'engagement envers nos clients.
                        <br><br>
                        {{-- <img src="{{ asset('assets/images/team.jpg') }}" alt="{{ env('APP_NAME') }}" style="width:100%; margin-bottom: 20px;"> --}}
                        Notre équipe de professionnels passionnés met tout en œuvre pour vous accompagner avec succès dans
                        vos projets immobiliers, que vous soyez acquéreur, vendeur ou investisseur. Grâce à notre
                        connaissance approfondie du marché, nous vous proposons des solutions sur-mesure, adaptées à vos
                        besoins et à votre budget.
                        <br><br>
                        Fort de notre expérience et de notre savoir-faire, nous mettons à votre disposition tous les moyens
                        nécessaires pour vous garantir une transaction sereine et réussie. De l'estimation de votre bien à
                        la négociation, en passant par l'accompagnement administratif et juridique, nos équipes vous guident
                        pas à pas jusqu'à la finalisation de votre projet.
                        <br><br>
                        Votre satisfaction est notre priorité. C'est pourquoi nous attachons une importance particulière à
                        la qualité de notre service et à l'écoute de vos attentes. Chez Well-done, vous pouvez compter sur
                        des professionnels à votre écoute, réactifs et force de proposition.
                        <br><br>
                        Rejoignez-nous et bénéficiez de l'expertise d'une agence immobilière locale de confiance, soucieuse
                        de votre réussite !
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- end banner video -->
    <!-- Service -->
    <section class="flat-section" id="services">
        <div class="container">
            <div class="box-title style-1 wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration="2000ms">
                <div class="box-left">
                    <div class="text-subtitle text-primary">Nos Services</div>
                    <h4 class="mt-4">Que faisons-nous ?</h4>
                </div>
            </div>
            <div class="flat-service wrap-service wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration="2000ms">
                <div class="box-service hover-btn-view">
                    <div class="icon-box">
                        <span class="icon icon-buy-home"></span>
                    </div>
                    <div class="content">
                        <h6 class="title">Acheter un nouveau logement</h6>
                        <p class="description">Découvrez la maison de vos rêves sans effort. Explorez diverses propriétés et
                            bénéficiez des conseils d'experts pour une expérience d'achat sans faille.</p>
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
                    </div>
                </div>
                <div class="box-service hover-btn-view">
                    <div class="icon-box">
                        <span class="icon icon-sale-home"></span>
                    </div>
                    <div class="content">
                        <h6 class="title">Vendre</h6>
                        <p class="description">Vendez en toute confiance grâce aux conseils d'un expert et à des stratégies
                            efficaces, en mettant en valeur les meilleurs atouts de votre propriété pour une vente réussie.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container-fluid row  mb-5 justify-content">
                <h6 class="title col-md-4 col-sm-4 col-xl-4 col-xxl-3">Travaux de Lotissement</h6>
                <h6 class="title col-md-4 col-sm-4 col-xl-4 col-xxl-3">Achat et vente de Terrains</h6>
                <h6 class="title col-md-4 col-sm-4 col-xl-4 col-xxl-3">Prestations Immobilières</h6>
                <h6 class="title col-md-4 col-sm-4 col-xl-4 col-xxl-3">Construction de Batiment Complet</h6>
                <h6 class="title col-md-4 col-sm-4 col-xl-4 col-xxl-3">Locations D'engins</h6>
                <h6 class="title col-md-4 col-sm-4 col-xl-4 col-xxl-3">Exploitation de mines et carrièrres</h6>

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
                        <div class="number" data-speed="2000" data-to="100" data-inviewport="yes">+ 100</div>
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
    <!-- End Service -->
    <!-- Testimonial -->
    <section class="flat-section flat-testimonial-v4">
        <div class="container">
            <div class="box-title text-center">
                <div class="text-subtitle text-primary">Avis de clients</div>
                <h4 class="mt-4">Avis de clients</h4>
            </div>
            <div class="swiper tf-sw-testimonial" data-preview-lg="2" data-preview-md="2" data-preview-sm="2"
                data-space="30">
                @include('include.front.testimonials')
                <div class="sw-pagination sw-pagination-testimonial"></div>

            </div>

        </div>
    </section>
    <!-- End Testimonial -->
    <!-- Contact -->
    <section class="flat-section-v3 flat-slider-contact">
        <div class="container">
            <div class="row content-wrap">
                <div class="col-lg-7">
                    <div class="content-left">
                        <div class="box-title">
                            <div class="text-subtitle text-white">Contactez nous</div>
                            <h4 class="mt-4 fw-6 text-white">Nous sommes toujours ravis de vous entendre !</h4>
                        </div>
                        <p class="body-2 text-white">Transformons les maisons en foyers et les rêves en réalité.</p>
                    </div>

                </div>
                <div class="col-lg-5">
                    <div class="box">
                        <button class="tf-btn primary">
                            <a href="{{ route('contact') }}" class="text-white">Contactez Nous</a>
                        </button>
                    </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="overlay"></div>

    </section>

    <!-- banner -->
    {{-- <section class="flat-section pt-0 flat-banner">
    <div class="container">
        <div class="wrap-banner bg-surface">
            <div class="box-left">
                <div class="box-title">
                    <div class="text-subtitle text-primary">Become Partners</div>
                    <h4 class="mt-4">List your Properties on Homeya, join Us Now!</h4>
                </div>
                <a href="#" class="tf-btn primary size-1">Become A Hosting</a>
            </div>
            <div class="box-right">
                <img src="images/banner/banner.png" alt="image">
            </div>
        </div>
    </div>
</section> --}}
    <!-- end banner -->
@endsection
