@extends('layout.navbar')
@section('url')
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
@endsection
@section('seo')
    <title>EVO MACHINERY - {{ $product->nom_pro }}</title>
    <meta name="description"
        content="Découvrez {{ $product->nom_pro }} par EVO Machinery. Spécifications techniques détaillées, caractéristiques et paramètres. Demandez un devis personnalisé pour ce produit de qualité.">
    <meta name="keywords"
        content="{{ $product->nom_pro }}, EVO Machinery, équipements de construction, spécifications techniques, caractéristiques produit, paramètres techniques, devis personnalisé, machines de construction, qualité industrielle">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="EVO MACHINERY">
    <link rel="canonical" href="https://evo-machinery.com/ProductDetail/{{ $product->id }}">
    <meta property="og:title" content="EVO MACHINERY - {{ $product->nom_pro }}">
    <meta property="og:description"
        content="Découvrez les spécifications techniques et caractéristiques de {{ $product->nom_pro }} - EVO Machinery">
    <meta property="og:type" content="product">
    <meta property="og:image" content="{{ asset('/images/' . $product->img_pro) }}">
@endsection
@section('content')
    <link rel="stylesheet" href={{ asset('css/product.css') }}>
    <section class="pb-5 banner mb-5">
        <div class="">
            <div class="row gx-5">
                <aside class="col-lg-6">
                    <div class="mb-3 border rounded-4 d-flex justify-content-center">
                        <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image">
                            <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit"
                                src="{{ asset('/images/' . $product->img_pro) }}" alt="evo detail" />
                        </a>
                    </div>
                </aside>
                <main class="col-lg-6">
                    <div class="ps-lg-5">
                        <h1 class="title text-dark">{{ $product->nom_pro }}</h1> <br>
                    </div>
                    @if (!empty($filteredDetails) && count($filteredDetails) > 0)
                        <hr style="margin-top: 60px">
                        @foreach ($filteredDetails as $detail)
                            <div class="row" style="margin-top: 40px;margin-right: 20px !important;">
                                @foreach ($detail as $column => $value)
                                    <dt class="col-10 ">{{ translate(ucfirst($column)) }}</dt>
                                    <dd class="col-1 ">{{ $value }}</dd>
                                @endforeach
                            </div>
                        @endforeach
                        <hr style="margin-top: 30px" />
                    @endif
                    <br>
                    <a href="{{ route('order', [$product->category_id, $product->nom_pro]) }}"
                        class="btn btn-warning shadow-0">
                        <i class="me-1 fa fa-shopping-basket"></i>{{ translate('Donner un devis') }}
                    </a>
            </div>
            </main>
        </div>
        </div>
    </section>
    <section>
        <div id="navbar"
            style="position: relative; z-index: 10000; background-color: #2042be;  justify-content: space-between; align-items: center; color: white;height: 70px; width: 100%;padding: 0 20px;padding-top: 20px;">
            <div class="container d-flex justify-content-between align-items-center">
                <ul id="menu" class="gap-4 mb-0 list-unstyled d-lg-flex">
                    <div class="logo" style="font-size: 20px;">{{ $product->nom_pro }}</div>
                    <li class="parali" style="font-size: 18px;"><a style="color: white; text-decoration: none"
                            href="#Product_facture">{{ translate('CARACTÉRISTIQUE DU PRODUIT') }}</a></li>
                    <li class="parali" style="font-size: 18px;"><a style="color: white; text-decoration: none"
                            href="#parameter">{{ translate('PARAMÈTRES') }}</a></li>
                </ul>
            </div>
        </div>
        <div id="Product_facture" class="mt-5 text-white">margin</div>
        {{-- Product fetures --}}
        <div style="margin-top: 10px" class="container mt-3 ">
            <h1 style=" font-size:40px;font-weight: bold;color:#2042be">{{ translate('CARACTÉRISTIQUE DU PRODUIT') }}</h1>
            <span class="mt-2 ">{{ translate($product->dec_pro ?? ($product->cacteristique ?? '   ')) }}</span>
            @if ($product->pdf !== null)
                <div class="mt-3">
                    <a href="{{ route('product.download', ['pdf' => $product->pdf]) }}" class="btn">
                        <i class="fas fa-download"></i>Téléchargement de la fiche technique
                    </a>
                </div>
            @endif
        </div>
        <div id="parameter" class="mt-5 text-white">margin</div>
        {{-- parametre --}}
        <div style="margin-top: 10px" class="container mt-3 ">
            <h1 style=" font-size:40px;font-weight: bold;color:#2042be ">{{ translate('PARAMÈTRES') }}</h1>
            <span class="mt-2 ">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">{{ translate('Article') }}</th>
                            <th scope="col">{{ translate('Unité') }}</th>
                            <th scope="col">{{ translate('Paramètre') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($parametres as $parametre)
                            <tr>
                                <th scope="row">{{ translate($parametre->Article) }}
                                </th>
                                <td>{{ $parametre->Unité }}</td>
                                <td>{{ $parametre->Paramètre }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </span>
        </div>
    </section>
    <br>
    <script>
        window.onscroll = function() {
            var navbar = document.getElementById("navbar");
            var sticky = navbar.offsetTop;
            if (window.pageYOffset > sticky) {
                navbar.style.position = "fixed";
                navbar.style.top = "0";
                navbar.style.width = "100%";
            } else {
                navbar.style.position = "relative";
                navbar.style.width = "auto";
            }
        };
    </script>
@endsection
