<?php
    $UserName=$_COOKIE['login'];
    $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
    date_default_timezone_set('Europe/Moscow');
    $today = date("Y-m-d H:i:s");

    $date = $today;
    $datetime = new DateTime($date);
    $datetime->modify('+1 day');
    $date_wait = $datetime->format('Y-m-d H:i:s');

    $result = $mysql->query("UPDATE `e-lig` SET `date_wait` = '$date_wait' WHERE login = '$UserName'");
    $result = $mysql->query("UPDATE `e-lig` SET `status` = 'NO' WHERE login = '$UserName'");

    $mysql->close();
    header('Location:/event.php');
?>