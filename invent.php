<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Инвентарь</title>
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
  <div class="myTeam" style='position:absolute;left:44%;width=200;top:15%;'>
          <h1>Инвентарь</h1>
      </div>
</body>
</html>
<?php

            $UserName=$_COOKIE['login'];
            $name_card1;$name_card2;$name_card3;$name_card4;$name_card5;$name_card6;$name_card7;$name_card8;$name_card9;$name_card10;

            $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
            $result_select = $mysql->query("SELECT * FROM `inventory` WHERE `login`='$UserName'");
                while($row = mysqli_fetch_assoc($result_select)){
                        $name_card1[] = $row['viewer_name1'];
                        $name_card2[] = $row['viewer_name2'];
                        $name_card3[] = $row['viewer_name3'];
                        $name_card4[] = $row['viewer_name4'];
                        $name_card5[] = $row['viewer_name5'];
                        $name_card6[] = $row['viewer_name6'];
                        $name_card7[] = $row['viewer_name7'];
                        $name_card8[] = $row['viewer_name8'];
                        $name_card9[] = $row['viewer_name9'];
                        $name_card10[] = $row['viewer_name10'];
                }
             $name_card1 = join(',', $name_card1);$name_card2 = join(',', $name_card2);$name_card3 = join(',', $name_card3);$name_card4 = join(',', $name_card4);$name_card5 = join(',', $name_card5);$name_card6 = join(',', $name_card6);$name_card7 = join(',', $name_card7);$name_card8 = join(',', $name_card8);$name_card9 = join(',', $name_card9);$name_card10 = join(',', $name_card10);

            $left=5;$top=25;
            $stack = array($name_card1,$name_card2,$name_card3,$name_card4,$name_card5,$name_card6,$name_card7,$name_card8,$name_card9,$name_card10);
                     $count = 1;
                     for ($i = 0; $i < 10; $i++) {
                         $result_player = "/Source/{$stack[$i]}.png";
                         echo "<img src=\"".$result_player."\" width=\"300\" height=\"400\" style='position:absolute;left:{$left}%;top:{$top}%;'/>";


                         $left=$left + 35;
                         if($count==3){
                             $left = 5;
                             $top = $top + 50;
                             $count=1;
                         }else{
                             $count=$count+1;
                         }
                     }

?>