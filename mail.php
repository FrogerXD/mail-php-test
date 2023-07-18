<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
//use PHPMailer\PHPMailer\SMTP;
require 'vendor/autoload.php';
function sendmail($subject,$body,$email,$name,$html=false) {
    //server
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $phpmailer->Port = 465;
    $phpmailer->Username = '';
    $phpmailer->Password = '';
    //credentials
    $phpmailer->setFrom('johncena@example.com', 'Mailer');
    $phpmailer->addAddress($email, $name);
    //email body
    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;
    $phpmailer->send();
    //$mail->AltBody = 'Tu turu tu';
}
?>