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
    <div class="about-hero">
        <img src="{{ asset('images/Original.png') }}" alt="evo image">
        <h1>{{ translate('À propos de EVO TRUCK') }}</h1>
        <p>
            {{ translate("Leader mondial depuis 2000 dans les équipements de construction et engins de levage, EVO TRUCK s'engage à innover et à fournir des solutions fiables et performantes pour tous les professionnels du secteur.") }}
        </p>
    </div>

    <!-- Timeline Section (Histoire & Vision) -->
    <div class="about-timeline-section">
        <div class="about-timeline">
            <div class="about-timeline-block">
                <img src="{{ asset('images/Original.png') }}" alt="evo ...">
                <h2>{{ translate('Bienvenue chez EVO') }}</h2>
                <p>{{ translate("Depuis sa création en 2000, EVO TRUCK s'est imposé comme l'un des leaders mondiaux du secteur des équipements de construction et des engins de levage. Notre parcours est guidé par l'innovation et l'excellence.") }}
                </p>
            </div>
            <div class="about-timeline-block">
                <img src="{{ asset('images/Original.png') }}" alt="evo ...">
                <h2>{{ translate('Dévoiler notre héritage') }}</h2>
                <p>{{ translate("Notre engagement envers l'excellence nous a propulsés au rang des acteurs mondiaux les plus influents du secteur des machines de construction.") }}
                </p>
            </div>
            <div class="about-timeline-block">
                <img src="{{ asset('images/Original.png') }}" alt="evo ...">
                <h2>{{ translate('Impact mondial') }}</h2>
                <p>{{ translate('EVO TRUCK est fier de figurer parmi les plus grandes entreprises de machines de construction au monde, reconnue pour ses contributions majeures au secteur.') }}
                </p>
            </div>
            <div class="about-timeline-block">
                <img src="{{ asset('images/Original.png') }}" alt="evo ...">
                <h2>{{ translate('Notre vision & nos valeurs') }}</h2>
                <p>{{ translate('Notre vision : devenir une entreprise mondiale de référence, créatrice de valeur, portée par la rigueur, le pragmatisme et la créativité.') }}
                </p>
            </div>
        </div>
    </div>

    <!-- Valeurs & Offres Section -->
    <div class="about-values-section">
        <div class="about-values-title">{{ translate('Ce que nous offrons') }}</div>
        <div class="about-values-list">
            <div class="about-value-card">
                <img src="{{ asset('images/Original.png') }}" alt="Qualité">
                <h4>{{ translate('Qualité') }}</h4>
                <p>{{ translate('Contrôle qualité rigoureux, chaque étape supervisée par des experts et des équipements de pointe.') }}
                </p>
            </div>
            <div class="about-value-card">
                <img src="{{ asset('images/Original.png') }}" alt="Conception et R&D">
                <h4>{{ translate('Conception & R&D') }}</h4>
                <p>{{ translate('Des conceptions innovantes et ergonomiques, portées par un investissement continu dans la recherche et le développement.') }}
                </p>
            </div>
            <div class="about-value-card">
                <img src="{{ asset('images/Original.png') }}" alt="Diversité">
                <h4>{{ translate('Diversité') }}</h4>
                <p>{{ translate("Une gamme complète d'équipements de construction et de levage pour répondre à tous les besoins.") }}
                </p>
            </div>
            <div class="about-value-card">
                <img src="{{ asset('images/Original.png') }}" alt="Service">
                <h4>{{ translate('Service') }}</h4>
                <p>{{ translate('Un accompagnement client de qualité, de la sélection à la maintenance, pour garantir votre satisfaction.') }}
                </p>
            </div>
        </div>
    </div>

    <!-- Section Pourquoi EVO-TRUCK (Design Créatif & Moderne) -->
    <div class="container why-evo-section">
        <div class="row align-items-center">
            <div class="col-md-5 text-center text-md-start mb-4 mb-md-0">
                <h2 class="why-title">{{ translate('Pourquoi choisir EVO TRUCK ?') }}</h2>
                <div class="why-subtitle">
                    {{ translate('Bien plus qu’un fournisseur, un partenaire de confiance pour vos projets industriels, BTP et logistique.') }}
                </div>
            </div>
            <div class="col-md-7">
                <div class="why-evo-cards">
                    <div class="why-evo-card">
                        <div class="why-icon"><i class="fas fa-shield-alt"></i></div>
                        <div class="why-card-title">{{ translate('Fiabilité & Sécurité') }}</div>
                        <div class="why-card-desc">
                            {{ translate('Des machines robustes, testées et certifiées pour garantir la sécurité de vos équipes et la réussite de vos chantiers.') }}
                        </div>
                    </div>
                    <div class="why-evo-card">
                        <div class="why-icon"><i class="fas fa-tools"></i></div>
                        <div class="why-card-title">{{ translate('Support technique expert') }}</div>
                        <div class="why-card-desc">
                            {{ translate('Une équipe technique dédiée pour l’accompagnement, la formation et la maintenance de vos équipements.') }}
                        </div>
                    </div>
                    <div class="why-evo-card">
                        <div class="why-icon"><i class="fas fa-shipping-fast"></i></div>
                        <div class="why-card-title">{{ translate('Livraison rapide & SAV') }}</div>
                        <div class="why-card-desc">
                            {{ translate('Des délais respectés, un service après-vente réactif et des pièces toujours disponibles.') }}
                        </div>
                    </div>
                    <div class="why-evo-card">
                        <div class="why-icon"><i class="fas fa-lightbulb"></i></div>
                        <div class="why-card-title">{{ translate('Innovation continue') }}</div>
                        <div class="why-card-desc">
                            {{ translate('Des solutions technologiques de pointe pour anticiper les besoins de demain.') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
