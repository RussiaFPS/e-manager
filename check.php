<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="/Style/mainStyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
      <li><a href="#" >Магазин</a></li>
      <li><a href="#">Таблица лидеров</a></li>
    </ul>
  </div>

  <div class="container mt-4">
      <?php
       if ($_COOKIE['user']==''):
        ?>
        <h1 id="MainForms">Авторизуйтесь или зарегистрируйтесь</h1>
        <div class="row" id="Form_registr">
           <div class="col">
             <h1>Форма регистрации</h1>
             <form  action="check.php" method="post">
               <input type="text" class="form-control" name="login"  id="login" placeholder="Введите ваш логин"><br>

               <input type="text" class="form-control" name="name"  id="name" placeholder="Введите ваше имя"><br>

               <input type="password" class="form-control" name="pass"  id="pass" placeholder="Введите ваш пароль"><br>

               <button class="btn btn-success"  type ="submit" >Регистрация</button>
             </form>
           </div>


           <div class="col">
             <h1>Форма авторизации</h1>
             <form  action="auth.php" method="post">
               <input type="text" class="form-control" name="login" id="login" placeholder="Введите ваш логин"><br>

               <input type="password" class="form-control" name="pass"  id="pass" placeholder="Введите ваш пароль"><br>

               <button class="btn btn-success"  type ="submit" >Авторизация</button>
             </form>
           </div>
             <?php else:?>
               <p>Привет  <?php $_COOKIE['user'] ?>.Чтобы выйти нажмите  <a href="php/exit.php">здесь</a> </p>
           <?php endif; ?>

        </div>
    </div>
</body>
</html>



<?php
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

if (mb_strlen($login) < 3 || mb_strlen($login) > 90) {
  echo"<script>swal(\"Недопустимая длина логина!\", \"Логин содержит от 3 до 90 символов\", \"error\");</script>";
    exit();
} elseif (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
    echo"<script>swal(\"Недопустимая длина имени!\", \"Имя содержит от 3 до 50 символов\", \"error\");</script>";
    exit();
} elseif (mb_strlen($pass) < 10 || mb_strlen($pass) > 30) {
    echo"<script>swal(\"Недопустимая длина пароля!\", \"Пароль содержит от 10 до 30 символов\", \"error\");</script>";
    exit();
}


$pass = md5($pass."QafjhgjgH74");

$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
if ($mysql->connect_error) {
    die("<script>swal(\"Ошибка!\", \"Не удается установить соединение с базой данных\", \"error\");</script>");
}

$player_IGL;$player_LUR;$player_SUP;$player_SNI;$player_ENT;

$result_select = $mysql->query("SELECT * FROM `list_card` WHERE `role`='IGL'");
                                            while($row = mysqli_fetch_assoc($result_select))
                                            {
                                                $player_IGL[] = $row['viewer_name'];
                                            }
                                            $player_number = array_rand($player_IGL, 1);
                                            $player_IGL = $player_IGL [$player_number];

                                            $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `role`='LUR'");
                                                                                        while($row = mysqli_fetch_assoc($result_select))
                                                                                        {
                                                                                            $player_LUR[] = $row['viewer_name'];
                                                                                        }
                                                                                        $player_number = array_rand($player_LUR, 1);
                                                                                        $player_LUR = $player_LUR [$player_number];


                                                                                        $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `role`='SUP'");
                                                                                                                                    while($row = mysqli_fetch_assoc($result_select))
                                                                                                                                    {
                                                                                                                                        $player_SUP[] = $row['viewer_name'];
                                                                                                                                    }
                                                                                                                                    $player_number = array_rand($player_SUP, 1);
                                                                                                                                    $player_SUP = $player_SUP [$player_number];

                                                                                                                                    $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `role`='SNI'");
                                                                                                                                                                                while($row = mysqli_fetch_assoc($result_select))
                                                                                                                                                                                {
                                                                                                                                                                                    $player_SNI[] = $row['viewer_name'];
                                                                                                                                                                                }
                                                                                                                                                                                $player_number = array_rand($player_SNI, 1);
                                                                                                                                                                                $player_SNI = $player_SNI [$player_number];

                                                                                                                                                                                $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `role`='ENT'");
                                                                                                                                                                                                                            while($row = mysqli_fetch_assoc($result_select))
                                                                                                                                                                                                                            {
                                                                                                                                                                                                                                $player_ENT[] = $row['viewer_name'];
                                                                                                                                                                                                                            }
                                                                                                                                                                                                                            $player_number = array_rand($player_ENT, 1);
                                                                                                                                                                                                                            $player_ENT = $player_ENT [$player_number];

$result = $mysql->query("SELECT * FROM `users` WHERE `login`='$login'");
$user = $result->fetch_assoc();
if(count($user)==0){
  $mysql->query("INSERT INTO `users` (`login` , `pass` , `name`)
  VALUES('$login','$pass','$name')");
  $mysql->query("INSERT INTO `inventory` (`login` , `viewer_name1` , `viewer_name2` , `viewer_name3` , `viewer_name4` , `viewer_name5`)
    VALUES('$login','$player_IGL','$player_LUR','$player_SUP','$player_SNI','$player_ENT')");
  $mysql->query("INSERT INTO `e-lig` (`login` , `status`)
    VALUES('$login','YES')");
  $mysql->close();
  echo"<script>swal(\"Успешно!\", \"Вы зарегистрировались успешно\", \"success\");</script>";
}else{
  echo"<script>swal(\"Такой пользователь уже зарегистрирован!\", \"Поменяйте логин\", \"error\");</script>";
  $mysql->close();
  exit();
}
?>
