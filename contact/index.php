<?php

if (isset($_POST['myName']) && empty($_POST['honeypot']))

{
    date_default_timezone_set('Etc/UTC');

    require '../PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Debugoutput = 'html';
    
    $mail->Host = "mail.aneal.webhostingforstudents.com";
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    
    $mail->Username = "phpmailer@aneal.webhostingforstudents.com";
    $mail->Password = "myp@ssword";
    
    $mail->addReplyTo('phpmailer@aneal.webhostingforstudents.com', 'First Last');
    $mail->addAddress('phpmailer@aneal.webhostingforstudents.com', 'John Doe');

    $mail->Subject = 'Site Mail';
    
    
    
    $mail->Body = 'Email:' . $_POST['myQuestion'] . '<br>' . 'Name:' . $_POST['myName'] . '<br>';
    

    if (!$mail->send()) {
        include '../includes/error.html.php';
    } else {
        include 'success.html.php';
    }
    
}

else {
    include "contact.html.php";
}
