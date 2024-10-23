<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="stylesheet" href={{ asset('css/nav.css') }}>
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
    <!--  le code pour le navbar -->
    <nav>
        <div class="logo">
            <img src="{{ asset('logo.png') }}" alt="">
        </div>
        <ul id="menuList">
            <li> <a href="" class="menu-item">Home</a>
                <div class="info-bar">
                    <ul>
                        <li><a href="">link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>

                    </ul>
                    <ul>
                        <li><a href="">link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>

                    </ul>
                    <ul>
                        <li><a href="">link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>

                    </ul>

                </div>
            </li>
            <li> <a href="" class="menu-item">About</a>
                <div class="info-bar">
                    <ul>
                        <li><a href="">link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>

                    </ul>
                    <ul>
                        <li><a href="">link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>

                    </ul>
                    <ul>
                        <li><a href="">link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>

                    </ul>

                </div>
            </li>
            <li><a href="">Services</a>
                <div class="info-bar">
                    <ul>
                        <li><a href="">link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>

                    </ul>
                    <ul>
                        <li><a href="">link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>

                    </ul>
                    <ul>
                        <li><a href="">link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>

                    </ul>

                </div>
            </li>
            <li><a href="">Product</a>
                <div class="info-bar">
                    <ul>
                        <li><a href="">link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>

                    </ul>
                    <ul>
                        <li><a href="">link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>

                    </ul>
                    <ul>
                        <li><a href="">link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>

                    </ul>

                </div>
            </li>
            <li><a href="">Contact</a>
                <div class="info-bar">
                    <ul>
                        <li><a href="">link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>

                    </ul>
                    <ul>
                        <li><a href="">link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>

                    </ul>
                    <ul>
                        <li><a href="">link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>
                        <li><a href="">link link bla bla bla</a></li>

                    </ul>

                </div>
            </li>
            <li><a style="color: white" href=""><i class="fa-solid fa-language"></i></a>
                <div class="info-bar" style=" width: auto">
                    <ul>
                        <li><a href="">arab</a></li>
                        <li><a href="">francais</a></li>
                        <li><a href="">anglais</a></li>

                    </ul>
                </div>
            </li>
        </ul>
        <div class="menu-icon" onclick="toggleMenu()">
            <i class="fa-solid fa-bars"></i>
        </div>
    </nav>
    <section>
        <!-- le code pour banner image --->
        <div id="carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('images/Original.png') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('images/Original.png') }}" alt="Second slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
        <!--code pour la partie product--->
        <div class="container">
            <h2 class="text-center" style="font-size: 20px;margin-top:20px">PRODUCTS</h2>
            <div class="row justify-content-center">
                <div class="col-12 col-sm-2 ">
                    <div class="card">
                        <img src="{{ asset('images/Original.png') }}" class="card-img-top" alt="Excavators">
                        <div class="card-body">
                            <h5 class="card-title">Excavators</h5>
                            <p class="card-text">XCMG is dedicated to its core value of “Taking Great Responsibilities,
                                Acting With Great Morals.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-2 ">
                    <div class="card">
                        <img src="{{ asset('images/Original.png') }}" class="card-img-top" alt="Hoisting Machinery">
                        <div class="card-body">
                            <h5 class="card-title">Hoisting Machinery</h5>
                            <p class="card-text">XCMG is a champion of righteousness and justice, takes an active
                                interest in public charities and welfare.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-2 ">
                    <div class="card">
                        <img src="{{ asset('images/Original.png') }}" class="card-img-top" alt="Special Vehicle">
                        <div class="card-body">
                            <h5 class="card-title">Special Vehicle</h5>
                            <p class="card-text">As part of its commitment to implementing the “Going Global” strategy,
                                XCMG has established a product sales.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-2">
                    <div class="card">
                        <img src="{{ asset('images/Original.png') }}" class="card-img-top" alt="Loaders">
                        <div class="card-body">
                            <h5 class="card-title">Loaders</h5>
                            <p class="card-text">XCMG has integrated technological innovation.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-2">
                    <div class="card">
                        <img src="{{ asset('images/Original.png') }}" class="card-img-top" alt="Road Machinery">
                        <div class="card-body">
                            <h5 class="card-title">Road Machinery</h5>
                            <p class="card-text">Guided by its strategic vision of “achieving revenue of RMB 100
                                Billion.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                        <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                        <p><a class="text-white" href="#">MDBootstrap</a></p>
                        <p><a class="text-white" href="#">MDWordPress</a></p>
                        <p><a class="text-white" href="#">BrandFlow</a></p>
                        <p><a class="text-white" href="#">Bootstrap Angular</a></p>
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
<script>
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
