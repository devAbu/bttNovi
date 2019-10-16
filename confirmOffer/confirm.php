<?php

require '../connection/connect.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

$mail = new PHPMailer(true);

$email = $_REQUEST['session'];


if (isset($_REQUEST["tourID"]) && $_REQUEST["tourID"] != 0) {
    $tourID = $_REQUEST['tourID'];
} else {
    $tourID = 0;


}
if (isset($_REQUEST["apartmentID"]) && $_REQUEST["apartmentID"] != 0 ) {
    $apartmentID = $_REQUEST['apartmentID'];
} else {
    $apartmentID = 0;


}
if (isset($_REQUEST["hotelID"]) && $_REQUEST["hotelID"] != 0 ) {
    $hotelID = $_REQUEST['hotelID'];
} else {
    $hotelID = 0;


}
if (isset($_REQUEST["carID"]) && $_REQUEST["carID"] != 0) {
    $carID = $_REQUEST['carID'];
} else {
    $carID = 0;


}
if (isset($_REQUEST["price"])) {
    $price = $_REQUEST['price'];
}

$query = "INSERT INTO `confirmedoffers` (`name`, `tourID`, `apartmentID`, `hotelID`, `carID`, `price`) values ('$email', '$tourID', '$apartmentID', '$hotelID', '$carID', '$price')";

$response = @mysqli_query($dbc, $query);
if ($response) {
    
    $sql = "Select confirmedoffers.name,confirmedoffers.tourID,confirmedoffers.apartmentID,confirmedoffers.hotelID,confirmedoffers.carID,confirmedoffers.price as price, tourplan.ID, tourplan.title as tourPlanTitle, apartment.ID, apartment.title as apartmentTitle, hotel.ID, hotel.title as hotelTitle, cars.ID, cars.title as carTitle from confirmedoffers inner join tourplan on tourplan.ID = confirmedoffers.tourID inner join apartment on apartment.ID = confirmedoffers.apartmentID inner join hotel on hotel.ID = confirmedoffers.hotelID inner join cars on cars.ID = confirmedoffers.carID having confirmedoffers.name like '%" . trim($email) . "%' ";

    $result = $dbc->query($sql);

    $count = $result->num_rows;
   
        $response = true;
        if ($response) {
            //echo ('sent');
            
            $insertQuery = "INSERT INTO `confirmeduseroffers` (`name`, `tourID`, `apartmentID`, `hotelID`, `carID`, `price`) values ('$email', '$tourID', '$apartmentID', '$hotelID', '$carID', '$price')";
            
            $responseInsert = @mysqli_query($dbc, $insertQuery);
            if ($responseInsert) {
                $deleteQuery = "DELETE FROM `confirmedoffers` where `name` like '%" . trim($email) . "%' and `tourID` = '$tourID' and `apartmentID` = '$apartmentID' and `hotelID` = '$hotelID' and `carID` = '$carID' and `price` = '$price'  ";
                
                $responseDelete = @mysqli_query($dbc, $deleteQuery);
                if($responseDelete){
                    $deleteUserReservation = "DELETE from `usertour` where trim(usertour.name) like '%" . trim($email) . "%'; 
                    delete from `usercar` where trim(usercar.name) like '%" . trim($email) . "%';
                    delete from `userhotel` where trim(userhotel.name) like '%" . trim($email) . "%';
                    delete from `userapartment` where trim(userapartment.name) like '%" . trim($email) . "%';" ;
                    
                    $responseDeleteReservation = @mysqli_multi_query($dbc, $deleteUserReservation);
                    if($responseDeleteReservation){
                        echo ('sent');
                    } else{
                        echo ('deleteError');
                    }
                } else{
                    echo ('error u delete');
                }
            } else {
                echo ('insertError');
            }
            
        }
    } else {
        echo ('neki error');
    }


?>