@extends('layout.navbar')
@section('content')
    <style>
/* PARTIE DE ABOUT DE PAGE HOME */


.about {
    
    padding-top: 10vh;
    height: 85vh;
    position: relative;
    background-image: url("https://evo-machinery.com/images/bg111.jpg");
    background-size: cover;
    background-position: center;
    overflow: hidden; /* Prevents the image from overflowing */
}

.about::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.7); /* Semi-transparent overlay */
    z-index: 1; /* Places the overlay above the background image */
}

.ab-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);

    font-family: 'Arial', sans-serif;
    text-align: center;
    z-index: 2; /* Places the content above the overlay */
}

.ab-content h1 {
    font-size: 40px;
    font-weight: bold;
    color: #2042be;
    margin-bottom: 20px;
}

.ab-content p {
    color: white;
    font-size: 20px;
    line-height: 1.8;
    letter-spacing:.5px;
    font-weight: normal;
}
@media (max-width: 768px) {


    .ab-content p {
        font-size: 14px;
        text-align: left;
    }
}
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
                <img class="d-block" style=" height: auto !important;  width: 100%;" src="{{ asset('images\EXCAVATORS 1.png') }}" alt="Slide 1">
            </div>

           <div class="carousel-item ">
                <img class="d-block" style=" height: auto !important;  width: 100%;" src="{{ asset('images\LOADERS 1.png') }}" alt="Slide 1">
            </div>
            <div class="carousel-item ">
                <img class="d-block" style=" height: auto !important;  width: 100%;" src="{{ asset('images\PECIAL VEUICLE.png') }}" alt="Slide 1">
            </div>
            <div class="carousel-item ">
                <img class="d-block" style=" height: auto !important;  width: 100%;" src="{{ asset('images\Aerial Work 4.png') }}" alt="Slide 1">
            </div>
             <div class="carousel-item ">
                <img class="d-block" style=" height: auto !important;  width: 100%;" src="{{ asset('images\Forklift 3+.png') }}" alt="Slide 1">
            </div>
             <div class="carousel-item ">
                <img class="d-block" style=" height: auto !important;  width: 100%;" src="{{ asset('images\PORT MACHINERY logo.png') }}" alt="Slide 1">
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
     <h1 data-aos="fade-up" class="text-center about-title" style="padding-bottom: 40px">{{ GoogleTranslate::trans('À propos', \App::getLocale()) }}</h1>
    <p data-aos="fade-up">
        {{ GoogleTranslate::trans('evo machinery', \App::getLocale()) }}
    </p>
   </div>
</div>
<!-- afficher le texte -->
<div class="my-5 text-center">
    <h2  data-aos="fade-up"  style="font-size: 40px; font-weight: bold; color:#2042be;" >{{ GoogleTranslate::trans('Nos produits', \App::getLocale()) }}</h2>
    <h3  data-aos="fade-up"  style="font-size: 16px; color: black; line-height: 1.6;">
      {{ GoogleTranslate::trans('EVO MACHINERY est l\'un des principaux fabricants et fournisseurs d\'équipements d\'ingénierie de construction au Maroc.', app()->getLocale()) }}

    </h3>
</div>
    <!-- Code pour la partie produit -->
    <div class="container">
      <div class="row justify-content-center" style="margin-top: 50px" data-aos="fade-up">
        @forelse ($categories as $categorie)
              <div data-aos="fade-up" class="mb-4 col-5-custom" >
                <div class="border-0 shadow-sm card h-100" style="border-radius: 15px;" >
                    <a href="{{ url('product/' . $categorie->id) }}" class="text-decoration-none">
                        <img src="{{ asset('images/' . $categorie->img_cat) }}" class="card-img-top" alt="Product Image"
                            style="border-radius: 15px 15px 0 0; height: 200px; object-fit: cover;">
                        <div class="text-center card-body" >
                            <h5 class="card-title" style="font-size: 18px; font-weight: bold; color: #2042be;">
                                {{ GoogleTranslate::trans($categorie->nom_cat, \App::getLocale()) }}
                            </h5>
                        </div>
                    </a>
                </div>
            </div>
        @empty
           
        @endforelse
    </div>
@endsection
