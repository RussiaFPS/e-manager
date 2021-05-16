<?php
    $UserName=$_COOKIE['login'];
    $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
    $idCard1;$idCard2;$idCard3;$idCard4;$idCard5;
    $rat_1;$rat_2;$rat_3;$rat_4;$rat_5;

    $result_select = $mysql->query("SELECT * FROM `users` WHERE `login`='$UserName'");
                        while($row = mysqli_fetch_assoc($result_select))
                                                               {
                                                                $idCard1[] = $row['idCard1'];
                                                                $idCard2[] = $row['idCard2'];
                                                                $idCard3[] = $row['idCard3'];
                                                                $idCard4[] = $row['idCard4'];
                                                                $idCard5[] = $row['idCard5'];
                                                               }
               $idCard1 = join(',', $idCard1);$idCard2 = join(',', $idCard2);$idCard3 = join(',', $idCard3);$idCard4 = join(',', $idCard4);$idCard5 = join(',', $idCard5);

     $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `id`='$idCard1'");
                            while($row = mysqli_fetch_assoc($result_select))
                                                                   {
                                                                        $rat_1[] = $row['rating_res'];
                                                                   }
                                                                   $rat_1 = join(',', $rat_1);

                                                                   $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `id`='$idCard2'");
                                                                                               while($row = mysqli_fetch_assoc($result_select))
                                                                                                                                      {
                                                                                                                                           $rat_2[] = $row['rating_res'];
                                                                                                                                      }
                                                                                                                                      $rat_2 = join(',', $rat_2);

                                                                                                                                      $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `id`='$idCard3'");
                                                                                                                                                                  while($row = mysqli_fetch_assoc($result_select))
                                                                                                                                                                                                         {
                                                                                                                                                                                                              $rat_3[] = $row['rating_res'];
                                                                                                                                                                                                         }
                                                                                                                                                                                                         $rat_3 = join(',', $rat_3);

                                                                                                                                                                                                         $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `id`='$idCard4'");
                                                                                                                                                                                                                                     while($row = mysqli_fetch_assoc($result_select))
                                                                                                                                                                                                                                                                            {
                                                                                                                                                                                                                                                                                 $rat_4[] = $row['rating_res'];
                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                            $rat_4 = join(',', $rat_4);

                                                                                                                                                                                                                                                                            $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `id`='$idCard5'");
                                                                                                                                                                                                                                                                                                        while($row = mysqli_fetch_assoc($result_select))
                                                                                                                                                                                                                                                                                                                                               {
                                                                                                                                                                                                                                                                                                                                                  $rat_5[] = $row['rating_res'];
                                                                                                                                                                                                                                                                                                                                                }
                                                                                                                                                                                                                                                                                                                                               $rat_5 = join(',', $rat_5);

    $rat_res = $rat_1+$rat_2+$rat_3+$rat_4+$rat_5;
    $chan = random_int(1 , 100);
    $exp;$mon;

    if($rat_res <= 250 and $chan >= 95){
            $exp+=random_int(100 , 150);
            $mon+=50000;
    }
    if ($rat_res <= 250 and $chan < 95 and $chan >70){
            $exp+=random_int(50 , 100);
            $mon+=random_int(25000 , 40000);
    }
    if($rating_res <=250 and $chan <=70){
        $exp+=random_int(10 , 50);
        $mon+=random_int(5000 , 25000);
    }



    if($rat_res < 300 and $rat_res >250 and $chan >= 70){
                $exp+=random_int(100 , 150);
                $mon+=50000;
    }
    if ($rat_res < 300 and $rat_res >250 and $chan < 70 and $chan >40){
                $exp+=random_int(50 , 100);
                $mon+=random_int(25000 , 40000);
    }
    if($rat_res < 300 and $rat_res >250  and $chan <=40){
            $exp+=random_int(10 , 50);
            $mon+=random_int(5000 , 25000);
    }


    if($rat_res >=300 and $chan >= 60){
        $exp+=random_int(100 , 150);
        $mon+=50000;
    }
    if ($rat_res >=300 and $chan < 60 and $chan>20){
        $exp+=random_int(50 , 100);
        $mon+=random_int(25000 , 40000);
    }

    if($rat_res >=300  and $chan <=20){
                $exp+=random_int(10 , 50);
                $mon+=random_int(5000 , 25000);
    }

    $result = $mysql->query("UPDATE `users` SET `money` = '$mon' WHERE login = '$UserName'");
    $result = $mysql->query("UPDATE `users` SET `score` = '$exp' WHERE login = '$UserName'");
    $result = $mysql->query("UPDATE `e-lig` SET `status` = 'YES' WHERE login = '$UserName'");

    $mysql->close();
    header('Location:/event.php');
?>