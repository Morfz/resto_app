<x-guest-layout>
    <section class="reservation">
        <form method="POST" action="{{ route('reservations.store') }}">
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
                    <span>
                        <input class="input-field" type="datetime-local" id="date" name="date" min="{{ $min_date->format('Y-m-d H:i:s') }}" max="{{ $max_date->format('Y-m-d H:i:s') }}">
                    </span>
                    <span>
                        <button class="btn btn-secondary" id="popupButton" data-text="Guest">
                            <span>Pilih Meja</span>
                        </button>
                        <div id="reservationContainer" class="reservation-container">
                            <ion-icon name="person-outline"></ion-icon>
                            <select id="table_id" name="table_id" class="input-field" required>
                                @foreach($tables as $table)
                                <option value="{{ $table->id }}">{{ $table->name }} ({{ $table->capacity }} Guests)</option>
                                @endforeach
                            </select>
                            <ion-icon name="chevron-down-outline"></ion-icon>
                            <div class="button-container">
                                <button id="selectButton">Pilih</button>
                                <button id="closeButton">Batal</button>
                            </div>
                        </div>
                    </span>
                </div>
            </div>
            <button class="btn btn-secondary" type="submit" data-text="Know you will enjoy it">
                <span>Book A Table</span>
            </button>
        </form>
    </section>
    <script>
        const showReservationButton = document.getElementById('showReservationButton');
        const reservationContainer = document.getElementById('reservationContainer');
        const closeButton = document.getElementById('closeButton');
        const selectButton = document.getElementById('selectButton');

        showReservationButton.addEventListener('click', function() {
            reservationContainer.style.display = 'block';
        });

        closeButton.addEventListener('click', function() {
            reservationContainer.style.display = 'none';
        });

        selectButton.addEventListener('click', function() {
            const tableSelect = document.getElementById('table_id');
            const selectedTable = tableSelect.options[tableSelect.selectedIndex].text;
            showReservationButton.querySelector('span').textContent = selectedTable;
            reservationContainer.style.display = 'none';
        });
    </script>
    
    <style>
        .reservation-container {
            display: none;
            margin-top: 20px;
        }

        .button-container {
            display: flex;
            justify-content: flex-end;
            margin-top: 10px;
        }

        .button-container button {
            margin-left: 10px;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.4);
        }
        
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            position: relative;
        }
        
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }
        
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        
        .button-container {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }
        
        .button-container button {
            margin-left: 10px;
        }
    </style>
</x-guest-layout>