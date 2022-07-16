<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);
$userMailid = $_POST['email'];
$mailContent = $_POST['message'];
$phoneNo = $_POST['phone'];
$name = $_POST['name'];

try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'abhayruparel2000@gmail.com'; // Sender's or Server email.                   
    $mail->Password   = getenv("PASSWORD");    // Password of above email.
    // echo $mail->Password;                         
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    

    $mail->setFrom('abhayruparel2000@gmail.com', 'Automated mail');
    $mail->addAddress('abhayruparel2000@gmail.com');    // Receiver/Recipient Email.    


    $mail->isHTML(true);                                 
    $mail->Subject = 'New message on website from '. $name . '  :' .time();
    $mail->Body    = $mailContent;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}