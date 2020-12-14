<?php
session_start();
$connection = mysqli_connect("cmpe-272.c3epn3zu9tmd.us-west-1.rds.amazonaws.com", "sunny", "sunnyD777", "bb");

$user_id = $_SESSION["user_id"];
$user_fName = $_POST["fName"];
$user_lName = $_POST["lName"];
$user_email = $_POST["email"];
$user_phone = $_POST["phone"];
$user_mobile = $_POST["mobile"];
$user_address = $_POST["address"];
$user_twitter = $_POST["twitter"];
$user_instagram = $_POST["instagram"];
$user_facebook = $_POST["facebook"];

$_SESSION["user_fName"] =  $user_fName;
$_SESSION["user_lName"] =  $user_lName;
$_SESSION["user_email"] =  $user_email;
$_SESSION["user_phone"] =  $user_phone;
$_SESSION["user_mobile"] =  $user_mobile;
$_SESSION["user_address"] =  $user_address;
$_SESSION["user_twitter"] =  $user_twitter;
$_SESSION["user_instagram"] =  $user_instagram;
$_SESSION["user_facebook"] =  $user_facebook;


$sql = "UPDATE users SET 
fName = '$user_fName',
lName = '$user_lName',
email = '$user_email',
phone = '$user_phone',
mobile = '$user_mobile',
address = '$user_address',
twitter = '$user_twitter',
instagram = '$user_instagram',
facebook = '$user_facebook'
WHERE id='$user_id'";
mysqli_query($connection, $sql);
echo $sql;
header("Location: user.php");
