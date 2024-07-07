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
                        <li><a target="_blank" href="https://www.facebook.com/profile.php?id=61556658645751"
                                class="box-icon w-40 social"><i class="icon icon-facebook"></i></a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="inner-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-xs-3">
                    <div class="footer-cl-1">

                        <p class="text-variant-2"> Spécialisée dans les activités et opérations immobilières
                            pour
                            les personnes dans le besoin. </p>
                        <ul class="mt-12">
                            <li class="mt-12 d-flex align-items-center gap-8">
                                <i class="icon icon-mapPinLine fs-20 text-variant-2"></i>
                                <p class="text-white">Akwa-Nord, Douala Cameroun</p>
                            </li>
                            <li class="mt-12 d-flex align-items-center gap-8">
                                <i class="icon icon-phone2 fs-20 text-variant-2"></i>
                                <a href="tel:1-333-345-6868" class="text-white caption-1">(+237) 699 591 992</a>
                            </li>
                            <li class="mt-12 d-flex align-items-center gap-8">
                                <i class="icon icon-mail fs-20 text-variant-2"></i>
                                <p class="text-white">welldonerealestate237@yahoo.com</p>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-xs-3 col-6">
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
                <div class="col-lg-2 col-md-4 col-xs-3 col-6">
                    <div class="footer-cl-3">
                        <div class="fw-7 text-white">Nos Services</div>
                        <ul class="mt-10 navigation-menu-footer">
                            <li> <span class="caption-1 text-variant-2">Vente de
                                    maison</span> </li>

                            <li> <span class="caption-1 text-variant-2">Location de
                                    maison</span> </li>
                            <li> <span class="caption-1 text-variant-2">Achat maison</span>
                            </li>
                            <li> <span class="caption-1 text-variant-2">Votre Agence</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>







    <div class="bottom-footer">
        <div class="container">
            <div class="content-footer-bottom">
                <div class="copyright"> &copy;{{ now()->format('Y') }} <a style="color: white" class=""
                        href="#">{{ config('app.name') }}</a> , @lang('All Rights Reserved.')
                </div>
                <br>

                <ul class="menu-bottom">
                    <li style="color: white" class="fs-12"> <small> @lang('Made By') :<a href="#"
                                target="_blank"> JanohiCorporation
                            </a></small> </li>
                    <li style="color: white" class="fs-12"> <small> @lang('Template Designed By') : <a
                                href="https://themesflat.com" target="_blank"> Themesflat
                            </a></small> </li>
                    <li style="color: white" class="fs-12"> @lang('Distributed By') : <a href="https://themeforest.net"
                            target="_blank">Themeforest
                        </a> </li>

                </ul>
            </div>
        </div>
    </div>
</footer>
