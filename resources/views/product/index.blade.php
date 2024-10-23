@extends('layout.navbar')
@section('content')
<div class="container mydiv">
    <div class="row">
        @forelse ($products as $product)
        <div class="col-md-4">
            <!-- bbb_deals -->
            <div class="bbb_deals">
                <div class="bbb_deals_slider_container">
                    <div class=" bbb_deals_item">
                        <div class="bbb_deals_image"><img src="{{ asset('images/'.$product->img_pro) }}" alt=""></div>
                        <div class="bbb_deals_content">

                            <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                <div class="bbb_deals_item_name">{{ $product->nom_pro }}</div>
                            </div>
                            <div class="available">
                                <div class="available_line d-flex flex-row justify-content-start">
                                    <div class="available_title">
                                        <a href="{{ route('ProductDetail',$product->id) }}" class="btn">PLUS</a>
                                    </div>
                                    <div class="available_title">
                                        <a href="{{ route('ProductDetail',5) }}"    class="btn">ENQUETE</a>
                                    </div>
                                </div>
                                <div class="available_bar"><span style="width:17%"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
        @endforelse
    </div>
</div>
@endsection