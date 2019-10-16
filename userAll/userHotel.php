<?php
require '../connection/connect.php';


$email = $_REQUEST['session'];
$hotelID = $_REQUEST['idnum'];
$arrival = $_REQUEST['arrival'];
$departure = $_REQUEST['departure'];

//echo $hotelID;

$query = "INSERT INTO userhotel (`name`, `hotelID`, `arrival`, `departure`) VALUES ('$email', '$hotelID', '$arrival', '$departure')";

$response = @mysqli_query($dbc, $query);
if ($response) {
    //echo "<script>location= '../myCart.php'</script>";
    header('location: ../myCart.php');



} else {
    echo mysqli_error($dbc);
}
