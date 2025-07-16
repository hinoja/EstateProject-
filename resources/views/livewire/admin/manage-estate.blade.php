<div class="container-fluid">
    <div class="widget-box-2 shadow-lg rounded-lg bg-white p-4 mb-4">
        <!-- Header with Search and Add Button -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="d-flex align-items-center gap-3">
                <div class="d-flex align-items-center gap-2">
                    <div class="icon-wrapper">
                        <i class="fas fa-map-marked-alt text-primary"></i>
                    </div>
                    <h4 class="mb-0 fw-bold text-dark">Gestion des Terrains</h4>
                </div>
                <span class="badge bg-gradient-primary rounded-pill px-3 py-2 shadow-sm">
                    {{ $totalEstates }} terrain(s)
                </span>
            </div>

            <!-- Enhanced Search Input avec bouton clear -->
            <div class="d-flex align-items-center gap-3">
                <div class="search-container position-relative">
                    <div class="input-group">
                        <span class="input-group-text bg-light border-0 search-icon">
                            <i class="fas fa-search text-muted"></i>
                        </span>
                        <input wire:model.live.debounce.500ms="search" type="text"
                            class="form-control border-0 shadow-sm search-input"
                            placeholder="Rechercher par localité, ville, description ou utilisateur..." />
                        @if ($search)
                            <button type="button" wire:click="clearSearch"
                                class="btn btn-outline-secondary border-0 bg-light clear-btn"
                                title="Effacer la recherche">
                                <i class="fas fa-times"></i>
                            </button>
                        @endif
                    </div>
                    <!-- Indicateur de recherche active -->
                    @if ($search)
                        <small class="text-muted mt-1 d-block">
                            <i class="fas fa-filter me-1"></i>
                            Résultats pour : "{{ $search }}"
                        </small>
                    @endif
                </div>

                <button wire:click="showCreateForm()"
                    class="btn btn-gradient-primary d-flex align-items-center gap-2 shadow-sm hover-lift">
                    <i class="fas fa-plus-circle"></i>
                    <span>Ajouter un terrain</span>
                </button>
            </div>
        </div>

        <!-- Enhanced Table -->
        <div class="wrap-table">
            <div class="card border-0 shadow-sm rounded-lg overflow-hidden">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0 modern-table">
                            <thead class="bg-gradient-light">
                                <tr>
                                    <th class="text-center fw-semibold number-column">#</th>
                                    <th width="120" class="fw-semibold">Image</th>
                                    <th class="fw-semibold">
                                        <button wire:click="sortBy('location')"
                                            class="btn btn-link text-dark p-0 sort-btn">
                                            <i class="fas fa-map-marker-alt me-1"></i>
                                            Localité
                                            @if ($sortField == 'location')
                                                <i
                                                    class="fas fa-sort-{{ $sortDirection == 'asc' ? 'up' : 'down' }} ms-1"></i>
                                            @else
                                                <i class="fas fa-sort ms-1"></i>
                                            @endif
                                        </button>
                                    </th>
                                    <th class="fw-semibold">
                                        <button wire:click="sortBy('town')" class="btn btn-link text-dark p-0 sort-btn">
                                            <i class="fas fa-city me-1"></i>
                                            Ville
                                            @if ($sortField == 'town')
                                                <i
                                                    class="fas fa-sort-{{ $sortDirection == 'asc' ? 'up' : 'down' }} ms-1"></i>
                                            @else
                                                <i class="fas fa-sort ms-1"></i>
                                            @endif
                                        </button>
                                    </th>
                                    <th class="fw-semibold">
                                        <button wire:click="sortBy('area')" class="btn btn-link text-dark p-0 sort-btn">
                                            <i class="fas fa-ruler-combined me-1"></i>
                                            Superficie
                                            @if ($sortField == 'area')
                                                <i
                                                    class="fas fa-sort-{{ $sortDirection == 'asc' ? 'up' : 'down' }} ms-1"></i>
                                            @else
                                                <i class="fas fa-sort ms-1"></i>
                                            @endif
                                        </button>
                                    </th>
                                    <th class="fw-semibold">
                                        <button wire:click="sortBy('price')"
                                            class="btn btn-link text-dark p-0 sort-btn">
                                            <i class="fas fa-tag me-1"></i>
                                            Prix / m²
                                            @if ($sortField == 'price')
                                                <i
                                                    class="fas fa-sort-{{ $sortDirection == 'asc' ? 'up' : 'down' }} ms-1"></i>
                                            @else
                                                <i class="fas fa-sort ms-1"></i>
                                            @endif
                                        </button>
                                    </th>
                                    <th class="fw-semibold">
                                        <i class="fas fa-user me-1"></i>
                                        Utilisateur
                                    </th>
                                    <th width="120" class="fw-semibold text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($estates as $estate)
                                    <tr class="table-row-hover">
                                        <td class="text-center">
                                            <span class="row-number">
                                                {{ $loop->iteration + ($estates->currentPage() - 1) * $estates->perPage() }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="image-container">
                                                <img src="{{ $estate->image ? Storage::url($estate->image) : asset('assets/images/home/house-1.jpg') }}"
                                                    class="rounded-lg img-fluid estate-image shadow-sm" loading="lazy"
                                                    alt="{{ $estate->location }}"
                                                    aria-label="Image du terrain à {{ $estate->location }}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="location-info">
                                                <div class="fw-semibold text-dark mb-1">{{ $estate->location }}</div>
                                                <small
                                                    class="text-muted">{{ Str::limit($estate->description, 50) }}</small>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="town-badge">{{ $estate->town }}</span>
                                        </td>
                                        <td>
                                            <span class="badge bg-gradient-info rounded-pill px-3 py-2 shadow-sm">
                                                <i class="fas fa-arrows-alt me-1"></i>
                                                {{ $estate->area ? number_format($estate->area, 0, ',', ' ') : '-' }}
                                                m²
                                            </span>
                                        </td>
                                        <td>
                                            <span class="badge bg-gradient-success rounded-pill px-3 py-2 shadow-sm">
                                                <i class="fas fa-coins me-1"></i>
                                                {{ $estate->price ? number_format($estate->price, 0, ',', ' ') : '-' }}
                                                Fcfa
                                            </span>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center gap-2">
                                                <div class="avatar shadow-sm">
                                                    <span
                                                        class="avatar-initial rounded-circle bg-gradient-primary text-white">
                                                        {{ substr($estate->user->name, 0, 1) }}
                                                    </span>
                                                </div>
                                                <div class="user-info">
                                                    <div class="fw-medium">{{ $estate->user->name }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex gap-2 justify-content-center">
                                                <button wire:click="showEditForm({{ $estate->id }})"
                                                    class="btn btn-sm btn-outline-primary shadow-sm hover-lift action-btn"
                                                    title="Modifier le terrain" aria-label="Modifier le terrain">
                                                    <i class="fas fa-edit"></i>
                                                </button>
                                                <button wire:click="showDeleteForm({{ $estate->id }})"
                                                    class="btn btn-sm btn-outline-danger shadow-sm hover-lift action-btn"
                                                    title="Supprimer le terrain" aria-label="Supprimer le terrain">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center py-5">
                                            <div class="empty-state">
                                                @if ($search)
                                                    <i class="fas fa-search text-muted fa-3x mb-3"></i>
                                                    <h5 class="text-muted mb-2">Aucun résultat trouvé</h5>
                                                    <p class="text-muted mb-3">Aucun terrain ne correspond à votre
                                                        recherche "{{ $search }}"</p>
                                                    <button wire:click="clearSearch" class="btn btn-outline-primary">
                                                        <i class="fas fa-times me-2"></i>Effacer la recherche
                                                    </button>
                                                @else
                                                    <i class="fas fa-map-marked-alt text-muted fa-3x mb-3"></i>
                                                    <h5 class="text-muted mb-2">Aucun terrain trouvé</h5>
                                                    <p class="text-muted">Commencez par ajouter votre premier terrain
                                                    </p>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Enhanced Pagination -->
        <div class="card-footer bg-white border-0 d-flex justify-content-between align-items-center p-3">
            <div class="pagination-info text-muted">
                @if ($estates->total() > 0)
                    Affichage de {{ $estates->firstItem() }} à {{ $estates->lastItem() }} sur {{ $estates->total() }}
                    terrain(s)
                    @if ($search)
                        (filtrés)
                    @endif
                @else
                    Aucun terrain à afficher
                @endif
            </div>
            <div class="pagination-wrapper">
                {{ $estates->links() }}
            </div>
        </div>
    </div>

    <!-- Enhanced Modal Add/Edit Estate -->
    <div wire:ignore.self class="modal fade" id="EstateModal" tabindex="-1" role="dialog"
        aria-labelledby="estateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content border-0 shadow-lg rounded-lg">
                <div class="modal-header bg-gradient-light border-0">
                    <h5 class="modal-title d-flex align-items-center fw-bold" id="estateModalLabel">
                        <div class="modal-icon me-2">
                            <i
                                class="fas {{ $selectedEstate ? 'fa-edit text-primary' : 'fa-plus-circle text-success' }}"></i>
                        </div>
                        {{ $selectedEstate ? 'Modifier un terrain' : 'Ajouter un nouveau terrain' }}
                    </h5>
                    <button type="button" class="btn-close" wire:click="closeModal()" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="{{ $selectedEstate ? 'updateEstate' : 'addEstate' }}"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body p-4">
                        <!-- Enhanced Image Preview -->
                        @if ($image)
                            <div class="mb-4 text-center">
                                <div class="image-preview-container">
                                    <img src="{{ $image->temporaryUrl() }}" class="rounded-lg img-fluid shadow-sm"
                                        style="max-height: 200px;" alt="Prévisualisation de l'image">
                                </div>
                            </div>
                        @endif

                        <!-- Enhanced Form Fields -->
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label class="form-label fw-semibold">
                                    <i class="fas fa-image me-1"></i>
                                    Image <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-0">
                                        <i class="fas fa-image text-primary"></i>
                                    </span>
                                    <input type="file" wire:model="image" class="form-control border-0 shadow-sm"
                                        accept="image/*" />
                                </div>
                                @error('image')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">
                                    <i class="fas fa-map-marker-alt me-1"></i>
                                    Localité <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-0">
                                        <i class="fas fa-map-marker-alt text-primary"></i>
                                    </span>
                                    <input type="text" wire:model.debounce.500ms="location"
                                        class="form-control border-0 shadow-sm" placeholder="Ex: Kake" />
                                </div>
                                @error('location')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">
                                    <i class="fas fa-city me-1"></i>
                                    Ville <span class="text-danger">*</span>
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-0">
                                        <i class="fas fa-city text-primary"></i>
                                    </span>
                                    <input type="text" wire:model.debounce.500ms="town"
                                        class="form-control border-0 shadow-sm" placeholder="Ex: Douala" />
                                </div>
                                @error('town')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-12 mb-3">
                                <label class="form-label fw-semibold">
                                    <i class="fas fa-align-left me-1"></i>
                                    Description
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-0">
                                        <i class="fas fa-align-left text-primary"></i>
                                    </span>
                                    <textarea wire:model.debounce.500ms="description" class="form-control border-0 shadow-sm" rows="3"
                                        placeholder="Description courte du terrain"></textarea>
                                </div>
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">
                                    <i class="fas fa-tag me-1"></i>
                                    Prix / m²
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-0">
                                        <i class="fas fa-tag text-primary"></i>
                                    </span>
                                    <input type="number" min="0" wire:model.debounce.500ms="price"
                                        class="form-control border-0 shadow-sm" placeholder="Ex: 50000" />
                                    <span class="input-group-text bg-light border-0">Fcfa</span>
                                </div>
                                @error('price')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">
                                    <i class="fas fa-ruler-combined me-1"></i>
                                    Superficie (m²)
                                </label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light border-0">
                                        <i class="fas fa-ruler-combined text-primary"></i>
                                    </span>
                                    <input type="number" min="0" wire:model.debounce.500ms="area"
                                        class="form-control border-0 shadow-sm" placeholder="Ex: 500" />
                                    <span class="input-group-text bg-light border-0">m²</span>
                                </div>
                                @error('area')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer bg-light border-0">
                        <button type="button" wire:click="closeModal()"
                            class="btn btn-outline-secondary hover-lift">
                            <i class="fas fa-times me-2"></i>Annuler
                        </button>
                        <button type="submit" class="btn btn-gradient-primary hover-lift"
                            wire:loading.attr="disabled">
                            <span wire:loading wire:target="addEstate,updateEstate">
                                <i class="fas fa-spinner fa-spin me-2"></i>Enregistrement...
                            </span>
                            <span wire:loading.remove>
                                <i class="fas {{ $selectedEstate ? 'fa-save' : 'fa-plus' }} me-2"></i>
                                {{ $selectedEstate ? 'Modifier' : 'Enregistrer' }}
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Enhanced Modal Delete Confirmation -->
    <div wire:ignore.self class="modal fade" id="deleteEstate" tabindex="-1" role="dialog"
        aria-labelledby="deleteEstateLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content border-0 shadow-lg rounded-lg">
                <div class="modal-header bg-gradient-danger text-white border-0">
                    <h6 class="modal-title fw-bold">
                        <i class="fas fa-exclamation-triangle me-2"></i>
                        Supprimer le terrain
                    </h6>
                    <button type="button" class="btn-close btn-close-white" wire:click="closeModal()"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body text-center p-4">
                    <div class="delete-icon mb-3">
                        <i class="fas fa-trash-alt text-danger fa-3x"></i>
                    </div>
                    <h5 class="mb-3">Êtes-vous sûr ?</h5>
                    <p class="mb-2">Vous êtes sur le point de supprimer le terrain :</p>
                    <p class="fw-bold text-primary">{{ $location }}</p>
                    <p class="text-muted small">Cette action est irréversible.</p>
                </div>
                <div class="modal-footer justify-content-center border-0">
                    <button wire:click="closeModal()" type="button" class="btn btn-outline-secondary hover-lift">
                        <i class="fas fa-times me-2"></i>Annuler
                    </button>
                    <button wire:click="destroyEstate()" type="button" class="btn btn-gradient-danger hover-lift"
                        wire:loading.attr="disabled">
                        <span wire:loading wire:target="destroyEstate">
                            <i class="fas fa-spinner fa-spin me-2"></i>Suppression...
                        </span>
                        <span wire:loading.remove>
                            <i class="fas fa-trash-alt me-2"></i>Confirmer
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Enhanced Custom CSS -->
    <style>
        :root {
            --primary-color: #5184c5;
            --primary-gradient: linear-gradient(135deg, #5184c5 0%, #4a7bc8 100%);
            --success-gradient: linear-gradient(135deg, #28a745 0%, #20c997 100%);
            --info-gradient: linear-gradient(135deg, #17a2b8 0%, #6610f2 100%);
            --danger-gradient: linear-gradient(135deg, #dc3545 0%, #e83e8c 100%);
            --light-gradient: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            --shadow-sm: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
            --shadow-md: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            --shadow-lg: 0 1rem 3rem rgba(0, 0, 0, 0.175);
        }

        .widget-box-2 {
            transition: all 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .icon-wrapper {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: var(--primary-gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            margin-right: 10px;
        }

        .btn-gradient-primary {
            background: var(--primary-gradient);
            border: none;
            color: white;
            transition: all 0.3s ease;
        }

        .btn-gradient-primary:hover {
            background: linear-gradient(135deg, #4a7bc8 0%, #5184c5 100%);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
            color: white;
        }

        .btn-gradient-success {
            background: var(--success-gradient);
            border: none;
            color: white;
        }

        .btn-gradient-danger {
            background: var(--danger-gradient);
            border: none;
            color: white;
        }

        .bg-gradient-primary {
            background: var(--primary-gradient) !important;
        }

        .bg-gradient-success {
            background: var(--success-gradient) !important;
        }

        .bg-gradient-info {
            background: var(--info-gradient) !important;
        }

        .bg-gradient-light {
            background: var(--light-gradient) !important;
        }

        .bg-gradient-danger {
            background: var(--danger-gradient) !important;
        }

        .hover-lift {
            transition: all 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .search-container {
            min-width: 300px;
        }

        .search-input {
            border-radius: 10px;
            padding: 12px;
            font-size: 0.9rem;
        }

        .search-icon {
            border-radius: 10px 0 0 10px;
        }

        .modern-table {
            font-size: 0.9rem;
        }

        .modern-table th {
            background: var(--light-gradient);
            border: none;
            padding: 1rem;
            font-weight: 600;
        }

        .modern-table td {
            border: none;
            padding: 1rem;
            vertical-align: middle;
        }

        .table-row-hover:hover {
            background-color: rgba(81, 132, 197, 0.05);
            transform: scale(1.01);
            transition: all 0.3s ease;
        }

        .estate-image {
            width: 100px;
            height: 70px;
            object-fit: cover;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .estate-image:hover {
            transform: scale(1.1);
            box-shadow: var(--shadow-md);
        }

        .image-container {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
        }

        .location-info {
            max-width: 200px;
        }

        .town-badge {
            background: linear-gradient(135deg, #6c757d 0%, #495057 100%);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
        }

        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            overflow: hidden;
        }

        .avatar-initial {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--primary-gradient);
            font-weight: 600;
            font-size: 1.1rem;
        }

        .action-btn {
            width: 35px;
            height: 35px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .action-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-sm);
        }

        .row-number {
            font-weight: 600;
            color: var(--primary-color);
        }

        .empty-state {
            padding: 3rem 0;
        }

        .modal-content {
            border-radius: 15px;
            animation: modalFadeIn 0.3s ease-in-out;
        }

        @keyframes modalFadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .modal-icon {
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: rgba(81, 132, 197, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }

        .image-preview-container {
            position: relative;
            display: inline-block;
            border-radius: 15px;
            overflow: hidden;
        }

        .delete-icon {
            animation: pulse 2s infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.1);
            }
        }

        .sort-btn {
            text-decoration: none;
            color: #495057;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .sort-btn:hover {
            color: var(--primary-color);
            text-decoration: none;
        }

        .pagination-wrapper .pagination {
            margin: 0;
        }

        .pagination .page-item.active .page-link {
            background: var(--primary-gradient);
            border-color: var(--primary-color);
            color: white;
        }

        .pagination .page-link {
            color: var(--primary-color);
            border: 1px solid rgba(81, 132, 197, 0.2);
            transition: all 0.3s ease;
            margin: 0 2px;
            border-radius: 8px;
        }

        .pagination .page-link:hover {
            background-color: rgba(81, 132, 197, 0.1);
            color: var(--primary-color);
            transform: translateY(-1px);
        }

        .form-control {
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(81, 132, 197, 0.25);
        }

        .input-group-text {
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        @media (max-width: 768px) {
            .search-container {
                min-width: 250px;
            }

            .d-flex.justify-content-between {
                flex-direction: column;
                gap: 1rem;
            }

            .estate-image {
                width: 80px;
                height: 60px;
            }

            .location-info {
                max-width: 150px;
            }
        }
    </style>
</div>
