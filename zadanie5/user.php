<?php
session_start();
require("funkcje.php");
if (!isset($_SESSION['zalogowany']) || $_SESSION['zalogowany'] != 1) {
    header("Location: index.php");
    exit();
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
            echo "<h1>Zalogowano</h1>";
            echo "<p>Użytkownik: " . $_SESSION['zalogowanyImie'] . "</p>";
            if(isSet($_POST["upload"])){
                $currentDir = getcwd();
                $uploadDirectory = "\zdjeciaUzytkownikow\s";
                $fileName = $_FILES['myfile']['name'];
                $fileSize = $_FILES['myfile']['size'];
                $fileTmpName = $_FILES['myfile']['tmp_name'];
                $fileType = $_FILES['myfile']['type'];

                    $uploadPath = $currentDir . $uploadDirectory . $fileName;
                    if(move_uploaded_file($fileTmpName, $uploadPath)){
                        echo "Successfully loaded the image:" . $fileName;
                    }

            }
        ?>

        

        <form action='user.php' method='POST' enctype='multipart/form-data'>
            <fieldset>
            <legend>Image upload:</legend>
            <input name="myfile" type="file">
            <input type="submit" value="Upload" name="upload">
            </fieldset>
        </form>

        <img style="width=170px;height:170px" src='zdjeciaUzytkownikow\swykres_czasow.png' alt='picture'>
        
        <form action="index.php" method="post">
            <input type="submit" name="wyloguj" id="wyloguj" value="wyloguj"/>
        </form>
    </body>
</html>