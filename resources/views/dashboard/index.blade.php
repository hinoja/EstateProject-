@extends('layouts.back')
@section('title', __('dashboard'))
@section('content')
    <div class="main-content">
        <div class="main-content-inner">
            <!-- Dashboard Overview -->
            <div class="dashboard-header mb-4">
                <h4 class="welcome-text">Bienvenue, {{ Auth::user()->name }}</h4>
                <p class="text-muted">Voici un aperçu de votre activité</p>
            </div>

            <!-- Stats Cards Row -->
            <div class="flat-counter-v2 tf-counter">
                <div class="counter-box">
                    <div class="box-icon w-68 round bg-primary-soft">
                        <span class="fa fa-users"></span>
                    </div>
                    <div class="content-box">
                        <div class="title-count">@lang('Users')</div>
                        <div class="d-flex align-items-end">
                            <h6 class="number" data-speed="2000" data-to="1" data-inviewport="yes">{{ $users }}
                            </h6>
                            <span class="text-success ms-2"><i class="fa fa-arrow-up"></i> 12%</span>
                        </div>
                        <small class="text-muted">Depuis le mois dernier</small>
                    </div>
                </div>

                <div class="counter-box">
                    <div class="box-icon w-68 round bg-success-soft">
                        <span class="icon icon-list-dashes"></span>
                    </div>
                    <div class="content-box">
                        <div class="title-count">Terrains</div>
                        <div class="d-flex align-items-end">
                            <h6 class="number" data-speed="2000" data-to="17" data-inviewport="yes">{{ $estates }}
                            </h6>
                            <span class="text-success ms-2"><i class="fa fa-arrow-up"></i> 8%</span>
                        </div>
                        <small class="text-muted">Depuis le mois dernier</small>
                    </div>
                </div>

                <div class="counter-box">
                    <div class="box-icon w-68 round bg-warning-soft">
                        <span class="icon icon-review"></span>
                    </div>
                    <div class="content-box">
                        <div class="title-count">Messages</div>
                        <div class="d-flex align-items-end">
                            <h6 class="number" data-speed="2000" data-to="17" data-inviewport="yes">{{ $messages }}
                            </h6>
                            <span class="text-danger ms-2"><i class="fa fa-arrow-down"></i> 3%</span>
                        </div>
                        <small class="text-muted">Depuis le mois dernier</small>
                    </div>
                </div>

                <div class="counter-box">
                    <div class="box-icon w-68 round bg-info-soft">
                        <span class="fa fa-eye"></span>
                    </div>
                    <div class="content-box">
                        <div class="title-count">Visiteurs</div>
                        <div class="d-flex align-items-end">
                            <h6 class="number" data-speed="2000" data-to="17" data-inviewport="yes">{{ $visitors ?? 245 }}
                            </h6>
                            <span class="text-success ms-2"><i class="fa fa-arrow-up"></i> 24%</span>
                        </div>
                        <small class="text-muted">Depuis le mois dernier</small>
                    </div>
                </div>
            </div>

            <!-- Analytics Charts -->
            <div class="row mt-5">
                <div class="col-lg-8">
                    <div class="card shadow-sm">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Statistiques des visiteurs</h5>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button"
                                    id="dropdownMenuButton" data-bs-toggle="dropdown">
                                    Cette semaine
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Aujourd'hui</a></li>
                                    <li><a class="dropdown-item" href="#">Cette semaine</a></li>
                                    <li><a class="dropdown-item" href="#">Ce mois</a></li>
                                    <li><a class="dropdown-item" href="#">Cette année</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="visitorChart" height="300"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h5 class="mb-0">Sources de trafic</h5>
                        </div>
                        <div class="card-body">
                            <canvas id="trafficSourceChart" height="260"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activities -->
            <div class="row mt-4">
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h5 class="mb-0">Messages récents</h5>
                        </div>
                        <div class="card-body p-0">
                            <div class="list-group list-group-flush">
                                @forelse($recentMessages as $message)
                                    <div class="list-group-item d-flex align-items-center px-3">
                                        <div class="avatar me-3">
                                            <span class="avatar-initial rounded-circle bg-light text-dark">
                                                <i class="fa fa-user"></i>
                                            </span>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 fw-medium">{{ $message->name }}</p>
                                            <small class="text-muted">{{ $message->created_at }}</small>
                                        </div>
                                        {{-- <a href="{{ route('contacts.show', $message->id) }}" class="btn btn-sm btn-outline-primary">Voir</a> --}}
                                    </div>
                                @empty
                                    <div class="list-group-item text-center">
                                        <p class="mb-0">Aucun message récent</p>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <a href="{{ route('dashboard.messages') }}" class="btn btn-link">Voir tous les messages</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            <h5 class="mb-0">Pages les plus visitées</h5>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Page</th>
                                            <th>Vues</th>
                                            <th>Taux de rebond</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Pour les données de visite -->
                                        @foreach($topPages as $page)
                                            <tr>
                                                <td>{{ $page->page_url }}</td>
                                                <td>{{ $page->views }}</td>
                                                @php
                                                    $bounceRate = rand(20, 70);
                                                    $badgeClass = $bounceRate < 40 ? 'bg-success' : ($bounceRate < 55 ? 'bg-warning' : 'bg-danger');
                                                @endphp
                                                <td>
                                                    <span class="badge {{ $badgeClass }}">{{ $bounceRate }}%</span>
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
        </div>
        <div class="footer-dashboard mt-4">
            <p class="text-variant-2">©2024 Well-Done Real Estate SCI. Tous droits réservés.</p>
        </div>
    </div>

    <div class="overlay-dashboard"></div>
@endsection

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Visitor Chart avec données dynamiques
            const visitorCtx = document.getElementById('visitorChart').getContext('2d');
            const visitorChart = new Chart(visitorCtx, {
                type: 'line',
                data: {
                    labels: {!! $visitLabels !!},
                    datasets: [{
                        label: 'Visiteurs',
                        data: {!! $visitData !!},
                        fill: true,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        tension: 0.4
                    }, {
                        label: 'Pages vues',
                        data: {!! $pageViewData !!},
                        fill: true,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        tension: 0.4
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        }
                    }
                }
            });

            // Traffic Source Chart avec données dynamiques
            const trafficCtx = document.getElementById('trafficSourceChart').getContext('2d');
            const trafficChart = new Chart(trafficCtx, {
                type: 'doughnut',
                data: {
                    labels: {!! $sourceLabels !!},
                    datasets: [{
                        data: {!! $sourceData !!},
                        backgroundColor: [
                            'rgba(75, 192, 192, 0.8)',
                            'rgba(54, 162, 235, 0.8)',
                            'rgba(255, 206, 86, 0.8)',
                            'rgba(255, 99, 132, 0.8)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom',
                        }
                    }
                }
            });
        });
    </script>
@endpush
