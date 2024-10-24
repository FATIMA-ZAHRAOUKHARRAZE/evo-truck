@extends('layout.navbar')
@section('content')
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