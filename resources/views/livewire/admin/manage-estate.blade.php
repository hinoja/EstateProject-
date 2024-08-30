<div>
    <div class="widget-box-2 ">
        <h6>Terrains <small class="mr-5">({{ $totalEstates }}) </small><span wire:click="showCreateForm()"
                class="btn btn-primary" style="background-color: rgb(81,132,197)"> <i class="fa fa-plus"
                    style="color: white"></i></span></h6>
        <div class="wrap-table">
            <div class="card">

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th style="width: 5px" style="width: 5px" class="text-center">#</th>
                                    <th>@lang('Image')</th>
                                    <th>Localité</th>
                                    <th>Ville</th>
                                    <th>Superficie</th>
                                    <th>Prix / m<sup><small>2</small></sup></th>
                                    <th>Utilisateur</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($estates as $estate)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>
                                            <style>
                                                img {
                                                    height: 80px;

                                                }
                                            </style>
                                            <img src="{{ $estate->image ? Storage::url($estate->image) : asset('assets/images/home/house-1.jpg') }}"
                                                alt="">
                                        </td>
                                        <td>{{ $estate->location }}
                                        </td>
                                        <td>{{ $estate->town }} </td>
                                        <td>{{ $estate->area ? number_format($estate->area, 0, ',', ' ') : '-' }}
                                            m<sup><small>2</small></sup></td>

                                        <td>{{ $estate->price ? number_format($estate->price, 0, ',', ' ') : '-' }} Fcfa
                                        </td>
                                        <td>
                                            {{ $estate->user->name }}
                                        </td>
                                        <td>
                                            <div style="display: inline-block;">


                                                {{-- <button wire:click="updateStatus({{ $estate }})"
                                                    title=" {{ __('Edit') }} "
                                                    style="background-color: rgb(81,132,197)"
                                                    class="btn btn-icon icon-left btn-primary"> <i
                                                        class="fa fa-edit"></i></button> --}}
                                                <button wire:click="showDeleteForm({{ $estate }})"
                                                    title=" {{ __('Delete') }}"
                                                    class="btn btn-icon icon-left btn-outline-danger"> <i
                                                        class="fa fa-trash"></i></button>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>

        <div class="card-footer text-right" style="float: right">
            <nav class="d-inline-block">
                <style>
                    .pagination .page-item.active .page-link {
                        background-color: rgb(81, 132, 197);
                        border-color: rgb(81, 132, 197);
                        color: white;
                        /* Couleur du texte en blanc */
                    }

                    .pagination .page-link {
                        color: rgb(81, 132, 197);
                    }

                    .pagination .page-link:hover {
                        background-color: rgba(81, 132, 197, 0.7);
                        border-color: rgba(81, 132, 197, 0.7);
                        color: white;
                        /* Assure que le texte reste blanc au survol */
                    }
                </style>
                {{ $estates->links() }}
            </nav>
        </div>



        <!-- Modal addEstate + Edit Estate-->
        <div wire:ignore.self class="modal fade" id="EstateModal" tabindex="-1" role="dialog"
            aria-labelledby="addEstateLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content container">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addEstateLabel">
                            @if ($selectedEstate)
                                @lang('Edit') Un Terrain
                            @else
                                Ajouter un Nouveau Terrain
                            @endif
                        </h5>
                        <button type="button" class="close" wire:click="closeModal()" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form wire:submit.prevent={{ $selectedEstate ? 'updateUser' : 'addEstate' }}
                        enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">

                            <div class="form-group">
                                <label class="control-label">Image</label>
                                <input type="file" wire:model="image" class="form-control"
                                    placeholder="Uploader Une Image" />
                                @error('image')
                                    <small class="fs-12 text-danger ">{{ $message }} </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">La Localité </label>
                                <input type="text" wire:model="location" class="form-control" placeholder="kake" />
                                @error('location')
                                    <small class="fs-12 text-danger ">{{ $message }} </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">Description </label>
                                <input type="text" wire:model="description" class="form-control"
                                    placeholder="mini description en une ou deux phrases" />
                                @error('description')
                                    <small class="fs-12 text-danger ">{{ $message }} </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label"> Prix / m<sup><span>2</span></sup></label>
                                <input type="number" min="0" wire:model="price" class="form-control"
                                    placeholder="50" />
                                @error('price')
                                    <small class="fs-12 text-danger ">{{ $message }} </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label"> Superficie ( m<sup><span>2</span></sup>)</label>
                                <input type="number" min="0" wire:model="area" class="form-control"
                                    placeholder="50" />
                                @error('area')
                                    <small class="fs-12 text-danger ">{{ $message }} </small>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label class="control-label"> Ville </label>
                                <input type="text" wire:model="town" class="form-control" placeholder="Lisbonne" />
                                @error('town')
                                    <small class=" fs-12 text-danger ">{{ $message }} </small>
                                @enderror
                            </div>


                        </div>
                        <div class="modal-footer">
                            <button type="reset" wire:click="closeModal()" class="btn btn-secondary"
                                data-dismiss="modal">@lang('Cancel')</button>
                            <button type="submit" class="btn btn-primary">
                                @if ($selectedEstate)
                                    @lang('Edit')
                                @else
                                    @lang('Save')
                                @endif
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>


        <!-- Modal Delete Estate -->
        <div wire:ignore.self class="modal fade" id="deleteEstate" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-top" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="deleteTag">Supprimer <strong>{{ $location }}</strong></h6>
                        <button type="button" class="close" wire:click="closeModal()" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-danger font-weight-bold">Etes-vous sûr de vouloir supprimer ce Terrain ?</p>
                    </div>
                    <div class="modal-footer">
                        <button wire:click="closeModal()" type="button" class="btn btn-secondary"
                            data-dismiss="modal">@lang('Cancel')</button>
                        <button type="button" wire:click="destroyEstate()"
                            class="btn btn-danger">@lang('Confirmer')</button>
                    </div>
                </div>
            </div>
            {{-- end modal confirmation delete User --}}

        </div>

    </div>
