<x-guest-layout>
    <div class="back-top" title="Go to top">
        <ion-icon name="caret-up-outline"></ion-icon>
    </div>
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
                                            <input type="checkbox" name="seatcheckbox[]" value="Seat 1" id="1"/>
                                            <label for="1"></label>
                                        </li>
                                    </th>
                                    <th></th>
                                    <th>
                                        <li class="seat">
                                            <input type="checkbox" name="seatcheckbox[]" value="Seat 1" id="1"/>
                                            <label for="1"></label>
                                        </li>
                                    </th>
                                </tr>
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
                                            <input type="checkbox" name="seatcheckbox[]" value="Seat 1" id="1"/>
                                            <label for="1"></label>
                                        </li>
                                    </th>
                                    <th></th>
                                    <th>
                                        <li class="seat">
                                            <input type="checkbox" name="seatcheckbox[]" value="Seat 1" id="1"/>
                                            <label for="1"></label>
                                        </li>
                                    </th>
                                </tr>
                                <th></th>
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
                                            <input type="checkbox" name="seatcheckbox[]" value="Seat 1" id="1"/>
                                            <label for="1"></label>
                                        </li>
                                    </th>
                                    <th></th>
                                    <th>
                                        <li class="seat">
                                            <input type="checkbox" name="seatcheckbox[]" value="Seat 1" id="1"/>
                                            <label for="1"></label>
                                        </li>
                                </tr>
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
                                            <input type="checkbox" name="seatcheckbox[]" value="Seat 1" id="1"/>
                                            <label for="1"></label>
                                        </li>
                                    </th>
                                    <th></th>
                                    <th>
                                        <li class="seat">
                                            <input type="checkbox" name="seatcheckbox[]" value="Seat 1" id="1"/>
                                            <label for="1"></label>
                                        </li>
                                    </th>
                                </tr>
                                <th></th>
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
                                            <input type="checkbox" name="seatcheckbox[]" value="Seat 1" id="1"/>
                                            <label for="1"></label>
                                        </li>
                                    </th>
                                    <th></th>
                                    <th>
                                        <li class="seat">
                                            <input type="checkbox" name="seatcheckbox[]" value="Seat 1" id="1"/>
                                            <label for="1"></label>
                                        </li>
                                    </th>
                                </tr>
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
                                            <input type="checkbox" name="seatcheckbox[]" value="Seat 1" id="1"/>
                                            <label for="1"></label>
                                        </li>
                                    </th>
                                    <th></th>
                                    <th>
                                        <li class="seat">
                                            <input type="checkbox" name="seatcheckbox[]" value="Seat 1" id="1"/>
                                            <label for="1"></label>
                                        </li>
                                    </th>
                                </tr>
                                <th></th>
                            </tbody>
                        </table>
                    </div>
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
        </section>
</x-guest-layout>