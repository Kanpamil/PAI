<?php
    session_start();
    $link = mysqli_connect("localhost", "scott", "tiger", "instytut");
    if (!$link) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
    }
    if (isset($_POST['id_prac']) &&
        is_numeric($_POST['id_prac']) &&
        is_string($_POST['nazwisko']))
    {
        $sql = "INSERT INTO pracownicy(id_prac,nazwisko) VALUES(?,?)";
        $stmt = $link->prepare($sql);
        $stmt->bind_param("is", $_POST['id_prac'], $_POST['nazwisko']);
        $result = $stmt->execute();
        if (!$result) {
            $_SESSION["NIEGIT"] = 1;
            $_SESSION["ERROR_MESSAGE"] = mysqli_error($link);
            header('Location: file06_post.php');

        }
        else{
            $stmt->close();
            $_SESSION["GIT"] = 1;
            header('Location: file06_get.php');
        }   
    }
    else{
        $_SESSION["NIEGIT"] = 1;
        $_SESSION["ERROR_MESSAGE"] = "Podane pola są błędne";
        header('Location: file06_post.php');
    }
?>