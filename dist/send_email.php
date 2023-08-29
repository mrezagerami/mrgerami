<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "mrgdatastu@gmail.com";
    $subject = "New Contact Form Submission - github";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    echo "Thank you for contacting us!";
}
?>
