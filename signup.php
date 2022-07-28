<?php
    include_once 'header.php';
?>
        <section class="signup-form">
            <form class="signup-flex" action="includes/signup.inc.php" method="post">
                <div class="form-header">Sign Up</div>
                <input type="text" name="name" placeholder="Display name">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwdrepeat" placeholder="Confirm password">
                <button type="submit" name="submit">Sign Up</button>

            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyinput") {
                    echo "<p>Fill in all fields!<p>";
                }
                else if ($_GET["error"] == "invaliduid") {
                    echo "<p>Choose a proper username!<p>";
                }
                else if ($_GET["error"] == "invalidemail") {
                    echo "<p>Choose a proper email!<p>";
                }
                else if ($_GET["error"] == "passwordsdontmatch") {
                    echo "<p>Passwords don't match!<p>";
                }
                else if ($_GET["error"] == "stmtfailed") {
                    echo "<p>Something went wrong, please try again!<p>";
                }
                else if ($_GET["error"] == "usernametaken") {
                    echo "<p>Username already exists!<p>";
                }
                else if ($_GET["error"] == "none") {
                    echo "<p>You have signed up!<p>";
                }
            }
            ?>
            </form>
        </section>
<?php
    include_once 'footer.php';
?>