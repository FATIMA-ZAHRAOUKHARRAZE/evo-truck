@extends('layout.navbar')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <!-- Page Image -->
    <div class="about_container">
        <img src="{{ asset('images/Original.png') }}">
        <div class="image-desktop-only">
            <span>{{ translate('À propos ') }}</span>
        </div>
    </div>
    <section class="page-section" id="about">
        <div class="container">
            <ul class="timeline">
                <li data-aos="fade-left">
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ asset('images/Original.png') }}" loading="lazy" alt="..." />
                    </div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="subheading">{{ translate('BIENVENUE CHEZ EVO') }}
                            </h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                {{ translate(
                                    "Depuis sa création en 2000, EVO machinery s'est rapidement
                                                                                                                                                                                                                                                                imposé comme l'un des leaders mondiaux du secteur des équipements de construction et des
                                                                                                                                                                                                                                                                engins de levage. Notre parcours a été caractérisé par une recherche incessante de
                                                                                                                                                                                                                                                                l'innovation, un engagement indéfectible envers l'excellence et la fourniture de solutions
                                                                                                                                                                                                                                                                de qualité supérieure à notre clientèle mondiale.",
                                    \App::getLocale(),
                                ) }}
                            </p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted" data-aos="fade-left">
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ asset('images/Original.png') }}" loading="lazy" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="subheading">
                                {{ translate('DÉVOILER NOTRE HÉRITAGE') }}</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                {{ translate(
                                    "Dans un monde où le progrès se mesure à la robustesse des fondations et à
                                                                                                                                                                                                                                                                la portée des grues, nous sommes un acteur incontournable depuis notre création. Notre
                                                                                                                                                                                                                                                                engagement indéfectible envers l'excellence nous a propulsés au rang des acteurs mondiaux
                                                                                                                                                                                                                                                                les plus importants et les plus influents du secteur des machines de construction.",
                                    \App::getLocale(),
                                ) }}
                            </p>
                        </div>
                    </div>
                </li>
                <li data-aos="fade-left">
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ asset('images/Original.png') }}" loading="lazy" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4 class="subheading">{{ translate('IMPACT MONDIAL') }}</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                {{ translate(
                                            "EVO machinery est fier de figurer parmi les plus grandes
                                            entreprises de machines de construction au monde. Nos contributions nous ont valu d'être
                                            reconnus comme un acteur clé dans l'avancement du secteur mondial de la construction.",
                                    \App::getLocale(),
                                ) }}
                            </p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted" data-aos="fade-left">
                    <div class="timeline-image"><img class="rounded-circle img-fluid"
                            src="{{ asset('images/Original.png') }}" loading="lazy" alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">

                            <h4 class="subheading">
                                {{ translate('NOTRE VISION ET NOS VALEURS') }}</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                {{ translate(
                                    "Chez EVO machinery, notre chemin est éclairé par une vision
                                                                                                                                                                                                    claire : émerger en tant qu'entreprise mondiale de premier plan, compétente dans la création
                                                                                                                                                                                                                                                                de valeur tangible. Nos principes fondamentaux sont profondément ancrés dans la rigueur, le
                                                                                                                                                                                                                                                                pragmatisme, la progressivité et la créativité. Ces valeurs directrices nous poussent à
                                                                                                                                                                                                                                                                élever continuellement nos performances, en établissant de nouvelles références au sein de
                                                                                                                                                                                                                                                                l'industrie.",
                                    \App::getLocale(),
                                ) }}
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="container" data-aos="fade-left">
            <div class="text-center">
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
                                                            conformes aux normes de l'industrie.",
                                \App::getLocale(),
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
                                notamment des chargeuses, des chariots élévateurs, des excavatrices et bien plus encore.",
                                \App::getLocale(),
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
                                pour garantir une qualité de produit de premier ordre.",
                                \App::getLocale(),
                            ) }}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
