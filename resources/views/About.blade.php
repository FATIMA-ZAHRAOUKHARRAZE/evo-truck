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
    <div class="evo-about-hero">
        <div class="about-hero-img">
            <img src="https://evo-machinery.com/images/EVO_WEB_Bleu.svg" alt="EVO TRUCK logo">
        </div>
        <div class="about-hero-content">
            <h1>{{ translate('À propos de EVO TRUCK') }}</h1>
            <p>
                {{ translate("Leader mondial depuis 2000 dans les équipements de construction et engins de levage, EVO TRUCK s'engage à innover et à fournir des solutions fiables et performantes pour tous les professionnels du secteur.") }}
            </p>
        </div>
    </div>

    <!-- Timeline / Histoire & Vision Section -->
    <div class="evo-about-section">
        <div class="evo-about-row">
            <div class="evo-about-block">
                <img src="https://evo-machinery.com/images/EVO_WEB_Bleu.svg" alt="evo logo">
                <h2>{{ translate('Bienvenue chez EVO') }}</h2>
                <p>{{ translate("Depuis sa création en 2000, EVO TRUCK s'est imposé comme l'un des leaders mondiaux du secteur des équipements de construction et des engins de levage. Notre parcours est guidé par l'innovation et l'excellence.") }}
                </p>
            </div>
            <div class="evo-about-block">
                <img src="https://evo-machinery.com/images/EVO_WEB_Bleu.svg" alt="evo logo">
                <h2>{{ translate('Dévoiler notre héritage') }}</h2>
                <p>{{ translate("Notre engagement envers l'excellence nous a propulsés au rang des acteurs mondiaux les plus influents du secteur des machines de construction.") }}
                </p>
            </div>
            <div class="evo-about-block">
                <img src="https://evo-machinery.com/images/EVO_WEB_Bleu.svg" alt="evo logo">
                <h2>{{ translate('Impact mondial') }}</h2>
                <p>{{ translate('EVO TRUCK est fier de figurer parmi les plus grandes entreprises de machines de construction au monde, reconnue pour ses contributions majeures au secteur.') }}
                </p>
            </div>
            <div class="evo-about-block">
                <img src="https://evo-machinery.com/images/EVO_WEB_Bleu.svg" alt="evo logo">
                <h2>{{ translate('Notre vision & nos valeurs') }}</h2>
                <p>{{ translate('Notre vision : devenir une entreprise mondiale de référence, créatrice de valeur, portée par la rigueur, le pragmatisme et la créativité.') }}
                </p>
            </div>
        </div>
    </div>
<!-- Hero Statistique Section (inspiré Nicepage) -->
    <div class="evo-hero-stats-section">
        <div class="evo-hero-stats-overlay"></div>
        <div class="evo-hero-stats-content">
            <div class="evo-hero-stats-title">
                {{ translate("L’excellence industrielle, la performance pour votre réussite") }}
            </div>
            <div class="evo-hero-stats-cards">
                <div class="evo-hero-stats-card">
                    <div class="evo-hero-stats-number">25+</div>
                    <div class="evo-hero-stats-label">{{ translate('Années d’expérience') }}</div>
                </div>
                <div class="evo-hero-stats-card">
                    <div class="evo-hero-stats-number">70+</div>
                    <div class="evo-hero-stats-label">{{ translate('Projets par an') }}</div>
                </div>
                <div class="evo-hero-stats-card">
                    <div class="evo-hero-stats-number">5k</div>
                    <div class="evo-hero-stats-label">{{ translate('Clients professionnels') }}</div>
                </div>
                <div class="evo-hero-stats-card">
                    <div class="evo-hero-stats-number">90k</div>
                    <div class="evo-hero-stats-label">{{ translate('Clients satisfaits') }}</div>
                </div>
            </div>
        </div>
    </div>


    <!-- Section Ce que nous offrons (Design inspiré Nicepage) -->
    <div class="evo-offers-section">
        <div class="evo-offers-title">{{ translate('Ce que nous offrons') }}</div>
        <div class="evo-offers-row">
            <div class="evo-offers-features">
                <div class="evo-offer-feature">
                    <span class="evo-offer-icon"><i class="fas fa-certificate"></i></span>
                    <div class="evo-offer-texts">
                        <div class="evo-offer-title">{{ translate('Qualité') }}</div>
                        <div class="evo-offer-desc">
                            {{ translate('Contrôle qualité rigoureux, chaque étape supervisée par des experts et des équipements de pointe.') }}
                        </div>
                    </div>
                </div>
                <div class="evo-offer-feature">
                    <span class="evo-offer-icon"><i class="fas fa-user-shield"></i></span>
                    <div class="evo-offer-texts">
                        <div class="evo-offer-title">{{ translate('Conception et R&D') }}</div>
                        <div class="evo-offer-desc">
                            {{ translate('Des conceptions innovantes et ergonomiques, portées par un investissement continu dans la recherche et le développement.') }}
                        </div>
                    </div>
                </div>
                <div class="evo-offer-feature">
                    <span class="evo-offer-icon"><i class="fas fa-users"></i></span>
                    <div class="evo-offer-texts">
                        <div class="evo-offer-title">{{ translate('Diversité') }}</div>
                        <div class="evo-offer-desc">
                            {{ translate('Une gamme complète déquipements de construction et de levage pour répondre à tous les besoins.') }}
                        </div>
                    </div>
                </div>
                <div class="evo-offer-feature">
                    <span class="evo-offer-icon"><i class="fas fa-hand-holding-usd"></i></span>
                    <div class="evo-offer-texts">
                        <div class="evo-offer-title">{{ translate('Service') }}</div>
                        <div class="evo-offer-desc">
                            {{ translate('Un accompagnement client de qualité, de la sélection à la maintenance, pour garantir votre satisfaction.') }}</div>
                    </div>
                </div>
            </div>
            <div class="evo-offers-services">
                <div class="evo-services-list-title">{{ translate('Nos services') }}</div>
                <ul class="evo-services-list">
                    <li><i class="fas fa-check"></i> {{ translate('Vente de camions & engins') }}</li>
                    <li><i class="fas fa-check"></i> {{ translate('Location de matériel') }}</li>
                    <li><i class="fas fa-check"></i> {{ translate('Maintenance & SAV') }}</li>
                    <li><i class="fas fa-check"></i> {{ translate('Pièces détachées') }}</li>
                    <li><i class="fas fa-check"></i> {{ translate('Conseil & accompagnement') }}</li>
                </ul>
                <a href="/contact" class="evo-offers-btn">{{ translate('EN SAVOIR PLUS') }}</a>
            </div>
        </div>
    </div>


@endsection
