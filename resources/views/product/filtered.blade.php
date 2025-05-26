@extends('layout.navbar')
@section('url')
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href={{ asset('css/product.css') }}>
@endsection
@section('seo')
    <title>EVO MACHINERY - {{ translate($categorie->nom_cat) }} - Résultats de recherche</title>
    <meta name="description"
        content="Explorez notre sélection filtrée de {{ translate($categorie->nom_cat) }} par EVO Machinery. Trouvez le produit idéal grâce à nos filtres avancés et découvrez des spécifications techniques détaillées. Demandez un devis personnalisé.">
    <meta name="keywords"
        content="{{ translate($categorie->nom_cat) }}, recherche produits, filtrage machines, EVO Machinery, équipements de construction, spécifications techniques, devis personnalisé, catalogue filtré, machines industrielles, qualité industrielle">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="EVO MACHINERY">
    <link rel="canonical" href="https://evo-machinery.com/product/filter">
    <meta property="og:title" content="EVO MACHINERY - {{ translate($categorie->nom_cat) }} - Résultats filtrés">
    <meta property="og:description"
        content="Découvrez notre sélection filtrée de {{ translate($categorie->nom_cat) }} - EVO Machinery">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('images/' . $categorie->img_catpro) }}">
@endsection


@section('content')
    <!-- Page Image -->
    <div class="sss" style="position: relative; width: 100%;">
        <img style="width: 100%; max-height: 540px; object-fit: cover; opacity: .4;"
            src="{{ asset('images/' . $categorie->img_catpro) }}"alt="">
        <div style="font-weight: bold; position: absolute;  top: 40%;   left: {{ strlen($categorie->nom_cat) < 25 ? '37%' : (strlen($categorie->nom_cat) < 20 ? '30%' : '20%') }}; color: #2042be; font-size: 24px; "
            class="textph">
            <span style="font-size: 50px;">{{ translate($categorie->nom_cat) }}</span>
        </div>
    </div>
    <section class="container mt-4">
        <div class="row">
            <!-- Sidebar -->
            <div class="mb-4 col-md-3 col-12 sidebar">
                <h3 class="mb-4">
                    {{ translate('Filtrer les Produits') }}
                </h3>
                <!-- Category Selection -->
                <div class="mb-3">
                    <label for="category-select" class="form-label">
                        {{ translate('Sélectionner une catégorie') }}
                    </label>
                    <select class="form-select" id="category-select">
                        <option disabled>
                            {{ translate('Sélectionner une catégorie') }}
                        </option>
                        @forelse ($scategories as $categorie)
                            @if ($categorie->id == $cid)
                                <option value="{{ $categorie->id }}" selected>
                                    {{ translate($categorie->name) }}
                                </option>
                            @else
                                <option value="{{ $categorie->id }}">
                                    {{ translate($categorie->name) }}
                                </option>
                            @endif
                        @empty
                            <option disabled>
                                {{ translate("Aucune catégorie n'existe.") }}
                            </option>
                        @endforelse
                    </select>
                </div>
                <!-- Product Name Input -->
                <div class="mb-3">
                    <label for="product-name" class="form-label">
                        {{ translate('Le nom de produit') }}
                    </label>
                    <input type="text" class="form-control" id="product-name"
                        placeholder="{{ translate('Entrer une partie de produit') }}">
                </div>
                <!-- Filter Link Button -->
                <a href="#" id="filter-link" class="mb-3 btn btn-primary">
                    {{ translate('Filtrer') }}
                </a>
                <script>
                    const routeTemplate =
                        "{{ route('product.filter', ['id' => ':id', 'cid' => ':cid', 'productname' => ':productname']) }}";

                    function updateFilterLink() {
                        const selectElement = document.getElementById('category-select');
                        const productName = document.getElementById('product-name').value;
                        const categoryId = selectElement.value;
                        let route = routeTemplate
                            .replace(':cid', "{{ $id }}")
                            .replace(':id', categoryId)
                            .replace(':productname', encodeURIComponent(productName));
                        document.getElementById('filter-link').href = route;
                    }
                    document.getElementById('category-select').addEventListener('change', updateFilterLink);
                    document.getElementById('product-name').addEventListener('input', updateFilterLink);
                    updateFilterLink();
                </script>
            </div>
            <!-- Content Column -->
            <div class="col-md-9 col-12">
                <div class="flex-wrap row d-flex">
                    @foreach ($filteredDetailsPaginator as $item)
                        <div class="mb-4  product-item col-lg-4 col-md-6 col-sm-12" data-aos="fade-up">
                            <div class="bbb_deals overflow-hidden">
                                <div class="bbb_deals_slider_container">
                                    <div class="bbb_deals_item" data-aos="zoom-in">
                                        <div class="bbb_deals_image">
                                            <a class="prodct-img-link"
                                                href="{{ route('ProductDetail', $item['product']->id) }}">
                                                <img src="{{ asset('images/' . $item['product']->img_pro) }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="mb-1 bbb_deals_content">
                                            <div class="flex-row bbb_deals_info_line d-flex justify-content-between">
                                                <div class="mb-5 bbb_deals_item_name"
                                                    style="color: #031c77;font-size: {{ strlen($item['product']->nom_pro) < 12
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
                                                                {{ ucfirst(translate(Str::limit($column, 20))) }}:</div>
                                                            <div class="bbb_deals_item_detail_value">
                                                                {{ Str::limit($value, 6) }}</div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endforeach
                                            <div class="mt-2 available">
                                                <div class="flex-row available_line d-flex justify-content-between">
                                                    <a href="{{ route('ProductDetail', $item['product']->id) }}"
                                                        class="btn" data-aos="flip-left">
                                                        {{ translate('PLUS') }}
                                                    </a>
                                                    <a href="{{ route('order', [$item['product']->category_id, $item['product']->nom_pro]) }}"
                                                        class="btn" data-aos="flip-right">
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
                <div class="pagination-wrapper">
                    {{ $filteredDetailsPaginator->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </section>
    <!--script-->
    <script src="{{ asset('js/product.js') }}" defer></script>
@endsection
