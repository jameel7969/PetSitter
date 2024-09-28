<?php
include 'connection.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = createConnection(); 

    $bookingDate = $_POST["bookingDate"];
    $bookingDateTo = $_POST["bookingDateTo"];
    $petSitterName = $_POST["petSitterName"];
    $bookingOption = $_POST["bookingOption"];
    $bookingDescription = $_POST["bookingDescription"];


    // Insert data into the database
    $sql = "INSERT INTO bookings (booking_date, booking_DateTo ,name, service_option, description) VALUES ('$bookingDate','$bookingDateTo','$petSitterName', '$bookingOption', '$bookingDescription')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>
        alert("Successful Booking!");
        </script>';    
        header("Location: /PETSITTER/petsitters/$petSitterName.php");
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    
    // Close the database connection
    $conn->close();
}
?>
