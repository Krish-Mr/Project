<?php
mail('gokulkrishnan759@gmail.com','send','hello PHP mails');
require 'E:\xampp\PHPMailer\PHPMailerAutoload.php';
require 'E:\xampp\PHPMailer\class.phpmailer.php';
require 'E:\xampp\PHPMailer\class.smtp.php';
$mail =  new PHPMailer;

$mail->SMTPDebug = 1;                                 // Enable verbose
$mail->isSMTP();                                    // Set mailer to use SMTP
$mail->Host = 'smtp.example.com';                         // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'gokulkrishnan759@gmail.com';                 // SMTP username
$mail->Password = 'redmi0987654321';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('PHPMsiler@gmail.com', 'ADMIN');
$mail->addAddress('gokulkrishnan759@gmail.com', 'GOKUL');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'EMAIL VERIFICATION';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>'; //perform html codes
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>