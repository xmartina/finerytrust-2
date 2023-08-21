<?php

use PHPMailer\PHPMailer\PHPMailer;

// MESSAGE & EMAIL CONFIGURATION FOR SCRIPT
class message{
    private $conn;
    public function send_mail($email, $message, $subject){

        $mail = new PHPMailer();
        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "mail.finerytrust.com"; // Change Email Host
        $mail->SMTPAuth = true;
        $mail->Username = "info@finerytrust.com"; // Change Email Address
        $mail->Password = '+Finerytrust123'; // Change Email Password
        $mail->Port = 465; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom('info@finerytrust.com','Finery Trust PLC'); // Change
        $mail->addAddress($email);
        $mail->AddReplyTo("info@finerytrust.com", "Finery Trust PLC"); // Change
        $mail->Subject = $subject;
        $mail->MsgHTML($message);
        $mail->Send();


    }

}


?>