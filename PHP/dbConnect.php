<?php
$conn = new mysqli("localhost" , "root", "Easelm93$", "registration");

    if(!$conn)
    {
        die("Connection failed " . mysqli_connect_error());
    }
    return $conn;
?>