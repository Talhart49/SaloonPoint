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
                    <th scope="col">Phone No.</th>
                    <th scope="col">Edit</th>

                </tr>
            </thead>
            <tbody>
                @csrf
                <?php
                $users = DB::select('select * from users');
                ?>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td> <a href="{{ '/editP?id=' . $user->id }}">click here</a></td>
                    </tr>
                @endforeach


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
                    <th scope="col">Delete</th>

                </tr>
            </thead>
            <tbody>

                @csrf
                <?php
                $bookings = DB::select('select * from bookings');
                // $name = DB::select('select name from users where id=?', [$bookings[0]->user_id]);
                // foreach ($name as $n) {
                //     echo $n;
                // }
                ?>
                @if ($bookings)

                    @foreach ($bookings as $booking)
                        <?php
                        // $user = DB::select('select name from users where id=?', [$booking->user_id]);
                        // $name = $user[0];
                        // echo $name;
                        ?>
                        <tr>
                            {{-- <td>{{ $name }}</td> --}}
                            <td>{{ $booking->services }}</td>
                            <td>{{ $booking->booking_time }}</td>
                            <td> <a href={{ '/deleteA?booking_id=' . $booking->booking_id }}>click here</a></td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>


    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="info_div">
        <h2 class="info"> Reviews...</h2>
        <br>
        <br>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Name</th>

                    <th scope="col">Rating</th>
                    <th scope="col">Feedback</th>
                    <th scope="col">Delete</th>

                </tr>
            </thead>
            <tbody>

                @csrf
                <?php
                $feedbacks = DB::select('select * from feedback');
                // $name = DB::select('select name from users where id=?', [$bookings[0]->user_id]);
                // foreach ($name as $n) {
                //     echo $n;
                // }
                ?>
                @if ($feedbacks)

                    @foreach ($feedbacks as $feedback)
                        @php
                            $username = DB::select('select name from users where id = ?', [$feedback->user_id])[0]->name;
                            
                        @endphp
                        <tr>
                            <td>{{ $username }}</td>
                            <td>{{ $feedback->rating }}</td>
                            <td>{{ $feedback->message }}</td>
                            <td> <a href={{ '/deleteReviewA?feedback_id=' . $feedback->feedback_id }}>click here</a>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

</body>

</html>
