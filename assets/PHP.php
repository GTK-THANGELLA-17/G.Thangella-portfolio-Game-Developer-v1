<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Include PHPMailer autoload file
require '.\assets\PHPMailer-master\src\PHPMailer.php';
require '.\assets\PHPMailer-master\src\SMTP.php';
require '.\assets\PHPMailer-master\src\Execution.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $whatsapp = $_POST['whatsapp'];
    $message = $_POST['message'];

    // Set up PHPMailer
    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'gtk1443@gmail.com'; // Your Gmail username
        $mail->Password   = 'G@t$k144377'; // Your Gmail password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('gtk1443@gmail.com', 'Thangella'); // Your name
        $mail->addAddress('gtk1443@gmail.com'); // Your email address

        // Content
        $mail->isHTML(false);
        $mail->Subject = 'Message from Contact Form';
        $mail->Body    = "Name: $name\nEmail: $email\nWhatsApp Number: $whatsapp\nMessage: $message";

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>