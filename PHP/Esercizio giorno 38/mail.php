<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (isset($email)) {
    $mail = new PHPMailer(true);

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    try {
        $mail->isSMTP();
        $mail->Host = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = '0bfd17cd7ed374';
        $mail->Password = '1e7288d2d26ec2';
        $mail->Port = 2525;

        $mail->setFrom('admin@example.com', 'Okk');
        $mail->addAddress($email, $firstname . ' ' . $lastname);
        $mail->addAddress('ellen@example.com');
        $mail->addReplyTo('info@example.com', 'Information');

        $mail->addAttachment($image);

        $mail->isHTML(true);
        $mail->Subject = 'Grazie per la registrazione!!';
        $mail->Body = '<h1>Sei un grande!</h1>';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

?>