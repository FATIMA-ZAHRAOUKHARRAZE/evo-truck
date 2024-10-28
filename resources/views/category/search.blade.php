@extends('layout.navbar')

@section('content')
    <div class="row position-relative">
        <img src="https://www.xcmg.com/en-ap/upload/images/2020/08/04/a35d6d08748249069143a07c1bfb604f.jpg" class="img-fluid"
            alt="Image de fond">
        <div class="overlay-text">
            <h1>{{ GoogleTranslate::trans('Produits', \App::getLocale()) }}</h1>
        </div>
    </div>
    <div class="container">
        @if ($products->isEmpty())
            <p>{{ GoogleTranslate::trans('Aucun produit trouvé.', \App::getLocale()) }}</p>
        @else
            <ul class="list-group">
                @foreach ($filteredDetails as $item)
                    <div class="col-md-3">
                        <div class="bbb_deals">
                            <div class="bbb_deals_slider_container">
                                <div class=" bbb_deals_item">

                                    <div class="bbb_deals_image"><img
                                            src="{{ asset('images/' . $item['product']->img_pro) }}" alt=""></div>
                                    <div class="bbb_deals_content">

                                        <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                            <div class="bbb_deals_item_name">
                                                {{ GoogleTranslate::trans($item['product']->name, \App::getLocale()) }}
                                            </div>
                                        </div>
                                        @foreach ($item['details'] as $detail)
                                            <div class="bbb_deals_item_details ">
                                                @foreach ($detail as $column => $value)
                                                    <div class="bbb_deals_item_detail">
                                                        <strong>{{ GoogleTranslate::trans(ucfirst($column), \App::getLocale()) }}
                                                            :</strong>{{ GoogleTranslate::trans($value, \App::getLocale()) }}
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endforeach

                                        <div class="available">
                                            <div class="available_line d-flex flex-row justify-content-start">
                                                <div class="available_title">
                                                    <a href="{{ route('ProductDetail', $item['product']->id) }}"
                                                        class="btn">{{ GoogleTranslate::trans(PLUS, \App::getLocale()) }}</a>
                                                </div>
                                                <div class="available_title">
                                                    <a href="{{ route('order', [$item['product']->category_id, $item['product']->nom_pro]) }}"
                                                        class="btn">{{ GoogleTranslate::trans(ORDER, \App::getLocale()) }}</a>
                                                </div>
                                            </div>
                                            <div class="available_bar"><span style="width:17%"></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
