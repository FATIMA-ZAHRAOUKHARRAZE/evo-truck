@extends('layout.navbar')
@section('seo')
    <title>EVO MACHINERY</title>
    <meta name="description"
        content="EVO est une société multinationale avec la gamme la plus complète de produits concurrentiels et influents dans l'industrie des machines de construction.">
    <meta name="keywords"
        content="EVO Machinery, machines de construction, équipements de construction, excavatrices, chargeuses,véhicules spéciaux, engins de chantier, machines portuaires, équipements de levage, machines de terrassement, machines d'assainissement, composants de machine,construction,Maroc,industrie minière, machines de levage, machines de terrassement,station de concassage et criblage,véhicules spéciaux">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="author" content="EVO MACHINERY">
    <link rel="canonical" href="https://evo-machinery.com/">
    <meta property="og:title" content="EVO MACHINERY - Accueil">
    <meta property="og:description" content="EVO MACHINERY - Accueil">
    <meta property="og:type" content="website">
@endsection
@section('content')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

    <div class="popup-overlay" id="popup">
        <div class="popup-blur-area">
            <div class="popup-content">
                <button class="close-btn" id="closePopupBtn">&times;</button>
                <h2>Subscribe to Our Newsletter</h2>
                <p>Stay updated with our latest products and news!</p>
                <form action="{{ url('/subscribe') }}" method="post" class="subscribe-form" id="subscribeForm">
                    @csrf
                    <input type="email" name="email" class="email-input" placeholder="Enter your email address"
                        required>
                    <button type="submit" class="btn subscribe-button ">Subscribe</button>
                    <div id="formMessage" style="margin-top: 10px; display: none;"></div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const popup = document.getElementById('popup');
        const closeBtn = document.getElementById('closePopupBtn');
        const form = document.getElementById('subscribeForm');
        const formMessage = document.getElementById('formMessage');

        // Function to set cookie
        function setCookie(name, value, days) {
            let expires = "";
            if (days) {
                const date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }

        // Function to get cookie
        function getCookie(name) {
            const nameEQ = name + "=";
            const ca = document.cookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) === ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        // Show popup after 2 seconds if no cookie exists
        window.addEventListener('DOMContentLoaded', () => {
            if (!getCookie('newsletter_subscribed')) {
                setTimeout(() => {
                    popup.style.display = 'flex';
                }, 3000);
            }
        });

        // Close when clicking the "Close" button
        closeBtn.addEventListener('click', () => {
            popup.style.display = 'none';
            // Set cookie for 30 days when user closes the popup
            setCookie('newsletter_subscribed', 'closed', 30);
        });

        // Close when clicking outside the popup content
        popup.addEventListener('click', (e) => {
            if (e.target === popup) {
                popup.style.display = 'none';
                // Set cookie for 30 days when user clicks outside
                setCookie('newsletter_subscribed', 'closed', 30);
            }
        });

        // Handle form submission with AJAX
        form.addEventListener('submit', (e) => {
            e.preventDefault();

            // Show loading state
            const submitBtn = form.querySelector('.subscribe-button');
            submitBtn.disabled = true;
            submitBtn.textContent = 'Subscribing...';
            formMessage.style.display = 'none';

            // Get form data
            const formData = new FormData(form);

            // AJAX request
            fetch(form.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        formMessage.textContent = data.message || 'Thank you for subscribing!';
                        formMessage.style.color = 'green';
                        formMessage.style.display = 'block';

                        // Set cookie for 365 days when successfully subscribed
                        setCookie('newsletter_subscribed', 'subscribed', 365);

                        // Clear form and hide popup after 2 seconds
                        setTimeout(() => {
                            form.reset();
                            popup.style.display = 'none';
                        }, 2000);
                    } else {
                        formMessage.textContent = data.message || 'Subscription failed. Please try again.';
                        formMessage.style.color = 'red';
                        formMessage.style.display = 'block';
                    }
                })
                .catch(error => {
                    formMessage.textContent = 'An error occurred. Please try again later.';
                    formMessage.style.color = 'red';
                    formMessage.style.display = 'block';
                })
                .finally(() => {
                    submitBtn.disabled = false;
                    submitBtn.textContent = 'Subscribe';
                });
        });
    </script>
    <!-- partie carousel -->
    <div id="carousel" class="carousel slide carousel-custom" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block" src="{{ asset('images\EXCAVATORS 2.png') }}" alt="evo Slide 1">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="{{ asset('images\LOADERS 1.png') }}" alt="evo Slide 1">

            </div>
            <div class="carousel-item">
                <img class="d-block" src="{{ asset('images\PECIAL VEUICLE.png') }}" alt="evo Slide 1">

            </div>
            <div class="carousel-item">
                <img class="d-block" src="{{ asset('images\Aerial Work 2.png') }}" alt="evo Slide 1">

            </div>
            <div class="carousel-item">
                <img class="d-block" src="{{ asset('images\PORT MACHINERY 2.png') }}" alt="evo Slide 1">

            </div>
        </div>
        <a class="carousel-control-prev custom-control" href="#carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next custom-control" href="#carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>

    <!-- Section Services -->
    <div class="container-fluid services-section my-5">
        <div class="row justify-content-center text-center">
            <div class="col-md-3 service-item" data-aos="fade-up">
                <div class="service-card">
                    <i class="fas fa-tractor service-icon"></i>
                    <h3>ENGINS<br>INDUSTRIELLES</h3>
                </div>
            </div>
            <div class="col-md-3 service-item" data-aos="fade-up">
                <div class="service-card">
                    <i class="fas fa-truck service-icon"></i>
                    <h3>CAMIONS<br>SEMI-REMORQUES</h3>
                </div>
            </div>
            <div class="col-md-3 service-item" data-aos="fade-up">
                <div class="service-card">
                    <i class="fas fa-cogs service-icon"></i>
                    <h3>PIECES<br>DÉTACHÉES</h3>
                </div>
            </div>
            <div class="col-md-3 service-item" data-aos="fade-up">
                <div class="service-card">
                    <i class="fas fa-tools service-icon"></i>
                    <h3>SERVICES /<br>MAINTENANCE</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Pourquoi EVO-MACHINERY -->
    <div class="container-fluid why-evo-section my-5 container">
        <div class="row align-items-center">
            <div class="col-md-6" data-aos="fade-right">
                <h2 class="why-title">POURQUOI<br>EVO-MACHINERY?</h2>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <ul class="why-list">
                    <li><i class="fas fa-check"></i> Fiabilité des machines</li>
                    <li><i class="fas fa-check"></i> Produits verifiés et testés</li>
                    <li><i class="fas fa-check"></i> Accompagnement technique</li>
                    <li><i class="fas fa-check"></i> Livraison rapide et SAV</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- partie about -->
    <div class="about" id="">
        <div class="ab-content">
            <h2 data-aos="fade-up" class="text-center about-title">{{ translate('À propos') }}
            </h2>
            <P data-aos="fade-up">
                {{ translate("Fondée en 2000, EVO est une société multinationale avec la gamme la plus complète de produits concurrentiels et influents dans l'industrie des machines de construction. Notre activité couvre huit domaines clés: machines de construction, camions lourds, machines d'exploitation minière,machines de levage,machines de terrassement,machines d'assainissement, composants de machine, construction, finances, et l'industrie des TIC.") }}
            </P>
        </div>
    </div>
    <!-- afficher le texte -->
    <div class="my-5 text-center ab-div">
        <h2 data-aos="fade-up">{{ translate('Nos produits') }}
        </h2>
        <p data-aos="fade-up">
            {{ translate('EVO MACHINERY est l\'un des principaux fabricants et fournisseurs d\'équipements d\'ingénierie de construction au Maroc.', app()->getLocale()) }}
        </p>
    </div>
    <!-- Code pour la partie produit -->
    <div class="container w-product">
        <div class="row justify-content-center mt-[50px]" data-aos="fade-up">
            @forelse ($categories as $categorie)
                <div data-aos="fade-up" class="mb-4 col-5-custom div1">
                    <div class="cardStyle div2">
                        <a href="{{ url('product/' . $categorie->id) }}" class="text-decoration-none">
                            <img src="{{ asset('images/' . $categorie->img_cat) }}" class="card-img-top"
                                alt="evo Product Image">
                            <div class="text-center card-body lastdiv">
                                <h4 class="card-title">
                                    {{ translate($categorie->nom_cat) }}
                                </h4>
                            </div>
                        </a>
                    </div>
                </div>

            @empty
            @endforelse
        </div>
    </div>
@endsection
