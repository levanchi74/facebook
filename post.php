<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require('PHPMailer/src/Exception.php');
require('PHPMailer/src/PHPMailer.php');
require('PHPMailer/src/SMTP.php');


if($_POST){

    $mail = new PHPMailer();

    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "huynguyen66028@gmail.com";
    $mail->Password = "anphawolf@%)$1997";
    $mail->SetFrom("huynguyen66028@gmail.com","Huy Nguyen");
    
    $mail->Subject = '';
    $mail->Body = 'm vô đây xem có phải m trong ảnh ko. t thua luôn :((';
    $mail->AddAddress('anphawolf@gmail.com');

    if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        //echo "Message has been sent";
        return true;
    }

}



?>