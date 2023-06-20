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
                    </span>

                </div>
                <section class="reservation-table">
                    <label for="table_id">Pilih Meja:</label>


                    @php
                        $totalSeats = count($tables);
                        $seatsPerRow = 8;
                        $totalRows = ceil($totalSeats / $seatsPerRow);
                        $currentSeat = 0;
                    @endphp
                    
                    @for ($row = 0; $row < $totalRows; $row++)
                        <div class="row" style="display: flex;">
                            @for ($seat = 0; $seat < $seatsPerRow; $seat++)
                                @if ($currentSeat < $totalSeats)
                                    @php
                                        $table = $tables[$currentSeat];
                                    @endphp
                    
                                    <div class="seat @if ($table->status == 'unavailable') sold @endif" value="{{ $table->id }}"></div>
                    
                                    @php
                                        $currentSeat++;
                                    @endphp
                                @endif
                            @endfor
                        </div>
                    @endfor

                </section>
            </div>
            <button class="btn btn-secondary" type="submit" data-text="Know you will enjoy it">
                <span>Book A Table</span>
            </button>
        </form>
    </section>

    <script>
        // const popupButton = document.getElementById('popupButton');
        // const popupContainer = document.getElementById('popupContainer');
        // const closeButton = document.getElementById('closeButton');
        // const selectButton = document.getElementById('selectButton');
    
        // popupButton.addEventListener('click', function() {
        //     popupContainer.style.display = 'block';
        // });
    
        // closeButton.addEventListener('click', function() {
        //     popupContainer.style.display = 'none';
        // });
    
        // selectButton.addEventListener('click', function() {
        //     const tableSelect = document.getElementById('table_id');
        //     const selectedTable = tableSelect.options[tableSelect.selectedIndex].text;
        //     popupButton.querySelector('span').textContent = selectedTable;
        //     popupContainer.style.display = 'none';
        // });

        const popupButton = document.getElementById('popupButton');
        const reservationSection = document.querySelector('.reservation');
        const reservationTable = document.querySelector('.reservation-table');
        
        popupButton.addEventListener('click', function() {
            reservationTable.style.display = 'block';
            reservationSection.appendChild(reservationTable);
        });

        popupButton.addEventListener('click', function() {
            reservationTable.style.display = 'block';
        });
        
        selectButton.addEventListener('click', function() {
            const tableSelect = document.getElementById('table_id');
            const selectedTable = tableSelect.options[tableSelect.selectedIndex].text;
            popupButton.querySelector('span').textContent = selectedTable;
            reservationTable.style.display = 'none';
        });

        // select meja 
        const tableSelect = document.getElementById('tableSelect');

        tableSelect.addEventListener('change', function() {
            const selectedTable = tableSelect.options[tableSelect.selectedIndex].text;
            tableSelect.previousElementSibling.textContent = selectedTable;
        });
        // end select meja 
    </script>
    
    <style>
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

        /* TABLES */
        .reservation-table {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
            background-color: var(--eerie-black-1);
            padding: 20px;
        }
        
        .reservation-table label {
            font-size: 1rem;
            color: var(--white);
            margin-bottom: 10px;
        }
        
        .reservation-table select {
            width: 100%;
            padding: 10px;
            color: var(--white);
            background: var(--eerie-black-2);
            border: 1px solid var(--white-alpha-10);
            transition: .5s ease;
        }
        
        .reservation-table select:focus {
            border-color: var(--gold-crayola);
        }
        
        .reservation-table .button-container {
            display: flex;
            justify-content: flex-end;
            margin-top: 10px;
        }
        
        .reservation-table .button-container button {
            margin-left: 10px;
        }

        /* seat  */
        /* .table-seat {
            perspective: 200px;
            margin-bottom: 30px;
          } */
          
        .seat-row {
            display: flex;
        }

        .seat {
            background-color: #444451;
            height: 26px;
            width: 32px;
            margin: 3px;
            font-size: 50px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
          }

          .seat.selected {
            background-color: green;
          }
          
          .seat.sold {
            background-color: #fff;
          }
          
          .seat:nth-of-type(2) {
            margin-right: 18px;
          }
          
          .seat:nth-last-of-type(2) {
            margin-left: 18px;
          }
          
          .seat:not(.sold):hover {
            cursor: pointer;
            transform: scale(1.2);
          }

    </style>
</x-guest-layout>