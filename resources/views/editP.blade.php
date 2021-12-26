@extends('layouts.app')

<link rel="stylesheet" href=" {{ url('css/main.css') }}">

<style>
    #edit {
        width: 7.5%;
        min-width: 75px;
        padding: 7px;
        font-size: 15px;
        border: transparent;
        border-radius: 7px;
        background-color: white;

    }

    #edit:hover {
        background-color: palevioletred;

    }

    #btn_div {
        display: flex;
        justify-content: center;
        align-items: center;
    }

</style>
@section('content')

    <div class="login-box">

        <h1>Edit</h1>
        <form action="" method="">
            @csrf

            <div class="textbox">
                <input id="name" type="text" placeholder="Username" name="name" value="" minlength="5" required>
            </div>

            <div class="textbox">
                <input id="email" type="email" placeholder="Email" name="email" value="" required>
            </div>
            <div class="textbox">
                <input id="phone" type="tel" placeholder="Mobile No." name="phone" value="" pattern="[0-9]{11}" required>
            </div>

            <div class="textbox">
                <input id="password" type="password" placeholder="Password" name="password" value="" minlength="8" required>
            </div>
            <div id="btn_div">
                <input id="edit" class="btn" type="submit" name="" value="Confirm">
            </div>


    </div>
    </form>



    </div>

@endsection
