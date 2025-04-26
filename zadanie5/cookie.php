<?php
session_start();
require("funkcje.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
        <meta charset='UTF-8' />
    </head>
    <body>
        <?php
            if (isset($_GET['utworzCookie']) && isset($_GET['czas'])) {
                $czas = test_input($_GET['czas']);
                setcookie("ciasto", "czekoladowe", time() + $czas);
                echo "<h2>Stworzono cookie z czasem życia: " . $czas . "</h2>";
            }
        ?>

        <a href="index.php">Wstecz</a>
    </body>
</html>