<section class="reservation" id="reservation">
    <div class="container">

        <div class="form reservation-form bg-black-10">

            <form action="{{ route('storeBooking') }}" method="POST" class="form-left">
                @csrf
                <h2 class="headline-1 text-center">Online Reservation</h2>

                <p class="form-text text-center">
                    Booking request <a href="tel:+88123123456" class="link">+88-123-123456</a>
                    or fill out the order form
                </p>

                <div class="input-wrapper">
                    <input type="text" name="name" placeholder="Your Name" autocomplete="off"
                        class="input-field">

                    <input type="tel" name="phone" placeholder="Phone Number" autocomplete="off"
                        class="input-field">
                </div>

                <div class="input-wrapper">

                    <div class="icon-wrapper">
                        <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                        <select name="person" class="input-field">
                            <option value="1">1 Person</option>
                            <option value="2">2 Person</option>
                            <option value="3">3 Person</option>
                            <option value="4">4 Person</option>
                            <option value="5">5 Person</option>
                            <option value="6">6 Person</option>
                            <option value="7">7 Person</option>
                        </select>

                        <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                    </div>

                    <div class="icon-wrapper">
                        <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>

                        <input type="date" name="reservationDate" class="input-field">

                        <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                    </div>

                    <div class="icon-wrapper">
                        <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                        <select name="time" class="input-field">
                            <option value="08:00">08 : 00 am</option>
                            <option value="09:00">09 : 00 am</option>
                            <option value="010:00">10 : 00 am</option>
                            <option value="011:00">11 : 00 am</option>
                            <option value="012:00">12 : 00 am</option>
                            <option value="01:00">01 : 00 pm</option>
                            <option value="02:00">02 : 00 pm</option>
                            <option value="03:00">03 : 00 pm</option>
                            <option value="04:00">04 : 00 pm</option>
                            <option value="05:00">05 : 00 pm</option>
                            <option value="06:00">06 : 00 pm</option>
                            <option value="07:00">07 : 00 pm</option>
                            <option value="08:00">08 : 00 pm</option>
                            <option value="09:00">09 : 00 pm</option>
                            <option value="10:00">10 : 00 pm</option>
                        </select>

                        <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                    </div>

                </div>

                <textarea name="message" placeholder="Message" autocomplete="off" class="input-field"></textarea>

                <button type="submit" class="btn btn-secondary">
                    <span class="text text-1">Book A Table</span>

                    <span class="text text-2" aria-hidden="true">Book A Table</span>
                </button>

            </form>

            <div class="form-right text-center"
                style="background-image: url('./assets/images/form-pattern.png')">

                <h2 class="headline-1 text-center">Contact Us</h2>

                <p class="contact-label">Booking Request</p>

                <a href="tel:+88123123456"
                    class="body-1 contact-number hover-underline">+88-123-123456</a>

                <div class="separator"></div>

                <p class="contact-label">Location</p>

                <address class="body-4">
                    Restaurant St, Delicious City, <br>
                    London 9578, UK
                </address>

                <p class="contact-label">Lunch Time</p>

                <p class="body-4">
                    Monday to Sunday <br>
                    11.00 am - 2.30pm
                </p>

                <p class="contact-label">Dinner Time</p>

                <p class="body-4">
                    Monday to Sunday <br>
                    05.00 pm - 10.00pm
                </p>

            </div>

        </div>

    </div>
</section>
