<?php
    
    $_SERVER = "localhost";
    $User = "root";
    $pass = "";
    $db = "city_hospital";

    $conn = mysqli_connect($_SERVER, $User, $pass, $db);

    if($conn){
        
    } else {
        echo "Error" . mysqli_connect_error();
    }

?>
























