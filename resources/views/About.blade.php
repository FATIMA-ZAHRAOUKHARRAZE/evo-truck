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
    <section class="hero-section " style="z-index:4">
        <div class="hero-background">

            <div class="hero-overlay"></div>
        </div>
        <div class="hero-content">
            <div class="hero-logo">

            </div>
            <h1 class="hero-title">{{ translate('À propos de EVO TRUCK') }}</h1>
            <p class="hero-subtitle">
                {{ translate('EVO TRUCK – Depuis 2000, spécialiste mondial des camions et poids lourds, offrant des solutions de transport fiables, performantes et adaptées aux besoins des professionnels.') }}
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

    <!-- Mission & Vision Section - Design harmonisé bleu/jaune -->
    <section class="mission-section" style="z-index: 4 !important">
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

  <!-- Hero Scroll Section -->
<section class="hero-scroll-section">
    <div class="hero-scroll-overlay"></div>

    <div class="hero-scroll-content">
        <h1 class="hero-scroll-text">
            {{ translate('NOUS CRÉONS') }}<br>
            {{ translate('L’AVENIR') }}<br>
            {{ translate('DEPUIS 2000') }}
        </h1>
    </div>
</section>



    {{--  <script>
        document.addEventListener("scroll", function() {
            const scrollText = document.getElementById("scrollText");
            const scrollBg = document.getElementById("scrollBg");
            if (!scrollText || !scrollBg) return;
            const section = scrollText.closest('.hero-scroll-section');
            const rect = section.getBoundingClientRect();
            // Texte qui remonte
            if (rect.top < 60) {
                scrollText.style.top = "18%";
            } else {
                scrollText.style.top = "60%";
            }
            // Effet parallax sur l'image
            let offset = Math.max(0, -rect.top * 0.3);
            scrollBg.style.transform = `translateY(${offset}px)`;
        });
    </script>  --}}


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
    <section class="services-section evo-offers-section">
        <div class="container">
            <div class="evo-offers-title">{{ translate('Ce que nous offrons') }}</div>
            <div class="evo-offers-desc">{{ translate('Des solutions complètes pour tous vos besoins') }}</div>
            <div class="evo-offers-cards-row">
                <div class="evo-offer-card">
                    <span class="evo-offer-icon"><i class="fas fa-award"></i></span>
                    <div class="evo-offer-card-title">{{ translate('Qualité Premium') }}</div>
                    <div class="evo-offer-card-desc">
                        {{ translate('Chaque camion et pièce est soumis à un contrôle qualité rigoureux, avec une supervision experte et l’utilisation d’équipements de pointe pour garantir fiabilité et performance.') }}
                    </div>
                </div>
                <div class="evo-offer-card">
                    <span class="evo-offer-icon"><i class="fas fa-lightbulb"></i></span>
                    <div class="evo-offer-card-title">{{ translate('Conception & R&D') }}</div>
                    <div class="evo-offer-card-desc">
                        {{ translate('Des conceptions innovantes et ergonomiques, issues d’un investissement continu en recherche et développement, pour offrir des véhicules toujours plus performants et économiques.') }}
                    </div>
                </div>
                <div class="evo-offer-card">
                    <span class="evo-offer-icon"><i class="fas fa-th-large"></i></span>
                    <div class="evo-offer-card-title">{{ translate('Diversité Produits') }}</div>
                    <div class="evo-offer-card-desc">
                        {{ translate('Une large gamme de camions, poids lourds et équipements adaptés à tous les secteurs d’activité, répondant à chaque besoin de transport et de logistique.') }}
                    </div>
                </div>
                <div class="evo-offer-card">
                    <span class="evo-offer-icon"><i class="fas fa-headset"></i></span>
                    <div class="evo-offer-card-title">{{ translate('Service Client') }}</div>
                    <div class="evo-offer-card-desc">
                        {{ translate('Un accompagnement client de qualité, de la sélection à la maintenance, pour garantir votre satisfaction.') }}
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- CTA Section -->
    <section class="cta-section" style="z-index: 4">
        <div class="container">
            <div class="cta-content">
                <h2>{{ translate('Prêt à travailler avec nous ?') }}</h2>
                <p>{{ translate('Découvrez nos solutions et commencez votre projet dès aujourd\'hui') }}</p>
            </div>
        </div>
    </section>
    <script></script>
@endsection
