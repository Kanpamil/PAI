<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
        <meta charset='UTF-8' />
    </head>
    <body>
        <?php
            echo "<h1> Nasz system </h1>";
        ?>
        <form action="index.php" method="post"name="logowanie">
            <label for="login">Login:</label>
            <input type="text" name="login" id="login"/>
            <label for="haslo">Haslo:</label>
            <input type="password" name="haslo", id="haslo"/>
            <input type="submit" name="zaloguj" id="zaloguj"/>
        </form>
        
    </body>
</html>