<div class="estates-container">
    <div class="estates-grid" role="main" aria-label="Liste des biens immobiliers">
        @forelse ($estates as $estate)
            <article class="estate-card">
                <a href="{{ route('estate.show', $estate->id) }}" class="estate-link"
                    aria-label="Voir les détails du bien à {{ $estate->location }} - {{ number_format($estate->price, 0, ',', ' ') }} FCFA/m²">

                    <div class="estate-image-container">
                        <img src="{{ $estate->image ? Storage::url($estate->image) : asset('assets/images/home/house-1.jpg') }}"
                            alt="Photo du bien immobilier à {{ $estate->location }}" class="estate-image" loading="lazy"
                            onerror="this.src='{{ asset('assets/images/home/house-1.jpg') }}'">

                        <div class="price-badge">
                            <span class="price-value">
                                {{ number_format($estate->price, 0, ',', ' ') }}
                                <span class="currency">FCFA</span>
                                <span class="unit">/m²</span>
                            </span>
                        </div>
                    </div>

                    <div class="estate-content">
                        <div class="estate-location">
                            <h3 class="location-title">
                                <i class="fas fa-map-marker-alt location-icon" aria-hidden="true"></i>
                                {{ $estate->location }}
                            </h3>
                            <p class="town-name">{{ $estate->town }}</p>
                        </div>

                        <div class="estate-meta">
                            <time datetime="{{ $estate->created_at->toISOString() }}" class="post-date">
                                <i class="fas fa-calendar-alt" aria-hidden="true"></i>
                                Publié le {{ $estate->formatDate($estate->created_at) }}
                            </time>
                        </div>

                        @if ($estate->surface)
                            <div class="surface-info">
                                <i class="fas fa-expand-arrows-alt" aria-hidden="true"></i>
                                {{ $estate->surface }} m²
                            </div>
                        @endif
                    </div>
                </a>
            </article>
        @empty
            <div class="empty-state">
                <div class="empty-state-icon">
                    <i class="fas fa-home"></i>
                </div>
                <h2>Aucun bien immobilier disponible</h2>
                <p>Il n'y a actuellement aucun bien immobilier à afficher.</p>
            </div>
        @endforelse
    </div>

    @if ($estates->hasPages())
        <div class="pagination-container">
            <nav aria-label="Navigation pagination des biens immobiliers">
                {{ $estates->appends(request()->query())->links('pagination::bootstrap-4') }}
            </nav>
        </div>
    @endif
</div>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .estates-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 2rem 1rem;
    }

    .estates-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 2rem;
        margin-bottom: 3rem;
    }

    .estate-card {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        height: 100%;
        display: flex;
        flex-direction: column;
        position: relative;
    }

    .estate-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
    }

    .estate-link {
        text-decoration: none;
        color: inherit;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .estate-image-container {
        height: 240px;
        position: relative;
        overflow: hidden;
    }

    .estate-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .estate-card:hover .estate-image {
        transform: scale(1.08);
    }

    .price-badge {
        position: absolute;
        top: 16px;
        right: 16px;
        background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
        color: white;
        padding: 10px 16px;
        border-radius: 25px;
        font-size: 0.9rem;
        font-weight: 600;
        box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3);
        backdrop-filter: blur(10px);
        z-index: 2;
    }

    .currency {
        font-size: 0.75em;
        opacity: 0.9;
        margin-left: 2px;
    }

    .unit {
        font-size: 0.75em;
        opacity: 0.9;
    }

    .estate-content {
        padding: 1.5rem;
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .estate-location {
        margin-bottom: 0.5rem;
    }

    .location-title {
        font-size: 1.1rem;
        font-weight: 600;
        color: #333;
        margin-bottom: 0.5rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .location-icon {
        color: #007bff;
        font-size: 0.9rem;
    }

    .town-name {
        color: #28a745;
        font-weight: 500;
        font-size: 0.95rem;
    }

    .estate-meta {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #6c757d;
        font-size: 0.85rem;
        margin-top: auto;
    }

    .post-date {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .surface-info {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 8px 12px;
        border-radius: 20px;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        font-size: 0.85rem;
        color: #495057;
        font-weight: 500;
        margin-top: 0.5rem;
    }

    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        background: white;
        border-radius: 16px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        grid-column: 1 / -1;
    }

    .empty-state-icon {
        font-size: 4rem;
        color: #dee2e6;
        margin-bottom: 1.5rem;
    }

    .empty-state h2 {
        color: #495057;
        margin-bottom: 1rem;
        font-size: 1.5rem;
    }

    .empty-state p {
        color: #6c757d;
        font-size: 1rem;
    }

    .pagination-container {
        display: flex;
        justify-content: center;
        margin-top: 3rem;
    }

    .pagination-container .pagination {
        display: flex;
        gap: 0.5rem;
        list-style: none;
        padding: 0;
    }

    .pagination-container .page-item {
        display: flex;
    }

    .pagination-container .page-link {
        padding: 0.75rem 1rem;
        background: white;
        border: 2px solid #dee2e6;
        border-radius: 10px;
        color: #007bff;
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
        min-width: 44px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .pagination-container .page-link:hover {
        background: #007bff;
        color: white;
        border-color: #007bff;
        transform: translateY(-2px);
    }

    .pagination-container .page-item.active .page-link {
        background: #007bff;
        color: white;
        border-color: #007bff;
    }

    .pagination-container .page-item.disabled .page-link {
        background: #f8f9fa;
        color: #6c757d;
        border-color: #dee2e6;
        cursor: not-allowed;
    }

    /* Animations d'apparition */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .estate-card {
        animation: fadeInUp 0.6s ease-out;
    }

    .estate-card:nth-child(1) {
        animation-delay: 0.1s;
    }

    .estate-card:nth-child(2) {
        animation-delay: 0.2s;
    }

    .estate-card:nth-child(3) {
        animation-delay: 0.3s;
    }

    .estate-card:nth-child(4) {
        animation-delay: 0.4s;
    }

    .estate-card:nth-child(5) {
        animation-delay: 0.5s;
    }

    .estate-card:nth-child(6) {
        animation-delay: 0.6s;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .estates-container {
            padding: 1rem 0.5rem;
        }

        .estates-grid {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }

        .estate-image-container {
            height: 200px;
        }

        .price-badge {
            font-size: 0.8rem;
            padding: 8px 12px;
        }

        .estate-content {
            padding: 1.25rem;
        }

        .location-title {
            font-size: 1rem;
        }

        .pagination-container .pagination {
            flex-wrap: wrap;
            gap: 0.25rem;
        }

        .pagination-container .page-link {
            padding: 0.5rem 0.75rem;
            min-width: 40px;
        }
    }

    @media (max-width: 480px) {
        .estate-image-container {
            height: 180px;
        }

        .price-badge {
            top: 12px;
            right: 12px;
            font-size: 0.75rem;
            padding: 6px 10px;
        }

        .estate-content {
            padding: 1rem;
        }

        .empty-state {
            padding: 3rem 1rem;
        }

        .empty-state-icon {
            font-size: 3rem;
        }
    }

    /* Dark mode support */
    @media (prefers-color-scheme: dark) {
        body {
            background-color: #1a1a1a;
            color: #e9ecef;
        }

        .estate-card {
            background: #2d2d2d;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }

        .location-title {
            color: #e9ecef;
        }

        .surface-info {
            background: linear-gradient(135deg, #3a3a3a 0%, #4a4a4a 100%);
            color: #e9ecef;
        }

        .empty-state {
            background: #2d2d2d;
        }

        .pagination-container .page-link {
            background: #2d2d2d;
            border-color: #495057;
            color: #007bff;
        }
    }

    /* Accessibility improvements */
    .estate-card:focus-within {
        outline: 2px solid #007bff;
        outline-offset: 2px;
    }

    .estate-link:focus {
        outline: none;
    }

    /* Reduced motion */
    @media (prefers-reduced-motion: reduce) {
        .estate-card {
            animation: none;
            transition: none;
        }

        .estate-image {
            transition: none;
        }

        .estate-card:hover {
            transform: none;
        }

        .estate-card:hover .estate-image {
            transform: none;
        }
    }

    /* Performance optimizations */
    .estate-image {
        will-change: transform;
    }

    .estate-card {
        will-change: transform, box-shadow;
    }

    /* Loading states */
    .estate-image[data-loading="true"] {
        background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
        background-size: 200% 100%;
        animation: loading 1.5s infinite;
    }

    @keyframes loading {
        0% {
            background-position: 200% 0;
        }

        100% {
            background-position: -200% 0;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Amélioration progressive pour les interactions
        const cards = document.querySelectorAll('.estate-card');
        const images = document.querySelectorAll('.estate-image');

        // Lazy loading amélioré avec placeholder
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.setAttribute('data-loading', 'true');

                    const tempImg = new Image();
                    tempImg.onload = function() {
                        img.removeAttribute('data-loading');
                        img.style.opacity = '0';
                        img.style.transition = 'opacity 0.3s ease';
                        img.src = tempImg.src;
                        img.style.opacity = '1';
                    };

                    tempImg.onerror = function() {
                        img.removeAttribute('data-loading');
                        img.src = img.getAttribute('onerror').match(/'([^']+)'/)[1];
                    };

                    tempImg.src = img.src;
                    observer.unobserve(img);
                }
            });
        }, {
            rootMargin: '50px'
        });

        images.forEach(img => {
            imageObserver.observe(img);
        });

        // Amélioration des interactions clavier
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                if (e.target.classList.contains('estate-link')) {
                    e.preventDefault();
                    e.target.click();
                }
            }
        });

        // Feedback visuel pour les actions
        cards.forEach(card => {
            card.addEventListener('mousedown', function() {
                this.style.transform = 'scale(0.98) translateY(-8px)';
            });

            card.addEventListener('mouseup', function() {
                this.style.transform = '';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = '';
            });
        });

        // Préchargement des images au survol
        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                const img = this.querySelector('.estate-image');
                if (img && !img.complete) {
                    img.loading = 'eager';
                }
            });
        });

        // Gestion des erreurs d'images
        images.forEach(img => {
            img.addEventListener('error', function() {
                this.style.background = 'linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%)';
                this.style.display = 'flex';
                this.style.alignItems = 'center';
                this.style.justifyContent = 'center';
                this.innerHTML =
                    '<i class="fas fa-image text-muted" style="font-size: 2rem;"></i>';
            });
        });

        // Animation staggered pour les cartes
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const cardObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, index * 100);
                }
            });
        }, observerOptions);

        cards.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            cardObserver.observe(card);
        });
    });
</script>
