@extends('layout.navbar')
@section('seo')
 <meta name="description" content="EVO est une société multinationale avec la gamme la plus complète de produits concurrentiels et influents dans l'industrie des machines de construction.">
    <meta name="keywords" content="Evo, machinery, Bulldozer, Chargeuses, Niveleuses, Excavatrices, Grues mobiles, Grues à tour, Engins routiers, Machines à béton, Machines portuaires, Véhicules spéciaux, Machines d'assainissement, Machines pour les tunnels, Machines de battage de pieux, Équipement de travail aérien, Station de concassage et criblage, Matériel de lutte contre l'incendie, Machines d'exploration des ressources, Machines non destinées à l'excavation">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="French">
    <!-- Balise canonical -->
    <link rel="canonical" href="https://evo-machinery.com/">
@endsection
@section('content')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <!-- Code pour le banner image -->
    <div id="carousel" class="carousel slide carousel-custom" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block" src="{{ asset('images\EXCAVATORS 2.png') }}" alt="Slide 1">
            </div>
            <div class="carousel-item ">
                <img class="d-block" src="{{ asset('images\LOADERS 1.png') }}" alt="Slide 1">
            </div>
            <div class="carousel-item ">
                <img class="d-block" src="{{ asset('images\PECIAL VEUICLE.png') }}" alt="Slide 1">
            </div>
            <div class="carousel-item ">
                <img class="d-block" src="{{ asset('images\Aerial Work 2.png') }}" alt="Slide 1">
            </div>

            <div class="carousel-item ">
                <img class="d-block" src="{{ asset('images\PORT MACHINERY 2.png') }}" alt="Slide 1">
            </div>
        </div>
        <a class="carousel-control-prev custom-control" href="#carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next custom-control" href="#carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>
    <!-- partie about -->
    <div class="about" id="">
        <div class="ab-content">
            <h1 data-aos="fade-up" class="text-center about-title">{{ translate('À propos') }}
            </h1>
            <p data-aos="fade-up">
                {{ translate("Fondée en 2000, EVO est une société multinationale avec la gamme la plus complète de produits concurrentiels et influents dans l'industrie des machines de construction. Notre activité couvre huit domaines clés: machines de construction, camions lourds, machines d'exploitation minière,machines de levage,machines de terrassement,machines d'assainissement, composants de machine, construction, finances, et l'industrie des TIC.") }}
            </p>
        </div>
    </div>
    <!-- afficher le texte -->
    <div class="my-5 text-center ab-div">
        <h1 data-aos="fade-up">{{ translate('Nos produits') }}
        </h1>
        <h3 data-aos="fade-up">
            {{ translate('EVO MACHINERY est l\'un des principaux fabricants et fournisseurs d\'équipements d\'ingénierie de construction au Maroc.', app()->getLocale()) }}
        </h3>
    </div>
    <!-- Code pour la partie produit -->
    <div class="container w-product">
        <div class="row justify-content-center mt-[50px]" data-aos="fade-up">
            @forelse ($categories as $categorie)
                <div data-aos="fade-up" class="mb-4 col-5-custom div1">
                    <div class="border-0 shadow-sm card h-100 div2">
                        <a href="{{ url('product/' . $categorie->id) }}" class="text-decoration-none">
                            <img src="{{ asset('images/' . $categorie->img_cat) }}" class="card-img-top"
                                alt="Product Image">
                            <div class="text-center card-body lastdiv">
                                <h5 class="card-title">
                                    {{ translate($categorie->nom_cat) }}
                                </h5>
                            </div>
                        </a>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    @endsection
