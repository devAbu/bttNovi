<?php
require '../connection/connect.php';


$email = $_REQUEST['session'];
$carID = $_REQUEST['idnum'];
$arrival = $_REQUEST['arrival'];
$departure = $_REQUEST['departure'];
$driver = $_REQUEST['driverPrice'];

$sql = "SELECT * FROM `usercar` WHERE arrival BETWEEN  '$arrival' and  '$departure' or departure BETWEEN '$arrival'  and '$departure' having carID = '$carID' order by departure asc ";
$result = @mysqli_query($dbc, $sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        header('location: ../rent.php?Message=' . urlencode($row[arrival] . " to " . $row[departure]));

    }
} else {


    $query = "INSERT INTO usercar (`name`, `carID`, `arrival`, `departure`, `driver`) VALUES ('$email', '$carID', '$arrival', '$departure', '$driver')";

    $response = @mysqli_query($dbc, $query);
    if ($response) {
        header('location: ../myCart.php');


    } else {
        echo mysqli_error($dbc);
    }
}