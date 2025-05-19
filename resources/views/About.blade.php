@extends('layout.navbar')
@section('content')
    <style>
        /* Timeline Component */
        .timeline {
            position: relative;
            padding: 0;
            list-style: none;
        }

        .timeline:before {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 40px;
            width: 2px;
            content: "";
            background-color: #e9ecef;
        }

        /* Timeline Item */
        .timeline>li {
            position: relative;
            min-height: 50px;
            margin-bottom: 50px;
        }

        .timeline>li:after,
        .timeline>li:before {
            display: table;
            content: " ";
        }

        .timeline>li:after {
            clear: both;
        }

        /* Timeline Panel */
        .timeline>li .timeline-panel {
            position: relative;
            float: right;
            width: 100%;
            padding: 0 20px 0 100px;
            text-align: left;
        }

        .timeline>li .timeline-panel:before {
            left: -15px;
            border-right-width: 15px;
            border-left-width: 0;
        }

        .timeline>li .timeline-panel:after {
            left: -14px;
            border-right-width: 14px;
            border-left-width: 0;
        }

        .timeline .timeline-image img {
            width: 100px; /* Largeur de l'image */
            height: 100px; /* Hauteur de l'image */
            border-radius: 50%; /* Bordure ronde */
            border: 5px solid #e9ecef; /* Contour autour de l'image */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Ombre autour de l'image */
            transition: all 0.3s ease; /* Transition douce pour les changements */
        }
        .timeline>li .timeline-image h4 {
            font-size: 10px;
            line-height: 14px;
            margin-top: 12px;
        }

        /* Timeline Inverted */
        .timeline>li.timeline-inverted>.timeline-panel {
            float: right;
            padding: 0 20px 0 100px;
            text-align: left;
        }

        .timeline>li.timeline-inverted>.timeline-panel:before {
            left: -15px;
            border-right-width: 15px;
            border-left-width: 0;
        }

        .timeline>li.timeline-inverted>.timeline-panel:after {
            left: -14px;
            border-right-width: 14px;
            border-left-width: 0;
        }

        .timeline>li:last-child {
            margin-bottom: 0;
        }

        .timeline .timeline-heading h4 {
            margin-top: 0;
            color: inherit;
        }

        .timeline .timeline-heading h4.subheading {
            text-transform: none;
            color: #2042be;
        }

        .timeline .timeline-body>ul,
        .timeline .timeline-body>p {
            margin-bottom: 0;
        }

        /* Responsive Styles */
        @media (min-width: 768px) {
            .timeline:before {
                left: 50%;
            }

            .timeline>li {
                min-height: 100px;
                margin-bottom: 100px;
            }

            .timeline>li .timeline-panel {
                float: left;
                width: 41%;
                padding: 0 20px 20px 30px;
                text-align: right;
            }

            .timeline>li .timeline-image {
                left: 50%;
                width: 100px;
                height: 100px;
                margin-left: -50px;
            }

            .timeline>li .timeline-image h4 {
                font-size: 13px;
                line-height: 18px;
                margin-top: 16px;
            }

            .timeline>li.timeline-inverted>.timeline-panel {
                float: right;
                padding: 0 30px 20px 20px;
                text-align: left;
            }
        }

        @media (min-width: 992px) {
            .timeline>li {
                min-height: 150px;
            }

            .timeline>li .timeline-panel {
                padding: 0 20px 20px;
            }

            .timeline>li .timeline-image {
                width: 150px;
                height: 150px;
                margin-left: -75px;
            }

            .timeline>li .timeline-image h4 {
                font-size: 18px;
                line-height: 26px;
                margin-top: 30px;
                color: #2042be;
            }

            .timeline>li.timeline-inverted>.timeline-panel {
                padding: 0 20px 20px;
            }
        }

        @media (min-width: 1200px) {
            .timeline>li {
                min-height: 170px;
            }

            .timeline>li .timeline-panel {
                padding: 0 20px 20px 100px;
            }

            .timeline>li .timeline-image {
                width: 100px;
                height: 100px;
                margin-left: -85px;
            }

            .timeline>li .timeline-image h4 {
                margin-top: 40px;

            }

            .timeline>li.timeline-inverted>.timeline-panel {
                padding: 0 100px 20px 20px;
            }
        }

        /* Section Styling */
        .page-section {
            padding: 6rem 0;
        }

        .page-section h2.section-heading {
            font-size: 2.5rem;
            margin: 0 0 1rem;
        }

        .page-section h3.section-subheading {
            font-size: 1rem;
            font-weight: 400;
            font-style: italic;
            font-family: "Roboto Slab", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            margin-bottom: 4rem;
        }

        /* Team Member Styling */
        .team-member {
            margin-bottom: 2rem;
            text-align: center;
        }

        .team-member img {
            width: 8rem;
            height: 8rem;
            border: 0.5rem solid rgba(0, 0, 0, 0.1);
        }

        .team-member h4 {
            margin: 0.5rem 0 0;
        }

        /* Layout */
        .col-lg-4 {
            flex: 0 0 auto;
            width: 33.333%;
        }

        .bg-light {
            background-color: rgba(var(--bs-light-rgb), 1) !important;
        }

        h4 {
            color: #2042be;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }
        @media (max-width: 768px) {
            .image-desktop-only {
                position: absolute;
                top: 50%;
                left: 15%;
                transform: translate(-50%, -50%);
                text-align: center;
                margin: 0; /* Reset margins */
            }
}
</style>

    <div style="position: relative; width: 100%;">
    <img  style="width: 100%; max-height: 400px; object-fit: cover; opacity: .4;" src="{{ asset('images/Original.png') }}" alt="">
    <div class="image-desktop-only" style="font-weight: bold; position: absolute; top: 40%; left:40%;  color: #2042be; font-size: 24px;">
        <span style="font-size: 50px;">{{ translate('À propos ') }}</span>
    </div>
</div>
    <section class="page-section" id="about"  >
        <div class="container">
            <ul class="timeline" >
                <li data-aos="fade-left">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('images/Original.png') }}" loading="lazy" alt="..." />
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="subheading">{{ translate('BIENVENUE CHEZ EVO') }}</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                {{ translate("Depuis sa création en 2000, EVO machinery s'est rapidement imposé comme l'un des leaders mondiaux du secteur des équipements de construction et des engins de levage. Notre parcours a été caractérisé par une recherche incessante de l'innovation, un engagement indéfectible envers l'excellence et la fourniture de solutions de qualité supérieure à notre clientèle mondiale.") }}
                            </p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted" data-aos="fade-left">
                    <div class="timeline-image" ><img class="rounded-circle img-fluid" src="{{ asset('images/Original.png') }}" loading="lazy" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="subheading">{{ translate('DÉVOILER NOTRE HÉRITAGE') }}</h4>
                        </div>
                        <div class="timeline-body" >
                            <p class="text-muted">
                                {{ translate("Dans un monde où le progrès se mesure à la robustesse des fondations et à la portée des grues, nous sommes un acteur incontournable depuis notre création. Notre engagement indéfectible envers l'excellence nous a propulsés au rang des acteurs mondiaux les plus importants et les plus influents du secteur des machines de construction.") }}
                            </p>
                        </div>
                    </div>
                </li>
                <li data-aos="fade-left">
                    <div class="timeline-image" ><img class="rounded-circle img-fluid" src="{{ asset('images/Original.png') }}" loading="lazy" alt="..." /></div>
                    <div class="timeline-panel" >
                        <div class="timeline-heading">
                            <h4 class="subheading">{{ translate('IMPACT MONDIAL') }}</h4>
                        </div>
                        <div class="timeline-body" >
                            <p class="text-muted">
                                {{ translate(
                                    "EVO machinery est fier de figurer parmi les plus grandes entreprises de machines de construction au monde. Nos contributions nous ont valu d'être reconnus comme un acteur clé dans l'avancement du secteur mondial de la construction.") }}
                            </p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted" data-aos="fade-left">
                    <div class="timeline-image" ><img class="rounded-circle img-fluid"
                            src="{{ asset('images/Original.png') }}" loading="lazy" alt="..." /></div>
                    <div class="timeline-panel" >
                        <div class="timeline-heading">
                            <h4 class="subheading">
                                {{ translate('NOTRE VISION ET NOS VALEURS') }}</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                {{ translate(
                                    "Chez EVO machinery, notre chemin est éclairé par une vision claire : émerger en tant qu'entreprise mondiale de premier plan, compétente dans la création de valeur tangible. Nos principes fondamentaux sont profondément ancrés dans la rigueur, le pragmatisme, la progressivité et la créativité. Ces valeurs directrices nous poussent à élever continuellement nos performances, en établissant de nouvelles références au sein de l'industrie."
                                ) }}
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>


        <div class="container" data-aos="fade-left">
            <div class="text-center" >
                <h2 class="section-heading text-uppercase " style="color: #2042be">
                    {{ translate('CE QUE NOUS OFFRONS') }}</h2>

            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="team-member" data-aos="fade-left">
                        <img class="mx-auto rounded-circle" src="{{ asset('images/Original.png') }}" loading="lazy"
                            alt="..." />
                        <h4>{{ translate('QUALITÉ') }}</h4>
                        <p class="text-muted">
                            {{ translate(
                                "Nous garantissons l'excellence de nos produits grâce à un contrôle qualité
                                rigoureux, des experts supervisant méticuleusement chaque étape à l'aide d'équipements de pointe
                                 conformes aux normes de l'industrie."
                            ) }}
                        </p>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-member"data-aos="fade-left">
                        <img class="mx-auto rounded-circle" src="{{ asset('images/Original.png') }}" loading="lazy"
                            alt="..." />
                        <h4>{{ translate('CONCEPTION ET R&D') }}</h4>
                        <p class="text-muted">
                            {{ translate(
                                "Nos conceptions uniques et ergonomiques évoluent grâce à des investissements
                                continus dans l’amélioration et l’innovation des produits.",
                                \App::getLocale(),
                            ) }}
                        </p>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-member"data-aos="fade-left">
                        <img class="mx-auto rounded-circle" src="{{ asset('images/Original.png') }}" loading="lazy"
                            alt="..." />
                        <h4>{{ translate('DIVERSITÉ') }}</h4>
                        <p class="text-muted">
                            {{ translate(
                                "EVO machinery une large gamme d'équipements de construction et de levage,
                                notamment des chargeuses, des chariots élévateurs, des excavatrices et bien plus encore."
                            ) }}
                        </p>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="team-member"data-aos="fade-left">
                        <img class="mx-auto rounded-circle" src="{{ asset('images/Original.png') }}" loading="lazy"
                            alt="..." />
                        <h4>{{ translate('SERVICE') }}</h4>
                        <p class="text-muted">
                            {{ translate(
                                "Nous maintenons un contrôle de qualité strict en utilisant des équipements de
                                pointe conformes aux normes de l'industrie, avec des professionnels supervisant chaque processus
                                pour garantir une qualité de produit de premier ordre."
                            ) }}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
