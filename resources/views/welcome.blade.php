@extends('layout.navbar')
@section('content')
    
        <!-- le code pour banner image --->
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('images/Original.png') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('images/Original.png') }}" alt="Second slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
        <!--code pour la partie product--->
        <div class="container mb-5">
            <h2 class="text-center" style="font-size: 20px;margin-top:20px">PRODUCTS</h2>
            <div class="row justify-content-center">
                @forelse ($categories as $categorie)
                <div class="col-12 col-sm-2 ">
                    <div class="card">
                        <a href="{{ url('product/' . $categorie->id) }}" class="text-decoration-none">
                        <img src="{{ asset('images/Original.png') }}" class="card-img-top" alt="Excavators">
                        <div class="card-body">
                            <h5 class="card-title">{{ $categorie->nom_cat }}</h5>
                            <p class="card-text"></p>
                        </div>
                    </a>
                    </div>
                </div>
                @empty
                @endforelse
            </div>
        </div>
       

@endsection
     