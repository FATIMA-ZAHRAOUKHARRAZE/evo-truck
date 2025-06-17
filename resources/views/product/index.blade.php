@extends('layout.navbar')
@section('content')
@section('seo')
    <title>{{ translate($categorie->nom_cat) }} - EVO MACHINERY</title>
    <meta name="description"
      content="Explorez nos {{ translate($categorie->nom_cat) }} robustes et performantes, idéales pour les travaux publics et privés. EVO Machinery, votre partenaire au Maroc.">
    <meta name="keywords"
        content="{{ translate($categorie->nom_cat) }}, EVO Machinery, équipements de construction, machines industrielles, spécifications techniques, devis personnalisé, filtrage produits, catalogue machines, qualité industrielle,maroc">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="EVO MACHINERY">
    <link rel="canonical" href="https://evo-machinery.com/product/{{ $id }}">
    <meta property="og:title" content="EVO MACHINERY - {{ translate($categorie->nom_cat) }}">
    <meta property="og:description"
        content="Explorez notre catalogue de {{ translate($categorie->nom_cat) }} - EVO Machinery">
    <meta property="og:type" content="website">
    <meta property="og:image" content="{{ asset('images/' . $categorie->img_catpro) }}">
@endsection
<link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
<link rel="stylesheet" href={{ asset('css/product.css') }}>
<!-- Page Image -->
<div class="sss" style="position: relative; width: 100%;">
    <img style="width: 100%; max-height: 540px; object-fit: cover; opacity: .4;"src="{{ asset('images/' . $categorie->img_catpro) }}"
        alt="evo logo">
    <div class="textph"
        style="font-weight: bold; position: absolute; top: 40%;  left: {{ strlen($categorie->nom_cat) < 25 ? '37%' : (strlen($categorie->nom_cat) < 20 ? '30%' : '20%') }};color: #0033cc; font-size: 24px; ">
        <h1 style="font-size: 50px;letter-spacing: 2px; border 2px solid;">
            {{ translate($categorie->nom_cat) }}
        </h1>
    </div>
</div>
<section class="container banner ps-3 pe-3">
    <div class="row">
        <!-- Sidebar -->
        <div class="mb-4 col-md-3 col-12 sidebar">
            <h2 class="mb-4">
                {{ translate('Filtrer les Produits') }}
            </h2>
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
                        <option value="{{ $categorie->id }}">
                            {{ translate($categorie->name) }}
                        </option>
                    @empty
                        <option disabled>
                            {{ translate("Aucune catégorie n'existe.") }}
                        </option>
                    @endforelse
                </select>
            </div>
            <!-- Product Name Input -->
            <div class="mb-3">
                <label for="product-name" class="form-label">{{ translate('Le nom de produit') }}</label>
                <input type="text" class="form-control" id="product-name"
                    placeholder="{{ translate('Entrer une partie de produit') }}">
            </div>
            <!-- Filter Link Button -->
            <a href="#" id="filter-link" class="mb-3 btn btn-primary" style="background: #0033cc;">
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
            <div class="row g-3">
                @foreach ($filteredDetails as $item)
                    <div class="col-12 col-md-6 col-lg-4 product-item" data-aos="fade-up">
                        <div class="overflow-hidden bbb_deals">
                            <div class="bbb_deals_slider_container">
                                <div class="bbb_deals_item" data-aos="zoom-in">
                                    <div class="bbb_deals_image">
                                        <a class="prodct-img-link"
                                            href="{{ route('ProductDetail', $item['product']->id) }}">
                                            <img src="{{ asset('images/' . $item['product']->img_pro) }}"
                                                alt="evo ">

                                        </a>
                                    </div>
                                    <div class="mb-1 bbb_deals_content" data-aos="fade-up"
                                    data-aos-delay="300">
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
                                            <div class="bbb_deals_item_details">
                                                @foreach ($detail as $column => $value)
                                                    <div class="bbb_deals_item_detail">
                                                        <div class="bbb_deals_item_detail_label"
                                                            title="{{ strlen($column) > 20 ? $column : '' }}"
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
                                                    class="btn"  style="background: #0033cc;">
                                                    {{ translate('PLUS') }}
                                                </a>
                                                <a href="{{ route('order', [$item['product']->category_id, $item['product']->nom_pro]) }}"
                                                    class="btn"  style="background: #0033cc;">
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
            <!-- Pagination Wrapper -->
            <div class="pagination-wrapper">
                {{ $filteredDetails->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</section>
<script>
    // Select the <nav> element inside .pagination-wrapper
    const navElement = document.querySelector('.pagination-wrapper nav');
    if (navElement) {
        // Create a new <div> element
        const divElement = document.createElement('div');

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
