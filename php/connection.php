<?php
    $servername = "localhost";
    $user = "root";
    $pass= "";
    $database = "aj_engineering";

    $conn = mysqli_connect($servername, $user, $pass, $database);

    if(!$conn){
        die("Connection failed");
    }

    
    ?>

    