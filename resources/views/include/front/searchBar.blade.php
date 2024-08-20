<section class="flat-map mt-5">

    <div class="container">
        <div class="wrap-filter-search">
            <div class="flat-tab flat-tab-form">
                <ul class="nav-tab-form style-3 justify-content-center" role="tablist">
                    <li class="nav-tab-item">
                        <a href="{{ route('estates.index') }}" class="nav-link-item active" data-bs-toggle="tab">Sites
                            Disponibles</a>
                    </li>

                </ul>
                <div class="tab-content  p-4">
                    <div class="tab-pane fade active show" role="tabpanel">
                        <div class="form-sl">
                            <form action="{{ route('search') }}" method="post">
                                @csrf
                                <div class="wd-find-select shadow-st">
                                    <div class="inner-group">
                                        <div class="form-group-1 search-form form-style">
                                            <label>Localité</label>

                                            <input value="{{ request()->locality ?? '' }}" name="locality"
                                                type="text" class="form-control" placeholder="Cherchez la localité"
                                                title="Chercher pour">

                                            <a href="#" class="icon icon-locate"></a>
                                            <a href="#" class="icon icon-marker"></a>
                                            {{-- <a style="color:red;" class="fa-solid fa-location-dot"></a> --}}
                                            {{-- <a href="#" class="icon icon-money"></a> --}}
                                        </div>
                                        <div class="form-group-2 form-style">
                                            <label>Ville</label>
                                            <div class="group-ip">
                                                <input type="text" class="form-control"
                                                    placeholder="Chercher la ville" value="{{ request()->town ?? '' }}"
                                                    name="town" title="Chercher pour">
                                                <a href="#" class="icon icon-location"></a>
                                            </div>
                                        </div>

                                        {{-- <div class="form-group-2 form-style">
                                            <label>Prix/m<sup>2</sup></label>

                                            <div class="group-select">
                                                <div class="nice-select" tabindex="0"><span class="current">Le
                                                        prix</span>
                                                    <ul class="list">   <li data-value="villa" class="option">Moins de 3 000 FcFa </li>
                                                        <li data-value="studio" class="option">Entre 3 000 et 5 000 FcFa
                                                        </li>
                                                        <li data-value="office" class="option">5 000 et 10 000 FcFa</li>
                                                        <li data-value="house" class="option">10 000 FcFa et plus</li>


                                                    </ul>
                                                </div>
                                            </div>
                                        </div> --}}


                                    </div>
                                    @if (!request()->locality || !request()->town)
                                        <button type="submit" class="tf-btn primary btn-hover"
                                            href="#">Rechercher</button>
                                    @else
                                        <a style="background: rgb(81,132,197)" type="reset"
                                            class="tf-btn primary btn-hover"
                                            href="{{ route('estates.index') }}">Réinitialiser</a>
                                    @endif

                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- Map -->
