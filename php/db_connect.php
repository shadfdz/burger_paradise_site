<?php

    $dbHost = 'localhost';
    $dbUser = 'guest';
    $dbPassword = 'squidgames!@#';
    $dbName = 'burger_paradise';
    $conn = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);

    if (!$conn) {
        echo "Database connection not successful";
    }


?>

