@extends('layouts.front')
@section('title', 'FAQs')
@section('content')
    <section class="flat-title-page style-2">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}">@lang('Home')</a></li>
                <li>/ FAQs</li>
            </ul>
            <h2 class="text-center"> FAQs</h2>
        </div>
    </section>

    <!-- End Page Title -->

    <section class="flat-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="tf-faq">
                        <h5>Généralités sur {{ config('app.name') }} </h5>
                        <ul class="box-faq" id="wrapper-faq">
                            <li class="faq-item">
                                <a href="#accordion-faq-one" class="faq-header collapsed" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="accordion-faq-one">
                                    Qui est {{ config('app.name') }} ?
                                </a>
                                <div id="accordion-faq-one" class="collapse" data-bs-parent="#wrapper-faq">
                                    <p class="faq-body">
                                        Well-Done REAL Estate SCI est une agence immobilière spécialisée fondée en 2024 par
                                        Mireille Biloa, après plusieurs années de travail en freelance. L'entreprise
                                        regroupe des experts ayant décidé d'unir leurs expériences pour offrir une expertise
                                        approfondie en aménagement d'espaces et en vente de terrains, tout en mettant un
                                        point d'honneur sur la transparence et l'engagement envers nos clients.
                                    </p>
                                </div>
                            </li>
                            <li class="faq-item">
                                <a href="#accordion-faq-two" class="faq-header" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="accordion-faq-two">
                                    Quels sont les services proposés par {{ config('app.name') }} ?
                                </a>
                                <div id="accordion-faq-two" class="collapse show" data-bs-parent="#wrapper-faq">
                                    <p class="faq-body">
                                        Nous offrons des services complets incluant l'achat de logements, la location, la
                                        vente de biens immobiliers ainsi que des études de marché et des conseils
                                        stratégiques pour optimiser la valeur de vos propriétés.
                                    </p>
                                </div>
                            </li>
                            <li class="faq-item">
                                <a href="#accordion-faq-four" class="faq-header collapsed" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="accordion-faq-four">
                                    Pourquoi choisir {{ config('app.name') }} ?
                                </a>
                                <div id="accordion-faq-four" class="collapse" data-bs-parent="#wrapper-faq">
                                    <p class="faq-body">
                                        Nous sommes une équipe de professionnels passionnés et expérimentés, dédiés à la
                                        satisfaction de nos clients. Grâce à notre connaissance approfondie du marché local,
                                        nous vous proposons des solutions personnalisées et adaptées à vos besoins
                                        spécifiques.
                                    </p>
                                </div>
                            </li>

                        </ul>

                    </div>
                    <div class="tf-faq">
                        <h5>Services Immobiliers</h5>
                        <ul class="box-faq" id="wrapper-faq-two">
                            <li class="faq-item">
                                <a href="#accordion2-faq-five" class="faq-header collapsed" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="accordion2-faq-five">

                                    Quels types de terrains proposez-vous à la vente ?
                                </a>
                                <div id="accordion2-faq-five" class="collapse" data-bs-parent="#wrapper-faq-two">
                                    <p class="faq-body">Nous proposons une variété de terrains, incluant des terrains
                                        constructibles, des terrains agricoles, et des terrains à aménager. Notre offre
                                        s'adapte aux différents projets de nos clients, qu'ils soient particuliers ou
                                        professionnels.
                                    </p>
                                </div>
                            </li>
                            <li class="faq-item">
                                <a href="#accordion2-faq-one" class="faq-header collapsed" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="accordion2-faq-one">
                                    Comment puis-je acheter un nouveau logement avec {{ config('app.name') }} ?
                                </a>
                                <div id="accordion2-faq-one" class="collapse" data-bs-parent="#wrapper-faq-two">
                                    <p class="faq-body">
                                        Nous vous accompagnons à chaque étape de votre projet d'achat immobilier. De la
                                        recherche de propriétés correspondant à vos critères jusqu'à la finalisation de
                                        l'achat, nos experts vous guident pour une expérience sans stress.
                                    </p>
                                </div>

                            </li>
                            <li class="faq-item">
                                <a href="#accordion2-faq-two" class="faq-header collapsed" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="accordion2-faq-two">
                                    Que comprend l'étude et les conseils proposés par {{ config('app.name') }} ?
                                </a>
                                <div id="accordion2-faq-two" class="collapse" data-bs-parent="#wrapper-faq-two">
                                    <p class="faq-body">
                                        Notre service d'étude et de conseils vous offre une analyse approfondie du marché
                                        local immobilier. Nous vous fournirons des recommandations stratégiques pour
                                        optimiser la valeur de vos biens et maximiser vos investissements.
                                    </p>
                                </div>
                            </li>

                        </ul>

                    </div>
                    <div class="tf-faq">
                        <h5>Engagement envers les Clients</h5>
                        <ul class="box-faq" id="wrapper-faq-three">
                            <li class="faq-item">
                                <a href="#accordion3-faq-one" class="faq-header collapsed" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="accordion3-faq-one">
                                    Comment puis-je être sûr de la qualité du service client chez Well-Done REAL Estate.
                                    SCI.?
                                </a>
                                <div id="accordion3-faq-one" class="collapse" data-bs-parent="#wrapper-faq-three">
                                    <p class="faq-body">
                                        Nous nous engageons à vous offrir un service client de haute qualité, caractérisé
                                        par notre écoute active, notre réactivité et notre volonté constante de répondre à
                                        vos attentes.
                                    </p>
                                </div>

                            </li>
                            <li class="faq-item">
                                <a href="#accordion2-faq-six" class="faq-header collapsed" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="accordion2-faq-six">
                                    Comment assurez-vous la transparence dans vos transactions
                                </a>
                                <div id="accordion2-faq-six" class="collapse" data-bs-parent="#wrapper-faq-two">
                                    <p class="faq-body">
                                        Nous fournissons toutes les informations pertinentes sur les terrains, y compris les
                                        éventuels défauts ou contraintes. Nous expliquons clairement chaque étape du
                                        processus et restons disponibles pour répondre à toutes vos questions. </p>
                                </div>
                            </li>
                            <li class="faq-item">
                                <a href="#accordion3-faq-two" class="faq-header collapsed" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="accordion3-faq-two">
                                    Quelle est l'approche de {{ config('app.name') }} en matière de satisfaction client?
                                </a>
                                <div id="accordion3-faq-two" class="collapse" data-bs-parent="#wrapper-faq-three">
                                    <p class="faq-body">
                                        Votre satisfaction est notre priorité absolue. Nous nous efforçons de comprendre vos
                                        besoins spécifiques afin de vous offrir des solutions sur mesure qui garantissent le
                                        succès de votre projet immobilier.
                                    </p>
                                </div>
                            </li>

                            <li class="faq-item">
                                <a href="#accordion3-faq-four" class="faq-header collapsed" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="accordion3-faq-four">
                                    Comment puis-je bénéficier de l'expertise locale de {{ config('app.name') }} ?
                                </a>
                                <div id="accordion3-faq-four" class="collapse" data-bs-parent="#wrapper-faq-three">
                                    <p class="faq-body">
                                        En nous rejoignant, vous bénéficiez de l'expertise d'une agence immobilière locale
                                        de
                                        confiance. Nous sommes déterminés à contribuer à votre réussite en vous offrant des
                                        solutions adaptées à vos objectifs immobiliers.
                                    </p>
                                </div>
                            </li>

                            <li class="faq-item">
                                <a href="#accordion3-faq-five" class="faq-header collapsed" data-bs-toggle="collapse"
                                    aria-expanded="false" aria-controls="accordion3-faq-five">
                                    Comment puis-je vous contacter?
                                </a>
                                <div id="accordion3-faq-five" class="collapse" data-bs-parent="#wrapper-faq-three">
                                    <p class="faq-body">
                                        Pour toute question ou demande d'information, vous pouvez nous contacter par
                                        téléphone au (+237) 6 99 59 19 92, par email à contact@welldonerealestatesci.com, ou
                                        en vous rendant directement dans nos locaux situés à Akwa Nord, Douala, Cameroun.
                                        Nous sommes à votre disposition pour vous aider.
                                    </p>
                                </div>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </section>


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
 
@endsection
