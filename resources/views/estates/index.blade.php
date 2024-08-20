@extends('layouts.front')
@section('title', 'Liste des Sites')
@section('content')
    <section class="flat-title-page style-2">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{ route('home') }}">@lang('Home')</a></li>
                <li>/ Liste Des Sites</li>
            </ul>
            <h2 class="text-center"> Liste Des Sites</h2>
        </div>
    </section>

    <!-- End Page Title -->

    @include('include.front.searchBar')

    <div class="mt-4 pt-3">
        @if ($category = request()->category)
            <h4 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">@lang('For category')
                <strong class="a-link">{{ $category->name }}
                    ({{ $events->count() }})</strong>
            </h4>
        @elseif (request()->isMethod('post'))
            <h6 class="text-center wow fadeInUp" data-wow-delay="0.1s">@lang('Search results') : <strong class="a-link">
                    @if ($estates === '')
                        0
                    @else
                        {{ $estates->count() }}
                    @endif
                </strong> @lang('Sites(s) trouvé(s)')
            </h6>
            <p class="text-center mb-5 fst-italic">
                <span>
                    Ville : <strong class="link link-primary">{{ request()->town ?? trans('Empty') }}</strong>,

                    Localité : <strong class="link link-primary">{{ request()->locality ?? trans('Empty') }}</strong>

                </span>
            </p>
        @endif
    </div>
    <section class="flat-section">
        <div class="container">
            {{-- @livewire('all-estates') --}}
            <div class="row">
                @foreach ($estates as $estate)
                    <div class="col-lg-4 col-md-6">
                        <a href="blog-detail.html" class="flat-blog-item hover-img">
                            <div class="img-style">

                                <img
                                    src="{{ $estate->image ? Storage::url($estate->image) : asset('assets/images/home/house-1.jpg') }}">
                                <span class="date-post">Prix : {{ number_format($estate->price, 0, ',', ' ') }} <span
                                        style="text-transform:initial">Fcfa</span> / <span
                                        style="text-transform: lowercase;">m</span><sup>2</sup>

                                </span>
                            </div>
                            <div class="content-box">
                                <div class="post-author">
                                    <p class="pr-3"> Localité :<span class="fs-10"> {{ $estate->location }}</span>
                                        <i class="icon icon-ruler"></i>
                                        <span class="ml-3"> {{ number_format($estate->area, 0, ',', ' ') }}
                                            m<sup><span>2</span></sup></span>
                                    </p>
                                </div>
                                <div class="post-author">
                                    <p class="fs-6"> Ville :<span class=" text text-success"> {{ $estate->town }}</span>
                                    </p>
                                </div>

                                <p class="description"> <i><small style="font-style: italic">posté le
                                            {{ $estate->formatDate($estate->created_at) }}</small>
                                    </i> </p>
                            </div>

                        </a>
                    </div>
                @endforeach
                <br>



            </div>
            <div class="card-footer text-right" style="float: right">
                <nav class="d-inline-block">
                    {{ $estates->links() }}
                </nav>
            </div>

        </div>
    </section>
    <!-- End Section Blog Grid -->


    <!-- Contact -->
    <section class="flat-section-v3 flat-slider-contact">
        <div class="container">
            <div class="row content-wrap">
                <div class="col-lg-7">
                    <div class="content-left">
                        <div class="box-title">
                            <div class="text-subtitle text-white">Prenez contact</div>
                            <h4 class="mt-4 fw-6 text-white">Nous sommes toujours ravis de vous entendre !</h4>
                        </div>
                        <p class="body-2 text-white">Transformons les maisons en foyers et les rêves en réalité.</p>
                    </div>

                </div>
                <div class="col-lg-5">
                    <div class="box">
                        <button class="tf-btn primary">
                            <a href="{{ route('contact') }}" class="text-white">@lang('Contact us')</a>
                        </button>
                    </div>
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
