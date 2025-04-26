<?php
session_start();
require("funkcje.php");


if(isset($_POST['wyloguj'])){
    $_SESSION['zalogowany'] = 0;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
        <meta charset='UTF-8' />
        <style>
            fieldset {
                display: flex;
                flex-direction: column;
                width: 200px;
            }
        </style>
    </head>
    <body>
        <?php
            echo "<h1>Nasz system</h1>";
        

            if (isset($_SESSION['blad_logowania'])) {
                echo "<p style='color:red;'>".$_SESSION['blad_logowania']."</p>";
                unset($_SESSION['blad_logowania']);
            }      
            
            if(isSet($_COOKIE["ciasto"])){
                echo "Wartość cookie: " . $_COOKIE["ciasto"];
            }

        
        // echo "<p>Przeslany login:  $login</p>";
        // echo "<p> Przesłane hasło:  $haslo</p>";
        
        ?>
        <form action="logowanie.php" method="post" name="logowanie">
            <fieldset>
                <label for="login">Login:</label>
                <input type="text" name="login" id="login"/>
                <label for="haslo">Haslo:</label>
                <input type="password" name="haslo" id="haslo"/>
                <input type="submit" name="zaloguj" id="zaloguj" value ="zaloguj"/>
            </fieldset>
        </form>
        <br>
        <br>
        <form action="cookie.php" method="get" name="cookie">
            <fieldset>
                <label for="czas">Podaj czas życia cookie(s)</label>
                <input type="number" name="czas" id="czas"/>
                <input type="submit" name="utworzCookie" value ="Utwórz Cookie"/>
            </fieldset>
        </form>
        
    </body>
</html>