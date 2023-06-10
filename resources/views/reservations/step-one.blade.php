<!DOCTYPE html>
<html>
<head>
    <title>Contoh Pop-up Modal</title>
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
</head>
<body>
    <h1>Contoh Pop-up Modal</h1>

    <!-- Button untuk membuka modal -->
    <button onclick="openModal()">Buka Modal</button>

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
</body>
</html>


<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap"
            rel="stylesheet">
        <link rel="preload" as="image" href="./img/hero-slider-1.jpg">
        <link rel="preload" as="image" href="./img/hero-slider-2.jpg">
        <link rel="preload" as="image" href="./img/hero-slider-3.jpg">
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
        <script defer src="./js/app.js"></script>
        <link rel="shortcut icon" href="./img/favicon.svg" type="image/svg+xml">
        <title>Warung Banjar ~ Kuliner Khas Banjar</title>
    </head>
    <body>
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
            </form>
        </section>
    </body>
</html> -->