<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href=" {{ url('css/main.css') }}">
</head>

<body>

    <div class="login-box">

        <h1>Signup</h1>
        <form action="signup" method="POST">
            @csrf

            <div class="textbox">
                <input id="name" type="text" placeholder="Username" name="name" value="" minlength="5" required>
            </div>

            <div class="textbox">
                <input id="email" type="email" placeholder="Email" name="email" value="" required>
            </div>
            <div class="textbox">
                <input id="phone" type="tel" placeholder="Mobile No." name="phone" value="" pattern="[0-9]{11}"
                    required>
            </div>

            <div class="textbox">
                <input id="password" type="password" placeholder="Password" name="password" value="" minlength="8"
                    required>
            </div>

            <input id="signup" class="btn" type="submit" name="" value="Sign up">
            <a href="/"><input id="login" class="btn" type="button" name="" value="Login"></a>

    </div>
    </form>



    </div>
    {{-- <script type="text/javascript">
		document.getElementById("logging").onclick = function () {
    var Username = document.getElementById("name");
    var password = document.getElementById("password");

    if (Username.value == "ADMIN" && password.value == "admin") {
        window.location.href = "main.html";
    }
    else {
        alert("INVALID Admin ID OR Password");
    }
}
	</script> --}}
</body>

</html>
