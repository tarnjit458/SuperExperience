<?php 
// Check for submit
if (filter_has_var(INPUT_POST, 'submit')) {
    // Get form data
    $userid = htmlspecialchars($_POST['userid']);
    $password = htmlspecialchars($_POST['password']);

    // Check if user has left fields blank
    if (!empty($userid) && !empty($password)) {
        // Open file for reading
        if (!($file = fopen("password.txt", "r"))) {
            print("<title>Error</title>
                    <body>Could not open password file</body></html>");
            die();
        }
        $userVerified = 0;

        // Read each line in a file and check userid and password
        while (!feof($file) && !$userVerified) {
            // read line from file
            $line = fgets($file, 255);

            // remove newline character from end of line
            $line = chop($line);

            // split userid and password
            $field = explode(",", $line);

            // Verify userid
            if ($userid == $field[0]) {
                $userVerified = 1;

                // check if password is correct
                if (checkPassword($password, $field[1])) {
                    accessGranted($userid);
                    echo "<h3><u>Current Users:</u></h3><br>";
                    $usersFile = fopen("users.txt", "r");
                    while (!feof($usersFile)) {
                        echo fgets($usersFile) . "<br />";
                    }
                } else {
                    wrongPassword();
                }
            } else {
                wrongUserid($field[0]);
            }
        }
        fclose($file);

        if (!$userVerified) accessDenied();
    } else {
        fieldsBlank();
        die();
    }
}


function fieldsBlank()
{
    print("<title>Access Denied</title>
            <body style= \"font-family:arial; font-size:2em; color:red;\">
            <strong>Please fill in all of the form fields.<br /></strong></body>");
}

// Verify userid
function checkPassword($userPassword, $fileData)
{
    if ($userPassword == $fileData) return true;
    else return false;
}

function accessGranted($name)
{
    print("<title>Thank you</title>
        <body style=\"font-family:arial; font-size: 1em; color:black;\">
        <strong>Welcome $name, permission has been granted.</strong>
        </body>");
}

function accessDenied()
{
    print("<title>Access Denied</title>
        <body style=\"font-family:arial; font-size:2em; color:red\">
        <strong>Permission has been denied<br></strong>");
}

function wrongPassword()
{
    print("<title>Access Denied</title>
        <body style=\"font-family:arial; font-size:2em; color:red\">
        <strong>You have entered an invalid password.<br>Permission has been denied<br></strong>");
}

function wrongUserid()
{
    print("<title>Access Denied</title>
        <body style=\"font-family:arial; font-size:2em; color:red\">
        <strong>User ID does not exist.<br></strong>");
}
