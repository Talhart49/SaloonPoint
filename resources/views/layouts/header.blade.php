{{-- ////////////////// --}}
<style>
    .navigation {
        style="position: fixed;
top: 0;
        z-index: 100;
        ">

    }

    .scrolling-active {
        background-color: #fff;
        color: palevioletred;
        box-shadow: 0 3px 1rem rgba(0, 0, 0, 0.1);

    }

</style>

<nav class="navbar navbar-expand-lg navbar-light justify-content-around" style="
    padding: 25px;">

    <div style='
    margin-right: 25%;
    width: 55%;
    margin-left: 1.5%;'>
        <h2> Saloon Point</h2>

    </div>

    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 justify-content-between" style="
                font-size: 17px;
            font-weight: 400;">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home#intro">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#myModal">Feedback</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="booking">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <div style='margin-left:7%'>
                    <a class="nav-link " href="/">Logout</a>
                </div>
            </ul>
        </div>
    </div>
</nav>


<script>
    // window.addEventListner('scroll', function() {
    //     let header = document.querySelector('nav');
    //     let windowPosition = window.scrollY > 0;
    //     header.classList.toggle('scrolling-active', windowPosition);
    // })
</script>
