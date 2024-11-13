@extends('layout.navbar')
@section('url')
    <link rel="stylesheet" href="{{ asset('css/solution.css') }}">
@endsection
@section('content')
    <!-- Page Image -->
    <div style="position: relative; width: 100%;">
        <img style="width: 100%; max-height: 400px; object-fit: cover; opacity: .4;" src="{{ asset('images/Original.png') }}"
            loading="lazy" alt="">
        <div
            style="font-weight: bold; position: absolute; top: 20%; left:30%;  color: #2042be; font-size: 24px; padding: 10px;">
            <span style="font-size: 50px;">{{ GoogleTranslate::trans('EQUIPEMENT
            BLINDES', \App::getLocale()) }}</span>
        </div>
    </div>

    <!-- la partie etapes design -->
    <section class="design-steps">
        <h1>{{ GoogleTranslate::trans('Les étapes de nos Design.', \App::getLocale()) }}</h1>
        <div class="steps-container">
            <div class="step">
                <i class="fas fa-drafting-compass icon"></i>
                <h2>{{ GoogleTranslate::trans('DESIGN', \App::getLocale()) }}</h2>
                <p>{{ GoogleTranslate::trans('L’art de la beauté au service de l’industrie', \App::getLocale()) }}</p>
            </div>
            <div class="step">
                <i class="fas fa-search icon"></i>
                <h2>{{ GoogleTranslate::trans('RECHERCHE & DÉVELOPPEMENT', \App::getLocale()) }}</h2>
                <p>{{ GoogleTranslate::trans('Les meilleurs spécialistes à votre écoute', \App::getLocale()) }}</p>
            </div>
            <div class="step">
                <i class="fas fa-industry icon"></i>
                <h2>{{ GoogleTranslate::trans('FABRICATION', \App::getLocale()) }}</h2>
                <p>{{ GoogleTranslate::trans('Les meilleurs ingénieurs de production', \App::getLocale()) }}</p>
            </div>
            <div class="step">
                <i class="fas fa-cube icon"></i>
                <h2>{{ GoogleTranslate::trans('PROTOTYPAGE', \App::getLocale()) }}</h2>
                <p>{{ GoogleTranslate::trans('L’innovation à portée de main', \App::getLocale()) }}</p>
            </div>
            <div class="step">
                <i class="fas fa-vial icon"></i>
                <h2>{{ GoogleTranslate::trans('TEST ET ESSAI', \App::getLocale()) }}</h2>
                <p>{{ GoogleTranslate::trans('Maîtrise des risques au maximum', \App::getLocale()) }}</p>
            </div>
            <div class="step">
                <i class="fas fa-couch icon"></i>
                <h2>{{ GoogleTranslate::trans('CONFORT', \App::getLocale()) }}</h2>
                <p>{{ GoogleTranslate::trans('La robustesse du blindage et le confort d’une', \App::getLocale()) }}</p>
            </div>
        </div>
    </section>



    {{-- //////////// --}}
  <section>
    <div class="section">
        <div class="contain">
            <div class="content-section">
                <div class="title">
                    <h1>{{ GoogleTranslate::trans(' Équipements blindé', \App::getLocale()) }}</h1>
                </div>
                <div class="content">
                    <p>
                    {{ GoogleTranslate::trans('Depuis plus de 25 ans, vehiculeblinde.com est un pionnier de l’industrie en matière de fabrication de véhicules blindés, de systèmes de verre et de châssis balistiques ainsi que diverses fournitures de blindage.

En plus d’une vaste gamme de véhicules blindés, dont une sélection croissante de véhicules blindés civils, de véhicules blindés de transport de troupes et de MRAP, vehiculeblinde.com se spécialise également dans un assortiment d’autres produits à usage spécial tels que les boucliers balistiques mobiles, les cabines de garde et de sentinelle, les systèmes d’entrée tactiques et bien d’autres.

Par ailleurs, l’entreprise réalise également des systèmes d’entrée tactique qui sont spécialement conçus pour répondre aux exigences des forces spéciales, des premiers intervenants et de diverses autres unités tactiques au sein de l’armée.

Des installations de production à la pointe de la technologie permettent à des équipes d’ingénieurs et de techniciens hautement qualifiés de transformer n’importe quelle plate-forme de véhicule en un véhicule de protection entièrement repensé.', \App::getLocale()) }}
                    </p>
                    {{-- <div class="button mb-5">
                        <a href="">{{ GoogleTranslate::trans('Nos services', \App::getLocale()) }}</a>
                    </div> --}}
                </div>
            </div>
            <div class="image-section">
                <img src="{{ asset('/images/EXCAVATORS/EI15X.jpg') }}" alt="Équipement blindé">
            </div>
        </div>
    </div>
</section>

@endsection
