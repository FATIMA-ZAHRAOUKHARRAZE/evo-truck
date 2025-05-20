@extends('layout.navbar')
 @section('url')
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
    <link rel="stylesheet" href="{{ asset('css/catliste.css') }}">
@endsection
@section('content')
    <!-- Page Image -->
    <div class="sss" style="position: relative; width: 100%;">
        <img style="width: 100%; max-height: 400px; object-fit: cover; opacity: .4;" src="{{ asset('images/Original.png') }}"
            loading="lazy" alt="">
        <div
            style="font-weight: bold; position: absolute; top: 20%; left:40%;  color: #2042be; font-size: 24px; padding: 10px;">
            <span style="font-size: 50px;">   {{ translate('PRODUITS') }} </span>
        </div>
    </div>

    <div class="container">
        @if ($products->isEmpty())
            <p>   {{ translate('Aucun produit trouvé.') }} </p>
        @else
           <div class="col-md-12 col-12">
    <div class="flex-wrap row d-flex">
        @foreach ($filteredDetails as $item)
        <div class="mb-4 product-item col-lg-3 col-md-6 col-sm-12" data-aos="fade-up">
            <div class="bbb_deals">
                <div class="bbb_deals_slider_container">
                    <div class="bbb_deals_item" data-aos="zoom-in">
                        <div class="bbb_deals_image">
                            <a class="prodct-img-link" href="{{ route('ProductDetail', $item['product']->id) }}">
                                <img src="{{ asset('images/' . $item['product']->img_pro) }}" alt="">
                            </a>
                        </div>
                        <div class="mb-1 bbb_deals_content">
                            <div class="flex-row bbb_deals_info_line d-flex justify-content-between">
                                <div class="mb-5 bbb_deals_item_name" style="color: #031c77;font-size: {{ strlen($item['product']->nom_pro) < 12
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
                                    <div class="bbb_deals_item_detail_label" style="font-size: 13.7px">
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
                                    <a href="{{ route('ProductDetail', $item['product']->id) }}" class="btn"
                                        data-aos="flip-left">
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

</div>
        @endif
    </div>
     <div class="pagination-wrapper px-5">
    {{ $products->appends(['query' => $query])->links('pagination::bootstrap-5') }}
 </div>

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
