@extends('layout.navbar')

@section('content')
    <div style="position: relative; width: 100%;">
        <img style="width: 100%; max-height: 400px; object-fit: cover; opacity: .4;" src="{{ asset('images/Original.png') }}"
            loading="lazy" alt="">
        <div
            style="font-weight: bold; position: absolute; top: 20%; left:40%;  color: #2042be; font-size: 24px; padding: 10px;">
            <span style="font-size: 50px;">{{ GoogleTranslate::trans('PRODUITS', \App::getLocale()) }}</span>
        </div>
    </div>

    <div class="container">
        @if ($products->isEmpty())
            <p>{{ GoogleTranslate::trans('Aucun produit trouvé.', \App::getLocale()) }}</p>
        @else
            <div class="row">
                @foreach ($filteredDetails as $item)
                    <div class="col-md-3">
                        <div class="bbb_deals">
                            <div class="bbb_deals_slider_container">
                                <div class="bbb_deals_item">
                                    <div class="bbb_deals_image">
                                        <img src="{{ asset('images/' . $item['product']->img_pro) }}" loading="lazy" alt="Product image">
                                    </div>
                                    <div class="bbb_deals_content">
                                        <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                            <div class="bbb_deals_item_name">
                                                {{ $item['product']->nom_pro }}
                                            </div>
                                        </div>

                                        @foreach ($item['details'] as $detail)
                                            <div class="bbb_deals_item_details">
                                                @foreach ($detail as $column => $value)
                                                    <div class="bbb_deals_item_detail">
                                                        <strong>{{ GoogleTranslate::trans(ucfirst($column), \App::getLocale()) }} :</strong>
                                                        {{ GoogleTranslate::trans($value, \App::getLocale()) }}
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endforeach

                                        <div class="available">
                                            <div class="available_line d-flex flex-row justify-content-start">
                                                <div class="available_title">
                                                    <a href="{{ route('ProductDetail', $item['product']->id) }}" class="btn">
                                                        {{ GoogleTranslate::trans('PLUS', \App::getLocale()) }}
                                                    </a>
                                                </div>
                                                <div class="available_title">
                                                    <a href="{{ route('order', [$item['product']->category_id, $item['product']->nom_pro]) }}" class="btn">
                                                        {{ GoogleTranslate::trans('ORDER', \App::getLocale()) }}
                                                    </a>
                                                </div>
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
        @endif
    </div>
@endsection
