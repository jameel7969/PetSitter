<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = createConnection();

    $email = $_POST["email"];

    // Generate a unique token (you can use a library like random_bytes)
    $token = bin2hex(random_bytes(16));

    // Store the token in the database (create a new column for password reset tokens)
    $sql = "UPDATE users SET reset_token = '$token' WHERE email = '$email'";
    $conn->query($sql);

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Return-Path: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Send an email to the user with a link containing the token (you may use a mail library)
    $reset_link = "http://localhost/PETSITTER/reset_password.php?token=$token";
    $email_subject = "Password Reset";
    $email_body = "Click the following link to reset your password: $reset_link";

    // Send the email (you may need to configure your mail server or use a third-party service)
    mail($email, $email_subject, $email_body);

    // Display a message to the user (for simplicity, you can customize this)
    echo "An email with instructions has been sent to your email address.";
}

// Close the database connection
$conn->close();
?>
