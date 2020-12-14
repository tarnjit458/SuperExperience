<?php
session_start();

$conn = mysqli_connect("cmpe-272.c3epn3zu9tmd.us-west-1.rds.amazonaws.com", "sunny", "sunnyD777", "bb");
$id = $_SESSION["user_id"];
$sql = "UPDATE users SET isLoggedIn = '0' WHERE id='$id'";
mysqli_query($conn, $sql);

$sql = "UPDATE users SET tracking = null WHERE id='$id'";
mysqli_query($conn, $sql);

$_SESSION["user_id"] = null;
$_SESSION["pages"] = null;
header("Location: login.php");
