<?php
// Create Connection
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
//$connection = mysqli_connect("cmpe-272.c3epn3zu9tmd.us-west-1.rds.amazonaws.com", "sunny", "sunnyD777", "bb");

// Check Connection
if (mysqli_connect_errno()) {
    // Connection Failed
    echo 'Failed to connect to MySQL ' . mysqli_connect_errno();
}
