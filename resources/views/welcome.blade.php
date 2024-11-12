@extends('layout.navbar')
@section('content')
    <style>
        .row {
            margin-right: 0 !important;
        }

    /* CSS personnalisé pour définir 5 colonnes sur les écrans larges */
    .col-5-custom {
        width: 20%; /* chaque colonne prend 20% pour faire 5 colonnes */
    }

    @media (max-width: 1200px) {
        .col-5-custom {
            width: 25%; /* 4 colonnes sur écran de taille moyenne */
        }
    }

    @media (max-width: 992px) {
        .col-5-custom {
            width: 33.33%; /* 3 colonnes sur écran de taille moyenne */
        }
    }

    @media (max-width: 768px) {
        .col-5-custom {
            width: 50%; /* 2 colonnes sur les petits écrans */
        }
    }

    @media (max-width: 576px) {
        .col-5-custom {
            width: 100%; /* 1 colonne sur les écrans très petits */
        }
    }

    </style>
    <!-- le code pour banner image --->
    <div id="carousel" class="carousel slide carousel-custom" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img class="d-block " style="margin-top:1rem;height:60vh !important;margin-left: 8vw; width:80%" src="https://hk-etg.com/wp-content/uploads/2023/10/bigger.jpg" alt="Second slide">
            </div>


            <div class="carousel-item ">
                <img class="d-block " style="margin-top:1rem;height:60vh !important;margin-left: 8vw; width:80%" src="https://hk-etg.com/wp-content/uploads/2023/10/bigger.jpg" alt="Second slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="color:blue"></span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true" style="color=blue"></span>
        </a>
    </div>

    <!--code pour la partie product--->

    <div class="row justify-content-center" style="margin-top: 50px">
        @forelse ($categories as $categorie)
            <div class="col-5-custom mb-4">
            <div class="card h-100 shadow-sm border-0" style="border-radius: 15px;">
                <a href="{{ url('product/' . $categorie->id) }}" class="text-decoration-none">
                    <img src="{{ asset('images/' . $categorie->img_cat) }}"  class="card-img-top" alt="Product Image"
                         style="border-radius: 15px 15px 0 0; height: 250px; object-fit: cover;">
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
    @endsection
