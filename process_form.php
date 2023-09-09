<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "tjdrms2023@gmail.com"
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email\r\n";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message sending failed.";
    }
}
?>
