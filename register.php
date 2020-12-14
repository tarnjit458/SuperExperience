<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-bottom: 40px;
            color: white;
            background-image: url("https://centralaz.edu/wp-content/uploads/2018/12/GettyImages-922721264-grocery-store.jpg");
            background-size: cover;
            /* <------ */
            background-repeat: no-repeat;
            background-position: center center;
        }

        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }

        .form-signin .title {
            color: yellow;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }

        .form-signin .form-control:focus {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>

<body>
    <form method="POST" action="./register.php" class="form-signin">
        <h1 class="h3 mb-3 font-weight-normal">Enter information</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" class="form-control mb-3" placeholder="Email address" required autofocus>
        <label for="inputFirstName" class="sr-only">First Name</label>
        <input type="text" name="fname" class="form-control mb-3" placeholder="First Name" required autofocus>
        <label for="inputFirstName" class="sr-only">Last Name</label>
        <input type="username" name="lname" class="form-control mb-3" placeholder="Last Name" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
        <button class="btn btn-lg btn-success btn-block" type="submit" name="RegisterSubmit">Register</button>
        <h1 class="h6 mt-3 ">Already registered?</h1>
        <a class="btn btn-lg btn-primary btn-block" href="./login.php">Sign in</a>
    </form>
</body>
<?php
if (isset($_POST['RegisterSubmit'])) {

    $connection = mysqli_connect("cmpe-272.c3epn3zu9tmd.us-west-1.rds.amazonaws.com", "sunny", "sunnyD777", "bb");
    $query_check_email = "SELECT email FROM users";
    $result_check_email = mysqli_query($connection, $query_check_email);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];

    // check for duplicate email
    for (
        $counter = 0;
        $row = mysqli_fetch_row($result_check_email);
        $counter++
    ) {
        foreach ($row as $key => $value) {
            if ($value == $email) {
                echo "<script type='text/javascript'>alert('This email already exists!');</script>";
                return 0;
            }
        }
    }

    mysqli_free_result($result_check_email);

    $sql = "INSERT INTO `users` (`fname`, `lname`, email, `password`)
        VALUES ('{$fname}', '{$lname}', '{$email}', '{$password}')";

    if (mysqli_query($connection, $sql)) {
        header("Location: login.php");
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($database);
    }

    // Close Connection
    mysqli_close($connection);
}

?>

</html>