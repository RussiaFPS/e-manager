<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ивенты</title>
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
        <div style = 'position: absolute;left: 41%;top: 7%;'>
            <h1>Список ивентов</h1>
        </div>
        <div style ='position:absolute;left:5%;top:25%;'>
            <img src="/Source/e-lig.png" style="width:350px;height:350px;"/>
            <p id="styleLinkAccount" style='left:17%;top:100%;'>Ежедвневная лига с призовыми до 500$</p>
        </div>
            <div>
                <button class="btn btn-primary" style='position:absolute;left:45%;top:17%;width:170px;height:40px' onclick="window.location.href='play.php'">Вернуться</button>
            </div>
        <?php
        $UserName=$_COOKIE['login'];
        $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
        date_default_timezone_set('Europe/Moscow');
        $today = date("Y-m-d H:i:s");
        $bd_date;

        $result_select = $mysql->query("SELECT * FROM `e-lig` WHERE `login`='$UserName'");
         while($row = mysqli_fetch_assoc($result_select))
                                                {
                                                    $bd_date[] = $row['reg_date'];

                                                }
                            $bd_date = join(',', $bd_date);
         $date = $bd_date;
         $datetime = new DateTime($date);
         $datetime->modify('-1 day');
         $bd_date = $datetime->format('Y-m-d H:i:s');

         if(strtotime($today) <= strtotime($bd_date)){
         ?>
        <div style ='position:absolute;left:13%;top:80%;'>
                    <form action="e-lig.php">
                                        <input type="submit" value="Учавствовать" class="btn btn-success" style=style='position:absolute;left:55%;top:55%;width:170px;height:40px'>
                                    </form>
        </div>
        <?php
        }else{
              #СЮДА КОД ПРОДОЛЖИТЬ
        }
        ?>
    </div>
</body>


<?php


?>