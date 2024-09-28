<?php
// Check if the token is present in the URL
if (!isset($_GET['token'])) {
    header("Location: login.html");
    exit();
}
$token = $_GET['token'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Reset Password</title>
   <!-- Add your CSS and other head elements here -->
</head>
<body>
   <form method="post" action="update_password.php">
      <h3>Reset Password</h3>
      <input type="hidden" name="token" value="<?php echo $token; ?>" />
      <label for="new_password">Enter your new password:</label>
      <input type="password" placeholder="New Password" id="new_password" name="new_password" required />
      <button type="submit">Reset Password</button>
   </form>
</body>
</html>
