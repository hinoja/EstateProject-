<div class="container-fluid px-4">
    <div class="row mb-4">
        <div class="col-12">
            <!-- Header Section -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h4 class="mb-0 text-dark fw-bold">Messages</h4>
                    <p class="text-muted mb-0">Gérez vos messages de contact</p>
                </div>
                <div class="d-flex align-items-center">
                    <span class="badge bg-primary fs-6 px-3 py-2">
                        {{ $totalMessages }} messages
                    </span>
                </div>
            </div>

            <!-- Statistics Cards -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <div class="bg-primary bg-opacity-10 p-3 rounded-circle">
                                        <i class="fas fa-envelope text-primary"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-0 text-muted">Total des messages</h6>
                                    <h4 class="mb-0 text-dark">{{ $totalMessages }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <div class="bg-success bg-opacity-10 p-3 rounded-circle">
                                        <i class="fas fa-reply text-success"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-0 text-muted">Répondus</h6>
                                    <h4 class="mb-0 text-dark">{{ $contacts->where('response', '!=', null)->count() }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <div class="bg-warning bg-opacity-10 p-3 rounded-circle">
                                        <i class="fas fa-clock text-warning"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <h6 class="mb-0 text-muted">En attente</h6>
                                    <h4 class="mb-0 text-dark">{{ $contacts->where('response', null)->count() }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Messages Table -->
            <div class="card border-0 shadow-sm">
                <div class="card-header bg-white py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h6 class="mb-0 text-dark fw-semibold">Liste des messages</h6>
                        <div class="d-flex align-items-center">
                            <!-- Search functionality could be added here -->
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                    <i class="fas fa-filter me-1"></i>Filtrer
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#" wire:click="filterBy('all')">Tous les messages</a></li>
                                    <li><a class="dropdown-item" href="#" wire:click="filterBy('replied')">Répondus</a></li>
                                    <li><a class="dropdown-item" href="#" wire:click="filterBy('pending')">En attente</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="px-4 py-3 text-muted fw-semibold">#</th>
                                    <th class="px-4 py-3 text-muted fw-semibold">Contact</th>
                                    <th class="px-4 py-3 text-muted fw-semibold">Sujet</th>
                                    <th class="px-4 py-3 text-muted fw-semibold">Date</th>
                                    <th class="px-4 py-3 text-muted fw-semibold">Statut</th>
                                    <th class="px-4 py-3 text-muted fw-semibold text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($contacts as $contact)
                                    <tr class="border-bottom">
                                        <td class="px-4 py-3">
                                            <span class="text-muted fw-medium">{{ $loop->iteration }}</span>
                                        </td>
                                        <td class="px-4 py-3">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0">
                                                    <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                                        <i class="fas fa-user text-primary"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="fw-medium text-dark">{{ $contact->name }}</div>
                                                    <div class="text-muted small">{{ $contact->email }}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3">
                                            <div class="text-dark fw-medium">{{ Str::limit($contact->subject, 30) }}</div>
                                            <div class="text-muted small">{{ Str::limit($contact->message, 50) }}</div>
                                        </td>
                                        <td class="px-4 py-3">
                                            <div class="text-muted small">{{ $contact->created_at  }}</div>
                                            {{-- <div class="text-muted small">{{ $contact->created_at }}</div> --}}
                                        </td>
                                        <td class="px-4 py-3">
                                            @if($contact->response)
                                                <span class="badge bg-success bg-opacity-10 text-success px-3 py-2">
                                                    <i class="fas fa-check-circle me-1"></i>Répondu
                                                </span>
                                            @else
                                                <span class="badge bg-warning bg-opacity-10 text-warning px-3 py-2">
                                                    <i class="fas fa-clock me-1"></i>En attente
                                                </span>
                                            @endif
                                        </td>
                                        <td class="px-4 py-3 text-center">
                                            <button wire:click="showModalForm({{ $contact }})"
                                                class="btn btn-sm {{ $contact->response ? 'btn-primary' : 'btn-outline-primary' }} px-3">
                                                <i class="fas fa-eye me-1"></i>Voir
                                            </button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center py-5">
                                            <div class="text-muted">
                                                <i class="fas fa-envelope-open-text fs-2 mb-3"></i>
                                                <p class="mb-0">Aucun message trouvé</p>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Pagination -->
                @if($contacts->hasPages())
                <div class="card-footer bg-white py-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="text-muted small">
                            Affichage {{ $contacts->firstItem() }} à {{ $contacts->lastItem() }} sur {{ $contacts->total() }} résultats
                        </div>
                        <nav aria-label="Table navigation">
                            {{ $contacts->links() }}
                        </nav>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Enhanced Modal -->
    <div wire:ignore.self class="modal fade" id="MessageModal" tabindex="-1" aria-labelledby="MessageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content border-0 shadow">
                <div class="modal-header bg-light py-3">
                    <div class="d-flex align-items-center">
                        <div class="bg-primary bg-opacity-10 rounded-circle p-2 me-3">
                            <i class="fas fa-envelope text-primary"></i>
                        </div>
                        <div>
                            <h5 class="modal-title mb-0 text-dark fw-bold" id="MessageModalLabel">Détails du message</h5>
                            <p class="text-muted mb-0 small">Voir et répondre au message de contact</p>
                        </div>
                    </div>
                    <button type="button" class="btn-close" wire:click="closeModal()" aria-label="Close"></button>
                </div>

                @if ($displayContact)
                <div class="modal-body p-4">
                    <!-- Contact Information -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="card border-0 bg-light h-100">
                                <div class="card-body">
                                    <h6 class="text-muted mb-3">Informations de contact</h6>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fas fa-user text-primary me-2"></i>
                                        <span class="fw-medium">{{ $displayContact->name }}</span>
                                    </div>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fas fa-envelope text-primary me-2"></i>
                                        <a href="mailto:{{ $displayContact->email }}" class="text-decoration-none">{{ $displayContact->email }}</a>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-calendar text-primary me-2"></i>
                                        <span class="text-muted small">{{ $displayContact->created_at  }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card border-0 bg-light h-100">
                                <div class="card-body">
                                    <h6 class="text-muted mb-3">Statut du message</h6>
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fas fa-tag text-primary me-2"></i>
                                        <span class="fw-medium">{{ $displayContact->subject }}</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-{{ $displayContact->response ? 'check-circle text-success' : 'clock text-warning' }} me-2"></i>
                                        <span class="badge bg-{{ $displayContact->response ? 'success' : 'warning' }} bg-opacity-10 text-{{ $displayContact->response ? 'success' : 'warning' }}">
                                            {{ $displayContact->response ? 'Répondu' : 'En attente de réponse' }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Message Content -->
                    <div class="card border-0 bg-light mb-4">
                        <div class="card-body">
                            <h6 class="text-muted mb-3">Contenu du message</h6>
                            <div class="bg-white p-3 rounded border">
                                <p class="mb-0 text-dark" style="line-height: 1.6;">{{ $displayContact->message }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Response Section -->
                    @if (!$displayContact->response)
                        <div class="card border-0   bg-opacity-5">
                            <div class="card-body">
                                <form wire:submit.prevent="replyMessage({{ $displayContact }})">
                                    <h6 class="text-primary mb-3">
                                        <i class="fas fa-reply me-2"></i>Rédiger une réponse
                                    </h6>
                                    <div class="mb-3">
                                        <label class="form-label text-muted">Votre réponse</label>
                                        <textarea wire:model.defer="reply"
                                                class="form-control border-0 shadow-sm @error('reply') is-invalid @enderror"
                                                rows="5"
                                                placeholder="Rédigez votre réponse ici..."></textarea>
                                        @error('reply')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="button"
                                                class="btn btn-outline-secondary me-2"
                                                wire:click="closeModal()">
                                            Annuler
                                        </button>
                                        <button type="submit"
                                                class="btn btn-primary px-4"
                                                wire:loading.attr="disabled"
                                                wire:target="replyMessage">
                                            <span wire:loading.remove wire:target="replyMessage">
                                                <i class="fas fa-paper-plane me-2"></i>Envoyer la réponse
                                            </span>
                                            <span wire:loading wire:target="replyMessage">
                                                <span class="spinner-border spinner-border-sm me-2" role="status"></span>
                                                Envoi en cours...
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @else
                        <div class="card border-0 bg-success bg-opacity-5">
                            <div class="card-body">
                                <h6 class="text-success mb-3">
                                    <i class="fas fa-check-circle me-2"></i>Réponse envoyée
                                </h6>
                                <div class="bg-white p-3 rounded border">
                                    <p class="mb-0 text-dark" style="line-height: 1.6;">{{ $displayContact->response }}</p>
                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <small class="text-muted">
                                        <i class="fas fa-clock me-1"></i>
                                        Envoyé le {{ $displayContact->updated_at  }}
                                    </small>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                @endif
            </div>
        </div>
    </div>

<style>
    .card {
        transition: all 0.3s ease;
    }

    .card:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 25px rgba(0,0,0,0.1) !important;
    }

    .table-hover tbody tr:hover {
        background-color: rgba(81, 132, 197, 0.05);
    }

    .btn {
        transition: all 0.3s ease;
    }

    .btn:hover {
        transform: translateY(-1px);
    }

    .modal-content {
        border-radius: 15px;
    }

    .badge {
        border-radius: 8px;
        font-weight: 500;
    }

    .pagination .page-item.active .page-link {
        background-color: rgb(81, 132, 197);
        border-color: rgb(81, 132, 197);
        color: white;
    }

    .pagination .page-link {
        color: rgb(81, 132, 197);
        border-radius: 8px;
        margin: 0 2px;
    }

    .pagination .page-link:hover {
        background-color: rgba(81, 132, 197, 0.1);
        border-color: rgba(81, 132, 197, 0.3);
        color: rgb(81, 132, 197);
    }

    .form-control:focus {
        border-color: rgb(81, 132, 197);
        box-shadow: 0 0 0 0.2rem rgba(81, 132, 197, 0.25);
    }
</style>

</div>
