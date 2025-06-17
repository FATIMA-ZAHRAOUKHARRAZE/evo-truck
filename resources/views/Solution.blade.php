@extends('layout.navbar')
@section('url')
    <link rel="stylesheet" href="{{ asset('css/solution.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection
@section('seo')
    <title>EVO MACHINERY - Solutions et Processus de Fabrication</title>
    <meta name="description"
        content="Découvrez le processus de fabrication EVO Machinery : design, R&D, fabrication, prototypage, tests et confort. Spécialiste en équipements blindés et véhicules de protection depuis plus de 25 ans.">
    <meta name="keywords"
        content="EVO Machinery solutions, processus de fabrication, design industriel, recherche et développement, prototypage, tests industriels, équipements blindés, véhicules blindés, systèmes balistiques, blindage, véhicules de protection, MRAP, forces spéciales, ingénierie de production, innovation industrielle,maroc">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="EVO MACHINERY">
    <link rel="canonical" href="https://evo-machinery.com/solution">
    <meta property="og:title" content="EVO MACHINERY - Solutions et Processus de Fabrication">
    <meta property="og:description"
        content="Découvrez notre expertise en fabrication d'équipements blindés et notre processus de production innovant">
    <meta property="og:type" content="website">
@endsection
@section('content')
    <!-- Page Image -->
    <div class="solution_container">
        <img src="{{ asset('images/Original.png') }}" alt="evo image">
        <div class="image-desktop-only">
            <h1>{{ translate('SOLUTION ') }}</h1>
        </div>
    </div>
    <!-- la partie etapes design -->
    <section class="design-steps">
        <h2 class="h2">{{ translate('Les étapes de nos design') }}</h2>
        <div class="steps-container">
            <div class="step" data-aos="fade-up">
                <i class="fas fa-drafting-compass icon"></i>
                <h4>{{ translate('DESIGN') }}</h4>
                <p>{{ translate('L’art de la beauté au service de l’industrie') }}</p>
            </div>
            <div class="step" data-aos="fade-up">
                <i class="fas fa-search icon"></i>
                <h4>{{ translate('RECHERCHE & DÉVELOPPEMENT') }}</h4>
                <p>{{ translate('Les meilleurs spécialistes à votre écoute') }}</p>
            </div>
            <div class="step" data-aos="fade-up">
                <i class="fas fa-industry icon"></i>
                <h4>{{ translate('FABRICATION') }}</h4>
                <p>{{ translate('Les meilleurs ingénieurs de production') }}</p>
            </div>
            <div class="step" data-aos="fade-up">
                <i class="fas fa-cube icon"></i>
                <h4>{{ translate('PROTOTYPAGE') }}</h4>
                <p>{{ translate('L’innovation à portée de main') }}</p>
            </div>
            <div class="step" data-aos="fade-up">
                <i class="fas fa-vial icon"></i>
                <h4>{{ translate('TEST ET ESSAI') }}</h4>
                <p>{{ translate('Maîtrise des risques au maximum') }}</p>
            </div>
            <div class="step" data-aos="fade-up">
                <i class="fas fa-couch icon"></i>
                <h4>{{ translate('CONFORT') }}</h4>
                <p>{{ translate('La robustesse du blindage et le confort d’une') }}</p>
            </div>
        </div>
    </section>
    <section>
        <div class="section">
            <div class="contain">
                <div class="content-section ">
                    <div class="title"data-aos="fade-up">
                        <h2>{{ translate(' Équipements blindé') }}</h2>
                    </div>
                    <div class="contentS two-column" data-aos="fade-up">
                        <p>
                            {{ translate('Depuis plus de 25 ans, Evo machinery est un pionnier de l’industrie en matière de fabrication de véhicules blindés, de systèmes de verre et de châssis balistiques ainsi que diverses fournitures de blindage.

                            En plus d’une vaste gamme de véhicules blindés, dont une sélection croissante de véhicules blindés civils, de véhicules blindés de transport de troupes et de MRAP, vehiculeblinde.com se spécialise également dans un assortiment d’autres produits à usage spécial tels que les boucliers balistiques mobiles, les cabines de garde et de sentinelle, les systèmes d’entrée tactiques et bien d’autres.

                            Par ailleurs, l’entreprise réalise également des systèmes d’entrée tactique qui sont spécialement conçus pour répondre aux exigences des forces spéciales, des premiers intervenants et de diverses autres unités tactiques au sein de l’armée.

                            Des installations de production à la pointe de la technologie permettent à des équipes d’ingénieurs et de techniciens hautement qualifiés de transformer n’importe quelle plate-forme de véhicule en un véhicule de protection entièrement repensé.') }}
                        </p>
                    </div>

                </div>
                    <div class="image-section">
                        <img src="{{ asset('/images/EXCAVATORS/EI15X.jpg') }}" alt="evo Équipement blindé">
                    </div>
            </div>
        </div>
    </section>
@endsection
