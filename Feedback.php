<?php
include 'connection.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = createConnection(); 

    $uname = $_POST["uname"];
    $email = $_POST["email"]; 
    $phone = $_POST["phone"];
    $msg = $_POST["msg"];


    // Insert data into the database
    $sql = "INSERT INTO feedback (uname, email, phone, msg) VALUES ('$uname', '$email', '$phone', '$msg')"; 
        echo '<script>
        alert("Successfully feedback stored!");
        </script>';    
        header("Location: /PETSITTER/petsitters/$Feedback.html");
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    // Close the database connection
    $conn->close();
}
?>
