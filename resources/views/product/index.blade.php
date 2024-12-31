@extends('layout.navbar')
@section('url')
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
@endsection

@section('content')

<style>
/* Media Query for Hiding Header Image on Small Screens */
@media (max-width: 768px) {
    .sss {
        display: none;
    }
}

/* Media Query for Screens ≤ 540px: Force 1 Column */
@media (max-width: 540px) {
    .product-item {
        flex: 0 0 100%; /* Full width */
        max-width: 100%; /* Full width */
    }
}

/* Media Query for Screens 541px to 920px: Use 2 Columns */
@media (max-width: 920px) and (min-width: 541px) {
    .product-item {
        flex: 0 0 50%; /* Half width */
        max-width: 50%; /* Half width */
    }
}
</style>

<!-- Page Image -->
<div class="sss" style="position: relative; width: 100%;">
    <img style="width: 100%; max-height: 400px; object-fit: cover; opacity: .4;" 
         src="{{ asset('images/'.$categorie->img_catpro) }}" loading="lazy" alt="">
    <div style="font-weight: bold; position: absolute; top: 40%; left:40%; color: #2042be; font-size: 24px; ">
        <span style="font-size: 50px;">
            {{ GoogleTranslate::trans($categorie->nom_cat, \App::getLocale()) }}
        </span>
    </div>
</div>

<section class="container ps-3 pe-3 mt-4">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3 col-12 sidebar mb-4">
            <h3 class="mb-4">
                {{ GoogleTranslate::trans("Filtrer les Produits", \App::getLocale()) }}
            </h3>

            <!-- Category Selection -->
            <div class="mb-3">
                <label for="category-select" class="form-label">
                    {{ GoogleTranslate::trans("Sélectionner une catégorie", \App::getLocale()) }}
                </label>
                <select class="form-select" id="category-select">
                    <option disabled>
                        {{ GoogleTranslate::trans("Sélectionner une catégorie", \App::getLocale()) }}
                    </option>
                    @forelse ($scategories as $categorie)
                        <option value="{{ $categorie->id }}">
                            {{ GoogleTranslate::trans($categorie->name, \App::getLocale()) }}
                        </option>
                    @empty
                        <option disabled>
                            {{ GoogleTranslate::trans("Aucune catégorie n'existe.", \App::getLocale()) }}
                        </option>
                    @endforelse
                </select>
            </div>

            <!-- Product Name Input -->
            <div class="mb-3">
                <label for="product-name" class="form-label">
                    {{ GoogleTranslate::trans("Le nom de produit.", \App::getLocale()) }}
                </label>
                <input type="text" class="form-control" id="product-name" placeholder="{{ GoogleTranslate::trans('Entrer une partie de produit', \App::getLocale()) }}">
            </div>

            <!-- Filter Link Button -->
            <a href="#" id="filter-link" class="btn btn-primary mb-3">
                {{ GoogleTranslate::trans("Filtrer", \App::getLocale()) }}
            </a>

            <script>
                const routeTemplate = "{{ route('product.filter', ['id' => ':id','cid' => ':cid', 'productname' => ':productname']) }}";

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
            <div class="row d-flex flex-wrap">
                @foreach ($filteredDetails as $item)
                    <div class="product-item mb-4 col-lg-4 col-md-6 col-sm-12" data-aos="fade-up">
                        <div class="bbb_deals">
                            <div class="bbb_deals_slider_container">
                                <div class="bbb_deals_item" data-aos="zoom-in">
                                    <div class="bbb_deals_image">
                                        <img src="{{ asset('images/' . $item['product']->img_pro) }}" alt="">
                                    </div>
                                    <div class="mb-1 bbb_deals_content">
                                        <div class="flex-row bbb_deals_info_line d-flex justify-content-between">
                                           <div class="mb-5 bbb_deals_item_name" style="color: #031c77;font-size: {{ 
    strlen($item['product']->nom_pro) < 12 ? '30px' : 
    (strlen($item['product']->nom_pro) < 20 ? '20px' : 
    (strlen($item['product']->nom_pro) < 30 ? '16px' : '14px'))
}}">
                                                <b>{{ $item['product']->nom_pro }}</b>
                                            </div>
                                        </div>
                                        @foreach ($item['details'] as $detail)
                                            <div class="bbb_deals_item_details" data-aos="fade-left">
                                                @foreach ($detail as $column => $value)
                                                    <div class="bbb_deals_item_detail">
                                                        <div class="bbb_deals_item_detail_label" style="font-size: 13.7px">
                                                          {{ ucfirst(GoogleTranslate::trans(Str::limit($column, 20), \App::getLocale())) }}

                                                        </div>
                                                        <div class="bbb_deals_item_detail_value">
                                                           {{Str::limit($value, 6)}}

                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endforeach
                                        <div class="mt-2 available">
                                            <div class="flex-row available_line d-flex justify-content-between">
                                                <a href="{{ route('ProductDetail', $item['product']->id) }}" class="btn"
                                                    data-aos="flip-left">
                                                   {{ GoogleTranslate::trans("PLUS", \App::getLocale()) }}
                                                </a>
                                                <a href="{{ route('order', [$item['product']->category_id, $item['product']->nom_pro]) }}"
                                                    class="btn" data-aos="flip-right">
                                                    {{ GoogleTranslate::trans("COMMANDE", \App::getLocale()) }}
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
