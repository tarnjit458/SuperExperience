<?php
require('config/config.php');
require('config/db.php');

// Check for submit
if (filter_has_var(INPUT_POST, 'submit')) {
    // Get form data
    // mysqli_real_escape_string escapes special characters in a string for us
    $select = mysqli_real_escape_string($connection, $_POST['select']);

    $query = "SELECT $select FROM users";

    // Get the Result
    $result = mysqli_query($connection, $query);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>User</title>
</head>

<body>
    <div class="container">
        <h1>Users</h1>
        <table border="1" cellpadding="3" cellspacing="2" style="background-color:mediumpurple">
            <?php
            for (
                $counter = 0;
                $row = mysqli_fetch_row($result);
                $counter++
            ) {
                print("<tr>");
                foreach ($row as $key => $value)
                    print("<td>$value</td>");
                print("</tr>");
            }
            // Free Result
            mysqli_free_result($result);

            // Close Connection
            mysqli_close($connection);
            ?>
        </table>
        <br> Your search yielded <strong> <?php print("$counter"); ?> results.<br><br></strong>
    </div>
</body>

</html>