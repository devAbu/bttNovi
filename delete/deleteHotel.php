<?php

require '../connection/connect.php';

$idnum = $_REQUEST['hotelID'];
$session = $_REQUEST['session'];

//echo "idnum = " . $idnum;
//echo "session = " . $session;

$query = "Delete from userhotel where hotelID = $idnum and name LIKE '%" . trim($session) . "%' limit 1";

//echo "query:" . $query;

$result = mysqli_query($dbc, $query);
if ($result) {
    //echo ('Deleted');
    header("location: ../hotel.php");
} else {
    mysqli_error();
}
