<?php 
    include("databasee.php");
    session_start();

    // Check if user is already logged in, redirect to tasks page
    if (isset($_SESSION['username'])) {
        header("Location: MZAZI FRONT PAGE.html ");
        exit;
    }

    // Handle login form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username'], $_POST['password'])) {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        if (empty($username) || empty($password)) {
            $error = "Please enter both username and password.";
        } else {
            // Check if username exists in the database
            $sql = "SELECT * FROM users WHERE username = '$username'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $user = mysqli_fetch_assoc($result);
                // Verify password
                if (password_verify($password, $user['password'])) {
                    // Password correct, start session
                    $_SESSION['username'] = $username;
                    header("Location: Mzazi about page.html");
                    exit;
                }
                 else {
                    $error = "Incorrect password.";
                }
            } else {
                $error = "Username does not exist.";
            }
        }
    }


    // Close the database connection
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - MZAZI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-input[type="text"], .form-input[type="password"] {
            font-size: 16px;
        }

        .form-input[type="submit"] {
            background-color: lightcoral;
            color: white;
            font-weight: bold;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s;
        }

        .form-input[type="submit"]:hover {
            background-color: red;
        }

        .error {
            color: darkred;
            text-align: center;
            margin-top: 10px;
        }

        .register-link {
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login to </h2>M-ZAZI

        <!-- Login Form -->
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="text" name="username" class="form-input" placeholder="Username" required>
            <input type="password" name="password" class="form-input" placeholder="Password" required>
            <input type="submit" name="submit" class="form-input" value="Login">
        </form>

        <!-- Error message -->
        <?php 
            if (isset($error)) {
                echo "<div class='error'>$error</div>";
            }
        ?>

        <!-- Link to Registration page -->
        <div class="register-link">
            <p>Don't have an account? <a href="register.php">Register here</a></p>
        </div>
    </div>
</body>
</html>