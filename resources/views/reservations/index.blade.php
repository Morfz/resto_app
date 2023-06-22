<x-guest-layout>
    <section class="reservation">
        <form method="POST" action="{{ route('reservations.store') }}">
            @csrf
            <h2 class="section-title">Online Reservation</h2>
            <p class="paragraph">Booking request <a href="tel:+88123123456">+88-123-123456</a> or fill out the
                order form</p>
            <div class="inputs">
                <div>
                    <input class="input-field" type="text" value="{{ $reservation->name ?? ''}}" id="name" name="name" placeholder="Your Name" autocomplete="off" required>
                    <input class="input-field" type="email" value="{{ $reservation->email ?? ''}}" id="email" name="email" placeholder="Email" autocomplete="off" required>
                    <input class="input-field" type="text" value="{{ $reservation->phone ?? ''}}" id="phone" name="phone" placeholder="Phone Number" autocomplete="off" required>
                </div>
                <div>
                    <span>
                        <ion-icon name="person-outline"></ion-icon>
                        <select id="guests" name="guests" class="input-field" required>
                            <option selected hidden>Choose Guests</option>
                            <option value="1">1 Person</option>
                            <option value="2">2 Person</option>
                            <option value="3">3 Person</option>
                            <option value="4">4 Person</option>
                            <option value="5">5 Person</option>
                            <option value="6">6 Person</option>
                            <option value="7">7 Person</option>
                            <option value="8">8 Person</option>
                        </select>
                        <ion-icon name="chevron-down-outline"></ion-icon>
                    </span>
                    <span>
                        <input class="input-field" value="{{ $reservation ? $reservation->date->format('Y-m-d H:i:s') : ''}}" type="datetime-local" id="date" name="date" min="{{ $min_date->format('Y-m-d H:i:s') }}" max="{{ $max_date->format('Y-m-d H:i:s') }}">
                    </span>
                    <span>
                        <button class="btn btn-secondary" type="submit" data-toggle="modal" data-target="#contohModal" data-text="Know you will enjoy it">
                            <span>Pilih Meja</span>
                        </button>
                    </span>
                </div>
            </div>
        </form>
    </section>
</x-guest-layout>