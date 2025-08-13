@extends('layout.navbar')

@section('seo')
    <title>EVO TRUCK - À Propos</title>
    <meta name="description"
        content="Découvrez EVO TRUCK, leader mondial depuis 2000 dans les équipements de construction et engins de levage. Notre engagement envers l'innovation, l'excellence et la qualité nous positionne comme un acteur majeur du secteur.">
    <meta name="keywords"
        content="EVO TRUCK, leader construction, équipements de construction, engins de levage, innovation industrielle, excellence qualité, machines de construction, chargeuses, chariots élévateurs, excavatrices, R&D, contrôle qualité, service client, diversité produits,maroc">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="EVO TRUCK">
    <link rel="canonical" href="https://evo-truck.com/about">
    <meta property="og:title" content="EVO TRUCK - À Propos">
    <meta property="og:description"
        content="Leader mondial en équipements de construction depuis 2000 - Innovation, Excellence, Qualité">
    <meta property="og:type" content="website">
@endsection

@section('content')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-background">
            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content">
            <div class="hero-logo">
                <img src="{{ asset('images/Original.png') }}" alt="EVO TRUCK Logo">
            </div>
            <h1 class="hero-title">{{ translate('À propos de EVO TRUCK') }}</h1>
            <p class="hero-subtitle">
                {{ translate("EVO TRACK – Depuis 2000, spécialiste mondial des camions et poids lourds, offrant des solutions de transport fiables, performantes et adaptées aux besoins des professionnels.") }}
            </p>
            <div class="hero-stats">
                <div class="stat-item">
                    <span class="stat-number" data-target="24">0</span>
                    <span class="stat-label">{{ translate("Années d'expérience") }}</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-target="1000" data-plus="true">0</span>
                    <span class="stat-label">{{ translate('Projets réalisés') }}</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number" data-target="50" data-plus="true">0</span>
                    <span class="stat-label">{{ translate('Pays servis') }}</span>
                </div>
            </div>

        </div>
    </section>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const counters = document.querySelectorAll(".stat-number");

        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute("data-target"));
            const addPlus = counter.getAttribute("data-plus") === "true";
            const duration = 2000; // total time in ms
            const frameRate = 1000 / 60; // 60 FPS
            const totalFrames = Math.round(duration / frameRate);
            let frame = 0;

            const easeOutQuad = t => t * (2 - t); // easing function

            const counterInterval = setInterval(() => {
                frame++;
                const progress = easeOutQuad(frame / totalFrames);
                const current = Math.round(target * progress);

                counter.innerText = current + (addPlus ? "+" : "");

                if (frame === totalFrames) {
                    clearInterval(counterInterval);
                }
            }, frameRate);
        });
    });
</script>

    <!-- Mission & Vision Section -->
    <section class="mission-section">
        <div class="container">
            <div class="section-header">
                <h2>{{ translate('Notre Mission & Vision') }}</h2>
                <p>{{ translate('Découvrez ce qui nous motive et nous guide vers l\'excellence') }}</p>
            </div>
            <div class="mission-grid">
                <div class="mission-card">
                    <div class="mission-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>{{ translate('Notre Mission') }}</h3>
                    <p>{{ translate('Fournir des camions et poids lourds fiables, performants et adaptés aux besoins des professionnels, afin de garantir efficacité, sécurité et rentabilité dans leurs activités quotidiennes.') }}
                    </p>
                </div>
                <div class="mission-card">
                    <div class="mission-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>{{ translate('Notre Vision') }}</h3>
                    <p>{{ translate('Devenir une référence mondiale dans le domaine des véhicules industriels, en alliant innovation, durabilité et excellence opérationnelle pour anticiper les besoins du transport de demain.') }}
                    </p>
                </div>
                <div class="mission-card">
                    <div class="mission-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>{{ translate('Nos Valeurs') }}</h3>
                    <p>{{ translate('Fiabilité, Qualité, Innovation, Sécurité et Engagement client : des principes qui guident chaque livraison, chaque service et chaque relation depuis plus de deux décennies.') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- <!-- Timeline Section -->
    <section class="timeline-section">
        <div class="container">
            <div class="section-header">
                <h2>{{ translate('Notre Histoire') }}</h2>
                <p>{{ translate('Un parcours marqué par l\'innovation et l\'excellence') }}</p>
            </div>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-marker">2000</div>
                    <div class="timeline-content">
                        <h3>{{ translate('Fondation d\'EVO TRUCK') }}</h3>
                        <p>{{ translate('Création de l\'entreprise avec une vision claire : révolutionner l\'industrie des équipements de construction.') }}
                        </p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-marker">2005</div>
                    <div class="timeline-content">
                        <h3>{{ translate('Expansion internationale') }}</h3>
                        <p>{{ translate('Première expansion vers les marchés internationaux avec des produits innovants.') }}
                        </p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-marker">2010</div>
                    <div class="timeline-content">
                        <h3>{{ translate('Centre de R&D') }}</h3>
                        <p>{{ translate('Ouverture de notre centre de recherche et développement pour l\'innovation technologique.') }}
                        </p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-marker">2024</div>
                    <div class="timeline-content">
                        <h3>{{ translate('Leader mondial') }}</h3>
                        <p>{{ translate('EVO TRUCK est reconnu comme l\'un des leaders mondiaux du secteur des équipements de construction.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <div class="section-header">
                <h2>{{ translate('Ce que nous offrons') }}</h2>
                <p>{{ translate('Des solutions complètes pour tous vos besoins') }}</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>{{ translate('Qualité Premium') }}</h3>
                    <p>{{ translate('Chaque camion et pièce est soumis à un contrôle qualité rigoureux, avec une supervision experte et l’utilisation d’équipements de pointe pour garantir fiabilité et performance.') }}
                    </p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>{{ translate('Conception & R&D') }}</h3>
                    <p>{{ translate('Des conceptions innovantes et ergonomiques, issues d’un investissement continu en recherche et développement, pour offrir des véhicules toujours plus performants et économiques.') }}
                    </p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-th-large"></i>
                    </div>
                    <h3>{{ translate('Diversité Produits') }}</h3>
                    <p>{{ translate("Une large gamme de camions, poids lourds et équipements adaptés à tous les secteurs d’activité, répondant à chaque besoin de transport et de logistique.") }}
                    </p>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>{{ translate('Service Client') }}</h3>
                    <p>{{ translate('Un accompagnement personnalisé à chaque étape, de la sélection à la maintenance, afin de garantir la satisfaction et la fidélité de nos clients.') }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-section">
        <div class="container">
            <div class="why-choose-content">
                <div class="why-choose-text">
                    <h2>{{ translate('Pourquoi choisir EVO TRUCK ?') }}</h2>
                    <p>{{ translate('Bien plus qu\'un fournisseur, un partenaire de confiance pour vos projets industriels, BTP et logistique.') }}
                    </p>
                </div>
                <div class="why-choose-cards">
                    <div class="why-card">
                        <div class="why-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4>{{ translate('Fiabilité & Sécurité') }}</h4>
                        <p>{{ translate('Des machines robustes, testées et certifiées pour garantir la sécurité de vos équipes.') }}
                        </p>
                    </div>
                    <div class="why-card">
                        <div class="why-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h4>{{ translate('Support technique expert') }}</h4>
                        <p>{{ translate('Une équipe technique dédiée pour l\'accompagnement et la maintenance de vos équipements.') }}
                        </p>
                    </div>
                    <div class="why-card">
                        <div class="why-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <h4>{{ translate('Livraison rapide & SAV') }}</h4>
                        <p>{{ translate('Des délais respectés, un service après-vente réactif et des pièces toujours disponibles.') }}
                        </p>
                    </div>
                    <div class="why-card">
                        <div class="why-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4>{{ translate('Innovation continue') }}</h4>
                        <p>{{ translate('Des solutions technologiques de pointe pour anticiper les besoins de demain.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>{{ translate('Prêt à travailler avec nous ?') }}</h2>
                <p>{{ translate('Découvrez nos solutions et commencez votre projet dès aujourd\'hui') }}</p>

            </div>
        </div>
    </section>
@endsection
