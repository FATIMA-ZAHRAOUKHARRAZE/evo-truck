@extends('layout.navbar')
@section('url')
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
@endsection

@section('content')
    <!-- Page Image -->
    <div style="position: relative; width: 100%;">
        <img style="width: 100%; opacity: .9;"
            src="{{ asset('images/Original.png') }}" loading="lazy" alt="">
        <div style="font-weight: bold; position: absolute; top: 20%; left: 20%; color: #ffffffc6; font-size: 24px; padding: 10px;">
            <span style="font-size: 50px;">{{ GoogleTranslate::trans("Produits", \App::getLocale()) }}</span>
        </div>
    </div>

    <section class="container mt-4">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-12 sidebar mb-4">
                <h3 class="mb-4">{{ GoogleTranslate::trans("Filter les Produits", \App::getLocale()) }}  </h3>

                <div class="mb-3">
                    <label for="category-select" class="form-label">{{ GoogleTranslate::trans("Sélectionner une catégorie", \App::getLocale()) }}  </label>
                    <select class="form-select" id="category-select">
                        <option disabled>{{ GoogleTranslate::trans("Sélectionner une catégorie", \App::getLocale()) }} </option>
                        @forelse ($categories as $categorie)
                            <option value="{{ $categorie->id }}" {{ isset($id) && $id == $categorie->id ? 'selected' : '' }}>
                              {{ GoogleTranslate::trans( $categorie->nom_cat, \App::getLocale()) }} 
                            </option>
                        @empty
                            <option disabled>{{ GoogleTranslate::trans( "Aucune catégorie n'existe.", \App::getLocale()) }}  </option>
                        @endforelse
                    </select>
                </div>

                <div class="mb-3">
                    <label for="product-name" class="form-label">{{ GoogleTranslate::trans( "le nom de produit.", \App::getLocale()) }} </label>
                    <input type="text" class="form-control" id="product-name" placeholder="Enter part of product">
                </div>

                <a href="#" id="filter-link" class="btn btn-primary mb-3">{{ GoogleTranslate::trans( "filtre", \App::getLocale()) }}</a>

                <script>
                    function updateFilterLink() {
                        const selectElement = document.getElementById('category-select');
                        const productName = document.getElementById('product-name').value;
                        const categoryId = selectElement.value;

                        let route = "{{ route('product.filter', [':id', ':productname']) }}"
                            .replace(':id', categoryId)
                            .replace(':productname', encodeURIComponent(productName));

                        document.getElementById('filter-link').href = route;
                    }

                    document.getElementById('category-select').addEventListener('change', updateFilterLink);
                    document.getElementById('product-name').addEventListener('input', updateFilterLink);
                </script>

                <h2 class="mt-4">  {{ GoogleTranslate::trans( "Voir les solutions de produits associés.", \App::getLocale()) }}</h2>
                <h4> {{ GoogleTranslate::trans( "Il utilise un moteur YANMAR, offrant un faible niveau de bruit et une excellente efficacité économique.", \App::getLocale()) }}</h4>
            </div>
            <!-- Content Column -->
            <div class="col-md-9 col-12">
                <div class="row">
                    @foreach ($filteredDetails as $item)
                        <div class="col-md-4 col-12 mb-4">
                            <div class="bbb_deals">
                                <div class="bbb_deals_slider_container">
                                    <div class="bbb_deals_item">
                                        <div class="bbb_deals_image">
                                            <img src="{{ asset('images/' . $item['product']->img_pro) }}" alt="">
                                        </div>
                                        <div class="bbb_deals_content">
                                            <div class="bbb_deals_info_line d-flex flex-row justify-content-between">
                                                <div class="bbb_deals_item_name">{{ GoogleTranslate::trans(  $item['product']->nom_pro, \App::getLocale()) }}</div>
                                                <div class="bbb_deals_item_price">  {{$item['product']->price}}</div>
                                            </div>

                                            @foreach ($item['details'] as $detail)
                                                <div class="bbb_deals_item_details">
                                                    @foreach ($detail as $column => $value)
                                                        <div class="bbb_deals_item_detail">
                                                            <strong>{{ GoogleTranslate::trans(    ucfirst($column) , \App::getLocale()) }}:</strong> {{ $value }}
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endforeach
                                            <div class="available mt-2">
                                                <div class="available_line d-flex flex-row justify-content-between">
                                                    <a href="{{ route('ProductDetail', $item['product']->id) }}" class="btn">{{ GoogleTranslate::trans(   "PLUS" , \App::getLocale()) }} </a>
                                                    <a href="{{ route('order', [$item['product']->category_id, $item['product']->nom_pro]) }}" class="btn">{{ GoogleTranslate::trans(   "ORDER " , \App::getLocale()) }} </a>
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
        </div>
    </section>
@endsection
