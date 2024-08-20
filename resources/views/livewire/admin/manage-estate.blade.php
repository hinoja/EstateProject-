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
                                    <th class="text-center">#</th>
                                    <th>@lang('Image')</th>
                                    <th>@lang('location')</th>
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
                                            <img src="{{ $estate->image ? Storage::url($estate->image) : asset('assets/images/home/house-1.jpg') }}" alt="">
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

                                                {{-- @if ($estate->is_active)
                                                    <button wire:click="updateStatus({{ $estate }})"
                                                        title=" {{ __('Block') }} "
                                                        class="btn btn-icon icon-left btn-danger"> <i
                                                            class="fa fa-lock"></i></button>
                                                @else
                                                    <button wire:click="updateStatus({{ $estate }})"
                                                        title=" {{ __('Unblock') }} "
                                                        style="background-color: rgb(81,132,197)"
                                                        class="btn btn-icon icon-left btn-primary"> <i
                                                            class="fa fa-lock-open"></i></button>
                                                @endif --}}
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

        <div style="float: right" class="card-footer  text-right">
            <nav class="d-inline-block">
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
                                @lang('Edit') @lang('User')
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
                                <label class="control-label">Le Lieu(le nom ) </label>
                                <input type="text" wire:model="location" class="form-control"
                                    placeholder=" {{ __('location') }}" />
                                @error('location')
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
