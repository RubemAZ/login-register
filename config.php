<?php
    Session_start();

    $hostName = "localhost";
    $userName = "Rubem";
    $password = "11111";
    $dbName = "login";

    $conn = new mysqli( $hostName, $userName, $password, $dbName );

    if ($conn->connect_error) {
        die("Connection error. Something went wrong. $conn->connect_error");
    }

?>