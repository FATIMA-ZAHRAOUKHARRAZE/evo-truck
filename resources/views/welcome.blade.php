@extends('layout.navbar')
@section('content')
    <style>
        .about {
            padding-top: 10vh;
            /* Ajoute un espacement en haut pour placer le contenu correctement. */
            height: 85vh;
            /* Définit la hauteur de la section à 85% de la hauteur de la fenêtre. */
            position: relative;
            /* Position relative pour permettre de positionner les éléments enfants absolument. */
            background-image: url("https://evo-machinery.com/images/bg111.jpg");
            /* Définit une image d'arrière-plan pour la section. */
            background-size: cover;
            /* Fait en sorte que l'image couvre entièrement la section, sans distorsion. */
            background-position: center;
            /* Centre l'image d'arrière-plan. */
            overflow: hidden;
            /* Empêche le débordement éventuel de l'image. */
        }

        .about::before {
            content: '';
            /* Ajoute un pseudo-élément avant le contenu principal. */
            position: absolute;
            /* Positionne le pseudo-élément par rapport à .about. */
            top: 0;
            /* Définit la position en haut de la section. */
            left: 0;
            /* Définit la position à gauche de la section. */
            right: 0;
            /* Définit la position à droite de la section. */
            bottom: 0;
            /* Définit la position en bas de la section. */
            background: rgba(0, 0, 0, 0.7);
            /* Ajoute un fond semi-transparent noir comme superposition. */
            z-index: 1;
            /* Place l'élément au-dessus de l'image de fond mais en dessous du contenu principal. */
        }

        .ab-content {
            position: absolute;
            /* Positionnement absolu pour centrer le contenu. */
            top: 50%;
            /* Positionne le contenu verticalement au milieu. */
            left: 50%;
            /* Positionne le contenu horizontalement au milieu. */
            transform: translate(-50%, -50%);
            /* Centrage parfait en utilisant une transformation. */
            font-family: 'Arial', sans-serif;
            /* Définit la police utilisée pour le contenu. */
            text-align: center;
            /* Aligne le texte au centre. */
            z-index: 2;
            /* Place le contenu au-dessus de l'image et de la superposition. */
        }

        .ab-content h1 {
            font-size: 40px;
            /* Taille de la police pour le titre principal. */
            font-weight: bold;
            /* Met le texte en gras. */
            color: #2042be;
            /* Définit une couleur bleue personnalisée pour le texte. */
            margin-bottom: 20px;
            /* Ajoute un espacement en bas du titre. */
        }

        .ab-content p {
            color: white;
            /* Définit la couleur blanche pour le texte. */
            font-size: 20px;
            /* Taille de la police pour les paragraphes. */
            line-height: 1.8;
            /* Augmente l'espacement entre les lignes pour améliorer la lisibilité. */
            letter-spacing: .5px;
            /* Ajoute un léger espacement entre les lettres. */
            font-weight: normal;
            /* Texte en poids normal (ni gras ni fin). */
        }

        @media (max-width: 768px) {
            .ab-content p {
                font-size: 14px;
                /* Réduit la taille de la police pour les petits écrans. */
                text-align: left;
                /* Aligne le texte à gauche pour une meilleure lisibilité. */
            }
        }

        .row {
            margin-right: 0 !important;
            /* Supprime la marge à droite des lignes pour un alignement précis. */
        }

        .col-5-custom {
            width: 20%;
            /* Définit une largeur personnalisée pour les colonnes. */
        }

        .custom-control .carousel-control-prev-icon,
        .custom-control .carousel-control-next-icon {
            background-color: #00008b22;
            /* Ajoute une couleur d'arrière-plan semi-transparente aux icônes du carousel. */
        }

        @media (max-width: 1200px) {
            .col-5-custom {
                width: 25%;
                /* Augmente la largeur des colonnes pour les écrans moyens. */
            }
        }
        @media (max-width: 992px) {
            .col-5-custom {
                width: 33.33%;
                /* Réorganise les colonnes pour prendre 1/3 de l'espace sur les écrans moyens-petits. */
            }
        }

        @media (max-width: 576px) {
            .col-5-custom {
                width: 100%;
                /* Chaque colonne occupe toute la largeur de l'écran pour les petits appareils. */
            }
        }

        .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease !important;
            /* Ajoute une transition fluide pour le zoom et les ombres. */
        }

        .card:hover {
            transform: scale(1.05) !important;
            /* Augmente légèrement la taille de la carte au survol. */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15) !important;
            /* Ajoute une ombre subtile pour un effet flottant. */
            opacity: 0.8 !important;
            /* Réduit légèrement l'opacité au survol. */
        }
    </style>
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
