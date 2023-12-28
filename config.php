<?php

    $serverName = "localhost";
    $userName = "Rubem";
    $password = "11111";
    $dbName = "login";


    $conn = new mysqli($serverName, $userName, $password, $dbName);

    if ($conn->connect_error) {
        die("Connection error." . $conn->connect_error);
    }
?>