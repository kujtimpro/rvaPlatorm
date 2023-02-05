<?php

    $servername = "localhost";
    $username = "seadkhiu_rvaPlatform";
    $password = "kujtim11324";
    $dbName = "seadkhiu_rvaPlatform";
    
    $conn = mysqli_connect($servername, $username, $password, $dbName);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

?>