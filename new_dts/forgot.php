<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="user/assets/css/style_login.css">
  </head>
  <body>
    <div class="center">
      <h1>Change Password</h1>
      <form action="#" method="post">
        <div class="txt_field">
          <input type="text" name="staff_id" required>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <label>Password</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" required>
          <label>Confirm Password</label>
        </div>
        <a href="index(1).php"><div class="pass">Remember Password</div></a>
        <input type="submit" name="submit" value="Submit">
       
      </form>
    </div>
  </body>
</html>
<?php
include ('user/dbcon.php');
/*// Database connection parameters
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

// Establishing connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}*/
if(isset($_POST['submit']))
  {
// Retrieve email address from the forgot password form
$email =$_POST['staff_id'];

// Check if the email exists in the database
$sql = "SELECT * FROM login WHERE staff_id = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Email found in the database
    // Generate a new password
    $newPassword =$_POST['password'];

    // Update the user's password in the database
    $sql = "UPDATE login SET password = '$newPassword' WHERE staff_id = '$email'";
    if ($conn->query($sql) === TRUE) {
        // Password updated successfully
        // Send the new password to the user's email
        // Here, you can implement your email sending logic
        // You can use PHP's built-in mail() function or use a library like PHPMailer

        echo "Your new password has been Updated";
    } else {
        echo "Error updating password: " . $conn->error;
    }
} else {
    // Email not found in the database
    echo "Username not found.";
}
  }
// Function to generate a random password
// function generatePassword() {
//     // Generate a random password using characters, numbers, or symbols
//     // // Modify the character set as per your requirements
//    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
//    $password = '';
//    $length = 8; // Password length

//     for ($i = 0; $i < $length; $i++){
//      $password .= $characters[rand(0, strlen($characters) - 1)];
//      }

//     return $password;
// }


// Close the database connection

?>





