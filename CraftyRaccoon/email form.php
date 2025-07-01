<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $details = htmlspecialchars($_POST['details']);

    $to = "your-email@example.com"; // Replace with your email
    $subject = "New Project Inquiry from $name";
    $message = "
        Name: $name\n
        Email: $email\n
        Phone: $phone\n
        Project Details:\n
        $details
    ";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your message has been sent successfully.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>
