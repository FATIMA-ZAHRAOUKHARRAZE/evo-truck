@extends('layout.navbar')
@section('content')
    <div style="position: relative; width: 100vw;">
        <img style="width: 100%;opacity:.9;"
            src="https://www.xcmg.com/en-ap/upload/images/2020/08/04/a35d6d08748249069143a07c1bfb604f.jpg" alt="">
        <div
            style="font-weight:bold;position: absolute; top: 20%; left: 20%; color: #ffffffc6; font-size: 24px; padding: 10px;">
            <span style="font-size:50px;"> Produits</span>
            <div style="font-weight:200;top:20px">
                </p>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <h2 class="text-center" style="font-size: 28px; margin-top: 20px; font-weight: bold; color: #333;">PRODUCTS</h2>

        <!-- Barre de recherche -->
        <div class="search-bar col-12 text-center mt-4 mb-4">
            <form action="{{ route('category.search') }}" method="GET" class="d-inline-flex">
                <input type="text" class="form-control form-control-lg search-input" name="query"
                    placeholder="Veuillez entrer le modèle de produit..." aria-label="Search"
                    style="border-radius: 25px 0 0 25px; border: 2px solid #ccc; padding: 10px;">
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
                        {{ $categorie->nom_cat }}
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
                            <img src="https://www.xcmg.com/en-ap/upload/images/2020/09/07/7e89a3028a4a4e09bcb064c8dd0eeb4e.jpg" class="card-img-top" alt="Product Image"
                                style="border-radius: 15px 15px 0 0; height: 300px; object-fit: cover;">
                            <div class="card-body text-center">
                                <h5 class="card-title" style="font-size: 18px; font-weight: bold; color: #333;">
                                    {{ $categorie->nom_cat }}
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
