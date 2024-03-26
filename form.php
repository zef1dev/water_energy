<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];

    $to = "kseniia.lysiakova@gmail.com";
    $subject = "New Contact Form";

    $body = "Name: $name\n";
    $body .= "Email: $email\n\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your message! We'll get back to you shortly.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>