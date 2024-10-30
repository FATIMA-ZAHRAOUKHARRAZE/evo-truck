@extends('layout.navbar')
@section('content')
    <!-- le code pour banner image --->
<div id="carousel" class="carousel slide carousel-custom" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('images/Original.png') }}"
                alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('images/Original.png') }}"
                alt="Second slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </a>
</div>

    <!--code pour la partie product--->
    <div class="row justify-content-center" style="margin-top: 100px">
        @forelse ($categories as $categorie)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                <div class="card h-100 shadow-sm border-0" style="border-radius: 15px;">
                    <a href="{{ url('product/' . $categorie->id) }}" class="text-decoration-none">
                        <img src="{{ asset('images/Original.png') }}" class="card-img-top" alt="Product Image"
                            style="border-radius: 15px 15px 0 0; height: 300px; object-fit: cover;">
                        <div class="card-body text-center">
                            <h5 class="card-title" style="font-size: 18px; font-weight: bold; color: #333;">
                                {{ GoogleTranslate::trans($categorie->nom_cat, \App::getLocale()) }} 
                            </h5>
                        </div>
                    </a>
                </div>
            </div>
        @empty
        @endforelse
    @endsection
