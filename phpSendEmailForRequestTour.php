<?php
//NE TREBA FAJL
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

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
    /* $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');
     */
    //Attachments
     /*$mail->addAttachment('/var/tmp/file.tar.gz');           // Add attachments
    $mail->addAttachment('images/icon.png', 'BTT logo');  */ // Optional name
    //Content 
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'BTT.ba | Tour requested';
    $mail->Body = '

    <center>
        <div style="font-size: 20px;margin-top:10px;">
            Your tour request sent successfully, we will consider your request and reply as soon as possible.
        </div>
    </center> 
    <div style="color: red; font-size: 16px; margin-top: 10px;">
        If it was not you please <a href="mailto:abdulrahman.almonajed@gmail.com" style="color: gold; text-decoration:none">contact us</a>!!! 
    </div>
     <br>';
    $mail->AltBody = ' This is the body in plain text for non - HTML mail clients ';


    echo ' Message has been sent < br > ';



    header("location: index");
    $mail->send();

} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}