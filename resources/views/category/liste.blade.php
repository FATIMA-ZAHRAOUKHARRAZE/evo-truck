@extends('layout.navbar')
@section('content')
    <div style="position: relative; width: 100vw;">
        <img style="width: 100%;opacity:.9;" src="{{ asset('images/Original.png') }}"loading="lazy"
            alt="">
        <div
            style="font-weight:bold;position: absolute; top: 20%; left: 20%; color: #ffffffc6; font-size: 24px; padding: 10px;">
            <span style="font-size:50px;">{{ GoogleTranslate::trans('Produits', \App::getLocale()) }}</span>
            <div style="font-weight:200;top:20px">
                </p>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <h2 class="text-center" style="font-size: 28px; margin-top: 20px; font-weight: bold; color: #333;">
            {{ GoogleTranslate::trans('PRODUCTS', \App::getLocale()) }}</h2>

        <!-- Barre de recherche -->
        <div class="search-bar col-12 text-center mt-4 mb-4">
            <form action="{{ route('category.search') }}" method="GET" class="d-inline-flex">
                <input type="text" class="form-control form-control-lg search-input" name="query"
                    placeholder="Entrer le modèle de produit..." aria-label="Search"
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
                        {{ GoogleTranslate::trans($categorie->nom_cat, \App::getLocale()) }}
                    </a>
                </li>
            @empty
            @endforelse
        </ul>
        <!-- Grille de produits -->
        <div class="row justify-content-center">
            @forelse ($categories as $categorie)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <div class="card h-100 shadow-sm border-0" style="border-radius: 15px;">
                        <a href="{{ url('product/' . $categorie->id) }}" class="text-decoration-none">
                            <img src="{{ asset('images/AERIAL WORKING EQUIPMENT/EF0607CV.jpg') }}" loading="lazy"
                                class="card-img-top" alt="Product Image"
                                style="border-radius: 15px 15px 0 0; height: 300px; object-fit: cover;">
                            <div class="card-body text-center">
                                <h5 class="card-title" style="font-size: 18px; font-weight: bold; color: #333;">
                                    {{ GoogleTranslate::trans($categorie->nom_cat, \App::getLocale()) }}
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
