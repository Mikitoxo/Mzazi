<?php 
    include("databasee.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task manager</title>
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

        /* Form stuff*/
        form {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            color: #333333;
        }

        /* Form fields  */
        input[type="text"], input[type="email"], input[type="password"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: lightcoral;
            color: white;
            font-weight: bold;
            cursor: pointer;
            border: none;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: red;
        }

        /* Error message*/
        .error {
            color: darkred;
            text-align: center;
        }
        
        
    </style>
</head>
<body>
    <div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>"method="POST"><!--post is more secure than get-->
        <h2>Welcome to M-ZAZI!</h2>
        username:<br>
        <input type="text" name="username"><br>
        email:<br>
        <input type="email" name="email"><br>
        password:<br>
        <input type="password" name="password"><br>
        <input type="submit" name="submit" value="register">
    </form>
    

<?php 
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = filter_input(INPUT_POST,"username", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST,"email", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST,"password", FILTER_SANITIZE_SPECIAL_CHARS);
    
  

    if(empty($username) || empty($password) || empty($email)){
        echo "Please enter valid email, username or password"; 
    }
    else{
        $hash = password_hash($password, PASSWORD_DEFAULT);//hashing hides the passwords, only user knows them
        $sql = "INSERT INTO users(username, email, password)
        VALUES ('$username', '$email','$hash')";

       if(mysqli_query($conn, $sql)){
        echo"<div class='welcome'>Welcome to the family!". "</div>";

        //redirect to tasks page
        header("Location: tasks.php");
        exit;
       }
       else{
        echo"<div class='error'> Error:". mysqli_error($conn)."</div>";
    }
  }
  }
  //close the database connection
 mysqli_close($conn);
?>
</div>
</body>
</html>