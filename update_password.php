<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = createConnection();

    $token = $_POST["token"];
    $new_password = $_POST["new_password"];

    // Retrieve the email associated with the token
    $sql = "SELECT email FROM users WHERE reset_token = '$token'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Email found, update the password and clear the token
        $row = $result->fetch_assoc();
        $email = $row["email"];

        // Update the password and clear the reset token
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
        $sql_update = "UPDATE users SET password = '$hashed_password', reset_token = NULL WHERE email = '$email'";
        $conn->query($sql_update);

        // Display a message to the user (for simplicity, you can customize this)
        echo "Password updated successfully. You can now log in with your new password.";
    } else {
        echo "Invalid or expired token.";
    }

    // Close the database connection
    $conn->close();
}
?>
