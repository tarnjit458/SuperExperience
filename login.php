<?php
session_start();

$array = array();

$conn = mysqli_connect("cmpe-272.c3epn3zu9tmd.us-west-1.rds.amazonaws.com", "sunny", "sunnyD777", "bb");
if (isset($_GET['id'])) {
  $userid = $_GET['id'];

  // Check if is user is logged in
  $sql = "SELECT isLoggedIn FROM users WHERE id='$userid'";
  $query_result = mysqli_query($conn, $sql);
  $isLoggedIn = mysqli_fetch_all($query_result, MYSQLI_ASSOC);
  // If not logged in, go to login page
  if ($isLoggedIn[0]['isLoggedIn'] == 0) {
    header("Location: login.php");
  } else {
    $_SESSION['user_id'] = $_GET["id"];

    // Get the tracking data from db
    $query = "SELECT tracking FROM users WHERE id='$userid'";
    $query2 = "SELECT * FROM users WHERE id='$userid'";
    $result_pages = mysqli_query($conn, $query);
    $results_info = mysqli_query($conn, $query2);
    $row = mysqli_fetch_array($result_pages);
    $user = mysqli_fetch_all($results_info, MYSQLI_ASSOC);

    $session_array = unserialize($row['tracking']);
    $_SESSION["pages"] = $session_array;

    // TODO for profile
    $_SESSION["user_img"] = $user[0]["img"];
    $_SESSION["user_fName"] = $user[0]["fName"];
    $_SESSION["user_lName"] = $user[0]["lName"];
    $_SESSION["user_email"] = $user[0]["email"];
    $_SESSION["user_phone"] = $user[0]["phone"];
    $_SESSION["user_mobile"] = $user[0]["mobile"];
    $_SESSION["user_address"] = $user[0]["address"];
    $_SESSION["user_twitter"] = $user[0]["twitter"];
    $_SESSION["user_instagram"] = $user[0]["instagram"];
    $_SESSION["user_facebook"] = $user[0]["facebook"];

    //header("Location: index.php?id=", +$_GET['id']);
    header("Location: index.php");
  }
}

if (!$conn)
  echo 'Connection error' . mysqli_connect_error();
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM users WHERE email='$email' AND password='$password';";
  $result = mysqli_query($conn, $sql);
  $user = mysqli_fetch_all($result, MYSQLI_ASSOC);
  if (count($user) == 1) {
    // Create the user tracking session
    $_SESSION["pages"] = $array;
    $_SESSION["user_id"] = $user[0]["id"];
    // for profile
    $_SESSION["user_img"] = $user[0]["img"];
    $_SESSION["user_fName"] = $user[0]["fName"];
    $_SESSION["user_lName"] = $user[0]["lName"];
    $_SESSION["user_email"] = $user[0]["email"];
    $_SESSION["user_phone"] = $user[0]["phone"];
    $_SESSION["user_mobile"] = $user[0]["mobile"];
    $_SESSION["user_address"] = $user[0]["address"];
    $_SESSION["user_twitter"] = $user[0]["twitter"];
    $_SESSION["user_instagram"] = $user[0]["instagram"];
    $_SESSION["user_facebook"] = $user[0]["facebook"];

    // Set the isLoggedIn value in the db for the user
    $userid = $_SESSION["user_id"];
    $sql = "UPDATE users SET isLoggedIn = '1' WHERE id='$userid'";
    mysqli_query($conn, $sql);

    //header("Location: index.php?id=" . $_SESSION['user_id']);
    header("Location: index.php");
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<body class="text-center">
  <form id="login" method="POST" action="login.php" class="form-signin">
    <h1 style="font-weight:bold;color:powderblue;text-shadow: 3px 2px black;" class="mb-4 title">
      Market Place
    </h1>
    <label for="inputEmail" class="sr-only">Email</label>
    <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password" required>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>
    <a class="btn btn-lg btn-success btn-block" href="register.php">Sign up</a>
  </form>
</body>

</html>