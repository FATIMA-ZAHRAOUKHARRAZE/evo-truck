@extends('layout.navbar')
@section('content')
    <style>
        .row {
            margin-right: 0 !important;
        }


        .col-5-custom {
            width: 20%;
        }

        .custom-control .carousel-control-prev-icon,
        .custom-control .carousel-control-next-icon {
            background-color: #00008b22;

        }

        @media (max-width: 1200px) {
            .col-5-custom {
                width: 25%;
            }
        }

        @media (max-width: 992px) {
            .col-5-custom {
                width: 33.33%;
            }
        }



        @media (max-width: 576px) {
            .col-5-custom
            {
                width: 100%;
            }
        }
            .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease !important;
    }

    .card:hover {
        transform: scale(1.05) !important; /* Slightly scale up the card */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15 !important); /* Add a subtle shadow */
        opacity: 0.8 !important;
    }
</style>

    <!-- Code pour le banner image -->
    <div id="carousel" class="carousel slide carousel-custom" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
                <img class="d-block" style="margin-bottom: 2rem; height: auto !important;  width: 100%;" src="{{ asset('images\EXCAVATORS 1.png') }}" alt="Slide 1">
            </div>

           <div class="carousel-item ">
                <img class="d-block" style="margin-bottom: 2rem; height: auto !important;  width: 100%;" src="{{ asset('images\LOADERS 1.png') }}" alt="Slide 1">
            </div>
            <div class="carousel-item ">
                <img class="d-block" style="margin-bottom: 2rem; height: auto !important;  width: 100%;" src="{{ asset('images\PECIAL VEUICLE.png') }}" alt="Slide 1">
            </div>
            <div class="carousel-item ">
                <img class="d-block" style="margin-bottom: 2rem; height: auto !important;  width: 100%;" src="{{ asset('images\Aerial Work 4.png') }}" alt="Slide 1">
            </div>
    </div>

        <a class="carousel-control-prev custom-control" href="#carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next custom-control" href="#carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>


    <!-- Code pour la partie produit -->
    <div class="row justify-content-center" style="margin-top: 50px" data-aos="fade-left">
        @forelse ($categories->take(21) as $categorie)
            <div class="mb-4 col-5-custom" > 
                <div class="border-0 shadow-sm card h-100" style="border-radius: 15px;" >
                    <a href="{{ url('product/' . $categorie->id) }}" class="text-decoration-none">
                        <img src="{{ asset('images/' . $categorie->img_cat) }}" class="card-img-top" alt="Product Image"
                             style="border-radius: 15px 15px 0 0; height: 250px; object-fit: cover;">
                        <div class="text-center card-body" >
                            <h5 class="card-title" style="font-size: 18px; font-weight: bold; color: #333;">
                                {{ GoogleTranslate::trans($categorie->nom_cat, \App::getLocale()) }}
                            </h5>
                        </div>
                    </a>
                </div>
            </div>
        @empty
            <p>Aucun produit disponible.</p>
        @endforelse
    </div>
@endsection
