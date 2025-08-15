@extends('layout.navbar')
@section('seo')
    <title>EVO TRUCK</title>
    <meta name="description"
        content="EVO est une société multinationale avec la gamme la plus complète de produits concurrentiels et influents dans l'industrie des machines de construction.">
    <meta name="keywords"
        content="EVO TRUCK, machines de construction, équipements de construction, excavatrices, chargeuses,véhicules spéciaux, engins de chantier, machines portuaires, équipements de levage, machines de terrassement, machines d'assainissement, composants de machine,construction,Maroc,industrie minière, machines de levage, machines de terrassement,station de concassage et criblage,véhicules spéciaux">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="EVO TRUCK">
    <link rel="canonical" href="https://evo-truck.com/">
    <meta property="og:title" content="EVO TRUCK - Accueil">
    <meta property="og:description" content="EVO TRUCK - Accueil">
    <meta property="og:type" content="website">
@endsection
@section('content')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

    <!-- partie carousel -->
    <div id="carousel" class="carousel slide carousel-custom" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block" src="{{ asset('https://evo-machinery.com/images/banner%20site%20EVO.jpg') }}"
                    alt="evo Slide 1">
                <div class="carousel-caption">
                    <h1>{{ translate('EVO TRUCK Specialiste en engins industrielles et poids lourds.') }}</h1>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block" src="{{ asset('https://evo-machinery.com/images/banner%20site%20EVO.jpg') }}"
                    alt="evo Slide 1">
            </div>
        </div>
        <a class="carousel-control-prev custom-control" href="#carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next custom-control" href="#carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>
    {{-- <!-- Section Services -->
    <div class="container evo-services-section">
        <div class="row justify-content-center">
            <div class="text-center col-12">
                <div class="evo-services-title">{{ translate('Nos univers EVO TRUCK') }}</div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-3 d-flex">
                <div class="text-center evo-service-card flex-fill">
                    <div class="evo-service-icon-bg">
                        <img src="{{ asset('images/icons/engin industrielle.svg') }}" alt="engin industrielle">
                    </div>
                    <div class="evo-service-title">{{ translate('Tracteur') }}</div>
                    <div class="evo-service-desc">
                        {{ translate("Matériels robustes pour l'industrie lourde, chantiers et logistique.") }}
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 d-flex">
                <div class="text-center evo-service-card flex-fill">
                    <div class="evo-service-icon-bg">
                        <img src="{{ asset('images/icons/semi-remorque.svg') }}" alt="camion semi remorque">
                    </div>
                    <div class="evo-service-title">{{ translate('Camion Bande-annonce') }}</div>
                    <div class="evo-service-desc">
                        {{ translate('Transportez plus loin, plus sûr : tracteurs, porteurs et remorques.') }}
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-3 d-flex">
                <div class="text-center evo-service-card flex-fill">
                    <div class="evo-service-icon-bg">
                        <img src="{{ asset('images/icons/engrenage.svg') }}" alt="pieces detachees">
                    </div>
                    <div class="evo-service-title">{{ translate('Camion mélangeur') }}</div>
                    <div class="evo-service-desc">
                        {{ translate('Toutes pièces d’origine et adaptables pour vos véhicules et engins.') }}
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-3 d-flex">
                <div class="text-center evo-service-card flex-fill">
                    <div class="evo-service-icon-bg">
                        <img src="{{ asset('images/icons/toolbox.svg') }}" alt="maintenance">
                    </div>
                    <div class="evo-service-title">{{ translate('Camions électriques') }}</div>
                    <div class="evo-service-desc">
                        {{ translate('Entretien, réparation, diagnostic : l’expertise EVO TRUCK à votre service.') }}
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Section Pourquoi EVO-TRUCK -->
    {{-- <div class="container why-evo-section">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="why-title">{{ translate('POURQUOI') }}<br>{{ translate('EVO-TRUCK?') }}</h2>
            </div>
            <div class="col-md-6">
                <ul class="why-list">
                    <li><i class="fas fa-check"></i> {{ translate('Fiabilité des machines') }}</li>
                    <li><i class="fas fa-check"></i> {{ translate('Produits verifiés et testés') }}</li>
                    <li><i class="fas fa-check"></i> {{ translate('Accompagnement technique') }}</li>
                    <li><i class="fas fa-check"></i> {{ translate('Livraison rapide et SAV') }}</li>
                </ul>
            </div>
        </div>
    </div> --}}

        <div class="container why-evo-section">
            <div class="why-evo-title">{{ translate('Pourquoi choisir EVO TRUCK ?') }}</div>
            <div class="why-evo-subtitle">
                {{ translate('Votre partenaire de confiance pour des camions performants, fiables et adaptés à vos besoins professionnels.') }}
            </div>
            <div class="why-evo-advantages">
                <div class="why-evo-advantage">
                    <div class="why-evo-icon"><i class="fas fa-tachometer-alt"></i></div>
                    <div class="why-evo-adv-title">{{ translate('Performance supérieure') }}</div>
                    <div class="why-evo-adv-desc">
                        {{ translate('Des camions puissants, conçus pour les charges lourdes et les longues distances, même dans les conditions les plus exigeantes.') }}
                    </div>
                </div>
                <div class="why-evo-advantage">
                    <div class="why-evo-icon"><i class="fas fa-shield-alt"></i></div>
                    <div class="why-evo-adv-title">{{ translate('Fiabilité éprouvée') }}</div>
                    <div class="why-evo-adv-desc">
                        {{ translate('Des véhicules robustes, testés et certifiés pour garantir la sécurité et la continuité de vos activités.') }}
                    </div>
                </div>
                <div class="why-evo-advantage">
                    <div class="why-evo-icon"><i class="fas fa-cogs"></i></div>
                    <div class="why-evo-adv-title">{{ translate('Personnalisation') }}</div>
                    <div class="why-evo-adv-desc">
                        {{ translate('Solutions sur-mesure : configuration, équipements et options selon vos besoins métiers.') }}
                    </div>
                </div>
                <div class="why-evo-advantage">
                    <div class="why-evo-icon"><i class="fas fa-headset"></i></div>
                    <div class="why-evo-adv-title">{{ translate('Service après-vente réactif') }}</div>
                    <div class="why-evo-adv-desc">
                        {{ translate('Assistance technique, maintenance rapide et disponibilité des pièces pour une tranquillité totale.') }}
                    </div>
                </div>
            </div>

    <div class="container my-5 about-evo">
        {{-- <div class="mb-5 row align-items-center">
            <div class="order-2 col-md-6 order-md-1">
                <h2 class="about-title-2">{{ translate('EVO - TRUCK') }}</h2>
                <p class="about-desc">
                    {{ translate("Depuis 2000, Evo-TRUCK fournit des engins de chantier, camions industriels et équipements lourds fiables pour les secteurs du BTP, du transport et de l'industrie. Notre expertise permet aux professionnels de s'équiper avec des machines performantes, robustes et prêtes à affronter les conditions les plus exigeantes.") }}
                </p>
                <div class="about-feature"><i class="fas fa-industry"></i>
                    {{ translate('Expertise industrielle depuis 2000') }}</div>
                <div class="about-feature"><i class="fas fa-cogs"></i>
                    {{ translate('Solutions sur-mesure pour chaque secteur') }}</div>
                <div class="about-feature"><i class="fas fa-users"></i> {{ translate('Accompagnement personnalisé') }}
                </div>
                <a href="/about" class="mt-3 about-btn">{{ translate('En savoir plus sur nous &rarr;') }}</a>
            </div>
            <div class="order-1 mb-4 text-center col-md-6 order-md-2 mb-md-0">
                <img src="{{ asset('images/banner p2 EVO.jpg') }}" alt="EVO TRUCK" class="about-img img-fluid">
            </div>
        </div>
        <div class="row align-items-center flex-md-row-reverse">
            <div class="col-md-6">
                <h2 class="about-title-2">{{ translate("L'innovation au cœur de notre évolution") }}</h2>
                <p class="about-desc">
                    {{ translate("Chez Evo-TRUCK, l'innovation est le moteur de notre évolution. En intégrant les dernières technologies aux engins de chantier et camions industriels, nous anticipons les besoins des professionnels du BTP, du transport et de l'industrie lourde. Notre ambition : offrir des solutions durables, performantes et intelligentes, conçues pour faire évoluer vos projets et relever vos défis techniques.") }}
                </p>
                <div class="about-feature"><i class="fas fa-lightbulb"></i>
                    {{ translate('Technologies de pointe intégrées') }}</div>
                <div class="about-feature"><i class="fas fa-leaf"></i>
                    {{ translate('Engagement pour des solutions durables') }}</div>
                <a href="/solution" class="mt-3 about-btn">{{ translate('Découvrir nos solutions &rarr;') }}</a>
            </div>
            <div class="mb-4 text-center col-md-6 mb-md-0">
                <img src="{{ asset('images/banner p2 EVO.jpg') }}" alt="Innovation EVO" class="about-img img-fluid">
            </div>
        </div> --}}

        <!-- Section Partenariat & Infos (inspiré du design fourni) -->

<div class="evo-partner-section">
    <div class="evo-partner-img-block">
        <img src="../images/EVO H9 WEB.webp" alt="Partenariat EVO">
        <div class="evo-partner-img-content">
            <h2>{{ translate("Nous travaillons avec les plus grands acteurs du transport et de la logistique") }}</h2>
            <a href="/about" class="evo-partner-btn">{{ translate('EN SAVOIR PLUS') }}</a>
        </div>
    </div>

    <div class="evo-partner-info-block">
        <div class="evo-partner-info-item">
            <div class="evo-partner-info-title">
                <i class="fas fa-truck"></i>
                {{ translate('EVO TRUCK – Spécialiste poids lourds') }}
                <span class="evo-partner-info-plus">+</span>
            </div>
            <div class="evo-partner-info-desc">
                {{ translate("Depuis 2000, EVO TRUCK fournit des camions, poids lourds et équipements de transport robustes, performants et adaptés aux besoins des secteurs du BTP, de la logistique et de l’industrie. Notre savoir-faire assure à nos clients des solutions durables, fiables et prêtes à relever tous les défis du terrain.") }}
            </div>
            <ul class="evo-partner-info-list">
                <li class="evo-partner-info-icon"><i class="fas fa-industry" ></i>
                    {{ translate('Plus de 20 ans d’expérience dans le transport industriel') }}</li>
                <li class="evo-partner-info-icon"><i class="fas fa-cogs" ></i>
                    {{ translate('Solutions adaptées à chaque métier et environnement') }}</li>
                <li class="evo-partner-info-icon"><i class="fas fa-users" ></i>
                    {{ translate('Accompagnement client sur-mesure') }}</li>
            </ul>
        </div>

        <div class="evo-partner-info-item">
            <div class="evo-partner-info-title">
                <i class="fas fa-lightbulb"></i>
                {{ translate("L’innovation au service de la performance") }}
                <span class="evo-partner-info-plus">+</span>
            </div>
            <div class="evo-partner-info-desc">
                {{ translate("Chez EVO TRUCK, l’innovation est au cœur de notre stratégie. Nous intégrons les dernières avancées technologiques dans nos camions et équipements afin d’améliorer la sécurité, la productivité et la durabilité des opérations de nos clients.") }}
            </div>
            <ul class="evo-partner-info-list">
                <li class="evo-partner-info-icon"><i class="fas fa-microchip" ></i> {{ translate('Technologies avancées intégrées aux véhicules') }}</li>
                <li class="evo-partner-info-icon"><i class="fas fa-leaf" ></i> {{ translate('Engagement pour un transport plus durable') }}</li>
            </ul>
        </div>
    </div>
</div>
<div class="container evo-sectors-section">
        <div class="evo-sectors-title">{{ translate('Secteurs d’application') }}</div>
        <div class="evo-sector-list">
            <div class="evo-sector-item">
                <div class="evo-sector-icon"><i class="fas fa-truck-moving"></i></div>
                <div class="evo-sector-name">{{ translate('Transport & Logistique') }}</div>
            </div>
            <div class="evo-sector-item">
                <div class="evo-sector-icon"><i class="fas fa-hard-hat"></i></div>
                <div class="evo-sector-name">{{ translate('BTP & Construction') }}</div>
            </div>
            <div class="evo-sector-item">
                <div class="evo-sector-icon"><i class="fas fa-industry"></i></div>
                <div class="evo-sector-name">{{ translate('Industrie lourde') }}</div>
            </div>
            <div class="evo-sector-item">
                <div class="evo-sector-icon"><i class="fas fa-recycle"></i></div>
                <div class="evo-sector-name">{{ translate('Environnement & Recyclage') }}</div>
            </div>
        </div>
    </div>
        <!-- Section About EVO-TRUCK -->

        <div class="my-5 text-center ab-div">
            <h2 data-aos="fade-up">{{ translate('Nos produits') }}
            </h2>
            <p data-aos="fade-up">
                {{ translate('EVO TRUCK est l\'un des principaux fabricants et fournisseurs d\'équipements d\'ingénierie de construction au Maroc.', app()->getLocale()) }}
            </p>
        </div>
        <!-- Code pour la partie produit -->
        <div class="container w-product">
            <div class="row justify-content-center mt-[50px]" data-aos="fade-up">
                @forelse ($categories as $categorie)
                    <div data-aos="fade-up" class="mb-4 col-12 col-md-4 col-lg-3 card-iteam">
                        <div class="product-card">
                            <img src="{{ asset('images/' . $categorie->img_cat) }}" class="product-img"
                                alt="evo Product Image">
                            <div class="product-body d-flex flex-column flex-grow-1">
                                <h4 class="product-title">
                                    {{ translate($categorie->nom_cat) }}
                                </h4>
                                <div class="mt-auto ">
                                    <a href="{{ url('product/' . $categorie->id) }}"
                                        class="product-btn ">{{ translate('VOIR PLUS') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
        <!-- Section Demande de Devis -->
        <!-- <div class="devis-section">
                    <div class="container-fluid">
                        <div class="row align-items-center devis-row">
                            <div class="col-md-6">
                                <h2 class="devis-title">DEMANDE RAPIDE<br>DE DEVIS</h2>
                            </div>
                            <div class="col-md-6">
                                <form class="devis-form" method="post" action="{{ route('order.inser') }}">
                                     @csrf
                                    <input type="text" class="devis-input" placeholder="Nom" required name="name">
                                    <input type="text" class="devis-input" placeholder="Société" required name="société">
                                    <input type="text" class="devis-input" placeholder="Le pays" required name="country">
                                    <input type="tel" class="devis-input" placeholder="Téléphone" required name="phone">
                                    <input type="email" class="devis-input" placeholder="E-Mail" required name="email">
                                    <textarea class="devis-input" rows="4" placeholder="Message" required name="message"></textarea>
                                    <button type="submit" class="devis-btn">Envoyer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>-->

        <!-- Section Contactez-nous / Demandez une offre (Appel à action spécifique camions) -->
        <style>

        </style>
        <div class="container evo-contact-section">
            <div class="evo-contact-title">{{ translate('Contactez-nous / Demandez une offre camion') }}</div>
            <div class="evo-contact-desc">
                {{ translate("Notre équipe commerciale et technique est à votre écoute pour toute demande d’information ou d’offre sur nos camions et solutions de transport.") }}
            </div>
            <div class="evo-contact-infos">
                <div class="evo-contact-info">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Adresse: Industrial Zone 1, No.26 Tuolanshan Road, Economic And Technological Development Zone, Xuzhou, Jiangsu, 221004, China</span>
                </div>
                <div class="evo-contact-info">
                    <i class="fas fa-phone-alt"></i>
                    <span>+86 189 1781 5301</span>
                </div>
                <div class="evo-contact-info">
                    <i class="fas fa-envelope"></i>
                    <span>contact@evo-truck.com</span>
                </div>
            </div>
        </div>
<script>
    document.querySelectorAll('.evo-partner-info-title').forEach(title => {
    title.addEventListener('click', () => {
        title.parentElement.classList.toggle('active');
    });
});
</script>

@endsection
