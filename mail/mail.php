<?php
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);
try {
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'eldarlebedev@gmail.com';
    $mail->Password = 'eldar2517';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('eldarlebedev@gmail.com', 'Eldar');
    $mail->addAddress('ededygoededy@gmail.com');
    $mail->isHTML(true);
    $mail->Subject = 'Subject line goes here';
    $mail->Body    = 'Body text goes here';
    $mail->send();

    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
