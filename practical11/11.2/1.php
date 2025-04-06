<!-- composer require phpmailer/phpmailer -->
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();                                     
    $mail->Host       = 'smtp.gmail.com';                
    $mail->SMTPAuth   = true;                            
    $mail->Username   = 'nemisruparel07@gmail.com';
    $mail->Password   = 'zgwj cfuw hlhj aqqx';   
    $mail->SMTPSecure = 'tls';                           
    $mail->Port       = 587;                             

    $mail->setFrom('nemisruparel07@gmail.com', 'Nemis Ruparel');
    $mail->addAddress('princethanki38@gmail.com', 'Prince Thanki');

    $mail->isHTML(true);                                
    $mail->Subject = 'Test Email from PHP using SMTP';
    $mail->Body    = 'This is a <b>test email</b> sent from PHP using <i>PHPMailer</i> and SMTP.';
    $mail->AltBody = 'This is a test email sent from PHP using PHPMailer and SMTP.';

    $mail->send();
    echo 'Email has been sent successfully!';
} catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
