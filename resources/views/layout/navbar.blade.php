<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- seo balises --}}
        @yield('seo')
        <!--script-->
        <script src="{{ asset('js/nav.js') }}" defer></script>
        <!-- style -->
        <link rel="stylesheet" href={{ asset('css/nav.css') }}>
        @yield('url')
        <link rel="icon" href="{{ asset('images/logo.png') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
            integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
        @endif
    </head>
    <body class="font-sans antialiased">
        {{ session()->get('locale') == null ? session()->put('locale', 'fr') : '' }}
        <nav id="nav" class="w-nav">
            <!---le logo --->
            <div id="logo" class="logo">
                <a class="img-logo" href="/"><img id="img-logo" src="{{ asset('./images/tr2.png') }}"
                        alt="evo logo"></a>
            </div>
            <ul class="nav-list" id="menuList">
                <!--welcome --->
                <li class="s"> <a href="{{ url('/') }}" class="menu-item">{{ translate('Acceuil') }}</a>
                </li>

                {{-- products --}}
                <li class="web-products">
                    <a class="nav-link dropdown-toggle pro" href="#" role="button">
                        {{ translate('Produits') }}
                    </a>
                    <ul class="pt-4 dropdown-menu kk" style="background: white;">
                        <div class="dropdown-item-group dit d-flex ">
                            @foreach ($categories->sortBy(function ($category) {
            return strlen($category->nom_cat);
        })->chunk(ceil($categories->count() / 3)) as $chunk)
                                <div class="dropdown-column me-5">
                                    @foreach ($chunk as $category)
                                        <span class="pb-2 d-flex">
                                            <a style="color:#2042be !important" class="dropdown-item rr"
                                                href="{{ url('product/' . $category->id) }}">
                                                {{ translate($category->nom_cat) }}

                                            </a>
                                            <img src="{{ asset('images/' . $category->img_cat) }}"
                                                style="width:50px;height:auto" alt="evo  category image">
                                        </span>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </ul>
                </li>
                {{-- Mobile products --}}
                <li class="mobile-products nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{ translate('Produits') }}
                    </a>
                    <ul class="ee dropdown-menu mobile-ul" aria-labelledby="navbarDropdownMenuLink">
                        @foreach ($categories->sortBy(function ($category) {
        return strlen($category->nom_cat);
    }) as $categorie)
                            <li>
                                <a class="text-white dropdown-item" href="{{ url('product/' . $categorie->id) }}">
                                    {{ translate($categorie->nom_cat) }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>

                {{-- solution --}}
                <li><a href="{{ url('/solution') }}">{{ translate('Solution') }}</a></li>
                <li> <a href="{{ url('/about') }}" class="menu-item">{{ translate('À propos') }}</a></li>
                {{-- contact --}}
                <li><a href="{{ route('contact') }}">{{ translate('Contact') }}</a>
                </li>

                <li class="mob-lang">
                    <div class="col-md-4 w-100">
                        <select class="form-select pe-5 changeLanguage" aria-label="Language select"><i
                                class="fa-solid fa-language"></i>
                            <option>
                                {{ translate('Sélectionner la langue') }}
                            </option>
                            <option value="fr"
                                {{ session()->get('locale') == 'fr' || !session()->has('locale') ? 'selected' : '' }}>
                                Français</option>
                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English
                            </option>
                            <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>Arabe
                            </option>
                        </select>
                    </div>
                </li>
            </ul>
            <div class="pc-lang" style="display: flex; justify-content: space-between; align-items: center;">
                <div class="col-md-4 w-100 change">
                    <select id="languageSelect"
                        style="color:#ffd700; cursor:pointer; padding-bottom:10px; background-color: rgba(255, 255, 255, 0); border:none; font-size:20px;"
                        class="form-select pe-5 changeLanguage" aria-label="Language select">
                        <option class="changeoption"
                            style="background-color:#000099; >
                {{ translate('Sélectionner la langue') }}
            </option>
            <option
                style="
                            background-color:#000099;" class="changeoption" value="fr"
                            {{ session()->get('locale') == 'fr' || !session()->has('locale') ? 'selected' : '' }}>
                            Français
                        </option>
                        <option style="background-color:#000099;" class="changeoption" value="en"
                            {{ session()->get('locale') == 'en' ? 'selected' : '' }}>
                            English
                        </option>
                        <option style="background-color:#000099;" class="changeoption" value="ar"
                            {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>
                            Arabe
                        </option>
                    </select>
                </div>
            </div>
            <div class="menu-icon" onclick="toggleMenu()">
                <i class="fa-solid fa-bars"></i>
            </div>
        </nav>
        {{-- l'affichage des view --}}
        <main class="main flex-grow-1">
            @yield('content')
        </main>
        {{-- le button whatssap --}}
        <div class="whatsapp-btn-container ps-5">
            <a class="whatsapp-btn" href="https://wa.me/91999999999"><i class="fab fa-whatsapp"></i></a>
            <span>{{ translate('Contactez-nous') }}</span>
        </div>
        <footer class="mb-0 text-center text-white text-lg-start"
            style="background: linear-gradient(to right,#2042be ,#0d2471)">
            <div class="container p-4 pb-0">
                <div class="row">
                    <!-- About Us -->
                    <div class="mx-auto mt-3 col-md-3 col-lg-3 col-xl-3">
                        <h6 class="mb-4 text-uppercase font-weight-bold">
                            {{ translate('À propos') }}</h6>
                        <p>
                            {{ translate(" Depuis sa création en 2000, EVO machinery s'est rapidement imposé comme l'un des leaders mondiaux du secteur des équipements de construction et des engins de levage.") }}
                        </p>
                    </div>
                    <hr class="clearfix w-100 d-md-none" />
                    <!-- Products -->
                    <div class="mx-auto mt-3 col-md-2 col-lg-2 col-xl-2">
                        <h6 class="mb-4 text-uppercase font-weight-bold">
                            {{ translate('Produits') }}</h6>
                        @foreach ($categories->take(5) as $categorie)
                            <p><a class="text-white" style="text-decoration: none"
                                    href="{{ url('product/' . $categorie->id) }}">{{ translate($categorie->nom_cat) }}</a>
                            </p>
                        @endforeach
                        <p> <a class="text-white" style="text-decoration: none"
                                href="{{ route('category.liste') }}">
                                {{ translate('voir tous') }} {{ ' ' }}<i class="fa fa-arrow-right"></i></a>
                        </p>
                    </div>
                    <hr class="clearfix w-100 d-md-none" />
                    <!-- Contact Us -->
                    <div class="mx-auto mt-3 col-md-4 col-lg-3 col-xl-3">
                        <h6 class="mb-4 font-weight-bold">
                            {{ translate('CONTACTEZ-NOUS') }}</h6>
                        <p><i class="mr-3 fas fa-home"></i>
                            <a href="https://www.google.com/maps/search/HOLLYWOOD+MONGKOK+,+KOWLOON+,+HONG+KONG/@22.317164,114.170363,20z?hl=fr-FR&entry=ttu&g_ep=EgoyMDI1MDEyMi4wIKXMDSoASAFQAw%3D%3D"
                                style="text-decoration: none; color: inherit;" target="_blank">
                                HOLLYWOOD MONGKOK , KOWLOON , HONG KONG
                            </a>
                        </p>

                        <p><i class="mr-3 fas fa-envelope"></i>
                            <a href="mailto:contact@evo-machinery.com"
                                style="color:white;text-decoration: none">contact@evo-machinery.com</a>
                        </p>
                        <p><i class="mr-3 fas fa-envelope"></i>
                            <a href="mailto:sales@evo-machinery.com"
                                style="color:white;text-decoration: none">sales@evo-machinery.com</a>
                        </p>

                        <p><i class="mr-3 fas fa-phone"></i>
                            <a href="tel:+8619826086894" style="text-decoration: none; color: inherit;">+86 19 826 086
                                894</a>
                        </p>
                    </div>
                    <!-- Search Bar (Moved after Contact Us) -->
                    <div style="width: 300px !important" class="mx-auto mt-3 col-md-2 col-lg-2 col-xl-2">
                        <h6 class="mb-4 text-uppercase font-weight-bold">
                            {{ translate('Recherche') }} </h6>
                        <div class="mt-4 mb-4 text-center search-bar col-12">
                            <form action="{{ route('category.search') }}" method="GET" class="d-inline-flex">
                                <input type="text" class="form-control form-control-lg search-input"
                                    name="query" placeholder="modèle de produit.." aria-label="Search"
                                    style=" border: 1px solid #ccc; padding: 10px;">
                                <button type="submit" class="btn btn-primary btn-lg" style=" padding: 10px 20px;">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- Newsletter -->
                </div>
                <hr class="my-3">
                <div class="p-3 pt-0">
                    <div class="row d-flex align-items-center justify-content-between">
                        <!-- Copyright -->
                        <div class="col-md-4 text-md-start">
                            <div class="p-3">
                                © 2025 Copyright: <a class="text-white"
                                    href="https://evo-machinery.com">evo-machinery.com</a>
                            </div>
                        </div>
                        <!-- Réseaux sociaux -->
                        <div class="text-center col-md-4">
                            <h6 class="mb-3 text-uppercase font-weight-bold">{{ translate('Suivez-nous') }}</h6>
                            <div class="social-links">
                                <a href="#" class="text-white social-icon"
                                    style="font-size: 1.5rem; transition: all 0.3s ease;text-decoration: none;">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="https://www.tiktok.com/@evomachinery?lang=fr" class="text-white social-icon"
                                    style="font-size: 1.5rem; transition: all 0.3s ease;text-decoration: none;">
                                    <i class="fab fa-tiktok"></i>
                                </a>
                                <a href="#" class="text-white social-icon"
                                    style="font-size: 1.5rem; transition: all 0.3s ease;text-decoration: none;">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://www.youtube.com/@EVO-MACHINERY" class="text-white social-icon"
                                    style="font-size: 1.5rem; transition: all 0.3s ease;text-decoration: none;">
                                    <i class="fab fa-youtube"></i>
                                </a>
                                <a href="#" class="text-white social-icon"
                                    style="font-size: 1.5rem; transition: all 0.3s ease;text-decoration: none;">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                        <!-- Newsletter -->
                        <div class="col-md-4">
                            <h6 class="mb-3 text-uppercase font-weight-bold">Newsletter</h6>
                            <p class="mb-3 small">
                                {{ translate('Inscrivez-vous à notre newsletter pour recevoir nos dernières actualités') }}
                            </p>
                            <form action="{{ url('/subscribe') }}" method="post">
                                @csrf
                                <div class="input-group">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="{{ translate('Votre email') }}" required
                                        style="border-radius: 20px 0 0 20px; border: none;">
                                    <button class="btn btn-primary" type="submit"
                                        style="border-radius: 0 20px 20px 0; padding: 0.375rem 1.5rem;">
                                        {{ translate('S\'inscrire') }}
                                    </button>
                                    @if(session()->has('error'))
                                    <div class="alert alert-danger">
                                     {{ session()->get('error') }}
                                    </div>
                                    @endif

                                    @if(session()->has('success'))
                                    <div class="alert alert-success">
                                     {{ session()->get('success') }}
                                    </div>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </body>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SWZLXLQ687"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-SWZLXLQ687');
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $('.changeLanguage').change(function(event) {
            var url = "{{ route('translate.change') }}";
            window.location.href = url + "?lang=" + $(this).val()
        })
        let menuList = document.getElementById("menuList")
        menuList.style.minHeight = "0px";

        function toggleMenu() {
            if (menuList.style.minHeight == "0px") {
                menuList.style.minHeight = "100vh ";
            } else {
                menuList.style.minHeight = "0px";
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <style>
        .social-icon {
            padding: 0 5px;
        }
    </style>

</html>