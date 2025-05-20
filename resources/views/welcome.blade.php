@extends('layout.navbar')

@section('content')
<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    <!-- Code pour le banner image -->
    <div id="carousel" class="carousel slide carousel-custom" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block" style=" height: auto !important;  width: 100%;"
                    src="{{ asset('images\EXCAVATORS 2.png') }}" alt="Slide 1">
            </div>

            <div class="carousel-item ">
                <img class="d-block" style=" height: auto !important;  width: 100%;"
                    src="{{ asset('images\LOADERS 1.png') }}" alt="Slide 1">
            </div>
            <div class="carousel-item ">
                <img class="d-block" style=" height: auto !important;  width: 100%;"
                    src="{{ asset('images\PECIAL VEUICLE.png') }}" alt="Slide 1">
            </div>
            <div class="carousel-item ">
                <img class="d-block" style=" height: auto !important;  width: 100%;"
                    src="{{ asset('images\Aerial Work 2.png') }}" alt="Slide 1">
            </div>

            <div class="carousel-item ">
                <img class="d-block" style=" height: auto !important;  width: 100%;"
                    src="{{ asset('images\PORT MACHINERY 2.png') }}" alt="Slide 1">
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
            <h1 data-aos="fade-up" class="text-center about-title" style="padding-bottom: 40px">{{ translate('À propos') }}
            </h1>
            <p data-aos="fade-up">
                {{ translate("Fondée en 2000, EVO est une société multinationale avec la gamme la plus complète de produits concurrentiels et influents dans l'industrie des machines de construction. Notre activité couvre huit domaines clés: machines de construction, camions lourds, machines d'exploitation minière,machines de levage,machines de terrassement,machines d'assainissement, composants de machine, construction, finances, et l'industrie des TIC.") }}
            </p>
        </div>
    </div>
    <!-- afficher le texte -->
    <div class="my-5 text-center">
        <h2 data-aos="fade-up" style="font-size: 40px; font-weight: bold; color:#2042be;">{{ translate('Nos produits') }}
        </h2>
        <h3 data-aos="fade-up" style="font-size: 16px; color: black; line-height: 1.6;">
            {{ translate('EVO MACHINERY est l\'un des principaux fabricants et fournisseurs d\'équipements d\'ingénierie de construction au Maroc.', app()->getLocale()) }}

        </h3>
    </div>
    <!-- Code pour la partie produit -->
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 50px" data-aos="fade-up">
            @forelse ($categories as $categorie)
                <div data-aos="fade-up" class="mb-4 col-5-custom">
                    <div class="border-0 shadow-sm card h-100" style="border-radius: 15px;">
                        <a href="{{ url('product/' . $categorie->id) }}" class="text-decoration-none">
                            <img src="{{ asset('images/' . $categorie->img_cat) }}" class="card-img-top"
                                alt="Product Image" style="border-radius: 15px 15px 0 0; height: 200px; object-fit: cover;">
                            <div class="text-center card-body">
                                <h5 class="card-title" style="font-size: 18px; font-weight: bold; color: #2042be;">
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
