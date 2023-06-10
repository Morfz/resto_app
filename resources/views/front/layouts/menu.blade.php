<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap"
        rel="stylesheet">
    <link rel="preload" as="image" href="./img/hero-slider-1.jpg">
    <link rel="preload" as="image" href="./img/hero-slider-2.jpg">
    <link rel="preload" as="image" href="./img/hero-slider-3.jpg">
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
    <script defer src="./js/app.js"></script>
    <link rel="shortcut icon" href="./img/favicon.svg" type="image/svg+xml">
    <title>Warung Banjar ~ Kuliner Khas Banjar</title>
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
</head>

<body>
    <div class="container" id="home">
        <!-- 
            PRELOAD
        -->
        <div class="preload">
            <div class="preload-circle"></div>
            <p>Warung Banjar</p>
        </div>


        <div class="primary-screen">
            <!-- 
                TOPBAR 
            -->
            <div class="topbar padding-2 over-slider">
                <div class="topbar-section">
                    <div class="topbar__item">
                        <ion-icon name="location-outline"></ion-icon>
                        <p>Jl. Brigjen Jalan Hasan Basri, Pangeran, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan 70123</p>
                    </div>
                    <div class="separator"></div>
                    <div class="topbar__item">
                        <ion-icon name="time-outline"></ion-icon>
                        <p>Buka : 8.00 am to 10.00 pm</p>
                    </div>
                </div>
                <div class="topbar-section">
                    <div class="topbar__item">
                        <ion-icon name="call-outline"></ion-icon>
                        <p>+62 882 4541 1080</p>
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
                <img src="./img/logo-dummy.svg" width="160" height="50" alt="Grilli Logo">
                <div class="nav__items">
                    <a href="#home" class="nav-items--active">Beranda</a>
                    <a href="#menu">Menu</a>
                    <a href="#about">Tentang Kami</a>
                    <a href="#chefs">Koki Kami</a>
                    <a href="#contact">Kontak</a>
                </div>
                <div class="nav-right">
                    <button class="btn btn-secondary" data-text="Temukan Meja">
                        <span>Temukan Meja</span>
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
                    <a href="#home" class="nav-items--active"><span>Beranda</span></a>
                    <a href="#menu"><span>Menu</span></a>
                    <a href="#about"><span>Tentang Kami</span></a>
                    <a href="#chefs"><span>Koki Kami</span></a>
                    <a href="#contact"><span>Kontak</span></a>
                </div>
                <h2>Kunjungi Kami</h2>
                <p>Jl. Brigjen Jalan Hasan Basri, Pangeran, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan 70123</p>
                <p>Buka : 8.00 am to 10.00 pm</p>
                <p>warungbanjar@gmail.com</p>
                <div class="separator"></div>
                <h3 class="highlight">Permintaan Pemesanan</h3>
                <strong>
                    <a href="tel:+88123123456">+62-882-4541-1080</a>
                </strong>
            </aside>
            <div class="aside-overlay"></div>

        <!-- 
            SPECIAL DISH 
        -->
        <section class="special-dish">
            <div class="special__image">
                <img src="./img/special-dish-banner.jpg" alt="Special dish banner">
            </div>
            <div class="special__info">
                <h2 class="subtitle">Hidangan Spesial</h2>
                <h1 class="section-title">Soto Banjar</h1>
                <p class="paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras fermentum diam vel ligula sodales porta. 
                    In pharetra in nisi vitae efficitur. Phasellus turpis mi, tincidunt quis consectetur et, blandit maximus nibh. 
                    Nullam vitae enim non elit mollis porttitor quis elementum diam.
                </p>
                <div class="price">
                    <span>Rp50.000</span>
                    <span>Rp25.000</span>
                </div>
                <button class="btn" data-text="View All Menu">
                    <span>View All Menu</span>
                </button>
            </div>
        </section>


        <!-- 
            MENU
        -->
        <section class="menu padding-2" id="menu">
            <h3 class="subtitle over-slider">Rekomendasi Spesial</h3>
            <h2 class="section-title over-slider">Menu Populer</h2>
            <div class="menu-box over-slider"></div>

            <button class="btn over-slider" data-text="View All Menu">
                <span>View All Menu</span>
            </button>

            <img src="./img/shape-5.png" width="921" height="1036" loading="lazy" alt="shape" class="shape shape-2">
            <img src="./img/shape-6.png" width="700" height="800" loading="lazy" alt="shape" class="shape shape-3">
        </section>
        <div class="container">
            <h2>Dynamic Tabs</h2>
            <p>To make the tabs toggleable, add the data-toggle="tab" attribute to each link. Then add a .tab-pane class with a unique ID for every tab and wrap them inside a div element with class .tab-content.</p>

            <ul class="nav nav-tabs" text-align="center">
                <li class="active"><a data-toggle="tab" href="#home">Breakfast</a></li>
                <li><a data-toggle="tab" href="#menu1">Drink</a></li>
                <li><a data-toggle="tab" href="#menu2">Dessert</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                <h3>Breakfast</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div id="menu1" class="tab-pane fade">
                <h3>Drink</h3>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div id="menu2" class="tab-pane fade">
                <h3>Dessert</h3>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
                <div id="menu3" class="tab-pane fade">
                <h3>Menu 3</h3>
                <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
            </div>
        </div>


        <!-- 
            STRENGTH
        -->
        <section class="strength padding-2">
            <h3 class="subtitle">Alasan Memilih Kami</h3>
            <h2 class="section-title">Kelebihan Kami</h2>
            <div class="strength-box">
                <div class="strength__item">
                    <img src="./img/features-icon-1.png" alt="Features image">
                    <h2>Makanan Higienis</h2>
                    <p>Lorem Ipsum is simply dummy printing and typesetting.</p>
                </div>
                <div class="strength__item">
                    <img src="./img/features-icon-2.png" alt="Features image">
                    <h2>Lingkungan Segar</h2>
                    <p>Lorem Ipsum is simply dummy printing and typesetting.</p>
                </div>
                <div class="strength__item">
                    <img src="./img/features-icon-3.png" alt="Features image">
                    <h2>Koki Terampil</h2>
                    <p>Lorem Ipsum is simply dummy printing and typesetting.</p>
                </div>
                <div class="strength__item">
                    <img src="./img/features-icon-4.png" alt="Features image">
                    <h2>Acara & Pesta</h2>
                    <p>Lorem Ipsum is simply dummy printing and typesetting.</p>
                </div>
            </div>
        </section>


        <!-- 
            FOOTER
        -->
        <footer>
            <div class="footer__links">
                <a href="#home">Beranda</a>
                <a href="#menu">Menu</a>
                <a href="#about">Tentang Kami</a>
                <a href="#chefs">Koki Kami</a>
                <a href="#contact">Kontak</a>
            </div>
            <div class="getInToch padding-2">
                <img src="./img/logo-dummy.svg" alt="Grilli Logo">
                <p class="text">Jl. Brigjen Jalan Hasan Basri, Pangeran, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan 70123</p>
                <a href="mailto:booking@grilli.com" class="text">warungbanjar@gmail.com</a>
                <a href="tel:+88123123456" class="text">Booking Request : +62-882-4541-1080</a>
                <p class="text">Buka : 08:00 am - 10:00 pm</p>
            </div>
            <div class="footer__links">
                <a href="https://www.facebook.com" target="_blank">Facebook</a>
                <a href="https://www.instagram.com" target="_blank">Instagram</a>
                <a href="https://twitter.com" target="_blank">Twitter</a>
                <a href="https://www.youtube.com" target="_blank">Youtube</a>
                <a href="https://www.google.com/maps" target="_blank">Google Maps</a>
            </div>
            <p class="credits">© 2023 Warung Banjar. All Rights Reserved ~ by <a
                    href="https://github.com/Morfz/resto_app.git" target="_blank">Kelompok 2</a></p>
        </footer>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>