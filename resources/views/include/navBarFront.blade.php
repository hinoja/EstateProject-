@php
    $currentUri = Route::current()->uri;
    $currentRouteName = Route::currentRouteName();
@endphp

<div class="header-lower">
    <div class="row">
        <div class="col-lg-12">
            <div class="inner-container d-flex justify-content-between align-items-center">
                <!-- Logo Box -->
                <div class="logo-box">
                    <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo/logo.jpg') }}"
                                alt="logo" width="80" height="44"></a></div>
                </div>
                <div class="nav-outer">
                    <!-- Main Menu -->
                    <nav class="main-menu show navbar-expand-md">
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="@if ($currentRouteName == 'home') current @endif"><a
                                        href="{{ route('home') }}">@lang('Home')</a> </li>
                                <li class="@if (Str::contains($currentUri, 'service')) current @endif"><a
                                        href="#services">@lang('Services')</a> </li>
                                <li class="@if (Str::contains($currentUri, 'about')) current @endif"><a
                                        href="{{ route('about') }}">@lang('About')</a></li>
                                <li class="@if (Str::contains($currentUri, 'contact')) current @endif"><a
                                        href="{{ route('contact') }}">@lang('Contact us')</a>
                                </li>
                                <li>
                                    @auth
                                <div   class="nav-item dropdown mr-5">
                                    <button style="background-color: rgb(81,132,197)"
                                        class="btn btn-primary dropdown-toggle mr-8" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">{{ auth()->user()->name }}</button>
                                    <ul class="dropdown-menu ">
                                        @if (auth()->user())
                                            <li><a class="dropdown-item"
                                                    href="{{ route('dashboard') }}"><small>@lang('Go to dashboard')</small></a>
                                            </li>
                                        @endif
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                            this.closest('form').submit();"
                                                    class="dropdown-item"> @lang('Log Out')
                                                </a>
                                            </li>
                                        </form>
                                    </ul>
                                </div>
                            @else
                                <div class="nav-item nav-link auth">
                                    <a href="{{ route('login') }}" type="button" style="background-color: rgb(81,132,197)"
                                        class="btn btn-primary mt-2 me-2">@lang('Log in')</a>
                                </div>
                            @endauth
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                </div>


                <div class="header-account">
                    <div class="register">
                        {{-- <ul class="d-flex">

                            @auth
                                <div   class="nav-item dropdown mr-5">
                                    <button style="background-color: rgb(81,132,197)"
                                        class="btn btn-primary dropdown-toggle mr-8" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">{{ auth()->user()->name }}</button>
                                    <ul class="dropdown-menu ">
                                        @if (auth()->user())
                                            <li><a class="dropdown-item"
                                                    href="{{ route('dashboard') }}"><small>@lang('Go to dashboard')</small></a>
                                            </li>
                                        @endif
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                            this.closest('form').submit();"
                                                    class="dropdown-item"> @lang('Log Out')
                                                </a>
                                            </li>
                                        </form>
                                    </ul>
                                </div>
                            @else
                                <div class="nav-item nav-link auth">
                                    <a href="{{ route('login') }}" type="button" style="background-color: rgb(81,132,197)"
                                        class="btn btn-primary mt-2 me-2">@lang('Log in')</a>
                                </div>
                            @endauth

                        </ul> --}}
                    </div>
                </div>

                <div class="mobile-nav-toggler mobile-button"><span></span></div>

            </div>
        </div>
    </div>
</div>
