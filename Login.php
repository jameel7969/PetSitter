<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = createConnection();

    // Get user input from the login form
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Retrieve user data from the database based on the provided email
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User found, check the password
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            // Login successful, set session variable
            session_start();
            $_SESSION["user_email"] = $email;

            
            header("Location: Main.html");
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "User not found.";
    }

    // Close the database connection
    $conn->close();
}
?>
