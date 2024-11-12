@extends('layout.navbar')

@section('content')
    <style>

        .row {
            margin-right: 0 !important;
             margin-left: 20px
        }
        @media (max-width: 600px) {
            .fdiv {
                margin-bottom: 20px
            }
            .ps-lg-5{
                margin-left: 20px
            }
            dd{
                display: inline-block;
                margin-right: 20px
            }
            .parali{
                font-size: 14px !important;
                padding-top: 30px;

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
                    <div class="ps-lg-5">
                        <h4 class="title text-dark">
                            <h1>{{ $product->nom_pro }}</h1> <br> {{ GoogleTranslate::trans($product->dec_pro, \App::getLocale()) }}

                        </h4>
                    </div>
                    <hr style="margin-top: 60px">
                    @foreach ($filteredDetails as $detail)
                        <div class="row" style="margin-top: 40px">
                            @foreach ($detail as $column => $value)
                                <dt class="col-3 ">{{ GoogleTranslate::trans(ucfirst($column) , \App::getLocale()) }}</dt>
                                <dd class="col-9 ">{{ GoogleTranslate::trans($value, \App::getLocale()) }}</dd>
                            @endforeach
                        </div>
                    @endforeach
                    <hr style="margin-top: 30px" />

                    <a href="{{ route('order', [$product->category_id, $product->nom_pro]) }}"
                        class="btn btn-warning shadow-0">
                        <i class="me-1 fa fa-shopping-basket"></i>{{ GoogleTranslate::trans( 'Commander en ligne', \App::getLocale()) }}
                    </a>
                    <a href="#" class="btn btn-primary shadow-0 " style=""><i class="fa-solid fa-phone"></i>
                        00-00-00-00 </a>
            </div>
            </main>
        </div>
        </div>
    </section>
    <section>
        <div  id="navbar"style="position: relative; z-index: 10000; height: 70px; width: 100%; background-color: #2042be; color: white; display: flex; justify-content: space-between; align-items: center; padding: 0 20px;">
            <ul style="list-style: none; padding-righ: 40px; display: flex; gap: 60px; margin-right: 60px;">
                <li class="parali" style="font-size: 20px;">{{$product->nom_pro}}</li>
                <li class="parali" style="font-size: 20px;"><a style="color: white; text-decoration: none" href="#Product_facture">{{ GoogleTranslate::trans('CARACTÉRISTIQUE DU PRODUIT', \App::getLocale()) }}</a>
                </li>
                <li class="parali" style="font-size: 20px;"><a style="color: white; text-decoration: none" href="#parameter">{{ GoogleTranslate::trans('PARAMÈTRES', \App::getLocale()) }}</a></li>
            </ul>
        </div>
        <div id="Product_facture" class="mt-5 text-white">margin</div>
        {{-- Product fetures --}}
        <div style="margin-top: 10px" class="container mt-3 ">
            <h2 style="font-weight: bold;color:#2042be">{{ GoogleTranslate::trans('CARACTÉRISTIQUE DU PRODUIT', \App::getLocale()) }}</h2>
            <span class="mt-2 ">
                {{ $product->dec_pro }}
            </span>
        </div>

        <div id="parameter" class="mt-5 text-white">margin</div>
        {{-- parametre --}}
        <div style="margin-top: 10px" class="container mt-3 ">
            <h2 style="font-weight: bold;color:#2042be">{{ GoogleTranslate::trans('PARAMÈTRES', \App::getLocale()) }}</h2>
            <span class="mt-2 ">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">{{ GoogleTranslate::trans('Article', \App::getLocale()) }}</th>
                            <th scope="col">{{ GoogleTranslate::trans('Unité', \App::getLocale()) }}</th>
                            <th scope="col">{{ GoogleTranslate::trans('Paramètre', \App::getLocale()) }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($parametres as $parametre)
                            <tr>
                                <th scope="row">{{ GoogleTranslate::trans($parametre->Article , \App::getLocale()) }}</th>
                                <td>{{ GoogleTranslate::trans( $parametre->Unité , \App::getLocale()) }}</td>
                                <td>{{ GoogleTranslate::trans( $parametre->Paramètre , \App::getLocale()) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </span>
        </div>
    </section>
<br>
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
