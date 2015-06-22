<?php
require 'class.phpmailer.php';

$mail = new PHPMailer;

//$mail->isSendmail();
//$mail->isSMTP();

$mail->setFrom('youremail@domain.com', "You're name");
$mail->addReplyTo('replyto@domain.com', "You're name");

$mail->addAddress('customer@hisdomain.com', 'Customer name');

$mail->Subject = 'Sendmail test';

$mail->msgHTML("<body><h1>Test</h1>This is a test message</body>");
$mail->AltBody = 'This is a plain-text message body';

//$mail->addAttachment('images/phpmailer_mini.png');

if (!$mail->send())
    echo "Mailer Error: " . $mail->ErrorInfo;
else
    echo "Message sent!";
