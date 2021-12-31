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
            margin: 2% 0;

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

        #time {
            width: 15%;
            min-width: 75px;

        }

        #services_here {
            width: 15%;
            min-width: 75px;
        }

        .submitbtn {
            width: 7.5%;
            min-width: 75px;
            padding: 7px;
            font-size: 15px;
            border: transparent;
            border-radius: 7px;
            background-color: white;
        }

        .submitbtn:hover {
            background-color: palevioletred;

        }

        @media screen and (max-width: 850px) {
            .section-header {

                margin: 1% 0;

            }
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
                    <form method="post" action="booking" name="cform" id="cform">
                        @csrf
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
                        <input type="datetime-local" name="booking_time" min="2021-12-30T08:30" max="2022-01-30T23:30"
                            id="time">


                        <br />
                        <br />
                        <input name="credit_card_no" id="credit_card_no" type="text" class=""
                            placeholder="Credit Card no..." />

                        <br />

                        <input type="submit" id="submit" name="submit" class="submitbtn" value="Confirm" />
                        <div id="simple-msg"></div>
                        <?php
                        if (empty($error)) {
                        } else {
                            echo '<h1>' . $error . '</h1>';
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Section -->
@endsection
