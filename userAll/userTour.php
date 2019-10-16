<?php
require '../connection/connect.php';


$email = $_REQUEST['session'];
$tourID = $_REQUEST['idnum'];
$arrival = $_REQUEST['arrival'];
$departure = $_REQUEST['departure'];


$query = "INSERT INTO usertour (`name`, `tourID`, `arrival`, `departure`) VALUES ('$email', '$tourID', '$arrival', '$departure')";

$response = @mysqli_query($dbc, $query);
if ($response) {
    header('location: ../myCart.php');

}
