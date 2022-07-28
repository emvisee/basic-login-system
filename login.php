<?php
    include_once 'header.php';
?>
        <section class="signup-form">
            <form class="signup-flex" action="includes/login.inc.php" method="post">
                <div class="form-header">Log In</div>
                <input type="text" name="uid" placeholder="Username/Email...">
                <input type="password" name="pwd" placeholder="Password...">
                <button type="submit" name="submit">Log In</button>

            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields!<p>";
                }
                else if ($_GET["error"] == "wronglogin") {
                    echo "<p>Incorrect login!<p>";
                }
            }
            ?>
            </form>
        </section>
<?php
    include_once 'footer.php';
?>