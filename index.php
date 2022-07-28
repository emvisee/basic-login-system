<?php
    include_once 'header.php';
?>
        <section class="signup-form">
            <div class="profile-info">
                <div class="form-header">Home Page</div>
                <?php
                    if (isset($_SESSION["useruid"])) {
                        echo "<div>Hello " . $_SESSION["username"] . "!</div>";
                    }
                ?>
                <p>This is a project showcasing a basic login system. [July 2022]</p>
                <p>Be sure to check out my <a class='link' href='https://emvisee.github.io/rubiks-cube-website/' target='_blank'>virtual rubik's cube</a> as well!</p>
            </div>
        </section>
<?php
    include_once 'footer.php';
?>