<?php

require '../connection/connect.php';

$idnum = $_REQUEST['carID'];
$session = $_REQUEST['session'];

//echo "idnum = " . $idnum;
//echo "session = " . $session;

$query = "Delete from usercar where carID = $idnum and name LIKE '%" . trim($session) . "%' limit 1";

//echo "query:" . $query;

$result = mysqli_query($dbc, $query);
if ($result) {
    //echo ('Deleted');
    header("location: ../rent.php");
} else {
    mysqli_error();
}
