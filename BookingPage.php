<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Petsitter Booking</title>
    <link rel="stylesheet" href="BookingSystem.css" />
  </head>
  <body>
    <!-- Navbar section -->
    <nav>
      <label class="logo">Pet Sitter</label>
      <ul>
        <li><a class="" href="Main.html">Home</a></li>
        <li><a href="About.html">About</a></li>
        <li><a class="active" href="Services.html">Services</a></li>
        <li>
          <a href="Feedback.html">Feedback & Suggestions</a>
        </li>
        <li><a href="Logout.php">Logout</a></li>
      </ul>
    </nav>

    <!-- Booking form -->

    <form action="BookingSystem.php" method="post" id="myForm">
      <h2>Pet Sitter Booking Hub</h2>
      
      <label for="bookingDate" class="labelForm">Select Booking From</label
      ><br />
      <input type="date" name="bookingDate" required /><br />

      <label for="bookingDateTo" class="labelForm">To:</label
      ><br />
      <input type="date" name="bookingDateTo" required /><br />

      <label for="petSitterName" class="labelForm">Pet Sitter Name</label>
      <input type="text" id="petsitter" name="petSitterName" readonly><br />

      <label for="bookingOption" class="labelForm">Choose a Service</label
      ><br />
      
      <select name="bookingOption" required>
        <option selected value="select">Select a option</option>
        <option value="dogWalking">Dog Walking - $20</option>
        <option value="catSitting">Cat Sitting - $15</option>
        <option value="birdFeeding">Bird Feeding - $10</option>
        <option value="smallPets">Small Pets Care - $18</option></select
      ><br />

      <label for="bookingDescription" class="labelForm"
        >Additional Comments (optional)</label
      ><br />
      <textarea
        name="bookingDescription"
        rows="5"
        cols="50"
        placeholder="Any special instructions or requests..."
      ></textarea
      ><br />

      <button type="submit" value="Submit Booking">Submit Booking</button>
    </form>

    <!-- footer section -->

    <footer class="footer">
      <ul class="socialIcon">
        <li class="socialIconItem">
          <a class="socialIconLink" href="#">
            <ion-icon name="logo-facebook"></ion-icon>
          </a>
        </li>
        <li class="socialIconItem">
          <a class="socialIconLink" href="#">
            <ion-icon name="logo-twitter"></ion-icon>
          </a>
        </li>
        <li class="socialIconItem">
          <a class="socialIconLink" href="#">
            <ion-icon name="logo-linkedin"></ion-icon>
          </a>
        </li>
        <li class="socialIconItem">
          <a class="socialIconLink" href="#">
            <ion-icon name="logo-instagram"></ion-icon>
          </a>
        </li>
      </ul>
      <ul class="menu">
        <li class="menuItem"><a class="menuLink" href="Main.html">Home</a></li>
        <li class="menuItem">
          <a class="menuLink" href="About.html">About</a>
        </li>
        <li class="menuItem">
          <a class="menuLink" href="Services.html">Services</a>
        </li>
        <li class="menuItem"><a class="menuLink" href="#">Team</a></li>
        <li class="menuItem">
          <a class="menuLink" href="Feedback.html">Contact</a>
        </li>
      </ul>
      <p>&copy;2024 A Pet siter Organization | All Rights Reserved</p>
    </footer>

    <!-- Footer script -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>

    <script>
        // Function to retrieve the petsitter's name from the URL query parameter
        function getPetsitterName() {
            // Get the URL query parameters
            const params = new URLSearchParams(window.location.search);
            // Get the value of the 'petsitter' parameter
            const petsitterName = params.get('petsitter');
            // Set the value of the input field to the petsitter's name
            document.getElementById('petsitter').value = petsitterName;
            console.log(petsitterName); // Log the petsitter's name to the console
        }

        // Call the function to retrieve the petsitter's name when the page loads
        window.onload = getPetsitterName;
    </script>
    
  </body>
</html>
