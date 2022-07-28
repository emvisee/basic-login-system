<!-- Database handler -->
<?php
    // Database info
    $serverName = "localhost";
    $dBUsername = "root";
    $dBPassword = "emvisee29901096Bb!";
    $dBName = "loginSystem";

    $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }