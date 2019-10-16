<?php

require '../connection/connect.php';

$firstSign = $_REQUEST['firstSign'];
$lastSign = $_REQUEST['lastSign'];
$emailSign = $_REQUEST['emailSign'];
$passSign = $_REQUEST['passSign'];
$numSign = $_REQUEST['numSign'];

$hashedPass = $hash_pass = password_hash($passSign, PASSWORD_DEFAULT);

if ($_REQUEST['task'] == "register") {
    $query = "INSERT INTO registacija (`name`, `surname`, email, `password`, `phoneNumber`, `activated`) VALUES ('$firstSign','$lastSign', '$emailSign', '$hashedPass', $numSign, 0)";

    $response = @mysqli_query($dbc, $query);
    if ($response) {
        echo ('sent');
    } else {
        echo mysqli_error($dbc);
    }
}
