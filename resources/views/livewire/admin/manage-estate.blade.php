<div>
    <div class="widget-box-2">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="d-flex align-items-center">
                <h6 class="mb-0 me-3">Terrains</h6>
                <span class="badge bg-primary rounded-pill">{{ $totalEstates }}</span>
            </div>
            <button wire:click="showCreateForm()" class="btn btn-primary d-flex align-items-center">
                <i class="fas fa-plus-circle me-2"></i>
                <span>Ajouter un terrain</span>
            </button>
        </div>
        <div class="wrap-table">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="bg-light">
                                <tr>
                                    <th class="text-center" width="60">#</th>
                                    <th width="120">@lang('Image')</th>
                                    <th>Localité</th>
                                    <th>Ville</th>
                                    <th>Superficie</th>
                                    <th>Prix / m<sup><small>2</small></sup></th>
                                    <th>Utilisateur</th>
                                    <th width="100">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($estates as $estate)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ $estate->image ? Storage::url($estate->image) : asset('assets/images/home/house-1.jpg') }}"
                                                class="rounded object-fit-cover"
                                                style="height: 80px; width: 120px;"
                                                alt="{{ $estate->location }}">
                                        </td>
                                        <td>
                                            <div class="fw-medium">{{ $estate->location }}</div>
                                            <small class="text-muted">{{ Str::limit($estate->description, 50) }}</small>
                                        </td>
                                        <td>{{ $estate->town }}</td>
                                        <td>
                                            <span class="badge bg-info rounded-pill px-3 py-2">
                                                {{ $estate->area ? number_format($estate->area, 0, ',', ' ') : '-' }} m<sup><small>2</small></sup>
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge bg-success rounded-pill px-3 py-2">
                                                {{ $estate->price ? number_format($estate->price, 0, ',', ' ') : '-' }} Fcfa
                                            </span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar me-2">
                                                    <span class="avatar-initial rounded-circle bg-primary">
                                                        {{ substr($estate->user->name, 0, 1) }}
                                                    </span>
                                                </div>
                                                <div>{{ $estate->user->name }}</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                <button wire:click="showEditForm({{ $estate }})"
                                                    class="btn btn-sm btn-primary"
                                                    title="{{ __('Edit') }}">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button wire:click="showDeleteForm({{ $estate }})"
                                                    class="btn btn-sm btn-outline-danger"
                                                    title="{{ __('Delete') }}">
                                                    <i class="fas fa-trash"></i>
                                                </button>
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
        <div wire:ignore.self class="modal fade" id="EstateModal" tabindex="-1" role="dialog" aria-labelledby="addEstateLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-light border-bottom">
                        <h5 class="modal-title d-flex align-items-center" id="addEstateLabel">
                            <i class="fas {{ $selectedEstate ? 'fa-edit text-primary' : 'fa-plus-circle text-success' }} me-2"></i>
                            @if ($selectedEstate)
                                @lang('Edit') Un Terrain
                            @else
                                Ajouter un Nouveau Terrain
                            @endif
                        </h5>
                        <button type="button" class="btn-close" wire:click="closeModal()" aria-label="Close"></button>
                    </div>
                    <form wire:submit.prevent={{ $selectedEstate ? 'updateUser' : 'addEstate' }} enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body p-4">
                            <div class="mb-4">
                                <label class="form-label fw-medium">Image</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-image"></i></span>
                                    <input type="file" wire:model="image" class="form-control" placeholder="Uploader Une Image" />
                                </div>
                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-medium">La Localité</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                    <input type="text" wire:model="location" class="form-control" placeholder="kake" />
                                </div>
                                @error('location')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-medium">Description</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-align-left"></i></span>
                                    <textarea wire:model="description" class="form-control" rows="3" placeholder="mini description en une ou deux phrases"></textarea>
                                </div>
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-medium">Prix / m<sup><small>2</small></sup></label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-tag"></i></span>
                                        <input type="number" min="0" wire:model="price" class="form-control" placeholder="50" />
                                        <span class="input-group-text">Fcfa</span>
                                    </div>
                                    @error('price')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-medium">Superficie (m<sup><small>2</small></sup>)</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fas fa-ruler-combined"></i></span>
                                        <input type="number" min="0" wire:model="area" class="form-control" placeholder="50" />
                                    </div>
                                    @error('area')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-medium">Ville</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-city"></i></span>
                                    <input type="text" wire:model="town" class="form-control" placeholder="Lisbonne" />
                                </div>
                                @error('town')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="modal-footer bg-light">
                            <button type="button" wire:click="closeModal()" class="btn btn-light" data-dismiss="modal">
                                <i class="fas fa-times me-2"></i>@lang('Cancel')
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas {{ $selectedEstate ? 'fa-save' : 'fa-plus' }} me-2"></i>
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
            <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-danger text-white border-bottom-0">
                        <h6 class="modal-title">
                            <i class="fas fa-exclamation-triangle me-2"></i>
                            Supprimer <strong>{{ $location }}</strong>
                        </h6>
                        <button type="button" class="btn-close btn-close-white" wire:click="closeModal()" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center p-4">
                        <i class="fas fa-trash-alt text-danger fa-3x mb-3"></i>
                        <p class="mb-0">Êtes-vous sûr de vouloir supprimer ce terrain ?</p>
                        <p class="text-muted small">Cette action est irréversible.</p>
                    </div>
                    <div class="modal-footer justify-content-center border-top-0">
                        <button wire:click="closeModal()" type="button" class="btn btn-light" data-dismiss="modal">
                            <i class="fas fa-times me-2"></i>@lang('Cancel')
                        </button>
                        <button type="button" wire:click="destroyEstate()" class="btn btn-danger">
                            <i class="fas fa-trash-alt me-2"></i>@lang('Confirmer')
                        </button>
                    </div>
                </div>
            </div>
        </div>
            {{-- end modal confirmation delete User --}}

        </div>

    </div>
