@extends('layouts.app')


@section('content')
    <style>
        a {
            color: rgb(6, 23, 37);
            text-decoration: none;
        }

        .info {
            width: 18%;
            margin: auto;
            border-bottom: 1px solid rgb(32, 27, 27);
        }

        .info_div {
            padding: 5.5%;
        }

        .mid {
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }

    </style>

    <div class="container start"
        style="margin-top:15%;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                height=100vh">
        <div class="col-md-10 col-md-offset-1 ">
            <div class="banner-text text-center ">
                <h1>Welcome to your page </h1>
                <p>Here you will find the information you provided to us and you can chose to do whatever you want with
                    it..<br />
                    also you can delete or add your appointments here </p>



            </div>
        </div>
    </div>
@endsection

@section('myinfo')
    <div class="info_div">
        <h2 class="info"> My Info...</h2>
        <br>
        <br>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Phone No.</th>
                    <th scope="col">Edit</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>somethin</td>
                    <td>Something</td>
                    <td>something</td>
                    <td>something</td>
                    <td> <a href="editP">click here</a></td>
                </tr>

            </tbody>
        </table>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="info_div">
        <h2 class="info"> My Bookings...</h2>
        <br>
        <br>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Service</th>
                    <th scope="col">Timing</th>
                    <th scope="col">Credit Card No</th>
                    <th scope="col">Delete</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>somethin</td>
                    <td>Something</td>
                    <td>something</td>
                    <td> <a href="">click here</a></td>
                </tr>

            </tbody>
        </table>
        <br><br>
        <a href="booking"> <i class=" mid fas fa-plus">ADD</i>
        </a>
    </div>

@endsection
