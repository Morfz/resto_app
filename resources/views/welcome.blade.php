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
    </section>


    <!-- 
        MENU
    -->
    <section class="menu padding-2" id="menu">
        <h3 class="subtitle over-slider">Special Selection</h3>
        <h2 class="section-title over-slider">Delicious Menu</h2>
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


    <!--
        RESERVATION
    -->
    <!-- <div class="container-reservation padding-2">
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
                <button class="btn btn-secondary" data-text="Know you will enjoy it">
                    <span>Book A Table</span>
                </button>
            </form>

            <div class="reservation-right">
                <h2 class="section-title">Contact Us</h2>
                <h3 class="highlight">Booking Request</h3>
                <strong>+88-123-123456</strong>
                <div class="separator"></div>
                <h3>Location</h3>
                <p>Restaurant St, Delicious City, London 9578, UK</p>
                <h3>Lunch Time</h3>
                <p>Monday to Sunday 11.00 am - 2.30pm</p>
                <h3>Dinner Time</h3>
                <p>Monday to Sunday 05.00 pm - 10.00pm</p>
            </div>
                <div class="reservation-right">
                    <h2 class="section-title">Pesan Meja</h2>
                    <div class="scrolltable">
                        <table cellspacing="15" cellpadding="0">
                            <tbody>
                                <tr>
                                    <th>
                                        <button class="btn over-slider" data-text="1a">
                                            <span>1a</span>
                                        </button>
                                    </th>
                                    <th></th>
                                    <th>
                                        <button class="btn over-slider" data-text="2a">
                                            <span>2a</span>
                                        </button>
                                    </th>
                                    <th></th>
                                    <th>
                                        <button class="btn over-slider" data-text="3a">
                                            <span>3a</span>
                                        </button>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <button class="btn over-slider" data-text="1b">
                                            <span>1b</span>
                                        </button>
                                    </th>
                                    <th></th>
                                    <th>
                                        <button class="btn over-slider" data-text="2b">
                                            <span>2b</span>
                                        </button>
                                    </th>
                                    <th></th>
                                    <th>
                                        <button class="btn over-slider" data-text="3b">
                                            <span>3b</span>
                                        </button>
                                    </th>
                                </tr>
                                <th></th>
                                <tr>
                                    <th>
                                        <button class="btn over-slider" data-text="4a">
                                            <span>4a</span>
                                        </button>
                                    </th>
                                    <th></th>
                                    <th>
                                        <button class="btn over-slider" data-text="5a">
                                            <span>5a</span>
                                        </button>
                                    </th>
                                    <th></th>
                                    <th>
                                        <button class="btn over-slider" data-text="6a">
                                            <span>6a</span>
                                        </button>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <button class="btn over-slider" data-text="4b">
                                            <span>4b</span>
                                        </button>
                                    </th>
                                    <th></th>
                                    <th>
                                        <button class="btn over-slider" data-text="5b">
                                            <span>5b</span>
                                        </button>
                                    </th>
                                    <th></th>
                                    <th>
                                        <button class="btn over-slider" data-text="6b">
                                            <span>6b</span>
                                        </button>
                                    </th>
                                </tr>
                                <th></th>
                                <tr>
                                    <th>
                                        <button class="btn over-slider" data-text="7a">
                                            <span>7a</span>
                                        </button>
                                    </th>
                                    <th></th>
                                    <th>
                                        <button class="btn over-slider" data-text="8a">
                                            <span>8a</span>
                                        </button>
                                    </th>
                                    <th></th>
                                    <th>
                                        <button class="btn over-slider" data-text="9a">
                                            <span>9a</span>
                                        </button>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <button class="btn over-slider" data-text="7b">
                                            <span>7b</span>
                                        </button>
                                    </th>
                                    <th></th>
                                    <th>
                                        <button class="btn over-slider" data-text="8b">
                                            <span>8b</span>
                                        </button>
                                    </th>
                                    <th></th>
                                    <th>
                                        <button class="btn over-slider" data-text="9b">
                                            <span>9b</span>
                                        </button>
                                    </th>
                                </tr>
                                <th></th>
                            </tbody>
                        </table>
                    </div>
                </div>
        </section>
    </div> -->


    <!-- 
        STRENGTH
    -->
    <!-- <section class="strength padding-2">
        <h3 class="subtitle">Why Choose Us</h3>
        <h2 class="section-title">Our Strength</h2>
        <div class="strength-box">
            <div class="strength__item">
                <img src="./img/features-icon-1.png" alt="Features image">
                <h2>Hygienic Food</h2>
                <p>Lorem Ipsum is simply dummy printing and typesetting.</p>
            </div>
            <div class="strength__item">
                <img src="./img/features-icon-2.png" alt="Features image">
                <h2>Fresh Environment</h2>
                <p>Lorem Ipsum is simply dummy printing and typesetting.</p>
            </div>
            <div class="strength__item">
                <img src="./img/features-icon-3.png" alt="Features image">
                <h2>Skilled Chefs</h2>
                <p>Lorem Ipsum is simply dummy printing and typesetting.</p>
            </div>
            <div class="strength__item">
                <img src="./img/features-icon-4.png" alt="Features image">
                <h2>Event & Party</h2>
                <p>Lorem Ipsum is simply dummy printing and typesetting.</p>
            </div>
        </div>
    </section> -->


    <!-- 
        UPDATES
    -->
    <!-- <section class="updates padding-5">
        <h3 class="subtitle">Recent Updates</h3>
        <h2 class="section-title">Upcoming Event</h2>
        <div class="updates-box">
            <div class="updates__item">
                <img src="./img/event-1.jpg" alt="Updates image">
                <h3 class="subtitle">Food, Flavour</h3>
                <h2>Flavour so good you’ll try to eat with your eyes.</h2>
                <div class="tag-date">16/01/2023</div>
            </div>
            <div class="updates__item">
                <img src="./img/event-2.jpg" alt="Updates image">
                <h3 class="subtitle">Healthy Food</h3>
                <h2>Flavour so good you’ll try to eat with your eyes.</h2>
                <div class="tag-date">05/01/2023</div>
            </div>
            <div class="updates__item">
                <img src="./img/event-3.jpg" alt="Updates image">
                <h3 class="subtitle">Recipie</h3>
                <h2>Flavour so good you’ll try to eat with your eyes.</h2>
                <div class="tag-date">29/12/2022</div>
            </div>
        </div>
        <button class="btn" data-text="You'll love it">
            <span>View Our Blog</span>
        </button>
    </section> -->
</x-guest-layout>