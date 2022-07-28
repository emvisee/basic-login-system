<?php
    include_once 'header.php';
?>

<?php
    if (!isset($_SESSION["useruid"])) {
        header("location: login.php");
        exit();
    }
?>
        <section class="signup-form">
            <div class="profile-info">
                <div class="form-header">Profile Info</div>
                <?php
                    echo "<div>Display name: " . $_SESSION["username"] . "</div>";
                    echo "<div>Email: " . $_SESSION["useremail"] . "</div>";
                    echo "<div>Username: " . $_SESSION["useruid"] . "</div>";
                ?>
            </div>
        </section>
<?php
    include_once 'footer.php';
?>