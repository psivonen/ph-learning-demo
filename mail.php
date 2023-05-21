<?php

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

include ("/Applications/XAMPP/xamppfiles/htdocs/tunnukset.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

define("PALVELU","mailtrap");
if (PALVELU == 'mailtrap'){
    /* Mailtrap */
    define("HOST",'smtp.mailtrap.io');
    define("PORT",2525);
    define("USERNAME", $username_mailtrap);
    define("PASSWORD",$password_mailtrap);
    //debugger("username:".USERNAME.",password:".PASSWORD);
}

function sendMail($emailTo, $msg, $subject){
$emailFrom = "info@phlearning.com";
$emailFromName = "PH Learning";
$emailToName = "";
try {
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Port = PORT;
    $mail->Host = HOST;
    $mail->Username = USERNAME;
    $mail->Password = PASSWORD;
    $mail->CharSet = 'UTF-8';
    $mail->SMTPDebug = 0; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
    $mail->SMTPSecure = 'tls'; 
    $mail->setFrom($emailFrom, $emailFromName);
    $mail->addAddress($emailTo, $emailToName);
    $mail->Subject = $subject;
    $mail->msgHTML($msg); //$mail->msgHTML(file_get_contents('contents.html'), __DIR__); //Read an HTML message body from an external file, convert referenced images to embedded,
    $mail->AltBody = 'HTML messaging not supported';
    // $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file
    if (!$result = $mail->send()){
        //$tulos = false;
        debugger("Message was not sent: ".$mail->ErrorInfo);
        }    
    else {
        //$tulos = true;
        debugger("Message sent: $emailTo!");
        }   
    }

catch (Exception $e) {
    $result = false;
    debugger(__FUNCTION__.','.$e->errorMessage()); 
    debugger(__FUNCTION__.',',$e->getMessage()); 
   } 

return $result;
}

?>