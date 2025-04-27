<?php
    session_start();

    $link = mysqli_connect("localhost", "scott", "tiger", "instytut");
    if (!$link) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    print ('<a href="file06_post.php">Formularz do wprowadzania danych</a><br>');

    if(isSet($_SESSION['GIT'])){
        if($_SESSION['GIT'] == 1){
            printf('<p style="color:green">Pomyślnie dodano użykownika!</p>');
            $_SESSION['GIT'] = 0;
        }
    }

    $sql = "SELECT * FROM pracownicy";
    $result = $link->query($sql);
    foreach ($result as $v) {
        echo $v["ID_PRAC"]." ".$v["NAZWISKO"]."<br/>";
    }
    $result->free();
    $link->close();

    
?>