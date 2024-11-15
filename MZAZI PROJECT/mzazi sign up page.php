<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sign Up Modal</title>

  <style>
    * {box-sizing: border-box}
  
    /* Full-width input fields */
    input[type=text], input[type=password] {
      width: 100%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: 1px solid #f4cccc;
      background: #ffe6e6;
      color: #4c4c4c;
    }
  
    /* Add a background color when the inputs get focus */
    input[type=text]:focus, input[type=password]:focus {
      background-color: #ffcccc;
      outline: none;
    }
  
    /* Set a style for all buttons */
    button {
      background-color: #ff6666;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }
  
    button:hover {
      opacity: 1;
    }
  
    /* Extra styles for the cancel button */
    .cancelbtn {
      padding: 14px 20px;
      background-color: #ff9999;
    }
  
    /* Float cancel and signup buttons and add an equal width */
    .cancelbtn, .signupbtn {
      float: left;
      width: 50%;
    }
  
    /* Add padding to container elements */
    .container {
      padding: 16px;
    }
  
    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgba(255, 204, 204, 0.9); /* Soft red overlay */
      padding-top: 50px;
    }
  
    /* Modal Content/Box */
    .modal-content {
      background-color: #fff;
      margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #ffcccc;
      width: 80%; /* Could be more or less, depending on screen size */
    }
  
    /* Style the horizontal ruler */
    hr {
      border: 1px solid #ffcccc;
      margin-bottom: 25px;
    }
  
    /* The Close Button (x) */
    .close {
      position: absolute;
      right: 35px;
      top: 15px;
      font-size: 40px;
      font-weight: bold;
      color: #ff6666;
    }
  
    .close:hover,
    .close:focus {
      color: #cc3333;
      cursor: pointer;
    }
  
    /* Clear floats */
    .clearfix::after {
      content: "";
      clear: both;
      display: table;
    }
  
    /* Change styles for cancel button and signup button on extra small screens */
    @media screen and (max-width: 300px) {
      .cancelbtn, .signupbtn {
        width: 100%;
      }
    }
  </style>

</head>
<body>

<?php
// This block of PHP will execute when the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form inputs
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['psw'];
    $passwordRepeat = $_POST['psw-repeat'];

    // Check if passwords match
    if ($password === $passwordRepeat) {
        // Hash the password for secure storage
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Connect to database (replace with your credentials)
        $conn = new mysqli("localhost", "username", "password", "database");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Insert the user into the database
        $sql = "INSERT INTO users (email, password) VALUES ('$email', '$hashedPassword')";

        if ($conn->query($sql) === TRUE) {
            echo "<p style='color: green;'>New account created successfully!</p>";
        } else {
            echo "<p style='color: red;'>Error: " . $sql . "<br>" . $conn->error . "</p>";
        }

        $conn->close();
    } else {
        echo "<p style='color: red;'>Passwords do not match.</p>";
    }
}
?>

<!-- Button to open the modal -->
<button onclick="document.getElementById('id01').style.display='block'">Sign Up</button>

<!-- The Modal (contains the Sign Up form) -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" method="POST">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:#ff6666">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signup">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>
// Close the modal when clicking outside of it
window.onclick = function(event) {
  if (event.target == document.getElementById('id01')) {
    document.getElementById('id01').style.display = "none";
  }
}
</script>

</body>
</html>


