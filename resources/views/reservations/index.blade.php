<x-guest-layout>
    <section class="reservation">
        <form method="POSt" action="{{ route('reservations.store') }}">
            @csrf
            <h2 class="section-title">Online Reservation</h2>
            <p class="paragraph">Booking request <a href="tel:+88123123456">+88-123-123456</a> or fill out the
                order form</p>
            <div class="inputs">
                <div>
                    <input class="input-field" type="text" id="name" name="name" placeholder="Your Name" autocomplete="off" required>
                    <input class="input-field" type="email" id="email" name="email" placeholder="Email" autocomplete="off" required>
                    <input class="input-field" type="text" id="phone" name="phone" placeholder="Phone Number" autocomplete="off" required>
                </div>
                <div>
                    <span>
                        <ion-icon name="person-outline"></ion-icon>
                        <select id="guests" name="guests" class="input-field" required>
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
                    <input class="input-field" type="datetime-local" id="date" name="date" min="{{ $min_date->format('Y-m-d H:i:s') }}" max="{{ $max_date->format('Y-m-d H:i:s') }}">
                    <span>
                        <button class="btn btn-secondary" id="popupButton" data-text="Know you will enjoy it">
                            <span>Pilih Meja</span>
                        </button>
                        <div id="popupContainer" style="display: none;">
                            <!-- Konten pop-up di sini -->
                            <ion-icon name="person-outline"></ion-icon>
                            <select id="table_id" name="table_id" class="input-field" required>
                                @foreach($tables as $table)
                                    <option value="{{ $table->id }}">{{ $table->name }} ({{ $table->capacity }} Guests)</option>
                                @endforeach
                            </select>
                            <ion-icon name="chevron-down-outline"></ion-icon>
                            <button id="closeButton">Tutup Pop-up</button>
                        </div>  
                    </span>
                </div>
            </div>
            <button class="btn btn-secondary" type="submit" data-text="Know you will enjoy it">
                <span>Book A Table</span>
            </button>
        </form>
    </section>
    <style>
        #popupContainer {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            z-index: 9999;
        }
    </style>
    <script>
        var popupButton = document.getElementById('popupButton');
        var popupContainer = document.getElementById('popupContainer');
        var closeButton = document.getElementById('closeButton');
    
        popupButton.addEventListener('click', function() {
            popupContainer.style.display = 'block';
        });
    
        closeButton.addEventListener('click', function() {
            popupContainer.style.display = 'none';
        });
    </script>        
      
</x-guest-layout>