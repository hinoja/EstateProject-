@php
    use Illuminate\Support\Str;
@endphp
<div>
    <div class="tab-content">
        {{-- <div class="container"> --}}
        <div class="tab-pane fade active show" id="Bekoko" role="tabpanel">
            <div class="row">
                @foreach ($estates as $estate)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="homeya-box">
                            <div class="archive-top">
                                <span class="images-group">
                                    <div class="images-style">
                                        <style>
                                            .div.images-style¨ {
                                                width: 360px;
                                                height: 240px;
                                            }
                                        </style>
                                        <img src="{{ $estate->image ? Storage::url($estate->image) : asset('assets/images/home/house-1.jpg') }}"
                                            alt="img" style="height: 240px; object-fit: cover;">
                                    </div>
                                    <div class="top">
                                        <ul class="d-flex gap-8">
                                            <li class="flag-tag success"></li>
                                            <li class="flag-tag style-1"></li>
                                        </ul>
                                        <ul class="d-flex gap-4">
                                        </ul>
                                    </div>
                                    <div class="bottom">
                                        <span class="flag-tag style-2">Terrain</span>
                                    </div>
                                </span>
                                <div class="content">
                                    <div class="h7 text-capitalize fw-7"> </div>
                                    <div class="desc"><i class="fs-16 icon icon-mapPin"></i>
                                        <p class="mr-5">{{ $estate->location }} </p> <i class="icon icon-ruler"></i>
                                        <span class="ml-3"> {{ number_format($estate->area, 0, ',', ' ') }}
                                            m<sup><span>2</span></sup></span>
                                        <div class="row"></div>


                                    </div> <br>
                                    <p><small><i>{{ Str::limit($estate->description, 80, '...') }}</i></small></p>


                                </div>
                            </div>
                            <div class="archive-bottom d-flex justify-content-between align-items-center">
                                <div class="d-flex gap-8 align-items-center">
                                    <strong style="font-weight: bold">Ville : </strong> <span>{{ $estate->town }}</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <h6>{{ $estate->price ? number_format($estate->price, 0, ',', ' ') : '' }} Fcfa
                                    </h6>
                                    <span class="text-variant-1">/m<sup><span>2</span></sup></span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="text-center"> --}}
            <div class=" text-right">
                <nav class="d-inline-block">
                    {{-- {{ $estates->links() }} --}}
                </nav>
            </div>
            <div class="text-center">
                <a href="{{ route('estates.index') }}" class="tf-btn primary size-1">Voir Tous Nos Terrains <span
                        class="icon icon-arrow-right2"></span> </a>
            </div>
        </div>
        {{-- </div> --}}

    </div>
</div>
