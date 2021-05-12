<?php
    $UserName=$_COOKIE['login'];
    $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
    date_default_timezone_set('Europe/Moscow');
    $today = date("Y-m-d H:i:s");

    $result = $mysql->query("UPDATE `e-lig` SET reg_date = '$today' WHERE login = '$UserName'");

    $mysql->close();
    header('Location:/event.php');
?>