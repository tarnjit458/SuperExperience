<?php
require('config/config.php');
require('config/db.php');

// Get Query
$query = 'SELECT * FROM users';

// Get the Result
$result = mysqli_query($connection, $query);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Super Experience Users</title>
</head>

<body>
    <?php
    $row = mysqli_fetch_row($result);
    print_r($row);
    ?>
</body>
<!-- <body>
    <h2><u>Super Experience Users</u></h2>
    <table border="1" cellpadding="3" cellspacing="2" style="background-color:mediumpurple">
        <?php
        //for (
        //     $counter = 0;
        //     $row = mysqli_fetch_row($result);
        //     $counter++
        // ) {
        //     print("<tr>");
        //     foreach ($row as $key => $value)
        //         print("<td>$value</td>");
        //     print("</tr>");
        // }
        // // Free Result
        // mysqli_free_result($result);
        //
        // // Close Connection
        // mysqli_close($connection);
        // 
        ?>
    </table>
    <br> Your search yielded <strong> <?php //print("$counter"); 
                                        ?> results.<br><br></strong>
    </div>
</body> -->

</html>

<?php
$ch = curl_init("http://ericjlin.com/user-database-link.php");

curl_setopt($ch, CURLOPT_HEADER, 0);

curl_exec($ch);
curl_close($ch);
?>