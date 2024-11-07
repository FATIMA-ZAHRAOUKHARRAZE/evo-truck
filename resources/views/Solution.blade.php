@extends('layout.navbar')
@section('url')
    <link rel="stylesheet" href="{{ asset('css/solution.css') }}">
@endsection
@section('content')
    <!-- Page Image -->
    <div style="position: relative; width: 100%;">
        <img style="width: 100%; max-height: 400px; object-fit: cover; opacity: .9;" src="{{ asset('images/Original.png') }}"
            loading="lazy" alt="">
        <div
            style="font-weight: bold; position: absolute; top: 20%; left: 20%; color: #2042be; font-size: 24px; padding: 10px;">
            <span style="font-size: 50px;">{{ GoogleTranslate::trans('EQUIPEMENT BLINDES', \App::getLocale()) }}</span>
        </div>
    </div>

    <!-- la partie etapes design -->
    <section class="design-steps">
        <h1>Les étapes de nos Design.</h1>
        <div class="steps-container">
            <div class="step">
                <i class="fas fa-drafting-compass icon"></i>
                <h2>DESIGN</h2>
                <p>L’art de la beauté au service de l’industrie</p>
            </div>
            <div class="step">
                <i class="fas fa-search icon"></i>
                <h2>RECHERCHE & DÉVELOPPEMENT</h2>
                <p>Les meilleurs spécialistes à votre écoute</p>
            </div>
            <div class="step">
                <i class="fas fa-industry icon"></i>
                <h2>FABRICATION</h2>
                <p>Les meilleurs ingénieurs de production</p>
            </div>
            <div class="step">
                <i class="fas fa-cube icon"></i>
                <h2>PROTOTYPAGE</h2>
                <p>L’innovation à portée de main</p>
            </div>
            <div class="step">
                <i class="fas fa-vial icon"></i>
                <h2>TEST ET ESSAI</h2>
                <p>Maîtrise des risques au maximum</p>
            </div>
            <div class="step">
                <i class="fas fa-couch icon"></i>
                <h2>CONFORT</h2>
                <p>La robustesse du blindage et le confort d’une</p>
            </div>
        </div>
    </section>



    {{-- //////////// --}}
  <section>
    <div class="section">
        <div class="contain">
            <div class="content-section">
                <div class="title">
                    <h1>Équipements blindés</h1>
                </div>
                <div class="content">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque ex illo reprehenderit consectetur rerum quia corrupti. Iste sequi et nam eos saepe distinctio ab molestiae quis, nisi pariatur facilis! Impedit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam non quas reiciendis rerum recusandae atque labore, officiis totam earum facilis voluptatibus, blanditiis ex eos, possimus deleniti nostrum rem praesentium tenetur?</p>
                    <div class="button">
                        <a href="">Nos services</a>
                    </div>
                </div>
            </div>
            <div class="image-section">
                <img src="{{ asset('/images/EXCAVATORS/EI15X.jpg') }}" alt="Équipement blindé">
            </div>
        </div>
    </div>
</section>

@endsection
