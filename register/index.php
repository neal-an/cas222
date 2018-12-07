<?php

if (isset($_POST['myfname']) && empty($_POST['honeypot']))

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
    
    $race_array = $_POST['race'];

    
      $mail->Body = 'Name' . $_POST['myfname'] . $_POST['mylname'] . '<br>' . 'Email:' . $_POST['myemail'] . '<br>' . 'Phone:' . $_POST['myphone'] . '<br>' . 'Special Needs:' . $_POST['mycomments'] . '<br>';
    
    $race = count($race_array);
    
    for($i=0; $i < $race; $i++) {
        $mail->Body .= $race_array[$i];
    }
    

    if (!$mail->send()) {
        include '../includes/error.html.php';
    } else {
        include 'success.html.php';
    }
    
}

else {
    include "register.html.php";
}
