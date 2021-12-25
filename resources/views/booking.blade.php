@extends('layouts.app')

@section('content')
    <style>
        .container {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }

        .section-header {
            width: 100%;
            text-align: center;
            margin: 5% 0;

        }

        .section-data {
            width: 100%;
            text-align: center;

        }

        h3 {
            margin: 1.5% 0;
        }

        input {
            margin: 1.02% 0;

        }

    </style>

    <section id="booking" class="booking section">
        <div class="container">
            <div class="section-header">
                <h2 class="wow fadeInDown animated">Online Booking</h2>
                <p class="wow fadeInDown animated">
                    Hey There! <br />
                    You can book an appointment for the various Services that we provide
                </p>
            </div>
            <div class="row section-data">
                <div class=" col-md-offset-2 conForm">
                    <div id="message"></div>
                    <form method="post" action="" name="cform" id="cform">
                        <h3><strong>Choose Service</strong></h3>
                        <select name="services" id="services_here">
                            <optgroup label="Salon">
                                <option value="Haircut(M) (200rs)">Haircut(M) (200rs)</option>
                                <option value="Haircut(F) (500rs)">Haircut(F) (500rs)</option>
                                <option value="Beardcut (100rs)">Beardcut (100rs)</option>
                                <option value="Hair Styling (350rs)">
                                    Hair Styling (350rs)
                                </option>
                                <option value="Hair Coloring (750rs)">
                                    Hair Coloring (750rs)
                                </option>
                            </optgroup>

                            <optgroup label="Spa">
                                <option value="Body Massage (999rs)">
                                    Body Massage (999rs)
                                </option>
                                <option value="Waxing (500rs)">Waxing (500rs)</option>
                                <option value="Tanning (300rs)">Tanning (300rs)</option>
                                <option value="Meni/Pedis (300rs)">Meni/Pedis (300rs)</option>
                                <option value="Cupping (200rs/per cup)">
                                    Cupping (200rs/per cup)
                                </option>
                            </optgroup>
                        </select>

                        <h3><strong>Choose Time</strong></h3>
                        <select name="time" id="time">
                            <option value="9:00-9:59">9:00-9:59</option>
                            <option value="10:00-10:59">10:00-10:59</option>
                            <option value="11:00-11:59">11:00-11:59</option>
                            <option value="12:00-12:59">12:00-12:59</option>
                            <option value="12:00-12:59">13:00-13:59</option>
                            <option value="12:00-12:59">14:00-14:59</option>
                            <option value="15:00-15:59">15:00-15:59</option>
                            <option value="16:00-16:59">16:00-16:59</option>
                            <option value="17:00-17:59">17:00-17:59</option>
                            <option value="18:00-18:59">18:00-18:59</option>
                            <option value="19:00-19:59">19:00-19:59</option>
                            <option value="20:00-20:59">20:00-20:59</option>
                            <option value="21:00-21:59">21:00-21:59</option>
                            <option value="22:00-22:59">22:00-22:59</option>
                            <option value="23:00-23:59">23:00-23:59</option>
                        </select>
                        <br />
                        <br />
                        <input name="credit_card_no" id="credit_card_no" type="text" class=""
                            placeholder="Credit Card no..." />

                        <br />

                        <input type="submit" id="submit" name="submit" class="submitBnt" value="Submit" />
                        <div id="simple-msg"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Section -->
@endsection
