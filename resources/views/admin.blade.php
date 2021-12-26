<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


    <style>
        body {
            background-image: url('https://i.pinimg.com/originals/55/3e/68/553e68f7626aa851709f3e366665e1b2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            color: brown;
        }

        td {
            color: brown;

        }

        a {
            color: brown;
            text-decoration: none;
            font-weight: bold;
        }

        .info {
            width: 18%;
            margin: auto;
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
</head>

<body>



    <div class="info_div">
        <h2 class="info">Users</h2>
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
                    <th scope="col">Name</th>

                    <th scope="col">Service</th>
                    <th scope="col">Timing</th>
                    <th scope="col">Credit Card No</th>
                    <th scope="col">Delete</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>somethin</td>
                    <td>somethin</td>
                    <td>Something</td>
                    <td>something</td>
                    <td> <a href="">click here</a></td>
                </tr>

            </tbody>
        </table>

    </div>

</body>

</html>
