<div>
    <div class="widget-box-2">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="d-flex align-items-center">
                <h6 class="mb-0 me-3">Utilisateurs</h6>
                <span class="badge bg-primary rounded-pill">{{ $totalUsers }}</span>
            </div>
            <button wire:click="showCreateForm()" class="btn btn-primary d-flex align-items-center">
                <i class="fas fa-user-plus me-2"></i>
                <span>Ajouter un utilisateur</span>
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
                                    <th>@lang('Name')</th>
                                    <th>@lang('Email')</th>
                                    <th>@lang('Status')</th>
                                    <th>@lang('Role')</th>
                                    <th width="150">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="avatar me-3">
                                                    <span class="avatar-initial rounded-circle bg-primary">
                                                        {{ substr($user->name, 0, 1) }}
                                                    </span>
                                                </div>
                                                <div>{{ $user->name }}</div>
                                            </div>
                                        </td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if ($user->is_active)
                                                <span class="badge bg-success rounded-pill px-3 py-2">
                                                    <i class="fas fa-check-circle me-1"></i> Actif
                                                </span>
                                            @else
                                                <span class="badge bg-danger rounded-pill px-3 py-2">
                                                    <i class="fas fa-ban me-1"></i> Bloqué
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            <span class="badge bg-info rounded-pill px-3 py-2">
                                                <i class="fas fa-user-tag me-1"></i> {{ $user->role->name }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2">
                                                @if ($user->id !== auth()->id())
                                                    @if ($user->is_active)
                                                        <button wire:click="updateStatus({{ $user }})"
                                                            class="btn btn-sm btn-danger" title="{{ __('Block') }}">
                                                            <i class="fas fa-user-lock"></i>
                                                        </button>
                                                    @else
                                                        <button wire:click="updateStatus({{ $user }})"
                                                            class="btn btn-sm btn-success" title="{{ __('Unblock') }}">
                                                            <i class="fas fa-user-check"></i>
                                                        </button>
                                                    @endif
                                                    @if ($user->role_id === 3)
                                                        <button wire:click="showEditForm({{ $user }})"
                                                            class="btn btn-sm btn-warning"
                                                            title="Mettre à jour le rôle">
                                                            <i class="fas fa-user-edit"></i>
                                                        </button>
                                                    @endif
                                                    @if ($user->role_id === 3)
                                                        <button wire:click="showEditForm({{ $user }})"
                                                            title="Mettre à jour le rôle"
                                                            class="btn btn-icon icon-left btn-outline-success"> <i
                                                                class="fas fa-arrow-up"></i></button>
                                                    @elseif ($user->role_id === 2)
                                                        <button wire:click="showEditForm({{ $user }})"
                                                            title="Mettre à jour le rôle"
                                                            class="btn btn-icon icon-left btn-outline-warning"> <i
                                                                class="fas fa-arrow-down"></i></button>
                                                    @endif
                                                    <button wire:click="showDeleteForm({{ $user }})"
                                                        class="btn btn-sm btn-outline-danger"
                                                        title="{{ __('Delete') }}">
                                                        <i class="fas fa-user-minus"></i>
                                                    </button>
                                                @endif
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
                {{ $users->links() }}
            </nav>
        </div>



        <!-- Modal addUser + Edit USer-->
        <div wire:ignore.self class="modal fade" id="UserModal" tabindex="-1" role="dialog"
            aria-labelledby="AddUserLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content container">
                    <div class="modal-header">
                        <h5 class="modal-title" id="AddUserLabel">
                            @if ($selectedUser)
                                @lang('Edit') @lang('User')
                            @else
                                Ajouter un Nouvel Utilisateur
                            @endif
                        </h5>
                        <button type="button" class="close" wire:click="closeModal()" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form wire:submit.prevent={{ $selectedUser ? 'updateUser' : 'addUser' }}>
                        <div class="modal-body">

                            <div class="form-group">
                                <label class="control-label"> @lang('Name') de l'Utilisateur </label>
                                <input type="text" autocomplete="off" wire:model="name" class="form-control"
                                    placeholder=" {{ __('Name') }}" />
                                @error('name')
                                    <small class="fs-12 text-danger ">{{ $message }} </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label"> Email</label>
                                <input type="email" autocomplete="off" wire:model="email" class="form-control"
                                    placeholder="xyz@domain.co" />
                                @error('email')
                                    <small class="fs-12 text-danger ">{{ $message }} </small>
                                @enderror
                            </div>
                            @if (!$selectedUser)
                                <div class="form-group">
                                    <label class="control-label"> @lang('Password') </label>
                                    <input type="password" autocomplete="off" wire:model="password" class="form-control"
                                        placeholder=" {{ __('Password') }}" />
                                    @error('password')
                                        <small class=" fs-12 text-danger ">{{ $message }} </small>
                                    @enderror
                                </div>
                            @endif

                        </div>
                        <div class="modal-footer">
                            <button type="reset" wire:click="closeModal()" class="btn btn-secondary"
                                data-dismiss="modal">@lang('Cancel')</button>
                            <button type="submit" class="btn btn-primary">
                                @if ($selectedUser)
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


        <!-- Modal Edit Role User -->
        <div wire:ignore.self class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-top" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="deleteTag"> Editer le role de
                            <strong>{{ $name }}</strong>
                        </h6>
                        <button type="button" class="close" wire:click="closeModal()" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-danger font-weight-bold">Etes-vous sûr de vouloir de lui attribuer le role
                            d'<strong>
                                @if ($selectedUser === 3)
                                    administrateur
                                @elseif ($selectedUser === 2)
                                    Editeur
                                @endif
                            </strong> ?</p>
                    </div>
                    <div class="modal-footer">
                        <button wire:click="closeModal()" type="button" class="btn btn-secondary"
                            data-dismiss="modal">@lang('Cancel')</button>
                        <button type="button" wire:click="UpdateUser()" class="btn btn-primary">Oui, <i
                                class="fas fa-edit"> </i></button>
                    </div>
                </div>
            </div>
            {{-- end modal confirmation delete User --}}

        </div>


        <!-- Modal Delete User -->
        <div wire:ignore.self class="modal fade" id="deleteUser" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-top" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title" id="deleteTag">Supprimer <strong>{{ $name }}</strong></h6>
                        <button type="button" class="close" wire:click="closeModal()" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-danger font-weight-bold">Etes-vous sûr de vouloir supprimer ce Utilisateur ?</p>
                    </div>
                    <div class="modal-footer">
                        <button wire:click="closeModal()" type="button" class="btn btn-secondary"
                            data-dismiss="modal">@lang('Cancel')</button>
                        <button type="button" wire:click="destroyUser()"
                            class="btn btn-danger">@lang('Confirmer')</button>
                    </div>
                </div>
            </div>
            {{-- end modal confirmation delete User --}}

        </div>

    </div>
