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

        @if (request()->isMethod('post'))
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
                    Localité : <strong class="link link-primary">{{ request()->locality ?? trans('Empty') }}</strong>
                    Ville : <strong class="link link-primary">{{ request()->town ?? trans('Empty') }}</strong>,

                </span>
            </p>
        @endif
    </div>
    <section class="flat-section">
        <div class="container property-grid">

            <div class="row">

                @foreach ($estates as $estate)
                    <div class="col-lg-4 col-md-6 ">
                        <a href="#" class="flat-blog-item hover-img">
                            <div class="img-style">
                                <img class="images-style" style=" height: 300px; object-fit: cover;"
                                    src="{{ $estate->image ? Storage::url($estate->image) : asset('assets/images/home/house-1.jpg') }}">
                                <span class="date-post">Prix : {{ number_format($estate->price, 0, ',', ' ') }} <span
                                        style="text-transform:initial">Fcfa</span> / <span
                                        style="text-transform: lowercase;">m</span><sup>2</sup>
                                </span>
                            </div>
                            <div class="content-box">
                                <div class="post-author">
                                    <p class="pr-3"><i class="fas fa-map-marker-alt"></i> Localité :<span class="fs-10">
                                            {{ $estate->location }}</span>
                                        <i class="fas fa-ruler-combined"></i>
                                        <span class="ml-3"> {{ number_format($estate->area, 0, ',', ' ') }}
                                            m<sup><span>2</span></sup></span>
                                    </p>
                                </div>
                                <div class="post-author">
                                    <p class="fs-6"> <i class="fas fa-city"></i> Ville :<span class=" text text-success">
                                            {{ $estate->town }}</span>
                                    </p>
                                </div>


                                <p class="description mb-2"><i class="icon icon-note"></i> <small
                                        style="text-align: justify"
                                        style="font-style: italic">{{ $estate->description }}</small></p>


                                <p class="description" style="float: right"><i class="icon icon-calendar"></i> <small
                                        style="font-style: italic">posté le
                                        {{ $estate->formatDate($estate->created_at) }}</small></p> <br><br>
                            </div>
                        </a>
                    </div>
                @endforeach
                <br>



            </div>
            <div class="card-footer text-right" style="float: right">
                <nav class="d-inline-block">
                    <style>
                        .pagination .page-item.active .page-link {
                            background-color: rgb(81, 132, 197);
                            border-color: rgb(81, 132, 197);
                            color: white; /* Couleur du texte en blanc */
                        }

                        .pagination .page-link {
                            color: rgb(81, 132, 197);
                        }

                        .pagination .page-link:hover {
                            background-color: rgba(81, 132, 197, 0.7);
                            border-color: rgba(81, 132, 197, 0.7);
                            color: white; /* Assure que le texte reste blanc au survol */
                        }
                    </style>
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

@endsection
