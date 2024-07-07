@extends('layouts.back')
@section('title', __('dashboard'))
@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            <div class="button-show-hide show-mb">
                <span class="body-1">Show Dashboard</span>
            </div>
            <div class="flat-counter-v2 tf-counter">
                <div class="counter-box">
                    <div class="box-icon w-68 round">
                        <span class="fa fa-users"></span>
                        {{-- <span class="icon icon-bookmark"></span> --}}
                    </div>
                    <div class="content-box">
                        <div class="title-count">@lang('Users')</div>
                        <div class="d-flex align-items-end">
                            <h6 class="number" data-speed="2000" data-to="1" data-inviewport="yes">{{ $users }}</h6>
                        </div>

                    </div>
                </div>
                <div class="counter-box">
                    <div class="box-icon w-68 round">
                        <span class="icon icon-list-dashes"></span>
                    </div>
                    <div class="content-box">
                        <div class="title-count">Terrains</div>
                        <div class="d-flex align-items-end">
                            <h6 class="number" data-speed="2000" data-to="17" data-inviewport="yes">{{ $estates }}</h6>
                            {{-- <span class="fw-7 text-variant-2">/17 remaining</span> --}}
                        </div>

                    </div>
                </div>
                {{-- <div class="counter-box">
                    <div class="box-icon w-68 round">
                        <span class="icon icon-clock-countdown"></span>
                    </div>
                    <div class="content-box">
                        <div class="title-count">Pending</div>
                        <div class="d-flex align-items-end">
                            <h6 class="number" data-speed="2000" data-to="0" data-inviewport="yes">0</h6>
                        </div>

                    </div>
                </div> --}}

                <div class="counter-box">
                    <div class="box-icon w-68 round">
                        <span class="icon icon-review"></span>
                    </div>
                    <div class="content-box">
                        <div class="title-count">Messages</div>
                        <div class="d-flex align-items-end">
                            <h6 class="number" data-speed="2000" data-to="17" data-inviewport="yes">{{ $messages }}</h6>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        {{-- <div class="footer-dashboard">
        <p class="text-variant-2">©2024 Homzen. All Rights Reserved.</p>
    </div> --}}
    </div>

    <div class="overlay-dashboard"></div>

    </div>
    </div>
@endsection
