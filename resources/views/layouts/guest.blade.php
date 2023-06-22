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
        <link rel="stylesheet" href="{{ asset('img/hero-slider-1.jpg') }}">
        <link rel="stylesheet" href="{{ asset('img/hero-slider-2.jpg') }}">
        <link rel="stylesheet" href="{{ asset('img/hero-slider-3.jpg') }}">
        <link rel="shortcut icon" href="{{ asset ('img/favicon.svg') }}" type="image/svg+xml">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset ('css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset ('css/header.css') }}">
        <link rel="stylesheet" href="{{ asset ('css/nav.css') }}">
        <link rel="stylesheet" href="{{ asset ('css/services.css') }}">
        <link rel="stylesheet" href="{{ asset ('css/about.css') }}">
        <link rel="stylesheet" href="{{ asset ('css/special.css') }}">
        <link rel="stylesheet" href="{{ asset ('css/menu.css') }}">
        <link rel="stylesheet" href="{{ asset ('css/testi.css') }}">
        <link rel="stylesheet" href="{{ asset ('css/strength.css') }}">
        <link rel="stylesheet" href="{{ asset ('css/footer.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <!-- JS -->
        <script defer src="{{ asset ('js/app.js') }}"></script>

        <!-- Scripts -->

        <script>
            function openStepTwoModal() {
                $('#stepTwoModal').modal('show');
            }
        </script>
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
                            <p>Jl. Unlam, Pangeran, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan 70123</p>
                        </div>
                        <div class="separator"></div>
                        <div class="topbar__item">
                            <ion-icon name="time-outline"></ion-icon>
                            <p>Setiap Hari 08.00 am - 10.00pm</p>
                        </div>
                    </div>
                    <div class="topbar-section">
                        <div class="topbar__item">
                            <ion-icon name="call-outline"></ion-icon>
                            <p>+62 812 3456 7890</p>
                        </div>
                        <div class="separator"></div>
                        <div class="topbar__item">
                            <ion-icon name="mail-outline"></ion-icon>
                            <p>warungbanjar@gmail.com</p>
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
                            {{ __('Beranda') }}
                        </x-nav-link>
                        <x-nav-link :href="route('menus.index')" :active="request()->routeIs('menus.index')">
                            {{ __('Menu') }}
                        </x-nav-link>
                        <x-nav-link :href="route('about.index')" :active="request()->routeIs('about.index')">
                            {{ __('Tentang') }}
                        </x-nav-link>
                        <x-nav-link :href="route('contact.index')" :active="request()->routeIs('contact.index')">
                            {{ __('Kontak') }}
                        </x-nav-link>
                        <x-nav-link :href="route('blog.index')" :active="request()->routeIs('blog.index')">
                            {{ __('Blog') }}
                        </x-nav-link>
                    </div>
                    <div class="nav-right">
                        <section>
                            <button class="btn" data-text="Come on!" onclick="window.location.href='{{ route('reservations.index') }}'">
                                <span>Buat Reservasi</span>
                            </button>
                            <span class="overlay"></span>
                            <!-- Script JavaScript untuk mengontrol tampilan modal -->
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
                        </section>
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
                        <a href="#home" class="nav-items--active"><span>Beranda</span></a>
                        <a href="#menu"><span>Menu</span></a>
                        <a href="#about"><span>Tentang</span></a>
                        <a href="#chefs"><span>Koki Kami</span></a>
                        <a href="#contact"><span>Kontak</span></a>
                        <a href="#blog"><span>Blog</span></a>
                    </div>
                    <h2>Kunjungi Kami</h2>
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
                        <h2 reveal class="subtitle" style="--delay-item: 0">Tradisional & Higienis</h2>
                        <h1 reveal class="title" style="--delay-item: 1">Untuk cinta pada makanan lezat</h1>
                        <p reveal class="paragraph" style="--delay-item: 2">Datanglah bersama keluarga dan rasakan kegembiraan dari makanan yang menggugah selera</p>
                        <button class="btn" data-text="Lihat Menu Kami" reveal style="--delay-item: 3">
                            <span>Rasakan hidangan ini</span>
                        </button>
                    </div>

                    <div class="slider-item">
                        <div class="slider-bg"><img src="./img/hero-slider-2.jpg"></div>
                        <h2 reveal class="subtitle" style="--delay-item: 0">Pengalaman yang Menyenangkan</h2>
                        <h1 reveal class="title" style="--delay-item: 1">Rasa yang Terinspirasi oleh Musim</h1>
                        <p reveal class="paragraph" style="--delay-item: 2">Datanglah bersama keluarga dan rasakan kegembiraan dari makanan yang menggugah selera</p>
                        <button class="btn" data-text="Lihat Menu Kami" reveal style="--delay-item: 3">
                            <span>Rasakan hidangan ini</span>
                        </button>
                    </div>

                    <div class="slider-item">
                        <div class="slider-bg"><img src="./img/hero-slider-3.jpg"></div>
                        <h2 reveal class="subtitle" style="--delay-item: 0">Menakjubkan & Lezat</h2>
                        <h1 reveal class="title" style="--delay-item: 1">Dimana setiap rasa bercerita</h1>
                        <p reveal class="paragraph" style="--delay-item: 2">Datanglah bersama keluarga dan rasakan kegembiraan dari makanan yang menggugah selera</p>
                        <button class="btn" data-text="Lihat Menu Kami" reveal style="--delay-item: 3">
                            <span>Rasakan hidangan ini</span>
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
                    <a href="#home">Beranda</a>
                    <a href="#menu">Menu</a>
                    <a href="#about">Tentang</a>
                    <a href="#chefs">Koki Kami</a>
                    <a href="#contact">Kontak</a>
                    <a href="#blog">Blog</a>
                </div>
                <div class="getInToch padding-2">
                    <img src="./img/logo.svg" alt="Grilli Logo">
                    <p class="text">Jl. Unlam, Pangeran, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan 70123</p>
                    <a href="mailto:booking@grilli.com" class="text">warungbanjar@gmail.com</a>
                    <a href="tel:+88123123456" class="text">Pemesanan : +62 812 3456 7890</a>
                    <p class="text">Buka : Senin s/d Sabtu 08.00 am - 10.00pm</p>
                    <div class="footer-separator"><span></span><span></span><span></span></div>
                    <h2 class="section-title">Dapatkan Berita & Penawaran</h2>
                    <h3>Langganan kami & Dapatkan <span>25% Diskon.</span></h3>
                    <div class="subscribe">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" inputmode="email" placeholder="Email Anda" maxlength="70">
                        <button class="btn btn-secondary" data-text="Appreciated!">
                            <span>Langganan</span>
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
