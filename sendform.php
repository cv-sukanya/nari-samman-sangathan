<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fname = htmlspecialchars(strip_tags(trim($_POST['fname'])));
    $lname = htmlspecialchars(strip_tags(trim($_POST['lname'])));
    $email = htmlspecialchars(strip_tags(trim($_POST['email'])));
    $phone = htmlspecialchars(strip_tags(trim($_POST['phone'])));
    $msg = htmlspecialchars(strip_tags(trim($_POST['msg'])));

    // Recipient email address
    $to = "narisamman@gmail.com"; 

    // Email headers
    $headers = "From: $fname $lname<$email>" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Email body
    $body = "You have received a new message from the contact form.\n\n" .
            "Name: $fname $lname\n" .
            "Email: $email\n\n" .
            "Phone: $phone\n\n".
            "Message:\n$msg";

    // Send the email
    if (mail($to, $body, $headers)) {
        echo "Thank you, $name. Your message has been sent!";
    } else {
        echo "There was a problem sending your message. Please try again.";
    }
}
?>
