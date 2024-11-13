<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>EVO</title>
        <meta name="description" content="">
        <meta name="keywords" content="Evo , machinery,excavating machinery,crane,forklift,chariot élévateur,grue">
        <!-- Fonts -->
        <link rel="stylesheet" href={{ asset('css/nav.css') }}>
        <link rel="stylesheet" href={{ asset('css/product.css') }}>
        <link rel="stylesheet" href={{ asset('css/liste.css') }}>
        <link rel="icon" href="{{ asset('images/Original.png') }}">
        @yield('url')
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
            integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
        @endif
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <nav>
            <!---le logo --->
            <div class="logo">
                <a href="/"><img src="{{ asset('logo.png') }}" alt=""></a>
            </div>
            <ul id="menuList">
                <!--about --->
                <li> <a href="{{ url('/about') }}"
                        class="menu-item">{{ GoogleTranslate::trans('A propos', \App::getLocale()) }}</a>
                </li>
                {{-- solution --}}
                <li><a href="{{ url('/solution') }}">{{ GoogleTranslate::trans('Solution', \App::getLocale()) }}</a>

                </li>
                {{--products --}}
               <li class="web-products">
    <a style="color: white;" href="#">{{ GoogleTranslate::trans('Produits', \App::getLocale()) }}</a>
    <div class="info-bar">
        <div class="produit-header d-flex justify-content-between align-items-center flex-wrap">
            <h5 style="margin: 0; flex: 1;">
                {{ GoogleTranslate::trans('MONDE DE PRODUIT', \App::getLocale()) }}
            </h5>
            <span style="flex: 0 0 auto;">
                {{ GoogleTranslate::trans('produit', \App::getLocale()) }}
                <a href="{{ route('category.liste') }}">
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </span>
        </div>

        <!-- Liste des catégories avec regroupement automatique par ligne de 3 éléments -->
        <div class="products-list d-flex flex-column">
            @foreach ($categories->chunk(3) as $chunk)
                <div class="d-flex justify-content-around mt-2">
                    @foreach ($chunk as $categorie)
                        <div>
                            <a href="{{ url('product/' . $categorie->id) }}">
                                {{ GoogleTranslate::trans($categorie->nom_cat, \App::getLocale()) }}
                            </a>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</li>





                {{-- Mobile products --}}
                <li style="display: none;z-index:200;" class=" mobile-products nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ GoogleTranslate::trans('Produits', \App::getLocale()) }}
                    </a>
                    <ul style="height:120px;font-size:12px !important;background:#0017acdc"
                        class="dropdown-menu mobile-ul" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="text-white dropdown-item" href="{{ route('category.liste') }}">
                                {{ GoogleTranslate::trans('produit', \App::getLocale()) }}
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </li>
                        @foreach ($categories as $categorie)
                            <li>
                                <a class="text-white dropdown-item" href="{{ url('product/' . $categorie->id) }}">
                                    {{ GoogleTranslate::trans($categorie->nom_cat, \App::getLocale()) }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                <li>
                    <div class="col-md-4 w-100">
                        <select style=" background-color: rgba(255, 255, 255, 0);border:none;color:white;font-size:20px"
                            class="form-select pe-5 changeLanguage" aria-label="Language select"><i
                                class="fa-solid fa-language"></i>
                            <option style="background-color:#000099">
                                {{ GoogleTranslate::trans('Sélectionner la langue', \App::getLocale()) }}
                            </option>
                            <option style="background-color:#000099" value="en"
                                {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                            <option style="background-color:#000099" value="fr"
                                {{ session()->get('locale') == 'fr' || !session()->has('locale') ? 'selected' : '' }}>Français</option>
                        </select>
                    </div>
                </li>
            </ul>
            <div class="menu-icon" onclick="toggleMenu()">
                <i class="fa-solid fa-bars"></i>
            </div>
        </nav>
        {{-- l'affichage des view--}}
        <main class="py-2 flex-grow-1">
            @yield('content')

        </main>
        {{-- le button whatssap--}}
        <div class="whatsapp-btn-container ps-5">
            <a class="whatsapp-btn" href="https://wa.me/91999999999"><i class="fab fa-whatsapp"></i></a>
            <span>{{ GoogleTranslate::trans('Contact Us', \App::getLocale()) }}</span>
        </div>
        <footer class="text-center text-lg-start text-white mb-0"
            style="background: linear-gradient(to right,#2042be ,#0d2471)">
            <div class="container p-4 pb-0">
                <div class="row">
                    <!-- About Us -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold"> {{ GoogleTranslate::trans('About Us', \App::getLocale()) }}</h6>
                        <p>
                            {{ GoogleTranslate::trans(" Depuis sa création en 2000, EVO machinery s'est rapidement imposé comme l'un des leaders mondiaux du secteur des équipements de construction et des engins de levage.", \App::getLocale()) }}
                        </p>
                    </div>
                    <hr class="w-100 clearfix d-md-none" />
                    <!-- Products -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            {{ GoogleTranslate::trans('Produits', \App::getLocale()) }}</h6>
                        @foreach ($categories as $categorie)
                            <p><a class="text-white" style="text-decoration: none"
                                    href="{{ url('product/' . $categorie->id) }}">{{ GoogleTranslate::trans($categorie->nom_cat, \App::getLocale()) }}</a>
                            </p>
                        @endforeach
                    </div>
                    <hr class="w-100 clearfix d-md-none" />
                    <!-- Contact Us -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="mb-4 font-weight-bold">
                            {{ GoogleTranslate::trans('CONTACT US', \App::getLocale()) }}</h6>
                        <p><i class="fas fa-home mr-3"></i>
   <a href="https://www.google.com/maps/dir//%E8%90%AC%E5%BB%B8%E5%BB%A3%E5%A0%B4+Maxgrand+Plaza+3+Tai+Yau+St+San+Po+Kong+Hong+Kong/@22.3382773,114.1991415,6444m/data=!3m1!1e3!4m8!4m7!1m0!1m5!1m1!1s0x340406da6bfd00c1:0xbec707f31aaccdb5!2m2!1d114.1991415!2d22.3382773?entry=ttu&g_ep=EgoyMDI0MTExMC4wIKXMDSoASAFQAw%3D%3D"
      style="text-decoration: none; color: inherit;" target="_blank">
      19h Maxgrand Plaza No.3 Tai Yau Street San Po Kong, Kowloon, Hong Kong
   </a>
</p>

                           <p><i class="fas fa-envelope mr-3"></i>
   <a href="mailto:export@gmg-market.com" style="color:white;text-decoration: none">export@gmg-market.com</a>
</p>

                        <p><i class="fas fa-phone mr-3"></i>
   <a href="tel:+8619826086894" style="text-decoration: none; color: inherit;">+86 19 826 086 894</a>
</p>

                    </div>
                </div>
                <hr class="my-3">
                <div class="p-3 pt-0">
                    <div class="row d-flex align-items-center">
                        <!-- Copyright -->
                        <div class="col-md-7 col-lg-8 text-center text-md-start">
                            <div class="p-3">
                                © 2024 Copyright: <a class="text-white" href="https://evo-machinery.com">EVO.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <script>
            $('.changeLanguage').change(function(event) {
                var url = "{{ route('translate.change') }}";
                window.location.href = url + "?lang=" + $(this).val()
            })
            let menuList = document.getElementById("menuList")
            menuList.style.maxHeight = "0px";
            function toggleMenu() {
                if (menuList.style.maxHeight == "0px") {
                    menuList.style.maxHeight = "300px ";
                } else {
                    menuList.style.maxHeight = "0px";
                }
            }
        </script>
</html>
