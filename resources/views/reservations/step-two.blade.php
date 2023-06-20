<x-guest-layout>
    <section class="reservation">
        <form method="POST" action="{{ route('reservations.store.step.two') }}">
            @csrf
            <h2 class="section-title">Online Reservation</h2>
            <p class="paragraph">Booking request <a href="tel:+88123123456">+88-123-123456</a> or fill out the
                order form</p>
            <h2 class="section-title">Pilih Meja</h2>
            <h2 class="section-title">Disini Gambar letak meja</h2>
            <div class="inputs">
                <div>
                    <span>
                        <ion-icon name="person-outline"></ion-icon>
                        <select id="table_id" name="table_id" class="input-field">
                            <option selected hidden>Choose Tables</option>
                            @foreach($tables as $table)
                                <option value="{{ $table->id }}">{{ $table->name }} ({{ $table->capacity }} Guests)</option>
                            @endforeach
                        </select>
                        <ion-icon name="chevron-down-outline"></ion-icon>
                    </span>
                </div>
                <button class="btn btn-secondary" type="submit" data-text="Know you will enjoy it">
                    <span>Pilih Meja</span>
                </button>
                <span>
                    <a href="{{ route('reservations.step.one') }}" class="btn">
                        <span>Back</span>
                    </a>
                </span>
            </div>
        </form>
    </section>
</x-guest-layout>