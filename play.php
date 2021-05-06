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
            <option value="" selected disabled hidden>Выбор игрока1</option>
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
        <?php     $mysql->close(); ?>

         <select name="select_card2" class="selectpicker form-control" style='position:absolute;left:25%;top:75%;width:170px;height:40px'>
                    <?php
                    $UserName=$_COOKIE['user'];
                    $select21;$select22;$select23;$select24;$select25;$select26;$select27;$select28;$select29;$select210;
                    $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
                        $result_select = $mysql->query("SELECT * FROM `inventory` WHERE `login`='$UserName'");
                            while($row = mysqli_fetch_assoc($result_select))
                            {
                                $select21[] = $row['viewer_name1'];
                                $select22[] = $row['viewer_name2'];
                                $select23[] = $row['viewer_name3'];
                                $select24[] = $row['viewer_name4'];
                                $select25[] = $row['viewer_name5'];
                                $select26[] = $row['viewer_name6'];
                                $select27[] = $row['viewer_name7'];
                                $select28[] = $row['viewer_name8'];
                                $select29[] = $row['viewer_name9'];
                                $select210[] = $row['viewer_name10'];
                            }
                            $select21 = join(',', $select21);$select22 = join(',', $select22);$select23 = join(',', $select23);$select24 = join(',', $select24);$select25 = join(',', $select25);$select26 = join(',', $select26);$select27 = join(',', $select27);$select28 = join(',', $select28);$select29 = join(',', $select29);$select210 = join(',', $select210);
                    ?>
                    <option value="" selected disabled hidden>Выбор игрока2</option>
                    <option value= <?php echo $select21?> ><?php echo $select21;?></option>;
                    <option value= <?php echo $select22?> ><?php echo $select22;?></option>;
                    <option value= <?php echo $select23?> ><?php echo $select23;?></option>;
                    <option value= <?php echo $select24?> ><?php echo $select24;?></option>;
                    <option value= <?php echo $select25?> ><?php echo $select25;?></option>;
                    <option value= <?php echo $select26?> ><?php echo $select26;?></option>;
                    <option value= <?php echo $select27?> ><?php echo $select27;?></option>;
                    <option value= <?php echo $select28?> ><?php echo $select28;?></option>;
                    <option value= <?php echo $select29?> ><?php echo $select29;?></option>;
                    <option value= <?php echo $select210?> ><?php echo $select210;?></option>;
                </select>
                <?php     $mysql->close(); ?>
                <select name="select_card3" class="selectpicker form-control" style='position:absolute;left:45%;top:75%;width:170px;height:40px'>
                                    <?php
                                    $UserName=$_COOKIE['user'];
                                    $select31;$select32;$select33;$select34;$select35;$select36;$select37;$select38;$select39;$select310;
                                    $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
                                        $result_select = $mysql->query("SELECT * FROM `inventory` WHERE `login`='$UserName'");
                                            while($row = mysqli_fetch_assoc($result_select))
                                            {
                                                $select31[] = $row['viewer_name1'];
                                                $select32[] = $row['viewer_name2'];
                                                $select33[] = $row['viewer_name3'];
                                                $select34[] = $row['viewer_name4'];
                                                $select35[] = $row['viewer_name5'];
                                                $select36[] = $row['viewer_name6'];
                                                $select37[] = $row['viewer_name7'];
                                                $select38[] = $row['viewer_name8'];
                                                $select39[] = $row['viewer_name9'];
                                                $select310[] = $row['viewer_name10'];
                                            }
                                            $select31 = join(',', $select31);$select32 = join(',', $select32);$select33 = join(',', $select33);$select34 = join(',', $select34);$select35 = join(',', $select35);$select36 = join(',', $select36);$select37 = join(',', $select37);$select38 = join(',', $select38);$select39 = join(',', $select39);$select310 = join(',', $select310);
                                    ?>
                                    <option value="" selected disabled hidden>Выбор игрока3</option>
                                    <option value= <?php echo $select31?> ><?php echo $select31;?></option>;
                                    <option value= <?php echo $select32?> ><?php echo $select32;?></option>;
                                    <option value= <?php echo $select33?> ><?php echo $select33;?></option>;
                                    <option value= <?php echo $select34?> ><?php echo $select34;?></option>;
                                    <option value= <?php echo $select35?> ><?php echo $select35;?></option>;
                                    <option value= <?php echo $select36?> ><?php echo $select36;?></option>;
                                    <option value= <?php echo $select37?> ><?php echo $select37;?></option>;
                                    <option value= <?php echo $select38?> ><?php echo $select38;?></option>;
                                    <option value= <?php echo $select39?> ><?php echo $select39;?></option>;
                                    <option value= <?php echo $select310?> ><?php echo $select310;?></option>;
                                </select>
                                <?php     $mysql->close(); ?>
                <select name="select_card4" class="selectpicker form-control" style='position:absolute;left:65%;top:75%;width:170px;height:40px'>
                                    <?php
                                    $UserName=$_COOKIE['user'];
                                    $select41;$select42;$select43;$select44;$select45;$select46;$select47;$select48;$select49;$select410;
                                    $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
                                        $result_select = $mysql->query("SELECT * FROM `inventory` WHERE `login`='$UserName'");
                                            while($row = mysqli_fetch_assoc($result_select))
                                            {
                                                $select41[] = $row['viewer_name1'];
                                                $select42[] = $row['viewer_name2'];
                                                $select43[] = $row['viewer_name3'];
                                                $select44[] = $row['viewer_name4'];
                                                $select45[] = $row['viewer_name5'];
                                                $select46[] = $row['viewer_name6'];
                                                $select47[] = $row['viewer_name7'];
                                                $select48[] = $row['viewer_name8'];
                                                $select49[] = $row['viewer_name9'];
                                                $select410[] = $row['viewer_name10'];
                                            }
                                            $select41 = join(',', $select41);$select42 = join(',', $select42);$select43 = join(',', $select43);$select44 = join(',', $select44);$select45 = join(',', $select45);$select46 = join(',', $select46);$select47 = join(',', $select47);$select48 = join(',', $select48);$select49 = join(',', $select49);$select410 = join(',', $select410);
                                    ?>
                                    <option value="" selected disabled hidden>Выбор игрока4</option>
                                    <option value= <?php echo $select41?> ><?php echo $select41;?></option>;
                                    <option value= <?php echo $select42?> ><?php echo $select42;?></option>;
                                    <option value= <?php echo $select43?> ><?php echo $select43;?></option>;
                                    <option value= <?php echo $select44?> ><?php echo $select44;?></option>;
                                    <option value= <?php echo $select45?> ><?php echo $select45;?></option>;
                                    <option value= <?php echo $select46?> ><?php echo $select46;?></option>;
                                    <option value= <?php echo $select47?> ><?php echo $select47;?></option>;
                                    <option value= <?php echo $select48?> ><?php echo $select48;?></option>;
                                    <option value= <?php echo $select49?> ><?php echo $select49;?></option>;
                                    <option value= <?php echo $select410?> ><?php echo $select410;?></option>;
                                </select>
                                <?php     $mysql->close(); ?>

         <select name="select_card5" class="selectpicker form-control" style='position:absolute;left:85%;top:75%;width:170px;height:40px'>
                             <?php
                             $UserName=$_COOKIE['user'];
                             $select51;$select52;$select53;$select54;$select55;$select56;$select57;$select58;$select59;$select510;
                             $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
                                 $result_select = $mysql->query("SELECT * FROM `inventory` WHERE `login`='$UserName'");
                                     while($row = mysqli_fetch_assoc($result_select))
                                     {
                                         $select51[] = $row['viewer_name1'];
                                         $select52[] = $row['viewer_name2'];
                                         $select53[] = $row['viewer_name3'];
                                         $select54[] = $row['viewer_name4'];
                                         $select55[] = $row['viewer_name5'];
                                         $select56[] = $row['viewer_name6'];
                                         $select57[] = $row['viewer_name7'];
                                         $select58[] = $row['viewer_name8'];
                                         $select59[] = $row['viewer_name9'];
                                         $select510[] = $row['viewer_name10'];
                                     }
                                     $select51 = join(',', $select51);$select52 = join(',', $select52);$select53 = join(',', $select53);$select54 = join(',', $select54);$select55 = join(',', $select55);$select56 = join(',', $select56);$select57 = join(',', $select57);$select58 = join(',', $select58);$select59 = join(',', $select59);$select510 = join(',', $select510);
                             ?>
                             <option value="" selected disabled hidden>Выбор игрока5</option>
                             <option value= <?php echo $select51?> ><?php echo $select51;?></option>;
                             <option value= <?php echo $select52?> ><?php echo $select52;?></option>;
                             <option value= <?php echo $select53?> ><?php echo $select53;?></option>;
                             <option value= <?php echo $select54?> ><?php echo $select54;?></option>;
                             <option value= <?php echo $select55?> ><?php echo $select55;?></option>;
                             <option value= <?php echo $select56?> ><?php echo $select56;?></option>;
                             <option value= <?php echo $select57?> ><?php echo $select57;?></option>;
                             <option value= <?php echo $select58?> ><?php echo $select58;?></option>;
                             <option value= <?php echo $select59?> ><?php echo $select59;?></option>;
                             <option value= <?php echo $select510?> ><?php echo $select510;?></option>;
                         </select>

        <?php     $mysql->close(); ?>
        <input type="submit" value="Сохранить" class="btn btn-success" style='position:absolute;left:45%;top:85%;width:170px;height:40px'>
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