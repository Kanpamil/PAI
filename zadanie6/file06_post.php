<?php
    session_start();
    $link = mysqli_connect("localhost", "scott", "tiger", "instytut");
    if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
    }
    print<<<KONIEC
    <html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
    <body>
    <form action="file06_redirect.php" method="POST">
        id_prac <input type="text" name="id_prac">
        nazwisko <input type="text" name="nazwisko">
        <input type="submit" value="Wstaw">
        <input type="reset" value="Wyczysc">
    </form>
    <a href="file06_get.php">Strona z danymi tabeli</a>
    KONIEC;

    if(isSet($_SESSION['NIEGIT'])){
        if($_SESSION['NIEGIT'] == 1){
            printf('<p>');
            printf("Query failed: %s\n", $_SESSION["ERROR_MESSAGE"]);
            printf('</p>');
            $_SESSION['NIEGIT'] = 0;
        }
    }
?>