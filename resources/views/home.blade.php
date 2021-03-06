@extends('layouts.app')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
    integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
    integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

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
        margin-bottom: 7rem;
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

    .modal-dialog {
        height: 50%;
        width: 50%;
        margin: auto
    }

    .modal-header {
        color: white;
        background-color: #007bff;
    }

    textarea {
        border: none;
        box-shadow: none !important;
        -webkit-appearance: none;
        outline: 0px !important
    }

    .openmodal {
        margin-left: 35%;
        width: 25%;
        margin-top: 25%
    }

    .icon1 {
        color: #007bff
    }

    a {
        margin: auto
    }

    input {
        color: #007bff
    }

    #btn2:hover {
        background-color: #F05DA3;

    }

    img {
        height: 90vh;
        background-size: cover;
        width: 90%;
        margin: auto;

    }

    /* 
    .slideshow {
        position: relative;
        z-index: 1;
        height: 100%;
        max-width: 700px;
        margin: 50px auto;
    }

    .slideshow * {
        outline: none;
    }

    .slideshow .slider {
        box-shadow: 0 20px 50px -25px black;
    }

    .slideshow .slider-track {
        -webkit-transition: all 1s cubic-bezier(0.7, 0, 0.3, 1);
        transition: all 1s cubic-bezier(0.7, 0, 0.3, 1);
    }

    .slideshow .item {
        height: 100%;
        position: relative;
        z-index: 1;
    }

    .slideshow .item img {
        width: 100%;
        -webkit-transition: all 1s cubic-bezier(0.7, 0, 0.3, 1);
        transition: all 1s cubic-bezier(0.7, 0, 0.3, 1);
        -webkit-transform: scale(1.3);
        transform: scale(1.3);
    }

    .slideshow .item.slick-active img {
        -webkit-transform: scale(1);
        transform: scale(1);
        -webkit-animation: cssAnimation 8s 1 ease-in-out forwards;
        animation: cssAnimation 8s 1 ease-in-out forwards;
    }

    @keyframes cssAnimation {
        from {
            -webkit-transform: scale(1) translate(0px);
        }

        to {
            -webkit-transform: scale(1.3) translate(0px);
        }
    }

    @-webkit-keyframes cssAnimation {
        from {
            -webkit-transform: scale(1) translate(0px);
        }

        to {
            -webkit-transform: scale(1.3) translate(0px);
        }
    } */

</style>
@section('content')


    <div class="container start" style="margin-top:15%; height=100vh">
        <div class="col-md-10 col-md-offset-1 ">
            <div class="banner-text text-center ">
                <h1>Beauty Spa & Salon</h1>

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

@section('slider')
    <div class="slide">
        <div class="item"><img src="/images/img1.jpg" alt=""></div>
        <div class="item"><img src="/images/img2.jpg" alt=""></div>
        <div class="item"><img src="/images/img3.jpg" alt=""></div>
        <div class="item"><img src="/images/img4.jpg" alt=""></div>
        <div class="item"><img src="/images/img5.jpg" alt=""></div>
        <div class="item"><img src="/images/img6.jpg" alt=""></div>
        <div class="item"><img src="/images/img7.jpg" alt=""></div>
        <div class="item"><img src="/images/img8.jpg" alt=""></div>
        <div class="item"><img src="/images/img9.jpg" alt=""></div>
        <div class="item"><img src="/images/img10.jpg" alt=""></div>
        <div class="item"><img src="/images/img11.jpg" alt=""></div>
        <div class="item"><img src="/images/img12.jpg" alt=""></div>
    </div>
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
    <!--Modal Launch Button-->
    <!--Division for Modal-->
    <div id="myModal" class="modal fade" role="dialog">
        <!--Modal-->
        <div class="modal-dialog">
            <!--Modal Content-->
            <div class="modal-content">
                <!-- Modal Header-->
                <div class="modal-header"
                    style="justify-content:center;
                                                                                                                                                                                                                                                                                                                                                                                            background-color:#f05da3;">
                    <h3>Feedback</h3>

                </div> <!-- Modal Body-->
                <div class="modal-body text-center"> <i class="far fa-file-alt fa-4x mb-3 animated rotateIn icon1"
                        style="color:#f05da3"></i>
                    <h3>Your opinion matters</h3>
                    <h5>Help us improve our services? <strong>Give us your feedback.</strong></h5>
                    <hr>
                    <h6>Your Rating</h6>
                </div>
                <form action="profile" method="post">
                    @csrf
                    <!-- Radio Buttons for Rating-->
                    <fieldset id="feedback">
                        <div class="form-check mb-4"> <input value='Very good' name="feedback" type="radio" required> <label
                                class="ml-3">Very
                                good</label> </div>
                        <div class="form-check mb-4"> <input value='Good' name="feedback" type="radio"> <label
                                class="ml-3">Good</label> </div>
                        <div class="form-check mb-4"> <input value='Mediocre' name="feedback" type="radio"> <label
                                class="ml-3">Mediocre</label> </div>
                        <div class="form-check mb-4"> <input value='Bad' name="feedback" type="radio"> <label
                                class="ml-3">Bad</label>
                        </div>
                        <div class="form-check mb-4"> <input value='Very Bad' name="feedback" type="radio"> <label
                                class="ml-3">Very
                                Bad</label> </div>
                    </fieldset>

                    <!--Text Message-->
                    <div class="text-center">
                        <h4>What could we improve?</h4>
                    </div> <textarea type="textarea" placeholder="Your Message" rows="3" name='message' style="width:100%"
                        required></textarea>
                    <!-- Modal Footer-->
                    <div class="modal-footer"> <input onMouseOver="this.style.background-color='#fff'" type="submit"
                            id="btn1" class="btn" style="background-color:#F05DA3" />

                        <a href="" id="btn2" class="btn btn-outline" data-dismiss="modal">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

<script>
    $(document).ready(function() {
        $('.slide').slick({
            draggable: true,
            autoplay: true,
            autoplaySpeed: 1100,
            arrows: false,
            dots: true,
            fade: true,
            speed: 300,
            infinite: true,
            cssEase: 'ease-in-out',
            touchThreshold: 100,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    });
</script>
