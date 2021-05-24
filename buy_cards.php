<?php
$selected_buy = $_POST['select_buy_cards'];
$UserName=$_COOKIE['login'];
$card1;$card2;$card3;$card4;$card5;$card6;$card7;$card8;$card9;$card10;
$money;$buy_price;

$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
        $result_select = $mysql->query("SELECT * FROM `inventory` WHERE `login`='$UserName'");
            while($row = mysqli_fetch_assoc($result_select)){
                 $card1[] = $row['viewer_name1'];
                 $card2[] = $row['viewer_name2'];
                 $card3[] = $row['viewer_name3'];
                 $card4[] = $row['viewer_name4'];
                 $card5[] = $row['viewer_name5'];
                 $card6[] = $row['viewer_name6'];
                 $card7[] = $row['viewer_name7'];
                 $card8[] = $row['viewer_name8'];
                 $card9[] = $row['viewer_name9'];
                 $card10[] = $row['viewer_name10'];
            }
        $card1 = join(',', $card1);$card2 = join(',', $card2);$card3 = join(',', $card3);$card4 = join(',', $card4);$card5 = join(',', $card5);$card6 = join(',', $card6);$card7 = join(',', $card7);$card8 = join(',', $card8);$card9 = join(',', $card9);$card10 = join(',', $card10);

    $result_select = $mysql->query("SELECT * FROM `users` WHERE `login`='$UserName'");
                while($row = mysqli_fetch_assoc($result_select)){
                     $money[] = $row['money'];
                }
            $money = join(',', $money);

    $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `viewer_name`='$selected_buy'");
                    while($row = mysqli_fetch_assoc($result_select)){
                         $buy_price[] = $row['buy_price'];
                    }
                $buy_price = join(',', $buy_price);

if($money >= $buy_price){
    if($card1==''){
        $result = $mysql->query("UPDATE `inventory` SET viewer_name1 = '$selected_buy' WHERE login = '$UserName'");
    }else if($card2==''){
             $result = $mysql->query("UPDATE `inventory` SET viewer_name2 = '$selected_buy' WHERE login = '$UserName'");
         }else if($card3==''){
                       $result = $mysql->query("UPDATE `inventory` SET viewer_name3 = '$selected_buy' WHERE login = '$UserName'");
                   }else if($card4==''){
                                 $result = $mysql->query("UPDATE `inventory` SET viewer_name4 = '$selected_buy' WHERE login = '$UserName'");
                             }else if($card5==''){
                                           $result = $mysql->query("UPDATE `inventory` SET viewer_name5 = '$selected_buy' WHERE login = '$UserName'");
                                       }else if($card6==''){
                                                     $result = $mysql->query("UPDATE `inventory` SET viewer_name6 = '$selected_buy' WHERE login = '$UserName'");
                                                 }else if($card7==''){
                                                               $result = $mysql->query("UPDATE `inventory` SET viewer_name7 = '$selected_buy' WHERE login = '$UserName'");
                                                           }else if($card8==''){
                                                                         $result = $mysql->query("UPDATE `inventory` SET viewer_name8 = '$selected_buy' WHERE login = '$UserName'");
                                                                     }else if($card9==''){
                                                                                   $result = $mysql->query("UPDATE `inventory` SET viewer_name9 = '$selected_buy' WHERE login = '$UserName'");
                                                                               }else if($card10==''){
                                                                                             $result = $mysql->query("UPDATE `inventory` SET viewer_name10 = '$selected_buy' WHERE login = '$UserName'");
                                                                                         }
         $update_money = $money - $buy_price;
         $result = $mysql->query("UPDATE `users` SET money = $update_money WHERE login = '$UserName'");
    }
        $mysql->close();
        header('Location:/store.php');
?>