<?php
     $submit = $_POST["_Submit_def"];
     $UserName=$_COOKIE['login'];
     $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
     $status;

     $result_select = $mysql->query("SELECT * FROM `e-lig` WHERE `login`='$UserName'");
                             while($row = mysqli_fetch_assoc($result_select))
                                                                    {
                                                                     $status[] = $row['status'];
                                                                    }
                    $status = join(',', $status);

        if($submit=="Убрать игрока1" and $status=='YES'){
            $result = $mysql->query("UPDATE `users` SET idCard1 = NULL WHERE login = '$UserName'");
        }else if($submit=="Убрать игрока2" and $status=='YES'){
            $result = $mysql->query("UPDATE `users` SET idCard2 = NULL WHERE login = '$UserName'");
        }else if($submit=="Убрать игрока3" and $status=='YES'){
                     $result = $mysql->query("UPDATE `users` SET idCard3 = NULL WHERE login = '$UserName'");
                 }else if($submit=="Убрать игрока4" and $status=='YES'){
                              $result = $mysql->query("UPDATE `users` SET idCard4 = NULL WHERE login = '$UserName'");
                          }else if($submit=="Убрать игрока5" and $status=='YES'){
                                       $result = $mysql->query("UPDATE `users` SET idCard5 = NULL WHERE login = '$UserName'");
                                   }
    $mysql->close();
    header('Location:/play.php');
?>