<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Магазин</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="/Style/mainStyle.css">
    <link rel="stylesheet" href="/Style/playStyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
             <meta name=viewport content="width=1920">
             <meta name=viewport content="height=800">
<style>
#NameGame1{
    text-align:center;
    display:inline-block;
    margin-top: 20px;
    margin-bottom: 500px;
    color: white;
    font-family: 'Varela Round', sans-serif;
    font-size: 25px;
    text-decoration: none;
    position: relative;
}
</style>
</head>
<body>
<div class="header">
    <ul class="hr">
        <li><a href="index.html" id="NameGame1">e-Manager</a></li>
        <li><a href="account.php" id="styleLinkAccount">Личный кабинет</a></li>
    </ul>
</div>
  <input type="checkbox" class="openSidebarMenu" id="openSidebarMenu">
  <label for="openSidebarMenu" class="sidebarIconToggle">
    <div class="spinner diagonal part-1"></div>
    <div class="spinner horizontal"></div>
    <div class="spinner diagonal part-2"></div>
  </label>
  <div id="sidebarMenu">
    <ul class="sidebarMenuInner">
      <li><a href="play.php" >Играть</a></li>
      <li><a href="store.php" >Магазин</a></li>
      <li><a href="leaderboard.php">Таблица лидеров</a></li>
    </ul>
  </div>
  </div>
  <div class="myTeam" style='position:absolute;left:40%;width=300;top:40%;'>
          <h1>Галерея игроков</h1>
      </div>
</body>
</html>
<?php
        $id_buy_cards;$name_buy_cards;$viewer_name;$left=5;$top=50;$buy_price;$left_text=6;$top_text=100;$top_text_sell=107;$sell_price;$money;
        $invent_pl1;$invent_pl2;$invent_pl3;$invent_pl4;$invent_pl5;$invent_pl6;$invent_pl7;$invent_pl8;$invent_pl9;$invent_pl10;
        $UserName=$_COOKIE['login'];
        $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
        $result_select = $mysql->query("SELECT * FROM `list_card`");
            while($row = mysqli_fetch_assoc($result_select)){
                 $id_buy_cards[] = $row['id'];
                 $name_buy_cards[] = $row['name_card'];
                 $viewer_name[] = $row['viewer_name'];
                 $buy_price[] = $row ['buy_price'];
            }

                     $result_select = $mysql->query("SELECT * FROM `users` WHERE `login`='$UserName'");
                                     while($row = mysqli_fetch_assoc($result_select)){
                                          $money[] = $row['money'];
                                     }
                                 $money = join(',', $money);

            $result_select = $mysql->query("SELECT * FROM `inventory`  WHERE `login`='$UserName'");
                        while($row = mysqli_fetch_assoc($result_select)){
                                $invent_pl1[] = $row['viewer_name1'];
                                $invent_pl2[] = $row['viewer_name2'];
                                $invent_pl3[] = $row['viewer_name3'];
                                $invent_pl4[] = $row['viewer_name4'];
                                $invent_pl5[] = $row['viewer_name5'];
                                $invent_pl6[] = $row['viewer_name6'];
                                $invent_pl7[] = $row['viewer_name7'];
                                $invent_pl8[] = $row['viewer_name8'];
                                $invent_pl9[] = $row['viewer_name9'];
                                $invent_pl10[] = $row['viewer_name10'];
                             }
                             $invent_pl1 = join(',', $invent_pl1);$invent_pl2 = join(',', $invent_pl2);$invent_pl3 = join(',', $invent_pl3);$invent_pl4 = join(',', $invent_pl4);$invent_pl5 = join(',', $invent_pl5);$invent_pl6 = join(',', $invent_pl6);$invent_pl7 = join(',', $invent_pl7);$invent_pl8 = join(',', $invent_pl8);$invent_pl9 = join(',', $invent_pl9);$invent_pl10 = join(',', $invent_pl10);

        $count = 1;
        for ($i = 0; $i < count($name_buy_cards); $i++) {
            $result_player = "/Source/{$name_buy_cards[$i]}";
            $sell_price = $buy_price[$i]/2;
            echo "<img src=\"".$result_player."\" width=\"300\" height=\"400\" style='position:absolute;left:{$left}%;top:{$top}%;'/><h1 style='position:absolute;left: {$left_text}%;top:{$top_text}%;font-size:28px;'>Цена покупки {$buy_price[$i]} $</h1><h1 style='position:absolute;left: {$left_text}%;top:{$top_text_sell}%;font-size:28px;'>Цена продажи {$sell_price} $</h1>";


            $left=$left + 35;
            $left_text=$left_text + 35;
            if($count==3){
                $left = 5;
                $top = $top + 70;
                $left_text = 6;
                $top_text = $top_text + 70;
                $top_text_sell = $top_text_sell + 70;
                $count=1;
            }else{
                $count=$count+1;
            }
        }

        ?>
            <div style ='position:absolute;left:12%;top:15%;width: 400px;'>
                        <p id="styleLinkAccount" style='left:5%;top:100%;color:black;font-size:38px;'>Купить игрока</p>
            </div>
         <form action="buy_cards.php" method="POST">
         <select name="select_buy_cards" class="selectpicker form-control" style='position:absolute;left:15%;top:25%;width:200px;height:40px'>
             <option value="" selected disabled hidden>Выбор игрока</option>
                        <?php foreach($viewer_name as $value){echo "<option value={$value}>{$value}</option>";}?>
         </selected>
         <input type="submit" value="Купить" class="btn btn-success" style='position:absolute;left:16%;top:33%;width:170px;height:40px'>
         </form>


             <div style ='position:absolute;right:12%;top:15%;width: 400px;'>
                                 <p id="styleLinkAccount" style='right:5%;top:100%;color:black;font-size:38px;'>Продать игрока</p>
                     </div>
                  <form action="sell_cards.php" method="POST">
                  <select name="select_sell_cards" class="selectpicker form-control" style='position:absolute;right:17%;top:25%;width:200px;height:40px'>
                      <option value="" selected disabled hidden>Выбор игрока</option>
                                 <option value= <?php echo $invent_pl1;?> > <?php echo $invent_pl1;?> </option>
                                 <option value= <?php echo $invent_pl2;?> > <?php echo $invent_pl2;?> </option>
                                 <option value= <?php echo $invent_pl3;?> > <?php echo $invent_pl3;?> </option>
                                 <option value= <?php echo $invent_pl4;?> > <?php echo $invent_pl4;?> </option>
                                 <option value= <?php echo $invent_pl5;?> > <?php echo $invent_pl5;?> </option>
                                 <option value= <?php echo $invent_pl6;?> > <?php echo $invent_pl6;?> </option>
                                 <option value= <?php echo $invent_pl7;?> > <?php echo $invent_pl7;?> </option>
                                 <option value= <?php echo $invent_pl8;?> > <?php echo $invent_pl8;?> </option>
                                 <option value= <?php echo $invent_pl9;?> > <?php echo $invent_pl9;?> </option>
                                 <option value= <?php echo $invent_pl10;?> > <?php echo $invent_pl10;?> </option>
                  </selected>
                  <input type="submit" value="Продать" class="btn btn-success" style='position:absolute;right:18%;top:33%;width:170px;height:40px'>
                  </form>

             <div style ='position:absolute;right:37%;top:15%;width: 400px;'>
                      <p id="styleLinkAccount" style='right:0%;top:100%;color:black;font-size:38px;'>Бюджет: <?php echo $money;?> $</p>
             </div>
         <?php

        $mysql->close();
?>