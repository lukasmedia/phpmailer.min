<?php
date_default_timezone_set('Etc/UTC');

require 'class.phpmailer.php';
require 'SMTP.php';

$mail = new PHPMailer;
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

$mail->Host = 'localhost';
$mail->Port = 25;
$mail->SMTPAuth = false;

//$mail->Username = 'yourname@example.com';
//$mail->Password = 'yourpassword';

$mail->setFrom('from@example.com', 'First Last');
$mail->addReplyTo('replyto@example.com', 'First Last');
$mail->addAddress('whoto@example.com', 'John Doe');
$mail->Subject = 'PHPMailer SMTP test';

$mail->msgHTML(file_get_contents('contents.html'), __DIR__);
$mail->AltBody = 'This is a plain-text message body';
$mail->addAttachment('images/phpmailer_mini.png');

if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}
