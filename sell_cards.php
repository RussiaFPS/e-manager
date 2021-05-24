<?php
$selected_sell = $_POST['select_sell_cards'];
$UserName=$_COOKIE['login'];
$money;$sell_price;$status;$update_money;

$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
        $result_select = $mysql->query("SELECT * FROM `e-lig` WHERE `login`='$UserName'");
            while($row = mysqli_fetch_assoc($result_select)){
                $status[] = $row['status'];
            }
             $status = join(',', $status);
        if($status == 'NO'){
             $mysql->close();
             header('Location:/store.php');
        }else{
        $result_select = $mysql->query("SELECT * FROM `users` WHERE `login`='$UserName'");
                        while($row = mysqli_fetch_assoc($result_select)){
                             $money[] = $row['money'];
                        }
                    $money = join(',', $money);

            $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `viewer_name`='$selected_sell'");
                                while($row = mysqli_fetch_assoc($result_select)){
                                     $sell_price[] = $row['buy_price'];
                                }
                            $sell_price = join(',', $sell_price);

            $update_money = $money + $sell_price/2;
            $result = $mysql->query("UPDATE `users` SET money = $update_money WHERE login = '$UserName'");
            for($i = 1; $i <= 10; $i++) {
                $result = $mysql->query("UPDATE `inventory` SET viewer_name{$i}=NULL WHERE viewer_name{$i}='$selected_sell' AND login = '$UserName'");
            }

            $id_sell_card;
            $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `viewer_name`='$selected_sell'");
                                            while($row = mysqli_fetch_assoc($result_select)){
                                                 $id_sell_card[] = $row['id'];
                                            }
                                        $id_sell_card = join(',', $id_sell_card);
            for($i = 1; $i <= 5; $i++) {
                $result = $mysql->query("UPDATE `users` SET idCard{$i}=NULL WHERE idCard{$i}=$id_sell_card AND login = '$UserName'");
            }
            $mysql->close();
            header('Location:/store.php');
        }
?>