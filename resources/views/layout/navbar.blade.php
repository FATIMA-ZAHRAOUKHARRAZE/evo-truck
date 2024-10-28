<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="stylesheet" href={{ asset('css/nav.css') }}>
        <link rel="stylesheet" href={{ asset('css/product.css') }}>
        <link rel="stylesheet" href={{ asset('css/liste.css') }}>
        @yield('url')
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
        @endif
    </head>

    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <nav>
            <div class="logo">
                <a href="/"><img src="{{ asset('logo.png') }}" alt=""></a>
            </div>
            <ul id="menuList">

                <li> <a href="{{ url('/about') }}"
                        class="menu-item">{{ GoogleTranslate::trans('A propos', \App::getLocale()) }}</a></li>
                <li><a href="">{{ GoogleTranslate::trans('Solution', \App::getLocale()) }}</a>
                    <div class="info-bar">
                        <ul>
                            <li><a href="">link bla bla bla</a></li>

                        </ul>
                    </div>
                </li>
                <li>
                    <a href="">{{ GoogleTranslate::trans('Produits', \App::getLocale()) }}</a>
                    <div class="info-bar">
                        <!-- Partie pour afficher "MONDE DE PRODUIT" et la flèche au-dessus -->
                        <div class="produit-header"
                            style="display: flex; justify-content: space-between; align-items: center;">
                            <h5 style="margin: 0;">{{ GoogleTranslate::trans('MONDE DE PRODUIT', \App::getLocale()) }}
                            </h5>
                            <span>{{ GoogleTranslate::trans('produit', \App::getLocale()) }}<a href="{{ route('category.liste') }}"><i
                                        class="fa-solid fa-arrow-right"></i></a></span>
                        </div>

                        <!-- Liste des catégories avec regroupement par 3 -->
                        @foreach ($categories->chunk(3) as $chunk)
                            <ul style="list-style: none; padding-left: 0;">
                                @foreach ($chunk as $categorie)
                                    <li>
                                        <a href="{{ url('product/' . $categorie->id) }}">{{ GoogleTranslate::trans($categorie->nom_cat , \App::getLocale()) }} </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endforeach
                    </div>

                </li>
                <li><a href="">Contact</a>
             <li>
                    <div class="col-md-4 w-100">
                        <select style=" background-color: rgba(255, 255, 255, 0);border:none;color:white;font-size:20px" class="form-select pe-5 changeLanguage" aria-label="Language select">
                            <option style="background-color:#000099" >
                               {{ GoogleTranslate::trans('Sélectionner la langue' , \App::getLocale()) }}
                            </option>
                            <option style="background-color:#000099" value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                            <option style="background-color:#000099" value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : '' }}>Français</option>
                        </select>
                    </div>
            </li>
                {{-- <select class="form-select changeLanguage">
                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : ''}}>English</option>
                            <option value="fr" {{ session()->get('locale') == 'fr' ? 'selected' : ''}}>France</option>
                        </select> --}}
            </ul>
            <div class="menu-icon" onclick="toggleMenu()">
                <i class="fa-solid fa-bars"></i>

            </div>
        </nav>
        <main class="py-2 flex-grow-1">
            @yield('content')
        </main>

        <footer class="text-center text-lg-start text-white mb-0"
            style="background: linear-gradient(to right,#2042be ,#0d2471)">
            <div class="container p-4 pb-0">
                <div class="row">
                    <!-- About Us -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">About Us</h6>
                        <p>
                            Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit
                            amet,
                            consectetur adipisicing elit.
                        </p>
                    </div>

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Products -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">{{ GoogleTranslate::trans('Produits', \App::getLocale()) }}</h6>
                        @foreach ($categories as $categorie)
                        <p><a class="text-white" href="{{ url('product/' . $categorie->id) }}">{{ GoogleTranslate::trans($categorie->nom_cat , \App::getLocale()) }}</a></p>
                        @endforeach
                    </div>
                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Useful Links -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Useful Links</h6>
                        <p><a class="text-white" href="#">Solutions</a></p>
                        <p><a class="text-white" href="#">Become an Affiliate</a></p>
                        <p><a class="text-white" href="#">Shipping Rates</a></p>
                        <p><a class="text-white" href="#">Help</a></p>
                    </div>

                    <hr class="w-100 clearfix d-md-none" />

                    <!-- Contact Us -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="mb-4 font-weight-bold">Contact Us</h6>
                        <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                        <p><i class="fas fa-envelope mr-3"></i> evo@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> + 00 00 00 00 00</p>
                        <p><i class="fas fa-print mr-3"></i> + 00 00 00 00</p>
                    </div>
                </div>

                <hr class="my-3">

                <div class="p-3 pt-0">
                    <div class="row d-flex align-items-center">
                        <!-- Copyright -->
                        <div class="col-md-7 col-lg-8 text-center text-md-start">
                            <div class="p-3">
                                © 2024 Copyright: <a class="text-white" href="#">EVO.com</a>
                            </div>
                        </div>

                        <!-- Social Media Links -->
                        <div class="col-md-5 col-lg-4 text-center text-md-end">
                            <a class="btn btn-outline-light btn-floating m-1" role="button" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-floating m-1" role="button" href="#"><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-floating m-1" role="button" href="#"><i
                                    class="fab fa-google"></i></a>
                            <a class="btn btn-outline-light btn-floating m-1" role="button" href="#"><i
                                    class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    </body>
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
