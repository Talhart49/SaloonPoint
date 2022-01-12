{{-- <footer class="text-center text-white" style="background-color: #f1f1f1;">
    <!-- Grid container -->
    <div class="container pt-4">
        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>

            <!-- Twitter -->
            <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>

            <!-- Google -->
            <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>

            <!-- Instagram -->
            <a class="btn btn-link btn-floating btn-lg text-dark m-1" href="#!" role="button"
                data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>


        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2021 Copyright:
        <a class="text-dark" href="#">SaloonPoint.com</a>
    </div>
    <!-- Copyright -->
</footer> --}}

<style>
    .ifrr {
        position: relative;
        margin: 5% 0;
    }

    #map-overlay {
        display: flex;
        flex-direction: column;
        position: absolute;
        right: 0;
        top: 0;
        height: 100%;
        width: 30%;
        color: white;
        padding: 2rem;
        background-color: #616161;
        align-items: center;
        justify-content: center;
        margin-right: 9%
    }

</style>
<!-- Footer section -->
<footer id="contact" class="footer">
    <div class="container-fluid">
        <div id="map-row" class="row">
            <div class="col-xs-12 ifrr">
                <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Comsats University Islamabad&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                <div id="map-overlay" class="col-xs-5 col-xs-offset-6">
                    <h2 style="margin-top: 0; color:#fff">Contact us</h2>
                    <address style="color: #fff">
                        <strong>Salon Point</strong><br />
                        B block<br />
                        Islamabad<br />
                        Pakistan<br />
                        Mobile: 0310-1429244<br />
                    </address>
                    <span> © 2021 Salon Point.
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>
