@extends('layouts.app')
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
                <li><a href="index.html">@lang('Home')</a></li>
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
                                <div class="text-1 title">Adresse:</div>
                                <p class="p-16 text-variant-1">Akwa Nord, Douala
                                    <br>Cameroun
                                </p>
                            </li>
                            <li class="box">
                                <div class="text-1 title">Infomations:</div>
                                <p class="p-16 text-variant-1">(+237) 6 99 59 19 92<br> welldonerealestate237@yahoo.com</p>
                            </li>
                            <li class="box">
                                <div class="text-1 title">Ouvert:</div>
                                <p class="p-16 text-variant-1">Lundi - Vendredi : 08:00 - 18:00 <br> Saturday : 10:00 -
                                    15:00</p>

                            </li>
                            <li class="box">
                                <div class="text-1 title">Suivez nous:</div>
                                <ul class="box-social">
                                    <li><a href="#" class="item">
                                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.00879 10.125L9.50871 6.86742H6.38297V4.75348C6.38297 3.86227 6.81961 2.99355 8.21953 2.99355H9.64055V0.220078C9.64055 0.220078 8.35102 0 7.11809 0C4.54395 0 2.86137 1.56023 2.86137 4.38469V6.86742H0V10.125H2.86137V18H6.38297V10.125H9.00879Z"
                                                    fill="#161E2D" />
                                            </svg>
                                        </a></li>
                                    <li><a href="#" class="item">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.00245 4.38427C6.4484 4.38427 4.38828 6.44438 4.38828 8.99844C4.38828 11.5525 6.4484 13.6126 9.00245 13.6126C11.5565 13.6126 13.6166 11.5525 13.6166 8.99844C13.6166 6.44438 11.5565 4.38427 9.00245 4.38427ZM9.00245 11.9983C7.35195 11.9983 6.00264 10.653 6.00264 8.99844C6.00264 7.34392 7.34794 5.99862 9.00245 5.99862C10.657 5.99862 12.0023 7.34392 12.0023 8.99844C12.0023 10.653 10.653 11.9983 9.00245 11.9983ZM14.8816 4.19552C14.8816 4.79388 14.3997 5.27176 13.8054 5.27176C13.207 5.27176 12.7291 4.78986 12.7291 4.19552C12.7291 3.60118 13.211 3.11928 13.8054 3.11928C14.3997 3.11928 14.8816 3.60118 14.8816 4.19552ZM17.9376 5.28782C17.8694 3.84615 17.5401 2.56912 16.4839 1.51697C15.4318 0.46483 14.1547 0.135534 12.7131 0.0632491C11.2272 -0.021083 6.77368 -0.021083 5.28782 0.0632491C3.85016 0.131518 2.57313 0.460815 1.51697 1.51296C0.460815 2.5651 0.135534 3.84213 0.0632491 5.28381C-0.021083 6.76966 -0.021083 11.2232 0.0632491 12.7091C0.131518 14.1507 0.460815 15.4278 1.51697 16.4799C2.57313 17.532 3.84615 17.8613 5.28782 17.9336C6.77368 18.018 11.2272 18.018 12.7131 17.9336C14.1547 17.8654 15.4318 17.5361 16.4839 16.4799C17.5361 15.4278 17.8654 14.1507 17.9376 12.7091C18.022 11.2232 18.022 6.77368 17.9376 5.28782ZM16.0181 14.3033C15.7048 15.0904 15.0985 15.6968 14.3073 16.0141C13.1227 16.4839 10.3116 16.3755 9.00245 16.3755C7.6933 16.3755 4.87821 16.4799 3.69756 16.0141C2.91046 15.7008 2.30407 15.0944 1.98682 14.3033C1.51697 13.1187 1.6254 10.3076 1.6254 8.99844C1.6254 7.68928 1.52099 4.8742 1.98682 3.69355C2.30006 2.90645 2.90645 2.30006 3.69756 1.98281C4.88223 1.51296 7.6933 1.62139 9.00245 1.62139C10.3116 1.62139 13.1267 1.51697 14.3073 1.98281C15.0944 2.29604 15.7008 2.90243 16.0181 3.69355C16.4879 4.87821 16.3795 7.68928 16.3795 8.99844C16.3795 10.3076 16.4879 13.1227 16.0181 14.3033Z"
                                                    fill="#161E2D" />
                                            </svg>

                                        </a></li>
                                    <li><a href="#" class="item">
                                            <svg width="20" height="14" viewBox="0 0 20 14" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M19.2775 2.16608C19.051 1.31346 18.3839 0.641967 17.5368 0.414086C16.0013 0 9.84445 0 9.84445 0C9.84445 0 3.68759 0 2.15212 0.414086C1.30502 0.642003 0.637857 1.31346 0.411419 2.16608C0 3.71149 0 6.93586 0 6.93586C0 6.93586 0 10.1602 0.411419 11.7056C0.637857 12.5583 1.30502 13.2018 2.15212 13.4296C3.68759 13.8437 9.84445 13.8437 9.84445 13.8437C9.84445 13.8437 16.0013 13.8437 17.5368 13.4296C18.3839 13.2018 19.051 12.5583 19.2775 11.7056C19.6889 10.1602 19.6889 6.93586 19.6889 6.93586C19.6889 6.93586 19.6889 3.71149 19.2775 2.16608ZM7.8308 9.86334V4.00837L12.9767 6.93593L7.8308 9.86334Z"
                                                    fill="#161E2D" />
                                            </svg>

                                        </a></li>
                                    <li><a href="#" class="item">
                                            <svg width="19" height="16" viewBox="0 0 19 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M16.9797 3.83062C16.9917 3.99873 16.9917 4.16688 16.9917 4.33498C16.9917 9.46249 13.089 15.3706 5.95611 15.3706C3.75858 15.3706 1.71719 14.7341 0 13.6294C0.312227 13.6654 0.612403 13.6774 0.936643 13.6774C2.74986 13.6774 4.41904 13.065 5.75196 12.0203C4.04678 11.9843 2.61779 10.8675 2.12545 9.33042C2.36563 9.36643 2.60578 9.39045 2.85798 9.39045C3.20621 9.39045 3.55447 9.3424 3.87868 9.25838C2.10146 8.8981 0.768498 7.33705 0.768498 5.45175V5.40373C1.28483 5.69193 1.8853 5.87205 2.52169 5.89604C1.47697 5.19955 0.792524 4.01075 0.792524 2.66581C0.792524 1.94533 0.984621 1.28487 1.32087 0.70847C3.2302 3.06209 6.10019 4.59912 9.31838 4.76727C9.25835 4.47907 9.22231 4.17889 9.22231 3.87868C9.22231 1.74118 10.9515 0 13.101 0C14.2177 0 15.2264 0.468321 15.9349 1.22484C16.8115 1.05674 17.6521 0.732496 18.3966 0.288201C18.1084 1.18884 17.496 1.94536 16.6915 2.42566C17.472 2.34164 18.2285 2.12545 18.925 1.82527C18.3967 2.59377 17.7362 3.27821 16.9797 3.83062Z"
                                                    fill="#161E2D" />
                                            </svg>
                                        </a></li>
                                    <li><a href="#" class="item">
                                            <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M7.35713 0C3.65693 0 0 2.4668 0 6.45913C0 8.99806 1.42815 10.4406 2.29369 10.4406C2.65073 10.4406 2.8563 9.44526 2.8563 9.16395C2.8563 8.82856 2.00157 8.11448 2.00157 6.71879C2.00157 3.81922 4.20871 1.76355 7.06501 1.76355C9.52099 1.76355 11.3386 3.15924 11.3386 5.72341C11.3386 7.63843 10.5705 11.2304 8.08202 11.2304C7.18402 11.2304 6.41585 10.5813 6.41585 9.65082C6.41585 8.28759 7.36795 6.96763 7.36795 5.56112C7.36795 3.17366 3.9815 3.60644 3.9815 6.49158C3.9815 7.09747 4.05724 7.76826 4.32772 8.32005C3.83003 10.4623 2.81302 13.654 2.81302 15.8611C2.81302 16.5427 2.91039 17.2135 2.97531 17.8951C3.09793 18.0322 3.03662 18.0178 3.22415 17.9492C5.0418 15.4608 4.97688 14.9739 5.79915 11.7173C6.24274 12.5612 7.38959 13.0156 8.29841 13.0156C12.1284 13.0156 13.8487 9.28297 13.8487 5.91816C13.8487 2.33697 10.7544 0 7.35713 0Z"
                                                    fill="#161E2D" />
                                            </svg>
                                        </a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <iframe class="position-relative rounded w-100 h-100"
            src="https://www.google.com/maps/embed/v1/place?q=Douala,+Cameroon&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"
            frameborder="0" style="min-height: 400px; border:0;" allowfullscreen="true" aria-hidden="false"
            tabindex="0">
        </iframe>
    </div> --}}
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
