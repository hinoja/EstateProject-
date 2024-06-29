@extends('layouts.app')

@section('content')

<section class="flat-title-page style-2">
    <div class="container">
        <h2 class="text-center">A propos De Nous</h2>
    </div>
</section>
<!-- End Page Title -->

<!-- banner video -->
<section class="flat-section flat-banner-about">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h3>Bienvenu a  <br> Well-done Real Estate</h3>
            </div>
            <div class="col-md-7 hover-btn-view">
               <P class="body-2 text-variant-1 ">
                   
                    l'agence immobilière Well-done s'est imposée comme un acteur incontournable sur le marché local. Fondée en 2023 par Mireille Biloa, notre entreprise s'est construite sur des valeurs fortes : l'expertise, la transparence et l'engagement envers nos clients.

                    Notre équipe de professionnels passionnés met tout en œuvre pour vous accompagner avec succès dans vos projets immobiliers, que vous soyez acquéreur, vendeur ou investisseur. Grâce à notre connaissance approfondie du marché, nous vous proposons des solutions sur-mesure, adaptées à vos besoins et à votre budget.

                    Fort de notre expérience et de notre savoir-faire, nous mettons à votre disposition tous les moyens nécessaires pour vous garantir une transaction sereine et réussie. De l'estimation de votre bien à la négociation, en passant par l'accompagnement administratif et juridique, nos équipes vous guident pas à pas jusqu'à la finalisation de votre projet.

                    Votre satisfaction est notre priorité. C'est pourquoi nous attachons une importance particulière à la qualité de notre service et à l'écoute de vos attentes. Chez Well-done, vous pouvez compter sur des professionnels à votre écoute, réactifs et force de proposition.

                    Rejoignez-nous et bénéficiez de l'expertise d'une agence immobilière locale de confiance, soucieuse de votre réussite !
                </P>
                {{-- <a href="#" class="btn-view style-1"><span class="text">Learn More</span> <span class="icon icon-arrow-right2"></span> </a> --}}

            </div>

        </div>
        {{-- <div class="banner-video">
            <img src="images/banner/img-video.jpg" alt="img-video">
            <a href="https://youtu.be/MLpWrANjFbI" data-fancybox="gallery2" class="btn-video"> <span class="icon icon-play"></span></a>
        </div> --}}
    </div>
</section>
<!-- end banner video -->
<!-- Service -->
<section class="flat-section"  id="services">
    <div class="container">
        <div class="box-title style-1 wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration="2000ms">
            <div class="box-left">
                <div class="text-subtitle text-primary">Nos Services</div>
                <h4 class="mt-4">Que faisons-nous ?</h4>
            </div>
            {{-- <a href="#" class="btn-view"><span class="text">View All Services</span> <span class="icon icon-arrow-right2"></span> </a> --}}
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
                    <p class="description">Vendez en toute confiance grâce aux conseils d'un expert et à des stratégies
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
                    <p class="description">Notre section dediée à l'étude et aux conseils vous propose une analyse approfondie du marché immobilier local ,des conseils strtégiques pour optimiser la valeur de vos biens.
                    </p>
                    {{-- <a href="#" class="btn-view style-1"><span class="text">Learn More</span> <span class="icon icon-arrow-right2"></span> </a> --}}
                </div>
            </div>
        </div>
        <div class="row  mb-5 centred">
            <h6 class="title col-md-4 col-sm-4 col-xl-4 col-xxl-3" >Travaux de Lotissement</h6>
            <h6 class="title col-md-4 col-sm-4 col-xl-4 col-xxl-3">Achat/vente de Terrains</h6>
            <h6 class="title col-md-4 col-sm-4 col-xl-4 col-xxl-3">Prestations Immobilières</h6>
            <h6 class="title col-md-4 col-sm-4 col-xl-4 col-xxl-3">Construction de Batiment Complet</h6>
            <h6 class="title col-md-4 col-sm-4 col-xl-4 col-xxl-3">Locations D'engins</h6>
            <h6 class="title col-md-4 col-sm-4 col-xl-4 col-xxl-3">Exploitation de mines et carrièrres</h6>
        </div>
        
         
        {{-- <div class="box-title style-1 wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration="2000ms">
            <div class="box-left list-view">
                <div class="text-subtitle text-primary">
                    <h6 class="title">Travaux de Lotissement</h6><h6 class="title">Travaux de Lotissement</h6>
                </div>
        </div> --}}
        <section class="flat-section flat-benefit bg-surface">
            <div class="container">
                <div class="box-title text-center wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration="2000ms">
                    <div class="text-subtitle text-primary">Nos avantages</div>
                    <h4 class="mt-4">Pourquoi choisir Well-done</h4>
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
    </div>
</section>

<!-- End Service -->
<!-- Testimonial -->
<section class="flat-section-v3 bg-surface flat-testimonial">
    <div class="cus-layout-1">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="box-title">
                    <div class="text-subtitle text-primary">Témoignages</div>
                    <h4 class="mt-4">Avis des clients</h4>
                </div>
                <p class=" text-variant-1 p-16">"Notre équipe expérimentée excelle dans l'immobilier avec des années de
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
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="box-tes-item wow fadeIn" data-wow-delay=".2s" data-wow-duration="2000ms">
                                <ul class="list-star">
                                    <li class="icon icon-star"></li>
                                    <li class="icon icon-star"></li>
                                    <li class="icon icon-star"></li>
                                    <li class="icon icon-star"></li>
                                    <li class="icon icon-star"></li>
                                </ul>
                                <p class="text-justify fs-6 note body-1">
                                    "J'ai acheté ma maison grâce à cette agence et je les recommande vivement. Leur
                                    équipe a fait preuve d'un professionnalisme exceptionnel, comprenant mes besoins et
                                    me guidant avec patience. Leur connaissance du marché local et leur réactivité ont
                                    rendu le processus fluide. Je suis ravi de ma maison et remercie l'équipe de
                                    Well-done pour leur excellent service." </p>
                                <div class="box-avt d-flex align-items-center gap-12">
                                    <div class="avatar avt-60 round">
                                        <img src="{{ asset('assets/images/agents/agent1.jpg') }}" alt="avatar">
                                    </div>
                                    <div class="info">
                                        <div class="h7 fw-7">Femi Adebayo</div>
                                        <p class="text-variant-1 mt-4">Responsable Marketing</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="box-tes-item wow fadeIn" data-wow-delay=".4s" data-wow-duration="2000ms">
                                <ul class="list-star">
                                    <li class="icon icon-star"></li>
                                    <li class="icon icon-star"></li>
                                    <li class="icon icon-star"></li>
                                    <li class="icon icon-star"></li>
                                    <li class="icon icon-star"></li>
                                </ul>
                                <p class="text-justify fs-6 note body-1">
                                    "Je tiens à saluer l'excellent service de cette agence lors de mon achat immobilier.
                                    Ils ont été à l'écoute de mes besoins et m'ont guidé vers la bonne propriété. Ils
                                    ont
                                    géré tous les aspects techniques et juridiques avec professionnalisme, rendant
                                    l'acquisition fluide et sans accroc."
                                </p>
                                <div class="box-avt d-flex align-items-center gap-12">
                                    <div class="avatar avt-60 round">
                                        <img src="{{ asset('assets/images/agents/agent5.jpg') }}" alt="avatar">
                                    </div>
                                    <div class="info">
                                        <div class="h7 fw-7">Jean-Pierre Ngassa</div>
                                        <p class="text-variant-1 mt-4">Directeur Hospitalier</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="box-tes-item wow fadeIn" data-wow-delay=".6s" data-wow-duration="2000ms">
                                <ul class="list-star">
                                    <li class="icon icon-star"></li>
                                    <li class="icon icon-star"></li>
                                    <li class="icon icon-star"></li>
                                    <li class="icon icon-star"></li>
                                    <li class="icon icon-star"></li>
                                </ul>
                                <p class="text-justify fs-6 note body-1">
                                    "Mon expérience avec les services de gestion immobilière a été
                                    exceptionnelle. Ils gèrent les propriétés de manière professionnelle et réactive, et
                                    résolvent
                                    rapidement tout problème. Leur approche attentive me donne une grande tranquillité
                                    d'esprit."
                                </p>
                                <div class="box-avt d-flex align-items-center gap-12">
                                    <div class="avatar avt-60 round">
                                        <img src="{{ asset('assets/images/agents/agent2.jpg') }}" alt="avatar">
                                    </div>
                                    <div class="info">
                                        <div class="h7 fw-7">Abebe Bekele</div>
                                        <p class="text-variant-1 mt-4">Chef de Projet</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide wow fadeIn" data-wow-delay=".6s" data-wow-duration="2000ms">
                            <div class="box-tes-item wow fadeIn" data-wow-delay=".2s" data-wow-duration="2000ms">
                                <ul class="list-star">
                                    <li class="icon icon-star"></li>
                                    <li class="icon icon-star"></li>
                                    <li class="icon icon-star"></li>
                                    <li class="icon icon-star"></li>
                                    <li class="icon icon-star"></li>
                                </ul>
                                <p class=" text-justify fs-6 note body-1">
                                    "Je suis très satisfait du professionnalisme et des connaissances de l'équipe de
                                    courtage. Ils m'ont aidé à trouver la maison idéale et m'ont soutenu dans les
                                    aspects juridiques et financiers, me permettant de prendre ma décision en toute
                                    confiance."
                                </p>
                                <div class="box-avt d-flex align-items-center gap-12">
                                    <div class="avatar avt-60 round">
                                        <img src="{{ asset('assets/images/agents/agent4.jpg') }}" alt="avatar">
                                    </div>
                                    <div class="info">
                                        <div class="h7 fw-7">Nneka Okeke</div>
                                        <p class="text-variant-1 mt-4">Responsable de Communication</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

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
                        <button class="tf-btn primary" >
                            <a href="{{route('contact')}}" class="text-white">Contactez Nous</a>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div class="overlay"></div>

</section>
<!-- End Contact -->
<!-- Agents -->
<section class="flat-section flat-agents">
    <div class="container">
        <div class="box-title text-center wow fadeIn" data-wow-delay=".2s" data-wow-duration="2000ms">
            <div class="text-subtitle text-primary">Notre Equipe</div>
            <h4 class="mt-4">Nos Responsables</h4>
        </div>
        <div class="row">
            <div class="box col-lg-3 col-sm-6">
                <div class="box-agent hover-img wow fadeIn" data-wow-delay=".2s" data-wow-duration="2000ms">
                    <a href="#" class="box-img img-style">
                        <img src="{{ asset('assets/images/welldone/boss.jpg') }}" alt="image-agent">
                    </a>
                    <a href="#" class="content">
                        <div class="info">
                            <h6 class="link">Mireille Biloa</h6>
                            <p class="mt-4 text-variant-1">PDG et Fondatrice</p>
                        </div>
                        <a  target="_blank" href=" https://wa.me/+23799591992"><span class="icon-phone"></span></a>
                    </a>
                </div>
            </div>
            <div class="box col-lg-3 col-sm-6">
                <div class="box-agent hover-img wow fadeIn" data-wow-delay=".4s" data-wow-duration="2000ms">
                    <a href="#" class="box-img img-style">
                        <img src="{{ asset('assets/images/agents/agent6.jpg') }}" alt="image-agent">

                    </a>
                    <a href="#" class="content">
                        <div class="info">
                            <h6 class="link">John Tchoungang</h6>
                            <p class="mt-4 text-variant-1">Community Manager</p>
                        </div>
                        <a target="_blank" href=" https://wa.me/+23799591992"><span class="icon-phone"></span></a>
                </div>
            </div>
            <div class="box col-lg-3 col-sm-6">
                <div class="box-agent hover-img wow fadeIn" data-wow-delay=".6s" data-wow-duration="2000ms">
                    <a href="#" class="box-img img-style">
                        <img src="{{ asset('assets/images/agents/agent3.jpg') }}" alt="image-agent">

                    </a>
                    <a href="#" class="content">
                        <div class="info">
                            <h6 class="link">Chris Kenfack</h6>
                            <p class="mt-4 text-variant-1">Commercial</p>
                        </div>
                        <a target="_blank" href=" https://wa.me/+23799591992"><span class="icon-phone"></span></a>
                </div>
            </div>
            <div class="box col-lg-3 col-sm-6">
                <div class="box-agent hover-img wow fadeIn" data-wow-delay=".8s" data-wow-duration="2000ms">
                    <a href="#" class="box-img img-style">
                        <img src="{{ asset('assets/images/agents/agent7.jpg') }}" alt="image-agent">

                    </a>
                    <a href="#" class="content">
                        <div class="info">
                            <h6 class="link">Octavie Ateba</h6>
                            <p class="mt-4 text-variant-1">Assistant de Direction</p>
                        </div>
                        <a target="_blank" href=" https://wa.me/+23799591992"><span class="icon-phone"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Agents -->
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
