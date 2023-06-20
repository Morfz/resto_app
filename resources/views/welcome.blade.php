<x-guest-layout>
    <div class="back-top" title="Go to top">
        <ion-icon name="caret-up-outline"></ion-icon>
    </div>


    <!-- 
        SERVICE
    -->
    <section class="services padding-2" id="chefs">
        <h3 class="subtitle">Flavors For Royalty</h3>
        <h2 class="section-title">We Offer Top Notch</h2>
        <p class="paragraph">The best social network is a table full of good food and surrounded by people you love.
            We cook with love so you can eat with a conscience.</p>
        <div class="services-box">
            @foreach ($categories as $category)
                <div class="service">
                    <picture>
                        <img src="{{ Storage::url($category->image) }}">
                    </picture>
                    <h2>{{ $category->name }}</h2>
                    <button onclick="window.location.href='{{ route('menus.index') }}'">View Menu</button>
                </div>
            @endforeach
        </div>
    </section>


    <!-- 
        ABOUT 
    -->
    <section class="about padding-2" id="about">
        <div class="about__info">
            <h3 class="subtitle">Our Story</h3>
            <h2 class="section-title">Every Flavor Tells a Story</h2>
            <p class="paragraph">Grilli® challenges the boundaries of cuisine by drawing its influences from the
                culinary roots of our team members. We combine traditional and innovative techniques to create
                unique offerings using local ingredients in all of its dishes. Grilli® is based on hospitality with
                our staff's commitment to provide you with a memorable experience every time you walk through the
                door.</p>
            <h3 class="highlight">Book Through Call</h3>
            <strong>+80 (400) 123 4567</strong>
            <button class="btn" data-text="Read more" onclick="window.location.href='{{ route('about.index') }}'">
                <span>Read more</span>
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
        @if ($randomMenu)
            <div class="special__image">
                <img src="{{ Storage::url($randomMenu->image) }}" alt="Special dish banner">
            </div>
            <div class="special__info">
                <img src="./img/badge-1.png" alt="Badge">
                <h2 class="subtitle">Special Dish</h2>
                <h1 class="section-title">{{ $randomMenu->name }}</h1>
                <p class="paragraph">{{ $randomMenu->description }}</p>
                <div class="price">
                    <span>Hapus Ato Tidak</span>
                    <span>Rp{{ $randomMenu->price }}</span>
                </div>
                <button class="btn" data-text="View All Menu" onclick="window.location.href='{{ route('menus.index') }}'">
                    <span>View All Menu</span>
                </button>
            </div>
        @endif
    </section>
    


    <!-- 
        MENU
    -->
    <section class="menu padding-2" id="menu">
        <h3 class="subtitle over-slider">Special Selection</h3>
        <h2 class="section-title over-slider">Delicious Menu</h2>
        <div class="menu-box over-slider">
            @if ($specials && $specials->menus->count() > 0)
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
            @endif
        </div>
    
        <button class="btn over-slider" data-text="View All Menu" onclick="window.location.href='{{ route('menus.index') }}'">
            <span>View All Menu</span>
        </button>
    
        <img src="./img/shape-5.png" width="921" height="1036" loading="lazy" alt="shape" class="shape shape-2">
        <img src="./img/shape-6.png" width="700" height="800" loading="lazy" alt="shape" class="shape shape-3">
    </section>
    


    <!-- 
        TESTIMONIALS
    -->
    <section class="testi padding-2" id="contact">
        <h2 class="section-title"><span>”</span>I wanted to thank you for inviting me down for that amazing dinner
            the other night. The food was extraordinary.</h2>
        <div class="testi__separator">
            <span></span><span></span><span></span>
        </div>
        <div class="avatar">
            <img src="./img/testi-avatar.jpg" alt="Avatar image">
            <h3 class="subtitle">Sam Jhonson</h3>
        </div>
    </section>
</x-guest-layout>