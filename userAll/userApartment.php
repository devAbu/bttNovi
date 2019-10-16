<?php
require '../connection/connect.php';




$email = $_REQUEST['session'];
$apartmentID = $_REQUEST['idnum'];
$arrival = $_REQUEST['arrival'];
$departure = $_REQUEST['departure'];

//echo $apartmentID;
$sql = "SELECT * FROM `userapartment` WHERE arrival BETWEEN  '$arrival' and  '$departure' or departure BETWEEN '$arrival'  and '$departure' having apartmentID = '$apartmentID' order by departure asc ";
$result = @mysqli_query($dbc, $sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

        header('location: ../apartment.php?Message=' . urlencode($row[arrival] . " to " . $row[departure]));

    }
} else {

    $query = "INSERT INTO userapartment (`name`, `apartmentID`, `arrival`, `departure`) VALUES ('$email', '$apartmentID', '$arrival', '$departure')";

    $response = @mysqli_query($dbc, $query);
    if ($response) {
        header('location: ../myCart.php');
       
    } else {
        echo mysqli_error($dbc);
    }
}