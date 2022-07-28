<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header">
        <a class="header-buttons" id='home-button' href="index.php">Home</a>
        <?php
            if (isset($_SESSION["useruid"])) {
                echo "<a class='header-buttons' id='profile-button' href='profile.php'>Profile</a>";
                echo "<a class='header-buttons' id='logout-button' href='includes/logout.inc.php'>Log Out</a>";
            }
            else {
                echo "<a class='header-buttons' id='signup-button' href='signup.php'>Sign Up</a>";
                echo "<a class='header-buttons' id='login-button' href='login.php'>Log In</a>";
            }
        ?>
    </div>

    <div class="content-wrapper">