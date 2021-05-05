<?php
    $selected1 = $_POST['select_card1'];
    $id_card1;
    $UserName=$_COOKIE['user'];

    $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
    $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `viewer_name`='$selected1'");
    while($row = mysqli_fetch_assoc($result_select))
                        {
                            $id_card1[] = $row['id'];
                        }
    $id_card1 = join(',', $id_card1);
    $result = $mysql->query("UPDATE `users` SET idCard1 = $id_card1 WHERE login = '$UserName'");
    $mysql->close();
    header('Location:/play.php');
?>