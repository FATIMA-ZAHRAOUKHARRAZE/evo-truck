@extends('layout.navbar')

@section('url')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
@endsection
@section('seo')
    <title>EVO MACHINERY - Contactez-nous</title>
    <meta name="description"
        content="Contactez EVO Machinery à Hong Kong. Notre équipe est à votre disposition pour répondre à vos questions sur nos équipements de construction. Adresse : Hollywood Mongkok, Kowloon, Hong Kong. Téléphone : +86 19 826 086 894">
    <meta name="keywords"
        content="contact EVO Machinery, support client, service après-vente, équipements de construction,maroc, assistance technique, demande d'information, service client">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="EVO MACHINERY">
    <link rel="canonical" href="https://evo-machinery.com/contact">
    <meta property="og:title" content="EVO MACHINERY - Contactez-nous">
    <meta property="og:description"
        content="Contactez notre équipe à Hong Kong pour toute question sur nos équipements de construction">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('images/Original.png') }}">
    <meta property="og:street-address" content="Hollywood Mongkok">
    <meta property="og:locality" content="Kowloon">
    <meta property="og:region" content="Hong Kong">
    <meta property="og:phone_number" content="+86 19 826 086 894">
    <meta property="og:email" content="contact@evo-machinery.com">
@endsection
@section('content')
    <div class="container contact-section">
        <h1 data-aos="fade-down" class="text-center1">{{ translate('CONTACTEZ-NOUS') }}</h1>
        <p data-aos="fade-down" class="text-center">
            {{ translate("Vous avez des questions ou besoin d'aide ? Contactez-nous en utilisant le formulaire de contact ci-dessous.Notre équipe du Groupe EVO MACHINERY est là pour vous aider.") }}
        </p>
        <div class="mt-4 row">
            <!-- Formulaire de contact -->
            <div class="col-md-6">
                <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                <form data-aos="fade-right" class="contact-form" action={{ route('contact.send') }} method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="fullName" class="form-label">{{ translate('Nom') }}</label>
                        <input type="text" class="form-control" id="Nom" name="Nom"
                            placeholder="{{ translate('Nom') }}">
                        @error('Nom')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="emailAddress" class="form-label">{{ translate('Email') }} </label>
                        <input type="email" class="form-control" id="Email" name="Email"
                            placeholder="{{ translate('Email') }}">
                        @error('Email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">{{ translate('Sujet') }} </label>
                        <input type="text" class="form-control" id="Sujet" name="Sujet"
                            placeholder="{{ translate('Sujet') }}">
                        @error('Sujet')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">{{ translate('Message') }}</label>
                        <textarea class="form-control" id="Message" name="Message" rows="5" placeholder="{{ translate('Message') }}"></textarea>
                        @error('Message')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.sitekey') }}"> </div>
                        @error('g-recaptcha-response')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary w-100">{{ translate('Envoie Message') }}</button>
                </form>
            </div>
            <!-- Carte Google et informations -->
            <div class="col-md-6">
                <div data-aos="fade-left" class="google-map-error">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23833.342562569213!2d114.16067339999999!3d22.317164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34040f0fd9c3a4bb%3A0x8834f38ba0db80ed!2sHollywood%20Mongkok%2C%20Kowloon%2C%20Hong%20Kong!5e0!3m2!1sfr!2sfr!4v1674292797912!5m2!1sfr!2sfr"
                        width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <div class="mt-4 contact-details">
                    <p data-aos="fade-left"><i class="bi bi-geo-alt"></i> {{ translate('Address') }}: HOLLYWOOD MONGKOK ,
                        KOWLOON , HONG KONG</p>
                    <p data-aos="fade-left"><i class="bi bi-telephone"></i> {{ translate('Téléphone') }}: +86 19 826 086
                        894</p>
                    <p data-aos="fade-left"><i class="bi bi-envelope"></i> Email: <a
                            href="mailto:contact@evo-machinery.com"
                            style="text-decoration:none; color: black;">contact@evo-machinery.com</a></p>
                    <p data-aos="fade-left"><i class="bi bi-envelope"></i> Email: <a
                            href="mailto:sales@evo-machinery.com"
                            style="text-decoration:none; color:black;">sales@evo-machinery.com</a></p>
                    <p data-aos="fade-left"><i class="bi bi-globe"></i> Site web: evo-machinery.com</p>
                </div>
            </div>
        </div>
    </div>
@endsection
