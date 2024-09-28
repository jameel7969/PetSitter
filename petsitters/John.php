<?php
include '../connection.php';

$conn = createConnection();

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$searchName = "John";
$escapedName = $conn->real_escape_string($searchName);

$sql = "SELECT booking_date, booking_dateTo FROM bookings WHERE name = '$escapedName'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $bookingDate = $row["booking_date"];
      $bookingDateTo = $row["booking_dateTo"];

    }
} else {
  $bookingDateTo = date("Y-m-d");
}

$currentDateTime = date("Y-m-d");


if ($currentDateTime > $bookingDateTo) {
  $sql = "DELETE FROM bookings WHERE name = '$escapedName'";
  
  if ($conn->query($sql) === TRUE) {
    session_start();

    if (!isset($_SESSION['refresh'])) {
    $_SESSION['refresh'] = true;

    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
  }

  unset($_SESSION['refresh']);
  } else {
  }
} else {

}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../Services.css" />
  <link rel="stylesheet" href="../Footer.css">
  <link rel="stylesheet" href="petsitterStyle.css" />
  <title>Services</title>
</head>

<body>
  <nav>
    <!-- <img src="logo.png" id="logo" alt=""> -->
    <label class="logo">Pet Sitter</label>
    <ul>
      <li><a class="" href="../Main.html">Home</a></li>
      <li><a href="../About.html">About</a></li>
      <li><a class="active" href="../Services.html">Services</a></li>
      <li><a href="../Feedback.html">Feedback & Suggestions</a></li>
      <li><a href="../Logout.php">Logout</a></li>
    </ul>
  </nav>


  <section style="margin-bottom: 200px;">
    <div id="JohnProfiePic"></div>

    <div>
      <h3 id="userName">John Doe</h3>
      <p id="description">Hello, I'm John! With a background in veterinary care and a lifelong passion for animals, I
        bring expertise and compassion to pet sitting. Whether it's a cozy night in or an adventurous outing, your pets
        will receive personalized attention and love.</p>

      <!-- <a href="" class="callToAction" id="isJohnHired"> -->
        <a href="../BookingPage.php?petsitter=John" class="callToAction" id="Hire">
        Hire Now
      </a>
      <a href="#" id="callToAction2">
        Get In Touch
      </a>

      <div id="availableIn" class="remainingTime"></div>
    </div>

  </section>




  <!-- Footer section  -->
  <footer class="footer">
    <ul class="socialIcon">
      <li class="socialIconItem"><a class="socialIconLink" href="#">
          <ion-icon name="logo-facebook"></ion-icon>
        </a></li>
      <li class="socialIconItem"><a class="socialIconLink" href="#">
          <ion-icon name="logo-twitter"></ion-icon>
        </a></li>
      <li class="socialIconItem"><a class="socialIconLink" href="#">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a></li>
      <li class="socialIconItem"><a class="socialIconLink" href="#">
          <ion-icon name="logo-instagram"></ion-icon>
        </a></li>
    </ul>
    <ul class="menu">
      <li class="menuItem"><a class="menuLink" href="../Main.html">Home</a></li>
      <li class="menuItem"><a class="menuLink" href="../About.html">About</a></li>
      <li class="menuItem"><a class="menuLink" href="../Services.html">Services</a></li>
      <li class="menuItem"><a class="menuLink" href="#">Team</a></li>
      <li class="menuItem"><a class="menuLink" href="../Feedback.html">Contact</a></li>

    </ul>
    <p>&copy;2024 A Pet siter Organization | All Rights Reserved</p>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script src="script.js"></script>

  <script>



    var bookingDate = <?php echo !empty($bookingDate) ? json_encode($bookingDate) : 'undefined'; ?>;
    console.log("Booking Date From:", bookingDate);

    var bookingDateTo = <?php echo !empty($bookingDateTo) ? json_encode($bookingDateTo) : 'undefined'; ?>;
    console.log("Booking Date To:", bookingDateTo);


    if (bookingDate) {
    console.log("This petsitter is already booked.");

    const hireBtn = document.getElementById('Hire');

    hireBtn.textContent = "Hired";
    hireBtn.href = "javascript:void(0)";
    hireBtn.classList.add("disabled");

    const availableIn = document.getElementById('availableIn')
    availableIn.textContent = `Available After:  ${bookingDateTo}`
    
    }


  </script>




</body>

</html>