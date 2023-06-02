<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

        <!-- Images -->
        <link rel="preload" as="image" href="./img/hero-slider-1.jpg">
        <link rel="preload" as="image" href="./img/hero-slider-2.jpg">
        <link rel="preload" as="image" href="./img/hero-slider-3.jpg">
        <link rel="shortcut icon" href="./img/favicon.svg" type="image/svg+xml">

        <!-- Styles -->
        <link rel="stylesheet" href="./css/styles.css">
        <link rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./css/nav.css">
        <link rel="stylesheet" href="./css/services.css">
        <link rel="stylesheet" href="./css/about.css">
        <link rel="stylesheet" href="./css/special.css">
        <link rel="stylesheet" href="./css/menu.css">
        <link rel="stylesheet" href="./css/testi.css">
        <link rel="stylesheet" href="./css/strength.css">
        <link rel="stylesheet" href="./css/footer.css">

        <!-- JS -->
        <script defer src="./js/app.js"></script>

        <!-- Scripts -->
    </head>
    <body style="height: 100vh; overflow-y: scroll;">
        <div class="container" id="home" >
            <!-- 
                PRIMARY SCREEN
            -->
            <div class="primary-screen">
                <!-- 
                    TOPBAR 
                -->
                <div class="topbar padding-2 over-slider">
                    <div class="topbar-section">
                        <div class="topbar__item">
                            <ion-icon name="location-outline"></ion-icon>
                            <p>Restaurant St, Delicious City, London 9578, UK</p>
                        </div>
                        <div class="separator"></div>
                        <div class="topbar__item">
                            <ion-icon name="time-outline"></ion-icon>
                            <p>Daily: 8.00 am to 10.00 pm</p>
                        </div>
                    </div>
                    <div class="topbar-section">
                        <div class="topbar__item">
                            <ion-icon name="call-outline"></ion-icon>
                            <p>+1 123 456 7890</p>
                        </div>
                        <div class="separator"></div>
                        <div class="topbar__item">
                            <ion-icon name="mail-outline"></ion-icon>
                            <p>booking@restaurant.com</p>
                        </div>
                    </div>
                </div>

                <!-- 
                    NAV 
                -->
                <nav class="padding-2 over-slider">
                    <img src="./img/logo.svg" width="160" height="50" alt="Grilli Logo">
                    <div class="nav__items">
                        <x-nav-link :href="route('welcome')" :active="request()->routeIs('welcome')">
                            {{ __('Home') }}
                        </x-nav-link>
                        <x-nav-link :href="route('menus.index')" :active="request()->routeIs('menus.index')">
                            {{ __('Menus') }}
                        </x-nav-link>
                        <x-nav-link :href="route('about.index')" :active="request()->routeIs('about.index')">
                            {{ __('About Us') }}
                        </x-nav-link>
                        <x-nav-link :href="route('contact.index')" :active="request()->routeIs('contact.index')">
                            {{ __('Contact') }}
                        </x-nav-link>
                    </div>
                    <div class="nav-right">
                        <button class="btn btn-secondary" data-text="Come on!" onclick="window.location.href='{{ route('reservations.step.one') }}'">
                            <span>Make Reservation</span>
                        </button>
                        <div class="aside-open">
                            <span></span><span></span><span></span>
                        </div>
                    </div>
                </nav>

                <!-- 
                    ASIDE (RESPONSIVE)
                -->
                <aside>
                    <div class="aside-close">
                        <ion-icon name="close-circle-outline"></ion-icon>
                    </div>
                    <img src="./img/logo.svg" width="160" height="50" alt="Grilli Logo">
                    <div class="nav__items">
                        <a href="#home" class="nav-items--active"><span>Home</span></a>
                        <a href="#menu"><span>Menus</span></a>
                        <a href="#about"><span>About Us</span></a>
                        <a href="#chefs"><span>Our Chefs</span></a>
                        <a href="#contact"><span>Contact</span></a>
                    </div>
                    <h2>Visit Us</h2>
                    <p>Restaurant St, Delicious City, London 9578, UK</p>
                    <p>Open: 9.30 am - 2.30pm</p>
                    <p>booking@grilli.com</p>
                    <div class="separator"></div>
                    <h3 class="highlight">Booking Request</h3>
                    <strong>
                        <a href="tel:+88123123456">+88-123-123456</a>
                    </strong>
                </aside>
                <div class="aside-overlay"></div>

                <!-- 
                    HEADER 
                -->
                <header class="padding-5">
                    <div class="slider-control slider-prev over-slider">
                        <ion-icon name="chevron-back-outline"></ion-icon>
                    </div>
                    <div class="slider-control slider-next over-slider">
                        <ion-icon name="chevron-forward-outline"></ion-icon>
                    </div>


                    <div class="slider-item">
                        <div class="slider-bg"><img src="./img/hero-slider-1.jpg"></div>
                        <h2 reveal class="subtitle" style="--delay-item: 0">Tradational & Hygine</h2>
                        <h1 reveal class="title" style="--delay-item: 1">For the love of delicious food</h1>
                        <p reveal class="paragraph" style="--delay-item: 2">Come with family & feel the joy of mouthwatering
                            food</p>
                        <button class="btn" data-text="View Our Menu" reveal style="--delay-item: 3">
                            <span>Taste the dish</span>
                        </button>
                    </div>

                    <div class="slider-item">
                        <div class="slider-bg"><img src="./img/hero-slider-2.jpg"></div>
                        <h2 reveal class="subtitle" style="--delay-item: 0">Delightful Experience</h2>
                        <h1 reveal class="title" style="--delay-item: 1">Flavors Inspired by the Seasons</h1>
                        <p reveal class="paragraph" style="--delay-item: 2">Come with family & feel the joy of mouthwatering
                            food</p>
                        <button class="btn" data-text="View Our Menu" reveal style="--delay-item: 3">
                            <span>Taste the dish</span>
                        </button>
                    </div>

                    <div class="slider-item">
                        <div class="slider-bg"><img src="./img/hero-slider-3.jpg"></div>
                        <h2 reveal class="subtitle" style="--delay-item: 0">Amazing & Delicious</h2>
                        <h1 reveal class="title" style="--delay-item: 1">Where every flavor tells a story</h1>
                        <p reveal class="paragraph" style="--delay-item: 2">Come with family & feel the joy of mouthwatering
                            food</p>
                        <button class="btn" data-text="View Our Menu" reveal style="--delay-item: 3">
                            <span>Taste the dish</span>
                        </button>
                    </div>
                </header>
            </div>

            <div class="font-sans text-gray-900 antialiased min-h-screen" >
                {{ $slot }}
            </div>
            
            <!-- 
                FOOTER
            -->
            <footer>
                <div class="footer__links">
                    <a href="#home">Home</a>
                    <a href="#menu">Menu</a>
                    <a href="#about">About us</a>
                    <a href="#chefs">Our Chefs</a>
                    <a href="#contact">Contact</a>
                </div>
                <div class="getInToch padding-2">
                    <img src="./img/logo.svg" alt="Grilli Logo">
                    <p class="text">Restaurant St, Delicious City, London 9578, UK</p>
                    <a href="mailto:booking@grilli.com" class="text">booking@grilli.com</a>
                    <a href="tel:+88123123456" class="text">Booking Request : +88-123-123456</a>
                    <p class="text">Open : 09:00 am - 01:00 pm</p>
                    <div class="footer-separator"><span></span><span></span><span></span></div>
                    <h2 class="section-title">Get News & Offers</h2>
                    <h3>Subscribe us & Get <span>25% Off.</span></h3>
                    <div class="subscribe">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" inputmode="email" placeholder="Your email" maxlength="70">
                        <button class="btn btn-secondary" data-text="Appreciated!">
                            <span>Subscribe</span>
                        </button>
                    </div>
                </div>
                <div class="footer__links">
                    <a href="https://www.facebook.com" target="_blank">Facebook</a>
                    <a href="https://www.instagram.com" target="_blank">Instagram</a>
                    <a href="https://twitter.com" target="_blank">Twitter</a>
                    <a href="https://www.youtube.com" target="_blank">Youtube</a>
                    <a href="https://www.google.com/maps" target="_blank">Google Maps</a>
                </div>
                <p class="credits">© 2023 Grilli. All Rights Reserved ~ Designed by <a
                        href="https://github.com/iannellotomas" target="_blank">iannellotomas</a></p>
            </footer>
        </div>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>
