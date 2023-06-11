<x-guest-layout>
    <div class="back-top" title="Go to top">
        <ion-icon name="caret-up-outline"></ion-icon>
    </div>


    <!-- 
        SERVICE
    -->
    <section class="services padding-2" id="chefs">
        <h3 class="subtitle">Rasa yang Istimewa</h3>
        <h2 class="section-title">Kami Menawarkan yang Terbaik</h2>
        <p class="paragraph">Jaringan sosial terbaik adalah meja penuh dengan makanan enak dan dikelilingi oleh orang-orang yang Anda cintai. 
            Kami memasak dengan cinta agar Anda dapat makan dengan hati nurani.</p>
        <div class="services-box">
            @foreach ($categories as $category)
                <div class="service">
                    <picture>
                        <img src="{{ Storage::url($category->image) }}">
                    </picture>
                    <h2>{{ $category->name }}</h2>
                    <button onclick="window.location.href='{{ route('menus.index') }}'">Lihat Menu</button>
                </div>
            @endforeach
        </div>
    </section>


    <!-- 
        ABOUT 
    -->
    <section class="about padding-2" id="about">
        <div class="about__info">
        <h3 class="subtitle">Cerita Kami</h3>
            <h2 class="section-title">Kisah dalam Setiap Rasa</h2>
            <p class="paragraph">Grilli® menantang batasan-batasan kuliner dengan mengambil inspirasi dari akar-akar
                kuliner anggota tim kami. Kami menggabungkan teknik tradisional dan inovatif untuk menciptakan hidangan-hidangan
                unik menggunakan bahan-bahan lokal. Grilli® didasarkan pada keramahan dengan komitmen staf kami untuk memberikan
                pengalaman berkesan setiap kali Anda menginjakkan kaki di sini.</p>
            <h3 class="highlight">Pesan Melalui Telepon</h3>
            <strong>+80 (400) 123 4567</strong>
            <button class="btn" data-text="Read more" onclick="window.location.href='{{ route('about.index') }}'">
                <span>Selengkapnya</span>
            </button>
        </div>
        <div class="about__image">
            <div class="badge">
                <img src="./img/badge-2.png" alt="About badge">
                <img src="./img/badge-2-bg.png" alt="About badge background">
            </div>
            <picture>
                <img src="./img/about-abs-image.jpg" alt="About abs image">
            </picture>
        </div>
    </section>


    <!-- 
        SPECIAL DISH 
    -->
    <section class="special-dish">
        <div class="special__image">
            <img src="{{ Storage::url($randomMenu->image) }}" alt="Special dish banner">
        </div>
        <div class="special__info">
            <img src="./img/badge-1.png" alt="Badge">
            <h2 class="subtitle">Hidangan Spesial</h2>
            <h1 class="section-title">{{ $randomMenu->name }}</h1>
            <p class="paragraph">{{ $randomMenu->description }}</p>
            <div class="price">
                <span>Hapus Ato Tidak</span>
                <span>Rp{{ $randomMenu->price }}</span>
            </div>
            <button class="btn" data-text="View All Menu" onclick="window.location.href='{{ route('menus.index') }}'">
                <span>Lihat Semua Menu</span>
            </button>
        </div>
    </section>


    <!-- 
        MENU
    -->
    <section class="menu padding-2" id="menu">
        <h3 class="subtitle over-slider">Pilihan Spesial</h3>
        <h2 class="section-title over-slider">Menu Lezat</h2>
        <div class="menu-box over-slider">
            @foreach ($specials->menus as $menu)
                <div class="menu-item">
                    <img src="{{ Storage::url($menu->image) }}">
                    <div class="menu__info">
                        <div class="menu__info-top">
                            <h2>{{ $menu->name }}</h2>
                            <span></span>
                            <h3>Rp{{ $menu->price }}</h3>
                        </div>
                        <p>{{ $menu->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <button class="btn over-slider" data-text="View All Menu" onclick="window.location.href='{{ route('menus.index') }}'">
            <span>Lihat Semua Menu</span>
        </button>

        <img src="./img/shape-5.png" width="921" height="1036" loading="lazy" alt="shape" class="shape shape-2">
        <img src="./img/shape-6.png" width="700" height="800" loading="lazy" alt="shape" class="shape shape-3">
    </section>


    <!-- 
        TESTIMONIALS
    -->
    <section class="testi padding-2" id="contact">
        <h2 class="section-title"><span>”</span>Saya ingin berterima kasih atas undangan makan malam yang luar biasa
        beberapa waktu lalu. Makanannya luar biasa.</h2>
        <div class="testi__separator">
            <span></span><span></span><span></span>
        </div>
        <div class="avatar">
            <img src="./img/testi-avatar.jpg" alt="Avatar image">
            <h3 class="subtitle">Sam Jhonson</h3>
        </div>
    </section>
</x-guest-layout>