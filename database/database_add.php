<?php
require('config/config.php');
require('config/db.php');

// Check for submit
if (filter_has_var(INPUT_POST, 'submit')) {
    // Get form data
    // mysqli_real_escape_string escapes special characters in a string for us
    $first_name = mysqli_real_escape_string($connection, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($connection, $_POST['last_name']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $home_address = mysqli_real_escape_string($connection, $_POST['home_address']);
    $home_phone = mysqli_real_escape_string($connection, $_POST['home_phone']);
    $cell_phone = mysqli_real_escape_string($connection, $_POST['cell_phone']);

    $query = "INSERT INTO users(first_name, last_name, email, home_address, home_phone, cell_phone) 
        VALUES('$first_name', '$last_name', '$email', '$home_address', '$home_phone', '$cell_phone')";

    if (mysqli_query($connection, $query)) {
        header('Location: https://tgcreates.com/user.php', true, 302);
        exit;
    } else {
        echo 'ERROR: ' . mysqli_error($connection);
    }
}
