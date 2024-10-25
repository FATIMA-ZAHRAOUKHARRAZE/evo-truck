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
                        <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image">
                            <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit"
                                src="{{ asset('/images/' . $product->img_pro) }}" />
                        </a>
                    </div>
                </aside>
                <main class="col-lg-6">
                    <div class="ps-lg-3">
                        <h4 class="title text-dark">
                            <h1>{{ $product->nom_pro }}</h1> <br> {{ $product->dec_pro }}

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
                    <a href="#" class="btn btn-primary shadow-0 " style=""><i class="fa-solid fa-phone"></i>
                        00-00-00-00 </a>
            </div>
            </main>
        </div>
        </div>
    </section>
    <section>
        <div id="navbar"
            style="position: relative; z-index: 10000; height: 70px; width: 100%; background-color: #2a42cf; color: white; display: flex; justify-content: space-between; align-items: center; padding: 0 20px;">
            <ul style="list-style: none; padding-righ: 40px; display: flex; gap: 60px; margin-right: 60px;">
                <li style="font-size: 20px;">{{ $product->nom_pro }}</li>
                <li style="font-size: 20px;"><a style="color: white;" href="#Product_facture">Product facture</a></li>
                <li style="font-size: 20px;"><a style="color: white;" href="#parameter">Parametres</a></li>
                <li style="font-size: 20px;"><a style="color: white;" href="">Constructions cases</a></li>
            </ul>
        </div>
        <div id="Product_facture" class="mt-5 text-white">margin</div>
        {{-- Product fetures --}}
        <div style="margin-top: 10px" class="container mt-5 ">
            <h2 style="font-weight: bold;color:blue">Product feature</h2>
            <span class="mt-2 ">
                {{ $product->dec_pro }}
            </span>
        </div>

        <div id="parameter" class="mt-5 text-white">margin</div>
        {{-- parametre --}}
        <div style="margin-top: 10px" class="container mt-5 ">
            <h2 style="font-weight: bold;color:blue">Parametere</h2>
            <span class="mt-2 ">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </span>
        </div>



    </section>




    <script>
        window.onscroll = function() {
            var navbar = document.getElementById("navbar");
            var sticky = navbar.offsetTop;

            if (window.pageYOffset > sticky) {
                navbar.style.position = "fixed";
                navbar.style.top = "0";
                navbar.style.width = "100%";
            } else {
                navbar.style.position = "relative";
                navbar.style.width = "auto";
            }
        };
    </script>
@endsection
