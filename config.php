<?php
    
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "assad";

    $conn = new mysqli($hostname, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("connection failed!");
    }
    
?>