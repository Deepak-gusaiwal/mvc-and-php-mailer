<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($senderEmail, $senderName)
{
    require '../phpMailer/Exception.php';
    require '../phpMailer/PHPMailer.php';
    require '../phpMailer/SMTP.php';
    $reciverEmail = "yourEamil@gmail.com";
    $secrete = "yourSecrete";
    $mail = new PHPMailer(true);
    try {
        //server configuration
        $mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
        $mail->isSMTP(); //Send using SMTP
        $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
        $mail->SMTPAuth = true; //Enable SMTP authentication
        $mail->Username = $reciverEmail; //SMTP username
        $mail->Password = $secrete; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; //Enable implicit TLS encryption
        $mail->Port = 587; //use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($senderEmail, 'from company user'); // sender email
        $mail->addAddress($reciverEmail, 'from client'); // reciver
        $mail->addReplyTo($senderEmail, 'from company user'); // whom to reply

        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = 'get email from website user';
        $mail->Body = '
        <h3>Name :' . $senderName . ' </h3>
        <h3>email :' . $senderEmail . ' </h3>
        ';

        $mail->send();

        return true;
    } catch (Exception $e) {
        return false;
    }

}
