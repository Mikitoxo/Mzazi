<?php 
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "mzazidb";
    $conn = "";

    try{
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    }
    catch(mysqli_sql_exception){
        echo "Could not connect";
    } 
    
    //To hide ugly error message from users
    
    if ($conn) {
        echo"💖";
    }
    else {
        echo "not connected";
    }
?>