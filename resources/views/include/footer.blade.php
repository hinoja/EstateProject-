<footer class="footer">
    <div class="top-footer">
        <div class="container">
            <div class="content-footer-top">
                <div class="footer-logo">
                    <img src="{{ asset('assets/images/logo/logo.jpg') }}" alt="logo-footer" width="160" height="44">
                </div>
                <div class="wd-social">
                    <span>Suivez-nous :</span>
                    <ul class="list-social d-flex align-items-center">
                        <li><a href="#" class="box-icon w-40 social"><i class="icon icon-facebook"></i></a></li>
                        <li><a href="#" class="box-icon w-40 social"><i class="icon icon-linkedin"></i></a></li>
                        <li><a href="#" class="box-icon w-40 social">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
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
                        <li><a href="#" class="box-icon w-40 social"><i class="icon icon-pinterest"></i></a></li>
                        <li><a href="#" class="box-icon w-40 social"><i class="icon icon-instagram"></i></a></li>
                        <li><a href="#" class="box-icon w-40 social"><i class="icon icon-youtube"></i></a></li>
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

                        <p class="text-variant-2">Spécialisée les activités et opérations immobilières
                            pour
                            les personnes dans le besoin. </p>
                        <ul class="mt-12">
                            <li class="mt-12 d-flex align-items-center gap-8">
                                <i class="icon icon-mapPinLine fs-20 text-variant-2"></i>
                                <p class="text-white">Akwa-nord, Douala Cameroun</p>
                            </li>
                            <li class="mt-12 d-flex align-items-center gap-8">
                                <i class="icon icon-phone2 fs-20 text-variant-2"></i>
                                <a href="tel:1-333-345-6868" class="text-white caption-1">+237699591992</a>
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
                        <div class="fw-7 text-white">@lang('Categories')</div>
                        <ul class="mt-10 navigation-menu-footer">
                            <li> <a href="#" class="caption-1 text-variant-2">Nos
                                    Services</a> </li>

                            <li> <a href="#" class="caption-1 text-variant-2"> @lang('About')
                                    de Nous</a>
                            </li>

                            <li> <a href="{{ route('contact') }}" class="caption-1 text-variant-2">Laisser un Message
                                </a> </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="footer-cl-3">
                        <div class="fw-7 text-white">Notre Companie</div>
                        <ul class="mt-10 navigation-menu-footer">
                            <li> <a href="#" class="caption-1 text-variant-2">Vente de
                                    maison</a> </li>

                            <li> <a href="#" class="caption-1 text-variant-2">Location de
                                    maison</a> </li>
                            <li> <a href="#" class="caption-1 text-variant-2">Achat maison</a>
                            </li>
                            <li> <a href="#" class="caption-1 text-variant-2">Votre Agence</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="footer-cl-4">
                        <div class="fw-7 text-white">
                            Newsletter
                        </div>
                        <p class="mt-12 text-variant-2">Votre dose hebdomadaire/mensuelle de
                            connaissances et d'inspiration</p>
                        <form class="mt-12" id="subscribe-form" action="#" method="post" accept-charset="utf-8"
                            data-mailchimp="true">
                            <div id="subscribe-content">
                                <span class="icon-left icon-mail"></span>
                                <input type="email" name="email-form" id="subscribe-email"
                                    placeholder="address email" />
                                <button type="button" id="subscribe-button" class="button-subscribe"><i
                                        class="icon icon-send"></i></button>
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
                <div class="copyright"> &copy;2024 <a style="color: white" class=""
                        href="#">{{ config('app.name') }}</a>, @lang('All Rights Reserved.')
                </div>
                <div class="row"></div>
                <br>

                <ul class="menu-bottom">

                    <li style="color: white" class="fs-12"> <small> @lang('Template Designed By')<a
                                href="https://themesflat.com" target="_blank"> Themesflat
                            </a></small> </li>
                    <li style="color: white" class="fs-12"> @lang('Distributed By')<a href="https://themeforest.net"
                            target="_blank">Themeforest
                        </a> </li>

                </ul>
            </div>
        </div>
    </div>
</footer>
