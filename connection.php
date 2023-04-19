<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "admindb";

    // Create Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Error: " . mysqli_error($conn));
    mysqli_query($conn, "SET NAMES 'utf8' ");

    // Check connection
    // if (!$conn) {
    //     die("Connection failed" . mysqli_connect_error());
    // } 

?>