<div>
    <div class="widget-box-2 ">
        <h6>Utilisateurs <small class="mr-5">({{ $totalUsers }}) </small><span wire:click="showCreateForm()"
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
                                    <th>@lang('Name')</th>
                                    <th>@lang('Email')</th>
                                    <th>@lang('Status')</th>
                                    <th>@lang('Role')</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}
                                        </td>
                                        <td>{{ $user->email }} </td>
                                        <td>
                                            @if ($user->is_active)
                                                <div class="py-2 px-2">
                                                    <span style="background-color: rgb(81,132,197)"
                                                        class="py-1 px-3 rounded-full text-white badge-pill waves-effect text-lg  ">
                                                        Actif </span>
                                                </div>
                                            @else
                                                <div class="py-2 px-2">
                                                    <span
                                                        class="py-1 px-3 rounded-full text-white badge-pill waves-effect text-lg bg-dark ">
                                                        Bloqué</span>
                                                </div>
                                            @endif
                                        </td>
                                        <td>
                                            {{ $user->role->name }}
                                        </td>
                                        <td>
                                            <div style="display: inline-block;">
                                                @if ($user->role_id > 1)
                                                    @if ($user->is_active)
                                                        <button wire:click="updateStatus({{ $user }})"
                                                            title=" {{ __('Block') }} "
                                                            class="btn btn-icon icon-left btn-danger"> <i
                                                                class="fa fa-lock"></i></button>
                                                    @else
                                                        <button wire:click="updateStatus({{ $user }})"
                                                            title=" {{ __('Unblock') }} "
                                                            class="btn btn-icon icon-left btn-primary"> <i
                                                                class="fa fa-lock-open"></i></button>
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
                                                        title=" {{ __('Delete') }}"
                                                        class="btn btn-icon icon-left btn-outline-danger"> <i
                                                            class="fa fa-trash"></i></button>
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
