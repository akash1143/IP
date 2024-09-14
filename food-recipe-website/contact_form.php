<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Here you would typically send an email or store the contact message in a database

    echo "Thank you, $name. We have received your message.";
} else {
    echo "Invalid request.";
}
?>
