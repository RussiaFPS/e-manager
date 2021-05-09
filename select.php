<?php
    $selected1 = $_POST['select_card1'];$selected2 = $_POST['select_card2']; $selected3 = $_POST['select_card3'];$selected4 = $_POST['select_card4'];$selected5 = $_POST['select_card5'];
    $id_card1;$id_card2;$id_card3;$id_card4;$id_card5;
    $role_selected1;$role_selected2;$role_selected3;$role_selected4;$role_selected5;
    $UserName=$_COOKIE['login'];

    $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
    $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `viewer_name`='$selected1'");
    while($row = mysqli_fetch_assoc($result_select))
                        {
                            $id_card1[] = $row['id'];
                            $role_selected1[] = $row['role'];
                        }
    $id_card1 = join(',', $id_card1);
    $role_selected1 = join(',',$role_selected1);

    $result = $mysql->query("UPDATE `users` SET idCard1 = $id_card1 WHERE login = '$UserName'");

    $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `viewer_name`='$selected2'");
        while($row = mysqli_fetch_assoc($result_select))
                            {
                                $id_card2[] = $row['id'];
                                $role_selected2[] = $row['role'];
                            }
        $id_card2 = join(',', $id_card2);
        $role_selected2 = join(',',$role_selected2);

        if($id_card2 != $id_card1 and $role_selected2 != $role_selected1){
            $result = $mysql->query("UPDATE `users` SET idCard2 = $id_card2 WHERE login = '$UserName'");
        }

    $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `viewer_name`='$selected3'");
            while($row = mysqli_fetch_assoc($result_select))
                                {
                                    $id_card3[] = $row['id'];
                                    $role_selected3[] = $row['role'];
                                }
            $id_card3 = join(',', $id_card3);
            $role_selected3 = join(',',$role_selected3);

            if($id_card3 != $id_card1 and $id_card3 != $id_card2 and $role_selected3 != $role_selected1 and $role_selected3 != $role_selected2){
                $result = $mysql->query("UPDATE `users` SET idCard3 = $id_card3 WHERE login = '$UserName'");
            }

    $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `viewer_name`='$selected4'");
                while($row = mysqli_fetch_assoc($result_select))
                                    {
                                        $id_card4[] = $row['id'];
                                        $role_selected4[] = $row['role'];
                                    }
                $id_card4 = join(',', $id_card4);
                $role_selected4 = join(',',$role_selected4);

                if($id_card4 != $id_card1 and $id_card4 != $id_card2 and $id_card4 != $id_card3 and $role_selected4 != $role_selected1 and $role_selected4 != $role_selected2 and $role_selected4 != $role_selected3){
                    $result = $mysql->query("UPDATE `users` SET idCard4 = $id_card4 WHERE login = '$UserName'");
                }

    $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `viewer_name`='$selected5'");
                    while($row = mysqli_fetch_assoc($result_select))
                                        {
                                            $id_card5[] = $row['id'];
                                            $role_selected5[] = $row['role'];
                                        }
                    $id_card5 = join(',', $id_card5);
                    $role_selected5 = join(',',$role_selected5);

                    if($id_card5 != $id_card1 and $id_card5 != $id_card2 and $id_card5 != $id_card3 and $id_card5 != $id_card4 and $role_selected5 != $role_selected1 and $role_selected5 != $role_selected2 and $role_selected5 != $role_selected3 and $role_selected5 != $role_selected4){
                        $result = $mysql->query("UPDATE `users` SET idCard5 = $id_card5 WHERE login = '$UserName'");
                    }

    $mysql->close();
    header('Location:/play.php');
?>