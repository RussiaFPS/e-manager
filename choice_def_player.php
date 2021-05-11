<?php
     $submit = $_POST["_Submit_def"];
     $UserName=$_COOKIE['login'];
     $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');

        if($submit=="Убрать игрока1"){
            $result = $mysql->query("UPDATE `users` SET idCard1 = NULL WHERE login = '$UserName'");
        }else if($submit=="Убрать игрока2"){
            $result = $mysql->query("UPDATE `users` SET idCard2 = NULL WHERE login = '$UserName'");
        }else if($submit=="Убрать игрока3"){
                     $result = $mysql->query("UPDATE `users` SET idCard3 = NULL WHERE login = '$UserName'");
                 }else if($submit=="Убрать игрока4"){
                              $result = $mysql->query("UPDATE `users` SET idCard4 = NULL WHERE login = '$UserName'");
                          }else if($submit=="Убрать игрока5"){
                                       $result = $mysql->query("UPDATE `users` SET idCard5 = NULL WHERE login = '$UserName'");
                                   }
    $mysql->close();
    header('Location:/play.php');
?>