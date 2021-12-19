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
        <form action="">

            <div class="textbox">
                <input id="name" type="text" placeholder="Username" name="" value="" minlength="5" required>
            </div>

            <div class="textbox">
                <input id="name" type="email" placeholder="Email" name="" value="" required>
            </div>
            <div class="textbox">
                <input id="name" type="tel" placeholder="Mobile No." name="" value="" pattern="[0-9]{11}" required>
            </div>
    
            <div class="textbox">
                <input id="password" type="password" placeholder="Password" name="" value="" minlength="8" required>
            </div>
    
            <input id="signup" class="btn" type="submit" name="" value="Sign up">
        </div>
        </form>

		

	</div>
{{-- 
	<script type="text/javascript">
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



