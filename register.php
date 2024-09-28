<?php
include 'connection.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = createConnection(); 

    $name = $_POST["name"]; 
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Validate the form data
    if ($password !== $confirm_password) {
        die("Error: Passwords do not match.");
    }

    // Hash the password for security
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into the database
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
        header("Location: Login.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    // Close the database connection
    $conn->close();
}
?>
