<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $whatsapp = $_POST['whatsapp'];
    $message = $_POST['message'];

    $to = "your_email@example.com"; // Replace with your email address
    $subject = "Message from Contact Form";
    $messageBody = "Name: $name\nEmail: $email\nWhatsApp Number: $whatsapp\nMessage: $message";
    $headers = "From: $email";

    if (mail($to, $subject, $messageBody, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error: Message not sent.";
    }
}
?>
