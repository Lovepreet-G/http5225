<?php
    // Database
    $host = "sql303.infinityfree.com";
    $username = "if0_35318803";
    $password = "EFcGdazCree";
    $dbname = "if0_35318803_account";

    // Create connection
    $conn = mysqli_connect($host, $username, $password, $dbname);

    // Check connection
    if(!$conn) {
        die("Connection failed: " . $conn);
    }
?>