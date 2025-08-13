@extends('layout.navbar')
@section('url')
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('css/catliste.css') }}">
@endsection
@section('seo')
    <title>EVO TRUCK - Résultats de recherche pour "{{ $query }}"</title>
    <meta name="description"
        content="Trouvez les produits EVO TRUCK correspondant à votre recherche '{{ $query }}'. Explorez notre catalogue d'équipements de construction et demandez un devis personnalisé.">
    <meta name="keywords"
        content="{{ $query }}, recherche produits, EVO TRUCK,maroc, équipements de construction, machines industrielles, spécifications techniques, devis personnalisé, catalogue machines, qualité industrielle">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="EVO TRUCK">
    <link rel="canonical" href="https://evo-truck.com/category/search?query={{ $query }}">
    <meta property="og:title" content="EVO TRUCK - Résultats pour '{{ $query }}'">
    <meta property="og:description"
        content="Découvrez les produits EVO TRUCK correspondant à votre recherche '{{ $query }}'">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('images/Original.png') }}">
    <meta name="search-query" content="{{ $query }}">
@endsection
@section('content')
    <!-- Page Image -->
    <div class="solution_container">
        <img src="{{ asset('images/Original.png') }}" alt="evo image">
        <div class="image-desktop-only">
            <h1>{{ translate('PRODUITS ') }}</h1>
        </div>
    </div>

    <div class="container">
        @if ($products->isEmpty())
            <p> {{ translate('Aucun produit trouvé.') }} </p>
        @else
            <div class="col-md-12 col-12">
                <div class="flex-wrap row d-flex">
                    @foreach ($filteredDetails as $item)
                        <div class="mb-4 product-item col-lg-3 col-md-6 col-sm-12" data-aos="fade-up">
                            <div class="bbb_deals">
                                <div class="bbb_deals_slider_container">
                                    <div class="bbb_deals_item" data-aos="zoom-in">
                                        <div class="bbb_deals_image">
                                            <a class="prodct-img-link"
                                                href="{{ route('ProductDetail', $item['product']->id) }}">
                                                <img src="{{ asset('images/' . $item['product']->img_pro) }}"
                                                    alt="evo prodct">
                                            </a>
                                        </div>
                                        <div class="mb-1 bbb_deals_content">
                                            <div class="flex-row bbb_deals_info_line d-flex justify-content-between">
                                                <div class="mb-5 bbb_deals_item_name"
                                                    style="color: #0033cc;font-size: {{ strlen($item['product']->nom_pro) < 12
                                                        ? '30px'
                                                        : (strlen($item['product']->nom_pro) < 20
                                                            ? '20px'
                                                            : (strlen($item['product']->nom_pro) < 30
                                                                ? '16px'
                                                                : '14px')) }}">
                                                    <b>{{ $item['product']->nom_pro }}</b>
                                                </div>
                                            </div>
                                            @foreach ($item['details'] as $detail)
                                                <div class="bbb_deals_item_details" data-aos="fade-left">
                                                    @foreach ($detail as $column => $value)
                                                        <div class="bbb_deals_item_detail">
                                                            <div class="bbb_deals_item_detail_label"
                                                                style="font-size: 13.7px">
                                                                {{ ucfirst(translate(Str::limit($column, 20))) }}

                                                            </div>
                                                            <div class="bbb_deals_item_detail_value">
                                                                {{ Str::limit($value, 6) }}

                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endforeach
                                            <div class="mt-2 available">
                                                <div class="flex-row available_line d-flex justify-content-between">
                                                    <a href="{{ route('ProductDetail', $item['product']->id) }}"
                                                        class="btn" data-aos="flip-left"
                                                        style="background-color:#0033cc;">
                                                        {{ translate('PLUS') }}
                                                    </a>
                                                    <a href="{{ route('order', [$item['product']->category_id, $item['product']->nom_pro]) }}"
                                                        class="btn" data-aos="flip-right"
                                                        style="background-color:#0033cc;">
                                                        {{ translate('LE DEVIS') }}
                                                    </a>
                                                </div>
                                                <div class="available_bar"><span style="width:17%"></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        @endif
    </div>
    <div class="px-5 pagination-wrapper">
        {{ $products->appends(['query' => $query])->links('pagination::bootstrap-5') }}
    </div>

    <script>
        // Select the <nav> element inside .pagination-wrapper
        const navElement = document.querySelector('.pagination-wrapper nav');

        // Copy attributes from the <nav> to the <div>
        Array.from(navElement.attributes).forEach(attr => {
            divElement.setAttribute(attr.name, attr.value);
        });

        // Copy the content of the <nav> to the <div>
        divElement.innerHTML = navElement.innerHTML;

        // Replace the <nav> with the <div>
        navElement.parentNode.replaceChild(divElement, navElement);
        }
    </script>
@endsection
