<?php
function sendEmail($to, $filename) {
    $subject = "Secure File Transfer";
    $message = "You have received a secure file: $filename";
    $headers = "From: sender@example.com";

    mail($to, $subject, $message, $headers);
}
?>