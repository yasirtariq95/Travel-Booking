<?php
require "header.php";
?>

    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <?php
                    if (isset($_SESSION['userId'])) {
                      echo  '<p class="login-status">You are logged in!</p> <br />
                             <p> From here we can probably add links to travel booking and pre-parking, like in the homework</p>';
                    }
                    else {
                        echo '<p class="login-status">You are logged out!</p>';
                    }
                ?>
            </section>
        </div>
    </main>

<?php
require "footer.php";
?>