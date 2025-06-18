@extends('layout.navbar')
@section('url')
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('css/catliste.css') }}">
@endsection
@section('seo')
    <title>EVO MACHINERY - Catalogue des Catégories d'Équipements</title>
    <meta name="description"
        content="Explorez le catalogue complet d'EVO Machinery : équipements de construction, machines industrielles, Bulldozer, Chargeuses, Niveleuses, Excavatrices, Grues mobiles, Grues à tour, Engins routiers, Machines à béton, Machines portuaires, Véhicules spéciaux, Machines d'assainissement, Machines pour les tunnels, Machines de battage de pieux, Équipement de travail aérien, Station de concassage et criblage, Matériel de lutte contre l'incendie,maroc, Découvrez notre gamme complète d'équipements de construction et demandez un devis personnalisé.">
    <meta name="keywords"
        content="catalogue EVO Machinery, équipements de construction, machines industrielles, Bulldozer, Chargeuses, Niveleuses, Excavatrices, Grues mobiles, Grues à tour, Engins routiers, Machines à béton, Machines portuaires, Véhicules spéciaux, Machines d'assainissement, Machines pour les tunnels, Machines de battage de pieux, Équipement de travail aérien, Station de concassage et criblage, Matériel de lutte contre l'incendie,maroc">
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
        <img style="width: 100%; max-height: 400px; object-fit: cover; opacity: .4;"
            src="{{ asset('images/Original.png') }}" loading="lazy" alt="evo logo">
        <div
            style="font-weight: bold; position: absolute; top: 20%; left:40%;  color: #0033cc; font-size: 24px; padding: 10px;"class="photo">
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
                <button type="submit" class="btn btn-lg"
                    style="border-radius: 0 25px 25px 0; padding: 10px 20px; backround:#0033cc;">
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
<div class="container w-product">
        <div class="row justify-content-center mt-[50px]" data-aos="fade-up">
            @forelse ($categories as $categorie)
                <div data-aos="fade-up" class="mb-4 col-6 col-sm-6 col-md-4 col-lg-3 card-iteam">
                    <div class="product-card">
                        <img src="{{ asset('images/' . $categorie->img_cat) }}" class="product-img"
                            alt="evo Product Image">
                        <div class="product-body d-flex flex-column flex-grow-1">
                            <h4 class="product-title">
                                {{ translate($categorie->nom_cat) }}
                            </h4>
                            <div class="mt-auto ">
                                <a href="{{ url('product/' . $categorie->id) }}" class="product-btn ">{{ translate("VOIR PLUS") }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
    </div>
@endsection
