@extends('layout.navbar')
@section('url')
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('css/catliste.css') }}">
@endsection
@section('seo')
    <<<<<<< HEAD <title>EVO MACHINERY - Liste Categories</title>
        <meta name="description"
            content="EVO est une société multinationale avec la gamme la plus complète de produits concurrentiels et influents dans l'industrie des machines de construction.">
        <meta name="keywords"
            content="Evo, machinery, Bulldozer, Chargeuses, Niveleuses, Excavatrices, Grues mobiles, Grues à tour, Engins routiers, Machines à béton, Machines portuaires, Véhicules spéciaux, Machines d'assainissement, Machines pour les tunnels, Machines de battage de pieux, Équipement de travail aérien, Station de concassage et criblage, Matériel de lutte contre l'incendie, Machines d'exploration des ressources, Machines non destinées à l'excavation">
        =======
        <title>EVO MACHINERY - Catalogue des Catégories d'Équipements</title>
        <meta name="description"
            content="Explorez le catalogue complet d'EVO Machinery : Bulldozers, Chargeuses, Niveleuses, Excavatrices, Grues et plus. Découvrez notre gamme complète d'équipements de construction et demandez un devis personnalisé.">
        <meta name="keywords"
            content="catalogue EVO Machinery, équipements de construction, machines industrielles, Bulldozer, Chargeuses, Niveleuses, Excavatrices, Grues mobiles, Grues à tour, Engins routiers, Machines à béton, Machines portuaires, Véhicules spéciaux, Machines d'assainissement, Machines pour les tunnels, Machines de battage de pieux, Équipement de travail aérien, Station de concassage et criblage, Matériel de lutte contre l'incendie">
        >>>>>>> 3c3a5f8e6e63dd66998fade1759ee1c3b3892ced
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="author" content="EVO MACHINERY">
        <link rel="canonical" href="https://evo-machinery.com/category">
        <meta property="og:title" content="EVO MACHINERY - Catalogue des Équipements de Construction">
        <meta property="og:description"
            content="Découvrez notre gamme complète d'équipements de construction : Bulldozers, Chargeuses, Excavatrices et plus. Solutions professionnelles pour tous vos projets.">
        <meta property="og:type" content="website">
        <meta property="og:image" content="{{ asset('images/Original.png') }}">
        <meta property="og:url" content="https://evo-machinery.com/category">
        <meta name="category-page" content="true">
    @endsection
    @section('content')
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
        <div style="position: relative; width: 100%;" class="sss">
            <img style="width: 100%; max-height: 400px; object-fit: cover; opacity: .4;" <<<<<<< HEAD
                src="{{ asset('images/Original.png') }}" loading="lazy" alt="evo ">
            =======
            src="{{ asset('images/Original.png') }}" loading="lazy" alt="">
            >>>>>>> 3c3a5f8e6e63dd66998fade1759ee1c3b3892ced
            <div
                style="font-weight: bold; position: absolute; top: 20%; left:40%;  color: #2042be; font-size: 24px; padding: 10px;"class="photo">
                <h1 style="font-size: 50px;">{{ translate('PRODUITS') }}</h1>
            </div>
        </div>
        <div class="container mb-5">
            <!-- Barre de recherche -->
            <div class="search-bar col-12 text-center mt-4 mb-4">
                <form action="{{ route('category.search') }}" method="GET" class="d-inline-flex">
                    <input type="text" class="form-control form-control-lg search-input" name="query"
                        placeholder= "{{ translate('Entrer le modèle de produit...') }}" aria-label="Search"
                        style="border-radius: 25px 0 0 25px; border: 1px solid #ccc; padding: 10px;">
                    <button type="submit" class="btn btn-primary btn-lg"
                        style="border-radius: 0 25px 25px 0; padding: 10px 20px;">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
            <ul class="category-list">
                @forelse ($categories as $categorie)
                    <li class="category-item">
                        <a href="{{ url('product/' . $categorie->id) }}" class="text-decoration-none">
                            {{ translate($categorie->nom_cat) }}
                        </a>
                    </li>
                @empty
                @endforelse
            </ul>
            <!-- Grille de produits -->
            <div class="row justify-content-center">
                @forelse ($categories as $categorie)
                    <div class="col-5-custom mb-4">
                        <div class="card h-100 shadow-sm border-0">
                            <a href="{{ url('product/' . $categorie->id) }}" class="text-decoration-none">
                                <img src="{{ asset('images/' . $categorie->img_cat) }}" class="card-img-top" <<<<<<< HEAD
                                    alt="evo Product Image">
                                =======
                                alt="Product Image">
                                >>>>>>> 3c3a5f8e6e63dd66998fade1759ee1c3b3892ced
                                <div class="card-body text-center">
                                    <h5 class="card-titlee">
                                        {{ translate($categorie->nom_cat) }}
                                    </h5>
                                </div>
                            </a>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    @endsection
