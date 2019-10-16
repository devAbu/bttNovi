<?php

require 'connection/connect.php';

$idnum = $_REQUEST['idnum2'];
$tourCity = $_REQUEST['tourCity'];
$tourLength = $_REQUEST['tourLength'];
$tourBudget = $_REQUEST['tourBudget'];
$tourPeople = $_REQUEST['tourPeople'];
$tourPeriod = $_REQUEST['tourPrice'];
$tourInterpreter = $_REQUEST['tourInterpreter'];
$tourPrice = $_REQUEST['tourPrice'];

$query = "update tourrequest set city = '$tourCity', length = '$tourLength', budget = '$tourBudget', people = '$tourPeople', period = '$tourPeriod', interpreter = '$tourInterpreter', price = '$tourPrice' where id = $idnum ";

echo "query: " . $query;

$result = mysqli_query($dbc, $query);

if ($result) {
    echo ('Updated');
    header("location: myCart.php");
} else {
    mysqli_error($dbc);
}
