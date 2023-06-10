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
        <style>
        /* CSS untuk tampilan modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 0;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }
        </style>

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
                            <p>Jl. Unlam, Pangeran, Kec. Banjarmasin Utara, Kota Banjarmasin, Kalimantan Selatan 70123</p>
                        </div>
                        <div class="separator"></div>
                        <div class="topbar__item">
                            <ion-icon name="time-outline"></ion-icon>
                            <p>Monday to Saturday 08.00 am - 10.00pm</p>
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
                            {{ __('Home') }}
                        </x-nav-link>
                        <x-nav-link :href="route('menus.index')" :active="request()->routeIs('menus.index')">
                            {{ __('Menu') }}
                        </x-nav-link>
                        <x-nav-link :href="route('about.index')" :active="request()->routeIs('about.index')">
                            {{ __('About Us') }}
                        </x-nav-link>
                        <x-nav-link :href="route('contact.index')" :active="request()->routeIs('contact.index')">
                            {{ __('Contact') }}
                        </x-nav-link>
                        <x-nav-link :href="route('blog.index')" :active="request()->routeIs('blog.index')">
                            {{ __('Blog') }}
                        </x-nav-link>
                    </div>
                    <div class="nav-right">
                        <section>
                            <button class="btn" data-text="Come on!" onclick="openModal()">
                                <span>Make Reservation</span>
                            </button>
                            <span class="overlay"></span>
                            <!-- Modal -->
                            <div id="myModal" class="modal">
                                <!-- Konten modal -->
                                <div class="modal-content">
                                    <span onclick="closeModal()" style="float: right; cursor: pointer;">&times;</span>
                                        <section class="reservation">
                                        <form>
                                            <h2 class="section-title">Online Reservation</h2>
                                            <p class="paragraph">Booking request <a href="tel:+88123123456">+88-123-123456</a> or fill out the
                                                order form</p>
                                            <div class="inputs">
                                                <div>
                                                    <input class="input-field" type="text" placeholder="Your Name" autocomplete="off" required>
                                                    <input class="input-field" type="tel" placeholder="Phone Number" autocomplete="off"
                                                        inputmode="numeric" required>
                                                </div>
                                                <div>
                                                    <span>
                                                        <ion-icon name="person-outline"></ion-icon>
                                                        <select name="person" class="input-field" required>
                                                            <option value="1-Person">1 Person</option>
                                                            <option value="2-Person">2 Person</option>
                                                            <option value="3-Person">3 Person</option>
                                                            <option value="4-Person">4 Person</option>
                                                        </select>
                                                        <ion-icon name="chevron-down-outline"></ion-icon>
                                                    </span>
                                                    <input class="input-field" id="reservation-date" type="date">
                                                    <span>
                                                        <ion-icon name="time-outline"></ion-icon>
                                                        <select name="hour" class="input-field" required>
                                                            <option value="08:00am">08 : 00 am</option>
                                                            <option value="09:00am">09 : 00 am</option>
                                                            <option value="10:00am">10 : 00 am</option>
                                                            <option value="11:00am">11 : 00 am</option>
                                                            <option value="12:00am">12 : 00 am</option>
                                                            <option value="01:00pm">01 : 00 pm</option>
                                                            <option value="02:00pm">02 : 00 pm</option>
                                                            <option value="03:00pm">03 : 00 pm</option>
                                                            <option value="04:00pm">04 : 00 pm</option>
                                                            <option value="05:00pm">05 : 00 pm</option>
                                                            <option value="06:00pm">06 : 00 pm</option>
                                                            <option value="07:00pm">07 : 00 pm</option>
                                                            <option value="08:00pm">08 : 00 pm</option>
                                                            <option value="09:00pm">09 : 00 pm</option>
                                                            <option value="10:00pm">10 : 00 pm</option>
                                                        </select>
                                                        <ion-icon name="chevron-down-outline"></ion-icon>
                                                    </span>
                                                </div>
                                                <textarea class="input-field" cols="30" rows="7" placeholder="Message"></textarea>
                                            </div>
                                            <div class="reservation-right">
                                                <h2 class="section-title">Pesan Meja</h2>
                                                <div class="scrolltable">
                                                    <table cellspacing="15" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 1" id="1"/>
                                                                        <label for="1"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 2" id="2"/>
                                                                        <label for="2"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 3" id="3"/>
                                                                        <label for="3"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 4" id="4"/>
                                                                        <label for="4"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 5" id="5"/>
                                                                        <label for="5"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 6" id="6"/>
                                                                        <label for="6"></label>
                                                                    </li>
                                                                </th>
                                                            </tr>
                                                            <th></th>
                                                            <tr>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 7" id="7"/>
                                                                        <label for="7"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 8" id="8"/>
                                                                        <label for="8"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 9" id="9"/>
                                                                        <label for="9"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 10" id="10"/>
                                                                        <label for="10"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 11" id="11"/>
                                                                        <label for="11"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 12" id="12"/>
                                                                        <label for="12"></label>
                                                                    </li>
                                                                </th>
                                                            </tr>
                                                            <th></th>
                                                            <tr>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 13" id="13"/>
                                                                        <label for="13"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 14" id="14"/>
                                                                        <label for="14"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 15" id="15"/>
                                                                        <label for="15"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 16" id="16"/>
                                                                        <label for="16"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 17" id="17"/>
                                                                        <label for="17"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 18" id="18"/>
                                                                        <label for="18"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                            </tr>
                                                            <th></th>
                                                            <tr>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 19" id="19"/>
                                                                        <label for="19"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 20" id="20"/>
                                                                        <label for="20"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 21" id="21"/>
                                                                        <label for="21"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 22" id="22"/>
                                                                        <label for="22"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 23" id="23"/>
                                                                        <label for="23"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 24" id="24"/>
                                                                        <label for="24"></label>
                                                                    </li>
                                                                </th>
                                                            </tr>
                                                            <th></th>
                                                            <tr>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 25" id="25"/>
                                                                        <label for="25"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 26" id="26"/>
                                                                        <label for="26"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 27" id="27"/>
                                                                        <label for="27"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 28" id="28"/>
                                                                        <label for="28"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 29" id="29"/>
                                                                        <label for="29"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 30" id="30"/>
                                                                        <label for="30"></label>
                                                                    </li>
                                                                </th>
                                                            </tr>
                                                            <th></th>
                                                            <tr>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 31" id="31"/>
                                                                        <label for="31"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 32" id="32"/>
                                                                        <label for="32"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 33" id="33"/>
                                                                        <label for="33"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 34" id="34"/>
                                                                        <label for="34"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 35" id="35"/>
                                                                        <label for="35"></label>
                                                                    </li>
                                                                </th>
                                                                <th></th>
                                                                <th>
                                                                    <li class="seat">
                                                                        <input type="checkbox" name="seatcheckbox[]" value="Seat 36" id="36"/>
                                                                        <label for="36"></label>
                                                                    </li>
                                                                </th>
                                                            </tr>
                                                            <tr>
                                                                
                                                            </tr>
                                                            <th></th>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <button class="btn btn-secondary" type="submit" data-toggle="modal" data-target="#contohModal" data-text="Know you will enjoy it">
                                                <span>Book A Table</span>
                                            </button>
                                            <button class="btn" data-text="Come on!" onclick="closeModal()">
                                                <span>Back</span>
                                            </button>
                                        </form>
                                    </section>
                                </div>
                            </div>
                            <!-- Script JavaScript untuk mengontrol tampilan modal -->
                            <script>
                                function openModal() {
                                    document.getElementById("myModal").style.display = "block";
                                }

                                function closeModal() {
                                    document.getElementById("myModal").style.display = "none";
                                }
                            </script>
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
        <script>
            const section = document.querySelector("section"),
            overlay = document.querySelector(".overlay"),
            showBbtn = document.querySelector(".btn"),

            showBtn.addEventListener("click", () => sectionclassList.add("active"))
        </script>
    </body>
</html>
