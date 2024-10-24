@extends('layout.navbar')
@section('content')
<div class="container mydiv">
    <div class="row">
        @foreach ($filteredDetails as $item)
        <div class="col-md-4">
            <!-- bbb_deals -->
            <div class="bbb_deals">
                <div class="bbb_deals_slider_container">
                    <div class=" bbb_deals_item">
                        <div class="bbb_deals_image"><img src="{{ asset('images/'.$item['product']->img_pro)}}" alt=""></div>
                        <div class="bbb_deals_content">
                            
                                <div class="bbb_deals_info_line d-flex flex-row justify-content-start">
                                    <div class="bbb_deals_item_name">{{ $item['product']->name }}</div>
                                    <div class="bbb_deals_item_price ml-auto">{{ $item['product']->price }}</div>
                                </div>
                                @foreach ($item['details'] as $detail)
                                    <div class="bbb_deals_item_details ">
                                        @foreach ($detail as $column => $value)
                                            <div class="bbb_deals_item_detail">
                                                <strong>{{ ucfirst($column) }}:</strong>{{ $value }} 
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            
                            <div class="available">
                                <div class="available_line d-flex flex-row justify-content-start">
                                    <div class="available_title">
                                        <a href="{{ route('ProductDetail',$item['product']->id) }}" class="btn">PLUS</a>
                                    </div>
                                    <div class="available_title">
                                        <a href="{{ route('order') }}" class="btn">ENQUETE</a>
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
</div>
@endsection