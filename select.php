<?php
    $selected1 = $_POST['select_card1'];$selected2 = $_POST['select_card2']; $selected3 = $_POST['select_card3'];$selected4 = $_POST['select_card4'];$selected5 = $_POST['select_card5'];
    $id_card1;$id_card2;$id_card3;$id_card4;$id_card5;
    $UserName=$_COOKIE['user'];

    $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
    $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `viewer_name`='$selected1'");
    while($row = mysqli_fetch_assoc($result_select))
                        {
                            $id_card1[] = $row['id'];
                        }
    $id_card1 = join(',', $id_card1);
    $result = $mysql->query("UPDATE `users` SET idCard1 = $id_card1 WHERE login = '$UserName'");

    $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `viewer_name`='$selected2'");
        while($row = mysqli_fetch_assoc($result_select))
                            {
                                $id_card2[] = $row['id'];
                            }
        $id_card2 = join(',', $id_card2);
        $result = $mysql->query("UPDATE `users` SET idCard2 = $id_card2 WHERE login = '$UserName'");

    $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `viewer_name`='$selected3'");
            while($row = mysqli_fetch_assoc($result_select))
                                {
                                    $id_card3[] = $row['id'];
                                }
            $id_card3 = join(',', $id_card3);
            $result = $mysql->query("UPDATE `users` SET idCard3 = $id_card3 WHERE login = '$UserName'");

    $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `viewer_name`='$selected4'");
                while($row = mysqli_fetch_assoc($result_select))
                                    {
                                        $id_card4[] = $row['id'];
                                    }
                $id_card4 = join(',', $id_card4);
                $result = $mysql->query("UPDATE `users` SET idCard4 = $id_card4 WHERE login = '$UserName'");

    $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `viewer_name`='$selected5'");
                    while($row = mysqli_fetch_assoc($result_select))
                                        {
                                            $id_card5[] = $row['id'];
                                        }
                    $id_card5 = join(',', $id_card5);
                    $result = $mysql->query("UPDATE `users` SET idCard5 = $id_card5 WHERE login = '$UserName'");

    $mysql->close();
    header('Location:/play.php');
?>