<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>EVO MACHINERY</title>
        <meta name="description"
            content="Fondée en 2000, EVO est une société multinationale avec la gamme la plus complète de produits concurrentiels et influents dans l'industrie des machines de construction.">
        <meta name="keywords" content="Evo,machinery,excavating machinery,crane,forklift,chariot élévateur,grue">
        <!-- Balise canonical -->
        <link rel="canonical" href="https://evo-machinery.com/">
        <!-- Fonts -->
        @yield('url')
        <link rel="stylesheet" href={{ asset('css/nav.css') }}>
        <link rel="stylesheet" href={{ asset('css/product.css') }}>
        <link rel="stylesheet" href={{ asset('css/liste.css') }}>
        <link rel="icon" href="{{ asset('images/logo.png') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
    <style>
        /* Scrollbar track */
        ::-webkit-scrollbar {
            width: 8px;
            /* Width of the scrollbar */
            height: 12px;
            /* Height for horizontal scrollbar */
        }

        /* Scrollbar thumb (the draggable part) */
        ::-webkit-scrollbar-thumb {
            background-color: #0d2471;
            /* Color of the scrollbar thumb */
            border-radius: 2px;
            /* Rounded corners */
            border: 3px solid transparent;
            /* Optional for spacing */
        }

        /* Scrollbar track (background) */
        ::-webkit-scrollbar-track {
            background: #ffffff;
            /* Background color of the track */

        }

        .dropdown-column {

            width: 100%;

        }
    </style>

    <body class="font-sans antialiased">
        {{ session()->get('locale') == null ? session()->put('locale', 'fr') : '' }}
        <nav id="nav" class="w-nav">
            <!---le logo --->
            <div id="logo" class="logo">
                <a class="img-logo" href="/"href="/"><img id="img-logo" src="{{ asset('./images/tr2.png') }}"
                        alt=""></a>
            </div>
            <ul class="nav-list" id="menuList">
                <!--welcome --->
                <li class="s"> <a href="{{ url('/') }}"
                        class="menu-item">{{ translate('Acceuil') }}</a>
                </li>


                {{-- products --}}
                <li class="web-products">
                    <a class="nav-link dropdown-toggle pro" href="#" role="button" style="color:#ffd700">
                        {{ translate('Produits') }}
                    </a>
                    <ul class="dropdown-menu pt-4 kk"style="background: white;">
                        <div class="dropdown-item-group dit d-flex ">
                            @foreach ($categories->sortBy(function ($category) {
            return strlen($category->nom_cat); // Sort by the length of the category name
        })->chunk(ceil($categories->count() / 3)) as $chunk)
                                <div class="dropdown-column me-5">
                                    @foreach ($chunk as $category)
                                        <span class="d-flex pb-2">
                                            <a style="color:#2042be !important" class="dropdown-item rr"
                                                href="{{ url('product/' . $category->id) }}">
                                                {{ translate($category->nom_cat) }}
                                            </a>
                                            <img src="{{ asset('images/' . $category->img_cat) }}"
                                                style="width:50px;height:auto">
                                        </span>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </ul>
                </li>
                {{-- Mobile products --}}
                <li style="display: none;z-index:200;" class="mobile-products nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink"
                        style="color:#ffd700" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ translate('Produits') }}
                    </a>
                    <ul style="min-height: 300px;background: rgba(0, 23, 172, 0.863);font-size: 12px !important;position: absolute;inset: 0px auto auto 0px; margin: 0px;margin-top: 11px;left: -13px !important;transform: translate3d(-145px, 32px, 0px);"
                        class="ee dropdown-menu mobile-ul" aria-labelledby="navbarDropdownMenuLink">

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
                <!--about --->

                {{-- solution --}}
                <li><a href="{{ url('/solution') }}">{{ translate('Solution') }}</a>

                </li>
                <li> <a href="{{ url('/about') }}"
                        class="menu-item">{{ translate('À propos') }}</a>
                </li>
                {{-- contact --}}
                <li><a href="{{ route('contact') }}">{{ translate('Contact') }}</a>

                </li>



                <li class="mob-lang">
                    <div class="col-md-4 w-100">
                        <select
                            style="background-color: rgba(255, 255, 255, 0);border:none;color:#ffd700;font-size:20px"
                            class="form-select pe-5 changeLanguage" aria-label="Language select"><i
                                class="fa-solid fa-language"></i>
                            <option style="background-color:#000099">
                                {{ translate('Sélectionner la langue') }}
                            </option>
                            <option style="background-color:#000099" value="fr"
                                {{ session()->get('locale') == 'fr' || !session()->has('locale') ? 'selected' : '' }}>
                                Français</option>
                            <option style="background-color:#000099" value="en"
                                {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                            <option style="background-color:#000099" value="ar"
                                {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>Arabe</option>
                        </select>
                    </div>
                </li>
            </ul>
            <div class="pc-lang" style="display: flex; justify-content: space-between; align-items: center;">

                <div class="col-md-4 w-100 change">
                    <select id="languageSelect"
                        style="color:#ffd700; cursor:pointer; padding-bottom:10px; background-color: rgba(255, 255, 255, 0); border:none; font-size:20px;"
                        class="form-select pe-5 changeLanguage" aria-label="Language select">
                        <option class="changeoption"style="background-color:#000099; >
                {{ translate('Sélectionner la langue') }}
            </option>
            <option
                style="background-color:#000099;" class="changeoption"
                value="fr"
                {{ session()->get('locale') == 'fr' || !session()->has('locale') ? 'selected' : '' }}
            >
                 Français
            </option>
            <option
                style="background-color:#000099;" class="changeoption"
                value="en"
                {{ session()->get('locale') == 'en' ? 'selected' : '' }}
            >
                English
            </option>
            <option
                style="background-color:#000099;" class="changeoption"
                value="ar"
                {{ session()->get('locale') == 'ar' ? 'selected' : '' }}
            >
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
        <main class=" flex-grow-1">
            @yield('content')

        </main>
        {{-- le button whatssap --}}
        <div class="whatsapp-btn-container ps-5">
            <a class="whatsapp-btn" href="https://wa.me/91999999999"><i class="fab fa-whatsapp"></i></a>
            <span>{{ translate('Contactez-nous') }}</span>
        </div>
        <footer class="text-center text-lg-start text-white mb-0"
            style="background: linear-gradient(to right,#2042be ,#0d2471)">
            <div class="container p-4 pb-0">
                <div class="row">
                    <!-- About Us -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            {{ translate('À propos') }}</h6>
                        <p>
                            {{ translate(" Depuis sa création en 2000, EVO machinery s'est rapidement imposé comme l'un des leaders mondiaux du secteur des équipements de construction et des engins de levage.") }}
                        </p>
                    </div>
                    <hr class="w-100 clearfix d-md-none" />
                    <!-- Products -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">
                            {{ translate('Produits') }}</h6>
                       @foreach ($categories->take(5) as $categorie)
                            <p><a class="text-white" style="text-decoration: none"
                                    href="{{ url('product/' . $categorie->id) }}">{{ translate($categorie->nom_cat) }}</a>
                            </p>
                            @endforeach
                            <p> <a class="text-white" style="text-decoration: none"
                                    href="{{ route('category.liste') }}">
                                    {{ translate('voir tous') }} {{ ' ' }}<i
                                        class="fa fa-arrow-right"></i></a>
                            </p>
                </div>
                <hr class="w-100 clearfix d-md-none" />
                <!-- Contact Us -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="mb-4 font-weight-bold">
                        {{ translate('CONTACTEZ-NOUS') }}</h6>
                    <p><i class="fas fa-home mr-3"></i>
                        <a href="https://www.google.com/maps/search/HOLLYWOOD+MONGKOK+,+KOWLOON+,+HONG+KONG/@22.317164,114.170363,20z?hl=fr-FR&entry=ttu&g_ep=EgoyMDI1MDEyMi4wIKXMDSoASAFQAw%3D%3D"
                            style="text-decoration: none; color: inherit;" target="_blank">
                            HOLLYWOOD MONGKOK , KOWLOON , HONG KONG
                        </a>
                    </p>

                    <p><i class="fas fa-envelope mr-3"></i>
                        <a href="mailto:contact@evo-machinery.com"
                            style="color:white;text-decoration: none">contact@evo-machinery.com</a>
                    </p>
                    <p><i class="fas fa-envelope mr-3"></i>
                        <a href="mailto:sales@evo-machinery.com"
                            style="color:white;text-decoration: none">sales@evo-machinery.com</a>
                    </p>

                    <p><i class="fas fa-phone mr-3"></i>
                        <a href="tel:+8619826086894" style="text-decoration: none; color: inherit;">+86 19 826 086
                            894</a>
                    </p>

                </div>
                <!-- Search Bar (Moved after Contact Us) -->
                <div style="width: 300px !important" class="mx-auto mt-3 col-md-2 col-lg-2 col-xl-2">
                    <h6 class="mb-4 text-uppercase font-weight-bold">
                        {{ translate('Recherche') }} </h6>
                    <div class="search-bar col-12 text-center mt-4 mb-4">
                        <form action="{{ route('category.search') }}" method="GET" class="d-inline-flex">
                            <input type="text" class="form-control form-control-lg search-input" name="query"
                                placeholder="modèle de produit.." aria-label="Search"
                                style=" border: 1px solid #ccc; padding: 10px;">
                            <button type="submit" class="btn btn-primary btn-lg" style=" padding: 10px 20px;">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <hr class="my-3">
            <div class="p-3 pt-0">
                <div class="row d-flex align-items-center">
                    <!-- Copyright -->
                    <div class="col-md-7 col-lg-8 text-center text-md-start">
                        <div class="p-3">
                            © 2025 Copyright: <a class="text-white"
                                href="https://evo-machinery.com">evo-machinery.com</a>
                        </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
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
    <script>
        AOS.init({
            duration: 1000, // Durée de l'animation en ms
            easing: 'ease-in-out', // Type d'animation
            once: false,
            offset: 200,
        });
    </script>
    {{-- scroll effect on navbar --}}
    <script>
        document.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            if (window.scrollY > 40) { // Adjust scroll threshold as needed
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const imageContainer = document.getElementById('nav');
            const mainImage = document.getElementById('img-logo');
            const pro = document.querySelector('.pro');
            const languageSelect = document.getElementById('languageSelect');
            const changeoption = document.getElementById('changeoption');

            // Define the images to switch between
            const hoverImage = "{{ asset('./images/Transparent.png') }}"; // Image to display on hover/scroll
            const defaultImage = "{{ asset('./images/tr2.png') }}"; // Default image

            // Function to apply the active effects
            function applyEffects() {
                mainImage.src = hoverImage;
                pro.style.color = "#2042be";
                languageSelect.style.color = '#2042be';
                changeoption.style.color = '#2042be';
                changeoption.style.backgroundColor = 'white';
            }

            // Function to reset the default effects
            function resetEffects() {
                mainImage.src = defaultImage;
                pro.style.color = "#ffd700";
                languageSelect.style.color = '#ffd700';
                changeoption.style.color = '#ffd700';
                changeoption.style.backgroundColor = 'transparent';
            }



            // Add scroll event listener
            if (window.innerWidth > 768) {
                // Add hover event listeners
                imageContainer.addEventListener('mouseenter', applyEffects);
                imageContainer.addEventListener('mouseleave', resetEffects);
                window.addEventListener('scroll', () => {
                    if (window.scrollY > 40) {
                        applyEffects(); // Apply effects when scrolling down
                    } else {
                        resetEffects(); // Reset effects when returning to the top
                    }
                });
            }
        });
    </script>

</html>
