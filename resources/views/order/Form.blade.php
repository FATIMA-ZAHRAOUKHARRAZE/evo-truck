@extends('layout.navbar')
@section('url')
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('css/order.css') }}">
@endsection
@section('content')
    <!-- Page Image -->
    <div style="position: relative; width: 100%;"class="image-desktop-only">
        <img style="width: 100%; max-height: 400px; object-fit: cover; opacity: .4;" src="{{ asset('images/Original.png') }}"
            alt="">
        <div class="image-desktop-only"
            style="font-weight: bold; position: absolute; top: 20%; left:40%;  color: #2042be; font-size: 24px; padding: 10px;">
            <span style="font-size: 50px;">{{ 'PRODUITS' }}</span>
        </div>
    </div>
    <section>
        <div class="form-container">
            <h2 style="font-weight: bold;text-align:center">{{ translate('Devis gratuit') }}
            </h2>
            <p style="text-align:center">
                {{ translate('Nous vous contacterons dans les 24 heures (jours ouvrables), veuillez garder votre téléphone portable ouvert.') }}
            </p>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form method="post" action="{{ route('order.inser') }}" class="w-75 "
                style="margin-left: 120px;margin-top:40px">
                @csrf
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fname">
                                {{ translate('Catégorie de produit :') }}</label>
                            <input type="text" name="prod_cat" value="{{ $spesificcat }}" class="form-control" readonly>
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
                <button type="submit" style="margin-bottom: 10px;"
                    class="btn btn-primary btn-block mt-4">{{ translate('Soumettre') }}</button>
            </form>
        </div>
    </section>
@endsection
