<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$senderEmail = 'Sender_email_id';
$senderName = 'Sender_username';

$successMessage = '';
$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $receiverEmail = $_POST['receiver_email'];
    $receiverName = 'Recipient';

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = $senderEmail;
        $mail->Password   = 'Sender_Email_Password'; //Enter Your App Password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;
        $mail->setFrom($senderEmail, $senderName);
        $mail->addAddress($receiverEmail, $receiverName);
        $mail->isHTML(true);
        $mail->Subject = 'Test Email from PHP using SMTP';
        $mail->Body    = '
            <div style="font-family: Arial, sans-serif; color: #333;">
                <h2 style="color: #007BFF;">Test Email</h2>
                <p>This is a <strong>test email</strong> sent using <em>PHPMailer</em> via Gmail SMTP.</p>
            </div>
        ';
        $mail->send();

        $successMessage = "Mail from <strong>$senderEmail</strong> to <strong>$receiverEmail</strong> was sent successfully.";
    } catch (Exception $e) {
        $errorMessage = "<strong>Error:</strong> Mail could not be sent.<br><em>Mailer Error:</em> {$mail->ErrorInfo}";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f7f7f7;
            padding: 40px;
        }
        .email-form {
            background: #fff;
            padding: 30px;
            max-width: 400px;
            margin: auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .email-form input[type="email"],
        .email-form input[type="submit"] {
            width: 91%;
            padding: 12px 15px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ccc;
            font-size: 16px;
        }
        .email-form input[type="submit"] {
            width: 100%;
            background-color: #007BFF;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        .email-form input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .message {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px 30px;
            border-radius: 5px;
            font-family: Arial, sans-serif;
        }
        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>

<div class="email-form">
    <form method="POST">
        <label for="email">Recipient Email:</label>
        <input type="email" name="receiver_email" id="email" required>
        <input type="submit" value="Send Email">
    </form>
</div>

<?php if ($successMessage): ?>
    <div class="message success">
        <strong>Success!</strong><br>
        <?= $successMessage ?>
    </div>
<?php elseif ($errorMessage): ?>
    <div class="message error">
        <?= $errorMessage ?>
    </div>
<?php endif; ?>

</body>
</html>
