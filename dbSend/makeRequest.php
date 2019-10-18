<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';


require '../connection/connect.php';

$check = $_REQUEST['check'];
$people = $_REQUEST['people'];
$child = $_REQUEST['child'];
//$length = $_REQUEST['length'];
$arrival = $_REQUEST['arrival'];
$departure = $_REQUEST['departure'];
$price = $_REQUEST['price'];
$session = $_REQUEST['session'];
$checkDriver = $_REQUEST['checkDriver'];

if ($_REQUEST['task'] == "request") {
    $query = "INSERT INTO tourrequest (`name`, `city`, `people`, `child`, `arrival`, `departure`, `price`, `driver`) VALUES ('$session', '$check', '$people', '$child', '$arrival', '$departure', '$price', '$checkDriver')";

    $response = @mysqli_query($dbc, $query);
    if ($response) {
        echo ('sent');

        $mail = new PHPMailer(true);   // Passing `true` enables exceptions

        $email = $_REQUEST['session'];
        $price = $_REQUEST['price'];

        try {
            //Server settings
            $mail->SMTPDebug = 1;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'abdulrahman.almonajed@gmail.com';                 // SMTP username
            $mail->Password = 'camqaqoelmxzbouh';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom('no-reply@btt.ba', 'BTT');
            $mail->addAddress($email);     // Add a recipient
            // Name is optional

            //Attachments
            // Optional name
            //Content 
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'BTT.ba | Tour requested';
            $mail->Body = '

    <center>
        <div style="font-size: 1.5vw;margin-top:10px;">
            Your tour request sent successfully, we will consider your request and reply as soon as possible.
        </div>
    </center> 
    <div style="color: red; font-size: 1.5vw; margin-top: 10px;">
        If it was not you please <a href="mailto:abdulrahman.almonajed@gmail.com" style="color: gold; text-decoration:none">contact us</a>!!! 
    </div>
     <br>';
            $mail->AltBody = ' This is the body in plain text for non - HTML mail clients ';


            echo ' Message has been sent < br > ';



            //header("location: index");
            $mail->send();
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    } else {
        echo mysqli_error($dbc);
    }
}
