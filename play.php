<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Играть</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="/Style/playStyle.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
         <meta name=viewport content="width=1920">
         <meta name=viewport content="height=800">
</head>
<style>
   body {
     background: url("/Content/playblackground.jpg") no-repeat center top fixed;
     -webkit-background-size: cover;
     -moz-background-size: cover;
     -o-background-size: cover;
     background-size: cover;
   }
  </style>
<body>
  <div class="header">
      <ul class="hr">
          <li><a href="index.html" id="NameGame">e-Manager</a></li>
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
        <li><a href="#" >Магазин</a></li>
        <li><a href="#">Таблица лидеров</a></li>
      </ul>
    </div>
    <div class="inner">
        <h1>Моя команда</h1>
    </div>

    <?php
    if($_COOKIE['user']!=''){
    ?>
    <div class="container mt-4">
    <form action="select.php" method="POST">
        <select name="select_card1" class="selectpicker form-control" style='position:absolute;left:5%;top:75%;width:170px;height:40px'>
            <?php
            $UserName=$_COOKIE['user'];
            $select1;$select2;$select3;$select4;$select5;$select6;$select7;$select8;$select9;$select10;
            $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
                $result_select = $mysql->query("SELECT * FROM `inventory` WHERE `login`='$UserName'");
                    while($row = mysqli_fetch_assoc($result_select))
                    {
                        $select1[] = $row['viewer_name1'];
                        $select2[] = $row['viewer_name2'];
                        $select3[] = $row['viewer_name3'];
                        $select4[] = $row['viewer_name4'];
                        $select5[] = $row['viewer_name5'];
                        $select6[] = $row['viewer_name6'];
                        $select7[] = $row['viewer_name7'];
                        $select8[] = $row['viewer_name8'];
                        $select9[] = $row['viewer_name9'];
                        $select10[] = $row['viewer_name10'];
                    }
                    $select1 = join(',', $select1);$select2 = join(',', $select2);$select3 = join(',', $select3);$select4 = join(',', $select4);$select5 = join(',', $select5);$select6 = join(',', $select6);$select7 = join(',', $select7);$select8 = join(',', $select8);$select9 = join(',', $select9);$select10 = join(',', $select10);
            ?>
            <option value="" selected disabled hidden>Выбрать игрока</option>
            <option value= <?php echo $select1?> ><?php echo $select1;?></option>;
            <option value= <?php echo $select2?> ><?php echo $select2;?></option>;
            <option value= <?php echo $select3?> ><?php echo $select3;?></option>;
            <option value= <?php echo $select4?> ><?php echo $select4;?></option>;
            <option value= <?php echo $select5?> ><?php echo $select5;?></option>;
            <option value= <?php echo $select6?> ><?php echo $select6;?></option>;
            <option value= <?php echo $select7?> ><?php echo $select7;?></option>;
            <option value= <?php echo $select8?> ><?php echo $select8;?></option>;
            <option value= <?php echo $select9?> ><?php echo $select9;?></option>;
            <option value= <?php echo $select10?> ><?php echo $select10;?></option>;
        </select>
        <input type="submit" value="OK" style='position:absolute;left:50%;top:85%;width:170px;height:40px'>
        </form>
    </div>
    <?php
    }
    ?>
  </body>
<?php
$UserName=$_COOKIE['user'];
$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');

if ($mysql->connect_error) {
    die("<script>swal(\"Ошибка!\", \"Не удается установить соединение с базой данных\", \"error\");</script>");
}

$card_users1;
$card_users2;
$card_users3;
$card_users4;
$card_users5;

$result = $mysql->query("SELECT * FROM `users` WHERE `login`='$UserName'");
$user = $result->fetch_assoc();
if(count($user)==0){
echo"<script>swal(\"Вы не авторизованы!\", \"Нужно авторизоваться\", \"error\");</script>";
$mysql->close();
exit();
}else{
    $result2 = $mysql->query("SELECT * FROM `users` WHERE `login`='$UserName'");
    while($row = mysqli_fetch_assoc($result2))
        {
            $card_users1[] = $row['idCard1'];
            $card_users2[] = $row['idCard2'];
            $card_users3[] = $row['idCard3'];
            $card_users4[] = $row['idCard4'];
            $card_users5[] = $row['idCard5'];
        }
    $card_users1 = join(',', $card_users1);
    $card_users2 = join(',', $card_users2);
    $card_users3 = join(',', $card_users3);
    $card_users4 = join(',', $card_users4);
    $card_users5 = join(',', $card_users5);
    $mysql->close();
}

$name_card1;
$name_card2;
$name_card3;
$name_card4;
$name_card5;

$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
if($card_users1!=''){
    $result3 = $mysql->query("SELECT * FROM `list_card` WHERE `id`='$card_users1'");
        while($row = mysqli_fetch_assoc($result3))
        {
            $card_name1[] = $row['name_card'];
        }
        $card_name1 = join(',', $card_name1);
}

if($card_users2!=''){
    $result3 = $mysql->query("SELECT * FROM `list_card` WHERE `id`='$card_users2'");
        while($row = mysqli_fetch_assoc($result3))
        {
            $card_name2[] = $row['name_card'];
        }
        $card_name2 = join(',', $card_name2);
}

if($card_users3!=''){
    $result3 = $mysql->query("SELECT * FROM `list_card` WHERE `id`='$card_users3'");
        while($row = mysqli_fetch_assoc($result3))
        {
            $card_name3[] = $row['name_card'];
        }
        $card_name3 = join(',', $card_name3);
}

if($card_users4!=''){
    $result3 = $mysql->query("SELECT * FROM `list_card` WHERE `id`='$card_users4'");
        while($row = mysqli_fetch_assoc($result3))
        {
            $card_name4[] = $row['name_card'];
        }
        $card_name4 = join(',', $card_name4);
}

if($card_users5!=''){
    $result3 = $mysql->query("SELECT * FROM `list_card` WHERE `id`='$card_users5'");
        while($row = mysqli_fetch_assoc($result3))
        {
            $card_name5[] = $row['name_card'];
        }
        $card_name5 = join(',', $card_name5);
}

$result_player1 = "/Source/{$card_name1}";
$result_player2 = "/Source/{$card_name2}";
$result_player3 = "/Source/{$card_name3}";
$result_player4 = "/Source/{$card_name4}";
$result_player5 = "/Source/{$card_name5}";

echo "<img src=\"".$result_player1."\" width=\"300\" height=\"400\" style='position:absolute;left:0%;top:25%;''>";
echo "<img src=\"".$result_player2."\" width=\"300\" height=\"400\" style='position:absolute;left:20%;top:25%;''>";
echo "<img src=\"".$result_player3."\" width=\"300\" height=\"400\" style='position:absolute;left:40%;top:25%;''>";
echo "<img src=\"".$result_player4."\" width=\"300\" height=\"400\" style='position:absolute;left:60%;top:25%;''>";
echo "<img src=\"".$result_player5."\" width=\"300\" height=\"400\" style='position:absolute;left:80%;top:25%;''>";

$mysql->close();

?>