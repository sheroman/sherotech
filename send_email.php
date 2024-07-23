<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'kingsheroman@gmail.com'; // Change to your email address
    $subject = 'Contact Us Form Submission';
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        header('Location: https://sherotechs.web.app/contact.html');
        exit;
    } else {
        echo "Failed to send email.";
    }
}
?>
