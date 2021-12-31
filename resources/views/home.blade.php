@extends('layouts.app')
<style>
    .start {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #intro {
        background-color: #f05da3;
        padding: 6%;
        display: flex;
        justify-content: center;
        align-items: center;
        padding-left: 23%;
    }

    .icon {
        color: #F05DA3;
    }

    .icon_div {
        display: flex;
        flex-direction: row;
        padding-top: 7px
    }

    .icon_div h5 {
        margin-left: 25%;
    }

    .icon_div i {
        font-size: 33px;
        margin-left: 10px;
    }

    .services-content p {
        margin: 10px 0;
        padding: 10px;
    }

    .services-content {
        background-color: #f4f4ff;

    }

    .section-header {
        margin: 9% 0;
        text-align: center
    }

</style>
@section('content')


    <div class="container start"
        style="margin-top:15%;
                                                                                                                                                                                                                                                                                                height=100vh">
        <div class="col-md-10 col-md-offset-1 ">
            <div class="banner-text text-center ">
                <h1>Beauty Spa & Salon</h1>
                <p>
                    {{ auth()->user()->id }}
                </p>
                <p>A Beauty Spa & salon is your one stop shop for all things pampering, beautifying and grooming. You'll
                    find everything from facials to spray tans to lash extensions and even a spot of nail art. And it's not
                    just for the girls.<br /> </p>
            </div>
        </div>
    </div>


@endsection


@section('about')


    <section id="intro" class="section intro">
        <div class="container">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h3>Beauty Saloon and Spa!</h3>
                <p>Salon Point is an online salon booking portal that allows you to book appointments 24/7 in just a few
                    simple clicks. You also get to enjoy & experience a lot more through the daily offers, discounts &
                    promotions.
                    We know, We are making your life beautiful!</p>
            </div>
        </div>
    </section>

@endsection

@section('services')


    <section id="services" class="services service-section">
        <div class="container">
            <div class="section-header">
                <h2>Popular Services</h2>
                <p>
                    We provide wide range of services covering both Spa and Salon,<br />
                    you can chose the one that best suite you, You can also read some<br />
                    Descriptions of the services to decide which one is for you !
                </p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 services text-center">
                    <div class="services-content">
                        <div class="icon_div">
                            <i class="icon fas fa-chess-knight"></i>
                            <h5>Aroma Therapy</h5>
                        </div>
                        <p>
                            Aroma Therapy is a pseudoscience based on the usage of aromatic
                            materials, including essential oils, and other aroma compounds,
                            with claims for improving psychological or physical well-being.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center">
                    <div class="services-content">
                        <div class="icon_div">
                            <i class=" icon fas fa-briefcase"></i>
                            <h5>Body Spa</h5>
                        </div>
                        <p>
                            A body spa is as simple and as useful in your skin care routine as it can get! The most
                            important thing that a body spa does is remove dead skin cells and increase the blood
                            circulation in the

                            <body class="">

                            </body>
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center">
                    <div class="services-content">
                        <div class="icon_div">
                            <i class="icon fas fa-pencil-ruler"></i>

                            <h5>Hair Spa</h5>
                        </div>
                        <p>
                            Hair spa is a procedure that helps make hair strong, bouncy and
                            shiny, while simultaneously dealing with dandruff, damaged hair,
                            and hair fall control. ... Lavender oil clears impurities from
                            hair roots.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center">
                    <div class="services-content">
                        <div class="icon_div">
                            <i class="icon fas fa-certificate"></i>
                            <h5>Massage</h5>
                        </div>
                        <p>
                            Massage is the manipulation of the body's soft tissues. Massage
                            techniques are commonly applied with hands, fingers, elbows,
                            knees, forearms, feet, or a device. The purpose of massage is
                            generally for the treatment of body stress or pain.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center">
                    <div class="services-content">
                        <div class="icon_div">
                            <i class="icon fas fa-bullhorn">
                            </i>
                            <h5>Manicure</h5>

                        </div>
                        <p>
                            A manicure is a cosmetic beauty treatment for the fingernails
                            and hands performed at home or in a nail salon. A manicure
                            consists of filing and shaping the free edge of nails, pushing
                            and clipping any nonliving tissue, treatments with various
                            liquids, massage of the hand.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 services text-center">
                    <div class="services-content">
                        <div class="icon_div">
                            <i class="icon fas fa-trophy"></i>
                            <h5>Wedding Makekup</h5>
                        </div>
                        <p>
                            Everyone on their big day wants to look beautiful for their one
                            and only. On such auspicious ocasion, we are providing our
                            customers with some of exciting services at affordable rates .
                            Try now and make your wedding a memorable event !!!!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services section -->


@endsection
