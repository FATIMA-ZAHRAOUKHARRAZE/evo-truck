@extends('layout.navbar')
@section('url')
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('css/order.css') }}">
@endsection
@section('seo')
    <title>EVO MACHINERY - Demande de devis pour {{ $name }}</title>
    <meta name="description"
        content="Demandez un devis gratuit pour {{ $name }} ({{ $spesificcat }}) par EVO Machinery. Remplissez notre formulaire et recevez une réponse sous 24h. Service client professionnel et personnalisé.">
    <meta name="keywords"
        content="devis {{ $name }}, demande de prix, {{ $spesificcat }}, EVO Machinery, formulaire de contact, devis gratuit, machines de construction, service client, réponse sous 24h,maroc">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="EVO MACHINERY">
    <link rel="canonical" href="https://evo-machinery.com/form/order/">
    <meta property="og:title" content="EVO MACHINERY - Demande de devis pour {{ $name }}">
    <meta property="og:description" content="Demandez un devis gratuit pour {{ $name }} - Réponse sous 24h">
    <meta property="og:type" content="website">
@endsection
@section('content')
    <!-- Page Image -->
   <div class="solution_container">
        <img src="{{ asset('images/Original.png') }}" alt="evo image">
        <div class="image-desktop-only">
            <h1>{{ translate('Devis gratuit') }}</h1>
        </div>
    </div>
    <section>
        <div class="form-container">
            <h2 class="titre">{{ translate('Devis gratuit') }}</h2>
            <p class="paragraphe">
                {{ translate('Nous vous contacterons dans les 24 heures (jours ouvrables), veuillez garder votre téléphone portable ouvert.') }}
            </p>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form method="post" action="{{ route('order.inser') }}" class="w-75 formulaire"
                style="margin-left: 120px;margin-top:40px">
                @csrf
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fname">
                                {{ translate('Catégorie de produit :') }}</label>
                            <input type="text" name="prod_cat" value="{{ $spesificcat }}" class="form-control"
                                readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lname">{{ translate('Modèle de produit :') }}</label>
                            <input type="text" class="form-control" name="prod_mod" readonly
                                value="{{ $name }}">
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fname">{{ translate(' Votre nom complete:') }}</label>
                            <input type="text" class="form-control" id="fname" name="name">
                            @if ($errors->has('name'))
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fname">{{ translate(' Nom Société:') }}</label>
                            <input type="text" class="form-control" id="fname" name="société">
                            @if ($errors->has('name'))
                                <small class="text-danger">{{ $errors->first('société') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fname">{{ translate('Activité de Société:') }}</label>
                            <input type="text" class="form-control" id="fname" name="activité">
                            @if ($errors->has('name'))
                                <small class="text-danger">{{ $errors->first('activité') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lname">{{ translate('Téléphone:') }}</label>
                            <input type="text" class="form-control" id="lname" name="phone">
                            @if ($errors->has('phone'))
                                <small class="text-danger">{{ $errors->first('phone') }}</small>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fname"> {{ translate('Email:') }}</label>
                            <input type="mail" name="email" class="form-control" id="fname">
                            @if ($errors->has('email'))
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lname">{{ translate('Le Pays:') }}</label>
                            <input type="text" class="form-control" id="lname" name="country">
                            @if ($errors->has('country'))
                                <small class="text-danger">{{ $errors->first('country') }}</small>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fname"> {{ translate('Message:') }}</label>
                        <textarea class="form-control" name="message"></textarea>
                        @if ($errors->has('message'))
                            <small class="text-danger">{{ $errors->first('message') }}</small>
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-block mt-4">{{ translate('Soumettre') }}</button>
            </form>
        </div>
    </section>
@endsection