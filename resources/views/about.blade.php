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
                    <p class="description">Découvrez la maison de vos rêves sans effort. Explorez diverses propriétés et bénéficiez des conseils d'experts pour une expérience d'achat sans faille.</p>
                    {{-- <a href="#" class="btn-view style-1"><span class="text">Learn More</span> <span class="icon icon-arrow-right2"></span> </a> --}}
                </div>
            </div>
            <div class="box-service hover-btn-view">
                <div class="icon-box">
                    <span class="icon icon-rent-home"></span>
                </div>
                <div class="content">
                    <h6 class="title">Louer un logement</h6>
                    <p class="description">Découvrez sans effort la location qui vous convient. Explorez une grande variété d'offres adaptées précisément à vos besoins et à votre style de vie.</p>
                    {{-- <a href="#" class="btn-view style-1"><span class="text">Learn More</span> <span class="icon icon-arrow-right2"></span> </a> --}}
                </div>
            </div>
            <div class="box-service hover-btn-view">
                <div class="icon-box">
                    <span class="icon icon-sale-home"></span>
                </div>
                <div class="content">
                    <h6 class="title">Vendre</h6>
                    <p class="description">Vendez en toute confiance grâce aux conseils d'un expert et à des stratégies efficaces, en mettant en valeur les meilleurs atouts de votre propriété pour une vente réussie.</p>
                    {{-- <a href="#" class="btn-view style-1"><span class="text">Learn More</span> <span class="icon icon-arrow-right2"></span> </a> --}}
                </div>   
            </div>
        </div>
        <div class="container-fluid row  mb-5 justify-content">
            <h6 class="title col-md-4 col-sm-4 col-xl-4 col-xxl-3" >Travaux de Lotissement</h6>
            <h6 class="title col-md-4 col-sm-4 col-xl-4 col-xxl-3">Achat et vente de Terrains</h6>
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
        <div class="flat-counter tf-counter wrap-counter wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration="2000ms">
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
        <div class="swiper tf-sw-testimonial" data-preview-lg="2" data-preview-md="2" data-preview-sm="2" data-space="30">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box-tes-item style-2">
                        <ul class="list-star">
                            <li class="icon icon-star"></li>
                            <li class="icon icon-star"></li>
                            <li class="icon icon-star"></li>
                            <li class="icon icon-star"></li>
                            <li class="icon icon-star"></li>
                        </ul>
                        <p class="note body-1">
                            "J'ai vraiment apprécié le professionnalisme et les connaissances approfondies de l'équipe de courtage. Ils m'ont non seulement aidé à trouver la maison idéale, mais ils m'ont également assisté pour les aspects juridiques et financiers, ce qui m'a permis de me sentir confiant et sûr de ma décision."                                            </p>
                        <div class="box-avt d-flex align-items-center gap-12">
                            <div class="avatar avt-60 round">
                                <img src="{{asset('assets/images/avatar/avt-7.jpg')}}" alt="avatar">
                            </div>
                            <div class="info">
                                <div class="h7 fw-7">Felix Atangana</div>
                                <p class="text-variant-1 mt-4">client</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box-tes-item style-2">
                        <ul class="list-star">
                            <li class="icon icon-star"></li>
                            <li class="icon icon-star"></li>
                            <li class="icon icon-star"></li>
                            <li class="icon icon-star"></li>
                            <li class="icon icon-star"></li>
                        </ul>
                        <p class="note body-1">
                            "Mon expérience avec les services de gestion immobilière a dépassé mes attentes. Ils gèrent efficacement les propriétés avec une approche professionnelle et attentive dans chaque situation. J'ai l'assurance que tout problème sera résolu rapidement et efficacement." </p>
                        <div class="box-avt d-flex align-items-center gap-12">
                            <div class="avatar avt-60 round">
                                <img src="{{asset('assets/images/avatar/avt-5.jpg')}}" alt="avatar">
                            </div>
                            <div class="info">
                                <div class="h7 fw-7">Claude Nana</div>
                                <p class="text-variant-1 mt-4">client</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box-tes-item style-2">
                        <ul class="list-star">
                            <li class="icon icon-star"></li>
                            <li class="icon icon-star"></li>
                            <li class="icon icon-star"></li>
                            <li class="icon icon-star"></li>
                            <li class="icon icon-star"></li>
                        </ul>
                        <p class="note body-1">
                            "J'ai récemment travaillé avec cette agence  pour acheter ma nouvelle maison et je ne peux que les recommander chaleureusement. Leur équipe a fait un travail exceptionnel tout au long du processus. Ils ont pris le temps de bien comprendre mes besoins et mes critères, et m'ont guidé avec patience et professionnalisme pour trouver la propriété idéale. Leur expertise du marché local m'a permis de faire le bon choix, et ils se sont montrés très réactifs à chaque étape. Grâce à eux, l'achat s'est déroulé sans accroc. Je suis ravi de ma nouvelle maison et je remercie toute l'équipe de Well-done pour leur excellent service."   </p>
                        <div class="box-avt d-flex align-items-center gap-12">
                            <div class="avatar avt-60 round">
                                <img src="{{asset('assets/images/avatar/avt-5.jpg')}}" alt="avatar">
                            </div>
                            <div class="info">
                                <div class="h7 fw-7">Adam Tchamba</div>
                                <p class="text-variant-1 mt-4">Client</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box-tes-item style-2">
                        <ul class="list-star">
                            <li class="icon icon-star"></li>
                            <li class="icon icon-star"></li>
                            <li class="icon icon-star"></li>
                            <li class="icon icon-star"></li>
                            <li class="icon icon-star"></li>
                        </ul>
                        <p class="note body-1">
                            "Je tiens à saluer l'excellent service de cette agence lors de mon achat immobilier. Leur conseiller, M. Martin, a été à l'écoute de mes besoins et a su me guider dans le choix de la bonne propriété. Tout au long des démarches, il a fait preuve d'une grande disponibilité et a géré avec brio tous les aspects techniques et juridiques. Grâce à son professionnalisme, l'acquisition s'est déroulée dans les meilleures conditions."    </p>                                        </p>
                        <div class="box-avt d-flex align-items-center gap-12">
                            <div class="avatar avt-60 round">
                                <img src="{{asset('assets/images/avatar/avt-7.jpg')}}" alt="avatar">
                            </div>
                            <div class="info">
                                <div class="h7 fw-7">Conrad Tsafack</div>
                                <p class="text-variant-1 mt-4">Client</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
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
        <div class="box-title text-center">
            <div class="text-subtitle text-primary">Our Teams</div>
            <h4 class="mt-4">Meet Our Agents</h4>
        </div>
        <div class="row">
            <div class="box col-lg-4 col-sm-6">
                <div class="box-agent style-1 hover-img">
                    <div class="box-img img-style">
                        <img src="images/agents/agent-lg-1.jpg" alt="image-agent">
                        <ul class="agent-social">
                            <li><a href="#" class="icon icon-facebook"></a></li>
                            <li><a href="#" class="icon icon-linkedin"></a></li>
                            <li><a href="#" class="icon icon-twitter"></a></li>
                            <li><a href="#" class="icon icon-instagram"></a></li>
                        </ul>
                    </div>
                    <a href="#" class="content">
                        <div class="info">
                            <h6 class="link">Jack Halow</h6>
                            <p class="mt-4 text-variant-1">CEO & Founder</p>
                        </div>
                        <span class="icon-phone"></span>
                    </a>
                </div>
            </div>
            <div class="box col-lg-4 col-sm-6">
                <div class="box-agent style-1 hover-img">
                    <div class="box-img img-style">
                        <img src="images/agents/agent-lg-2.jpg" alt="image-agent">
                        <ul class="agent-social">
                            <li><a href="#" class="icon icon-facebook"></a></li>
                            <li><a href="#" class="icon icon-linkedin"></a></li>
                            <li><a href="#" class="icon icon-twitter"></a></li>
                            <li><a href="#" class="icon icon-instagram"></a></li>
                        </ul>
                    </div>
                    <a href="#" class="content">
                        <div class="info">
                            <h6 class="link">John Smith</h6>
                            <p class="mt-4 text-variant-1">Property Manager</p>
                        </div>
                        <span class="icon-phone"></span>
                    </a>
                </div>
            </div>
            <div class="box col-lg-4 col-sm-6">
                <div class="box-agent style-1 hover-img">
                    <div class="box-img img-style">
                        <img src="images/agents/agent-lg-3.jpg" alt="image-agent">
                        <ul class="agent-social">
                            <li><a href="#" class="icon icon-facebook"></a></li>
                            <li><a href="#" class="icon icon-linkedin"></a></li>
                            <li><a href="#" class="icon icon-twitter"></a></li>
                            <li><a href="#" class="icon icon-instagram"></a></li>
                        </ul>
                    </div>
                    <a href="#" class="content">
                        <div class="info">
                            <h6 class="link">Chris Patt</h6>
                            <p class="mt-4 text-variant-1">Administrative Staff</p>
                        </div>
                        <span class="icon-phone"></span>
                    </a>
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
