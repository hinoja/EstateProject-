<div>
    <div class="widget-box-2">
        <!-- En-tête amélioré -->
        <div class="d-flex justify-content-between align-items-center mb-4 p-3 bg-gradient-primary rounded-3 shadow-sm">
            <div class="d-flex align-items-center">
                <div class="me-3">
                    <i class="fas fa-users text-white fs-2"></i>
                </div>
                <div>
                    <h4 class="mb-0 text-white fw-bold">Gestion des Utilisateurs</h4>
                    <p class="mb-0 text-white opacity-75">
                        <i class="fas fa-info-circle me-1"></i>
                        Gérez les utilisateurs et leurs rôles
                    </p>
                </div>
            </div>
            <div class="d-flex align-items-center">
                <div class="me-3 text-center">
                    <span class="badge bg-light text-primary fs-6 px-3 py-2 rounded-pill">
                        <i class="fas fa-users me-1"></i>
                        {{ $totalUsers }} utilisateurs
                    </span>
                </div>
                <button wire:click="showCreateForm()"
                    class="btn btn-light btn-lg d-flex align-items-center shadow-sm hover-lift">
                    <i class="fas fa-user-plus me-2 text-primary"></i>
                    <span class="text-primary fw-semibold">Ajouter</span>
                </button>
            </div>
        </div>

        <!-- Tableau amélioré -->
        <div class="wrap-table">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="bg-light border-bottom">
                                <tr>
                                    <th class="text-center py-3 text-muted fw-semibold" width="60">
                                        <i class="fas fa-hashtag"></i>
                                    </th>
                                    <th class="py-3 text-muted fw-semibold">
                                        <i class="fas fa-user me-2"></i>@lang('Name')
                                    </th>
                                    <th class="py-3 text-muted fw-semibold">
                                        <i class="fas fa-envelope me-2"></i>@lang('Email')
                                    </th>
                                    <th class="py-3 text-muted fw-semibold">
                                        <i class="fas fa-toggle-on me-2"></i>@lang('Status')
                                    </th>
                                    <th class="py-3 text-muted fw-semibold">
                                        <i class="fas fa-user-tag me-2"></i>@lang('Role')
                                    </th>
                                    <th class="py-3 text-muted fw-semibold" width="200">
                                        <i class="fas fa-cogs me-2"></i>Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr class="border-bottom hover-row">
                                        <td class="text-center py-3">
                                            <span class="badge bg-light text-primary rounded-circle p-2">
                                                {{ $loop->iteration }}
                                            </span>
                                        </td>
                                        <td class="py-3">
                                            <div class="d-flex align-items-center">
                                                <div class="avatar me-3 position-relative">
                                                    <div class="avatar-initial rounded-circle bg-gradient-primary text-white shadow-sm d-flex align-items-center justify-content-center"
                                                        style="width: 45px; height: 45px;">
                                                        {{ strtoupper(substr($user->name, 0, 1)) }}
                                                    </div>
                                                    @if ($user->is_active)
                                                        <span
                                                            class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success border border-light">
                                                            <i class="fas fa-check" style="font-size: 8px;"></i>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div>
                                                    <div class="fw-semibold text-dark">{{ $user->name }}</div>
                                                    <small class="text-muted">
                                                        <i class="fas fa-clock me-1"></i>
                                                        Membre depuis {{ $user->created_at->diffForHumans() }}
                                                    </small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-3">
                                            <div class="d-flex align-items-center">
                                                <i class="fas fa-envelope text-muted me-2"></i>
                                                <span class="text-dark">{{ $user->email }}</span>
                                            </div>
                                        </td>
                                        <td class="py-3">
                                            @if ($user->is_active)
                                                <span
                                                    class="badge bg-success bg-gradient rounded-pill px-3 py-2 shadow-sm">
                                                    <i class="fas fa-check-circle me-1"></i>
                                                    Actif
                                                </span>
                                            @else
                                                <span
                                                    class="badge bg-danger bg-gradient rounded-pill px-3 py-2 shadow-sm">
                                                    <i class="fas fa-ban me-1"></i>
                                                    Bloqué
                                                </span>
                                            @endif
                                        </td>
                                        <td class="py-3">
                                            <span class="badge bg-info bg-gradient rounded-pill px-3 py-2 shadow-sm">
                                                <i class="fas fa-user-tag me-1"></i>
                                                {{ $user->role->name }}
                                            </span>
                                        </td>
                                        <td class="py-3">
                                            <div class="d-flex gap-2 flex-wrap">
                                                @if ($user->id !== auth()->id())
                                                    <!-- Bouton Status -->
                                                    @if ($user->is_active)
                                                        <button wire:click="updateStatus({{ $user }})"
                                                            class="btn btn-sm btn-outline-danger hover-lift shadow-sm"
                                                            title="{{ __('Block') }}" data-bs-toggle="tooltip">
                                                            <i class="fas fa-user-lock"></i>
                                                        </button>
                                                    @else
                                                        <button wire:click="updateStatus({{ $user }})"
                                                            class="btn btn-sm btn-outline-success hover-lift shadow-sm"
                                                            title="{{ __('Unblock') }}" data-bs-toggle="tooltip">
                                                            <i class="fas fa-user-check"></i>
                                                        </button>
                                                    @endif

                                                    <!-- Bouton Role -->
                                                    @if ($user->role_id === 3)
                                                        <button wire:click="showEditForm({{ $user }})"
                                                            class="btn btn-sm btn-outline-success hover-lift shadow-sm"
                                                            title="Promouvoir en administrateur"
                                                            data-bs-toggle="tooltip">
                                                            <i class="fas fa-arrow-up"></i>
                                                        </button>
                                                    @elseif ($user->role_id === 2)
                                                        <button wire:click="showEditForm({{ $user }})"
                                                            class="btn btn-sm btn-outline-warning hover-lift shadow-sm"
                                                            title="Rétrograder en éditeur" data-bs-toggle="tooltip">
                                                            <i class="fas fa-arrow-down"></i>
                                                        </button>
                                                    @endif

                                                    <!-- Bouton Supprimer -->
                                                    <button wire:click="showDeleteForm({{ $user }})"
                                                        class="btn btn-sm btn-outline-danger hover-lift shadow-sm"
                                                        title="{{ __('Delete') }}" data-bs-toggle="tooltip">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                @else
                                                    <span class="badge bg-secondary rounded-pill px-3 py-2">
                                                        <i class="fas fa-user-shield me-1"></i>
                                                        Vous
                                                    </span>
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

        <!-- Pagination améliorée -->
        <div class="d-flex justify-content-end mt-4">
            <nav class="d-inline-block">
                <style>
                    .pagination .page-item.active .page-link {
                        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                        border-color: #667eea;
                        color: white;
                        box-shadow: 0 2px 4px rgba(102, 126, 234, 0.3);
                    }

                    .pagination .page-link {
                        color: #667eea;
                        border: 1px solid #e9ecef;
                        padding: 0.5rem 0.75rem;
                        transition: all 0.3s ease;
                    }

                    .pagination .page-link:hover {
                        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                        border-color: #667eea;
                        color: white;
                        transform: translateY(-1px);
                        box-shadow: 0 4px 8px rgba(102, 126, 234, 0.3);
                    }

                    .hover-lift:hover {
                        transform: translateY(-2px);
                        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
                        transition: all 0.3s ease;
                    }

                    .hover-row:hover {
                        background-color: #f8f9fa;
                        transform: scale(1.005);
                        transition: all 0.3s ease;
                    }

                    .bg-gradient-primary {
                        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                    }
                </style>
                {{ $users->links() }}
            </nav>
        </div>

        <!-- Modal Ajouter/Modifier Utilisateur -->
        <div wire:ignore.self class="modal fade" id="UserModal" tabindex="-1" role="dialog"
            aria-labelledby="AddUserLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content border-0 shadow">
                    <div class="modal-header bg-gradient-primary text-white border-0">
                        <h5 class="modal-title d-flex align-items-center" id="AddUserLabel">
                            @if ($selectedUser)
                                <i class="fas fa-user-edit me-2"></i>
                                @lang('Edit') @lang('User')
                            @else
                                <i class="fas fa-user-plus me-2"></i>
                                Ajouter un Nouvel Utilisateur
                            @endif
                        </h5>
                        <button type="button" class="btn-close btn-close-white" wire:click="closeModal()"
                            aria-label="Close"></button>
                    </div>
                    <form wire:submit.prevent={{ $selectedUser ? 'updateUser' : 'addUser' }}>
                        <div class="modal-body p-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label fw-semibold">
                                            <i class="fas fa-user text-primary me-2"></i>
                                            @lang('Name') de l'Utilisateur
                                        </label>
                                        <input type="text" autocomplete="off" wire:model="name"
                                            class="form-control form-control-lg border-0 bg-light"
                                            placeholder="Nom complet" />
                                        @error('name')
                                            <div class="text-danger mt-1">
                                                <i class="fas fa-exclamation-circle me-1"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label fw-semibold">
                                            <i class="fas fa-envelope text-primary me-2"></i>
                                            Adresse Email
                                        </label>
                                        <input type="email" autocomplete="off" wire:model="email"
                                            class="form-control form-control-lg border-0 bg-light"
                                            placeholder="exemple@domain.com" />
                                        @error('email')
                                            <div class="text-danger mt-1">
                                                <i class="fas fa-exclamation-circle me-1"></i>
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            @if (!$selectedUser)
                                <div class="form-group mb-3">
                                    <label class="form-label fw-semibold">
                                        <i class="fas fa-lock text-primary me-2"></i>
                                        @lang('Password')
                                    </label>
                                    <input type="password" autocomplete="off" wire:model="password"
                                        class="form-control form-control-lg border-0 bg-light"
                                        placeholder="Mot de passe sécurisé" />
                                    @error('password')
                                        <div class="text-danger mt-1">
                                            <i class="fas fa-exclamation-circle me-1"></i>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            @endif
                        </div>
                        <div class="modal-footer border-0 bg-light p-4">
                            <button type="reset" wire:click="closeModal()" class="btn btn-secondary btn-lg me-2">
                                <i class="fas fa-times me-2"></i>
                                @lang('Cancel')
                            </button>
                            <button type="submit" class="btn btn-primary btn-lg">
                                @if ($selectedUser)
                                    <i class="fas fa-save me-2"></i>
                                    @lang('Edit')
                                @else
                                    <i class="fas fa-plus me-2"></i>
                                    @lang('Save')
                                @endif
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Modal Modifier Rôle -->
        <div wire:ignore.self class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content border-0 shadow">
                    <div class="modal-header bg-gradient-warning text-white border-0">
                        <h6 class="modal-title d-flex align-items-center">
                            <i class="fas fa-user-edit me-2"></i>
                            Modifier le rôle de <strong>{{ $name }}</strong>
                        </h6>
                        <button type="button" class="btn-close btn-close-white" wire:click="closeModal()"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-4 text-center">
                        <div class="mb-3">
                            <i class="fas fa-user-cog text-warning" style="font-size: 3rem;"></i>
                        </div>
                        <p class="text-dark mb-3">
                            Êtes-vous sûr de vouloir attribuer le rôle d'<strong class="text-primary">
                                @if ($selectedUser === 3)
                                    administrateur
                                @elseif ($selectedUser === 2)
                                    éditeur
                                @endif
                            </strong> à cet utilisateur ?
                        </p>
                        <div class="alert alert-info border-0">
                            <i class="fas fa-info-circle me-2"></i>
                            Cette action modifiera les permissions de l'utilisateur.
                        </div>
                    </div>
                    <div class="modal-footer border-0 bg-light p-4">
                        <button wire:click="closeModal()" type="button" class="btn btn-secondary btn-lg me-2">
                            <i class="fas fa-times me-2"></i>
                            @lang('Cancel')
                        </button>
                        <button type="button" wire:click="UpdateUser()" class="btn btn-primary btn-lg">
                            <i class="fas fa-check me-2"></i>
                            Confirmer
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Supprimer Utilisateur -->
        <div wire:ignore.self class="modal fade" id="deleteUser" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content border-0 shadow">
                    <div class="modal-header bg-gradient-danger text-white border-0">
                        <h6 class="modal-title d-flex align-items-center">
                            <i class="fas fa-trash-alt me-2"></i>
                            Supprimer <strong>{{ $name }}</strong>
                        </h6>
                        <button type="button" class="btn-close btn-close-white" wire:click="closeModal()"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-4 text-center">
                        <div class="mb-3">
                            <i class="fas fa-exclamation-triangle text-danger" style="font-size: 3rem;"></i>
                        </div>
                        <p class="text-dark mb-3">
                            Êtes-vous sûr de vouloir supprimer cet utilisateur ?
                        </p>
                        <div class="alert alert-danger border-0">
                            <i class="fas fa-exclamation-circle me-2"></i>
                            Cette action est irréversible !
                        </div>
                    </div>
                    <div class="modal-footer border-0 bg-light p-4">
                        <button wire:click="closeModal()" type="button" class="btn btn-secondary btn-lg me-2">
                            <i class="fas fa-times me-2"></i>
                            @lang('Cancel')
                        </button>
                        <button type="button" wire:click="destroyUser()" class="btn btn-danger btn-lg">
                            <i class="fas fa-trash me-2"></i>
                            @lang('Confirmer')
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .bg-gradient-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .bg-gradient-warning {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        }

        .bg-gradient-danger {
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5a52 100%);
        }

        .hover-lift:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }

        .hover-row:hover {
            background-color: #f8f9fa;
            transform: scale(1.002);
            transition: all 0.3s ease;
        }

        .avatar-initial {
            font-weight: 600;
            font-size: 1.1rem;
        }

        .widget-box-2 {
            border-radius: 15px;
            overflow: hidden;
        }

        .card {
            border-radius: 12px;
        }

        .modal-content {
            border-radius: 15px;
        }

        .form-control {
            border-radius: 8px;
        }

        .btn {
            border-radius: 8px;
            font-weight: 500;
        }

        .badge {
            font-weight: 500;
        }
    </style>
</div>
