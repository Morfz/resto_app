<x-guest-layout>
    <section class="menu padding-2" id="menu">
        <h3 class="subtitle over-slider">Special Selection</h3>
        <h2 class="section-title over-slider">Makanan Pembuka</h2>
        <div class="menu-box over-slider">
            @foreach ($makananPembuka->menus as $menu)
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

        <h2 class="section-title over-slider">Makanan Utama</h2>
        <div class="menu-box over-slider">
            @foreach ($makananUtama->menus as $menu)
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

        <h2 class="section-title over-slider">Makanan Penutup</h2>
        <div class="menu-box over-slider">
            @foreach ($makananPenutup->menus as $menu)
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

        <h2 class="section-title over-slider">Minuman Hangat</h2>
        <div class="menu-box over-slider">
            @foreach ($minumanHangat->menus as $menu)
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

        <h2 class="section-title over-slider">Minuman Dingin</h2>
        <div class="menu-box over-slider">
            @foreach ($minumanDingin->menus as $menu)
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

        <img src="./img/shape-5.png" width="921" height="1036" loading="lazy" alt="shape" class="shape shape-2">
        <img src="./img/shape-6.png" width="700" height="800" loading="lazy" alt="shape" class="shape shape-3">
    </section>
</x-guest-layout>