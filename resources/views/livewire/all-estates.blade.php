<div>
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
                            <p> Localité :<span class="fs-10"> {{ $estate->location }}</span>
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
