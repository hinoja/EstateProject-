@extends('layouts.front')
@section('seoSection')
    <!-- SEO Meta Tags -->

    <meta name="description" content="@yield('meta_description', 'Entrez en contact avec Well Done Real Estate .SCI pour toutes vos questions sur l\'achat, la vente ou la location de propriétés au Cameroun.')">
    <meta name="keywords" content="@yield('meta_keywords', 'contactez Well Done Real Estate SCI, immobilier Cameroun, agence immobilière Cameroun')">

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
@section('title', __('Contact us'))
@push('css')
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
    @livewireStyles
@endpush
@push('js')
    @livewireScripts()
@endpush
@section('content')
    <section class="flat-title-page style-2">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}">@lang('Home')</a></li>
                <li>/ @lang('Contact us')</li>
            </ul>
            <h2 class="text-center">@lang('Contact us')</h2>
        </div>
    </section>
    <!-- End Page Title -->

    <section class="flat-section flat-contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-content">
                        <h5>Envoyez-nous un message</h5>
                        <p class="body-2 text-variant-1">Si vous avez des questions, n'hésitez pas à nous contacter par
                            téléphone ou par courriel et nous vous répondrons dans les plus brefs délais. Nous nous
                            réjouissons de vous lire.</p>

                        @livewire('save-contact')
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info">
                        <h5>Contactez nous</h5>
                        <ul>
                            <li class="box">
                                <div class="text-1 title"> <i style="color:red;" class="fa-solid fa-location-dot"></i>
                                    Adresse:</div>
                                <p class="p-16 text-variant-1">Akwa Nord, Douala
                                    <br>Cameroun
                                </p>
                            </li>
                            <li class="box">
                                <div class="text-1 title">Infomations:</div>
                                <p class="p-16 text-variant-1">(+237) 6 99 59 19 92<br> <a
                                        href="mailto:contact@welldonerealestatesci.com">contact@welldonerealestatesci.com</a>
                                </p>
                            </li>
                            <li class="box">
                                <div class="text-1 title">Ouvert:</div>
                                <p class="p-16 text-variant-1">Lundi - Vendredi : 08:00 - 18:00 <br> Samedi : 10:00 -
                                    15:00</p>

                            </li>
                            <li class="box">
                                {{-- <div class="text-1 title">Suivez nous:</div> --}}
                                <ul class="box-social"> Suivez nous:
                                    <a target="_blank" href="https://www.facebook.com/profile.php?id=61556658645751"
                                        class="item">
                                        <svg width="10" height="18" viewBox="0 0 10 18" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.00879 10.125L9.50871 6.86742H6.38297V4.75348C6.38297 3.86227 6.81961 2.99355 8.21953 2.99355H9.64055V0.220078C9.64055 0.220078 8.35102 0 7.11809 0C4.54395 0 2.86137 1.56023 2.86137 4.38469V6.86742H0V10.125H2.86137V18H6.38297V10.125H9.00879Z"
                                                fill="#161E2D" />
                                        </svg>
                                    </a>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="flat-section pt-0">
        {{-- <div class="container">
            <div id="map-contact" class="map-contact" data-map-zoom="16" data-map-scroll="true"></div>

        </div> --}}
        <div class="container">
            <iframe id="map-contact" class="map-contact position-relative rounded w-100 h-100" data-map-scroll="true"
                src="https://www.google.com/maps/embed/v1/place?q=Akwa+Nord,+Douala&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"
                frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="true" aria-hidden="false"
                tabindex="0">
        </div>
        </iframe>
    </section>
@endsection
