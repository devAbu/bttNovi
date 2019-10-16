<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);   // Passing `true` enables exceptions

$firstSign = $_REQUEST['firstSign'];
$lastSign = $_REQUEST['lastSign'];
$emailSign = $_REQUEST['emailSign'];

//echo $firstSign . '<br>';
//echo $lastSign . '<br>';
//echo $emailSign . '<br>';

try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'abdulrahman.almonajed@gmail.com';                 // SMTP username
    $mail->Password = 'camqaqoelmxzbouh';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('no-reply@bttbh.ba', 'BTT');
    $mail->addAddress($emailSign);     // Add a recipient
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
    $mail->Subject = 'BTTBH.ba | E-mail verification';
    $mail->Body = '

    <center>
        <div style="background-color: silver; height: 30%;">
            <div style="font-size: 24px;">
            <div> 
                    Dear <b style="color:gold; ">' . ucfirst($firstSign) . ' ' . ucfirst($lastSign) . ',</b>
                </div>
            </div>
        </div>
        <div style="font-size: 20px;margin-top:10px;">
            First of all, we want to thank You for creating account at <a href="http://bttbh.ba" style="color:gold; text-decoration:none;">BTTBH.BA</a>
        </div>
        <div style="font-size: 20px;">
            Before You can login with your account information, please click on link below to verify your email address<br>
            http://bttbh.ba/verify.php?email=' . $emailSign . '
        </div>
    </center> 
    <div style="color: red; font-size: 16px; margin-top: 10px;">
        If it was not you please <a href="mailto:abdulrahman.almonajed@gmail.com" style="color: gold; text-decoration:none">contact us</a>!!! 
    </div>
     <br>';
    $mail->AltBody = ' This is the body in plain text for non - HTML mail clients ';

    
    //echo ' Message has been sent < br > ';

    $_SESSION[' url '] = $_SERVER[' HTTP_REFERER '];
    if (isset($_SESSION[' url '])) {
        if ($_SESSION[' url '] != ' http://bttbh.ba/myCart.php')
            $url = $_SESSION['url'];
        else
            $url = "index.php";
    } else {
        $url = "index.php";
    }
    //echo $url;

    
    header("location: index.php");
    $mail->send();
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}