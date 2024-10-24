@extends('layout.navbar')

@section('content')
    <style>
        @media (max-width: 600px) {
            .fdiv {
                margin-bottom: 20px
            }
        }
    </style>
    <section class="py-5 mt-5 mb-5">
        <div class="">
            <div class="row gx-5">
                <aside class="col-lg-6">
                    <div class="border rounded-4 mb-3 d-flex justify-content-center">
                        <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image"
                           >
                            <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit"
                                src="{{asset("/images/".$product->img_pro ) }}" />
                        </a>
                    </div>

                    <!-- thumbs-wrap.// -->
                    <!-- gallery-wrap .end// -->
                </aside>
                <main class="col-lg-6">
                    <div class="ps-lg-3">
                        <h4 class="title text-dark">
                       <h1>{{$product->nom_pro}}</h1>  <br>  {{$product->dec_pro}}

                        </h4>
                    </div>

                    <hr style="margin-top: 60px">

                    <div class="row " style="margin-top: 40px">
                        <dt class="col-3">Operating weight(Kg)</dt>
                        <dd class="col-9">5900</dd>

                        <dt class="col-3 mt-2">Bucket capacity(m³)</dt>
                        <dd class="col-9">0.23</dd>

                        <dt class="col-3 mt-2">Material</dt>
                        <dd class="col-9">Cotton, Jeans</dd>

                        <dt class="col-3 mt-2">Engine Model</dt>
                        <dd class="col-9">Yanmar 4TNV98</dd>
                    </div>

                    <hr style="margin-top: 30px" />

                    <a href="#" class="btn btn-warning shadow-0 " style=""><i
                            class="me-1 fa fa-shopping-basket"></i> order
                        online </a>
                    <a href="#" class="btn btn-primary shadow-0 " style=""><i
                            class="fa-solid fa-phone"></i>
                        00-00-00-00 </a>
            </div>
            </main>
        </div>
        </div>
    </section>
    <section>
    <div style="height: 70px; background-color: #2a42cf; color: white; display: flex; justify-content: space-between; align-items: center; padding: 0 20px;">
    <ul style="list-style: none; padding: 0; display: flex; gap: 60px;margin-right:60px">
        <li style="margin-right: 60px ">{{ $product->nom_pro }}</li>
        <li style="margin-left: 20px ">Product facture</li>
        <li style="margin-left: 20px ; color: blue;">Parametres</li>
        <li style="margin-left: 20px ">Constructions cases</li>
    </ul>
</div>
        </section>
    @endsection
