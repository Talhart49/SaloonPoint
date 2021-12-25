<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href=" {{ url('css/main.css') }}">
</head>

<body>

    <div class="login-box">

        <h1>Login</h1>
        <form action="/" method="POST">
            @csrf
            <div class="textbox">
                <input id="name" type="text" placeholder="Username" name="name" value="">
            </div>

            <div class="textbox">
                <input id="password" type="password" placeholder="Password" name="password" value="">
            </div>

            <input id="logging" class="btn" type="submit" name="" value="Login">
            <a href="signup"><input id="signup" class="btn" type="button" name="" value="Sign up"></a>
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
