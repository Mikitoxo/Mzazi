<?php
// Database connection
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "your_database"; // Replace with your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST['email'];
  $password = $_POST['psw'];
  $password_repeat = $_POST['psw-repeat'];

  // Check if passwords match
  if ($password !== $password_repeat) {
    $error = "Passwords do not match.";
  } else {
    // Check if the email already exists
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // Email already registered
      $error = "This email is already registered. Please log in.";
    } else {
      // Hash the password and insert the new user
      $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
      $sql = "INSERT INTO users (email, password) VALUES ('$email', '$hashedPassword')";

      if ($conn->query($sql) === TRUE) {
        echo "New account created successfully!";
        header("Location: login.php"); // Redirect to login page after successful sign-up
        exit();
      } else {
        $error = "Error: " . $sql . "<br>" . $conn->error;
      }
    }
  }
}

$conn->close();
?>
