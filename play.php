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
            $active1;$active2;$active3;$active4;$active5;
            $active_name1;$active_name2;$active_name3;$active_name4;$active_name5;
            $active_role1;$active_role2;$active_role3;$active_role4;$active_role5;
            $inventory_role1;$inventory_role2;$inventory_role3;$inventory_role4;$inventory_role5;$inventory_role6;$inventory_role7;$inventory_role8;$inventory_role9;$inventory_role10;
            $mysql = new mysqli('localhost', 'root', 'root', 'register-bd');

            $result_select = $mysql->query("SELECT * FROM `users` WHERE `login`='$UserName'");
                                                            while($row = mysqli_fetch_assoc($result_select))
                                                            {
                                                                $active1[] = $row['idCard1'];
                                                                $active2[] = $row['idCard2'];
                                                                $active3[] = $row['idCard3'];
                                                                $active4[] = $row['idCard4'];
                                                                $active5[] = $row['idCard5'];
                                                            }
                                                            $active1 = join(',', $active1);$active2 = join(',', $active2);$active3 = join(',', $active3);$active4 = join(',', $active4);$active5 = join(',', $active5);
                                $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `id`='$active1'");
                                                                                while($row = mysqli_fetch_assoc($result_select))
                                                                                {
                                                                                    $active_name1[] = $row['viewer_name'];
                                                                                    $active_role1[] = $row['role'];
                                                                                }
                                $active_name1 = join(',', $active_name1);
                                $active_role1 = join(',',$active_role1);

                                $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `id`='$active2'");
                                                                                                    while($row = mysqli_fetch_assoc($result_select))
                                                                                                    {
                                                                                                        $active_name2[] = $row['viewer_name'];
                                                                                                        $active_role2[] = $row['role'];
                                                                                                    }
                                                    $active_name2 = join(',', $active_name2);
                                                    $active_role2 = join(',',$active_role2);

                                $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `id`='$active3'");
                                                                                                    while($row = mysqli_fetch_assoc($result_select))
                                                                                                    {
                                                                                                        $active_name3[] = $row['viewer_name'];
                                                                                                        $active_role3[] = $row['role'];
                                                                                                    }
                                                    $active_name3 = join(',', $active_name3);
                                                    $active_role3 = join(',',$active_role3);

                                $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `id`='$active4'");
                                                                                                    while($row = mysqli_fetch_assoc($result_select))
                                                                                                    {
                                                                                                        $active_name4[] = $row['viewer_name'];
                                                                                                        $active_role4[] = $row['role'];
                                                                                                    }
                                                    $active_name4 = join(',', $active_name4);
                                                    $active_role4 = join(',',$active_role4);

                                $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `id`='$active5'");
                                                                                                    while($row = mysqli_fetch_assoc($result_select))
                                                                                                    {
                                                                                                        $active_name5[] = $row['viewer_name'];
                                                                                                        $active_role5[] = $row['role'];
                                                                                                    }
                                                    $active_name5 = join(',', $active_name5);
                                                    $active_role5 = join(',',$active_role5);

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


                    $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `viewer_name`='$select1'");
                                        while($row = mysqli_fetch_assoc($result_select))
                                        {
                                         $inventory_role1[] = $row['role'];
                                        }
                    $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `viewer_name`='$select2'");
                                                            while($row = mysqli_fetch_assoc($result_select))
                                                            {
                                                             $inventory_role2[] = $row['role'];
                                                            }
                    $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `viewer_name`='$select3'");
                                                            while($row = mysqli_fetch_assoc($result_select))
                                                            {
                                                             $inventory_role3[] = $row['role'];
                                                            }
                    $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `viewer_name`='$select4'");
                                                                                while($row = mysqli_fetch_assoc($result_select))
                                                                                {
                                                                                 $inventory_role4[] = $row['role'];
                                                                                }
                    $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `viewer_name`='$select5'");
                                                                                while($row = mysqli_fetch_assoc($result_select))
                                                                                {
                                                                                 $inventory_role5[] = $row['role'];
                                                                                }
                    $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `viewer_name`='$select6'");
                                                                                while($row = mysqli_fetch_assoc($result_select))
                                                                                {
                                                                                 $inventory_role6[] = $row['role'];
                                                                                }
                    $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `viewer_name`='$select7'");
                                                                                while($row = mysqli_fetch_assoc($result_select))
                                                                                {
                                                                                 $inventory_role7[] = $row['role'];
                                                                                }
                    $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `viewer_name`='$select8'");
                                                                                while($row = mysqli_fetch_assoc($result_select))
                                                                                {
                                                                                 $inventory_role8[] = $row['role'];
                                                                                }
                    $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `viewer_name`='$select9'");
                                                                                while($row = mysqli_fetch_assoc($result_select))
                                                                                {
                                                                                 $inventory_role9[] = $row['role'];
                                                                                }
                    $result_select = $mysql->query("SELECT * FROM `list_card` WHERE `viewer_name`='$select10'");
                                                                                while($row = mysqli_fetch_assoc($result_select))
                                                                                {
                                                                                 $inventory_role10[] = $row['role'];
                                                                                }


                    $inventory_role1 = join (',',$inventory_role1);$inventory_role2 = join (',',$inventory_role2);$inventory_role3 = join (',',$inventory_role3);$inventory_role4 = join (',',$inventory_role4);$inventory_role5 = join (',',$inventory_role5);$inventory_role6 = join (',',$inventory_role6);$inventory_role7 = join (',',$inventory_role7);$inventory_role8 = join (',',$inventory_role8);$inventory_role9 = join (',',$inventory_role9);$inventory_role10 = join (',',$inventory_role10);
            ?>
            <option value="" selected disabled hidden>Выбор игрока1</option>
            <option value= <?php if($select1!=$active_name1 and $select1!=$active_name2 and $select1!=$active_name3 and $select1!=$active_name4 and $select1!=$active_name5 and $inventory_role1!=$active_role1 and $inventory_role1!=$active_role2 and $inventory_role1!=$active_role3 and $inventory_role1!=$active_role4 and $inventory_role1!=$active_role5){echo $select1;}?> ><?php if($select1!=$active_name1 and $select1!=$active_name2 and $select1!=$active_name3 and $select1!=$active_name4 and $select1!=$active_name5 and $inventory_role1!=$active_role1 and $inventory_role1!=$active_role2 and $inventory_role1!=$active_role3 and $inventory_role1!=$active_role4 and $inventory_role1!=$active_role5){echo $select1;}?></option>;
            <option value= <?php if($select2!=$active_name1 and $select2!=$active_name2 and $select2!=$active_name3 and $select2!=$active_name4 and $select2!=$active_name5 and $inventory_role2!=$active_role1 and $inventory_role2!=$active_role2 and $inventory_role2!=$active_role3 and $inventory_role2!=$active_role4 and $inventory_role2!=$active_role5){echo $select2;}?> ><?php if($select2!=$active_name1 and $select2!=$active_name2 and $select2!=$active_name3 and $select2!=$active_name4 and $select2!=$active_name5 and $inventory_role2!=$active_role1 and $inventory_role2!=$active_role2 and $inventory_role2!=$active_role3 and $inventory_role2!=$active_role4 and $inventory_role2!=$active_role5){echo $select2;}?></option>;
            <option value= <?php if($select3!=$active_name1 and $select3!=$active_name2 and $select3!=$active_name3 and $select3!=$active_name4 and $select3!=$active_name5 and $inventory_role3!=$active_role1 and $inventory_role3!=$active_role2 and $inventory_role3!=$active_role3 and $inventory_role3!=$active_role4 and $inventory_role3!=$active_role5){echo $select3;}?> ><?php if($select3!=$active_name1 and $select3!=$active_name2 and $select3!=$active_name3 and $select3!=$active_name4 and $select3!=$active_name5 and $inventory_role3!=$active_role1 and $inventory_role3!=$active_role2 and $inventory_role3!=$active_role3 and $inventory_role3!=$active_role4 and $inventory_role3!=$active_role5){echo $select3;}?></option>;
            <option value= <?php if($select4!=$active_name1 and $select4!=$active_name2 and $select4!=$active_name3 and $select4!=$active_name4 and $select4!=$active_name5 and $inventory_role4!=$active_role1 and $inventory_role4!=$active_role2 and $inventory_role4!=$active_role3 and $inventory_role4!=$active_role4 and $inventory_role4!=$active_role5){echo $select4;}?> ><?php if($select4!=$active_name1 and $select4!=$active_name2 and $select4!=$active_name3 and $select4!=$active_name4 and $select4!=$active_name5 and $inventory_role4!=$active_role1 and $inventory_role4!=$active_role2 and $inventory_role4!=$active_role3 and $inventory_role4!=$active_role4 and $inventory_role4!=$active_role5){echo $select4;}?></option>;
            <option value= <?php if($select5!=$active_name1 and $select5!=$active_name2 and $select5!=$active_name3 and $select5!=$active_name4 and $select5!=$active_name5 and $inventory_role5!=$active_role1 and $inventory_role5!=$active_role2 and $inventory_role5!=$active_role3 and $inventory_role5!=$active_role4 and $inventory_role5!=$active_role5){echo $select5;}?> ><?php if($select5!=$active_name1 and $select5!=$active_name2 and $select5!=$active_name3 and $select5!=$active_name4 and $select5!=$active_name5 and $inventory_role5!=$active_role1 and $inventory_role5!=$active_role2 and $inventory_role5!=$active_role3 and $inventory_role5!=$active_role4 and $inventory_role5!=$active_role5){echo $select5;}?></option>;
            <option value= <?php if($select6!=$active_name1 and $select6!=$active_name2 and $select6!=$active_name3 and $select6!=$active_name4 and $select6!=$active_name5 and $inventory_role6!=$active_role1 and $inventory_role6!=$active_role2 and $inventory_role6!=$active_role3 and $inventory_role6!=$active_role4 and $inventory_role6!=$active_role5){echo $select6;}?> ><?php if($select6!=$active_name1 and $select6!=$active_name2 and $select6!=$active_name3 and $select6!=$active_name4 and $select6!=$active_name5 and $inventory_role6!=$active_role1 and $inventory_role6!=$active_role2 and $inventory_role6!=$active_role3 and $inventory_role6!=$active_role4 and $inventory_role6!=$active_role5){echo $select6;}?></option>;
            <option value= <?php if($select7!=$active_name1 and $select7!=$active_name2 and $select7!=$active_name3 and $select7!=$active_name4 and $select7!=$active_name5 and $inventory_role7!=$active_role1 and $inventory_role7!=$active_role2 and $inventory_role7!=$active_role3 and $inventory_role7!=$active_role4 and $inventory_role7!=$active_role5){echo $select7;}?> ><?php if($select7!=$active_name1 and $select7!=$active_name2 and $select7!=$active_name3 and $select7!=$active_name4 and $select7!=$active_name5 and $inventory_role7!=$active_role1 and $inventory_role7!=$active_role2 and $inventory_role7!=$active_role3 and $inventory_role7!=$active_role4 and $inventory_role7!=$active_role5){echo $select7;}?></option>;
            <option value= <?php if($select8!=$active_name1 and $select8!=$active_name2 and $select8!=$active_name3 and $select8!=$active_name4 and $select8!=$active_name5 and $inventory_role8!=$active_role1 and $inventory_role8!=$active_role2 and $inventory_role8!=$active_role3 and $inventory_role8!=$active_role4 and $inventory_role8!=$active_role5){echo $select8;}?> ><?php if($select8!=$active_name1 and $select8!=$active_name2 and $select8!=$active_name3 and $select8!=$active_name4 and $select8!=$active_name5 and $inventory_role8!=$active_role1 and $inventory_role8!=$active_role2 and $inventory_role8!=$active_role3 and $inventory_role8!=$active_role4 and $inventory_role8!=$active_role5){echo $select8;}?></option>;
            <option value= <?php if($select9!=$active_name1 and $select9!=$active_name2 and $select9!=$active_name3 and $select9!=$active_name4 and $select9!=$active_name5 and $inventory_role9!=$active_role1 and $inventory_role9!=$active_role2 and $inventory_role9!=$active_role3 and $inventory_role9!=$active_role4 and $inventory_role9!=$active_role5){echo $select9;}?> ><?php if($select9!=$active_name1 and $select9!=$active_name2 and $select9!=$active_name3 and $select9!=$active_name4 and $select9!=$active_name5 and $inventory_role9!=$active_role1 and $inventory_role9!=$active_role2 and $inventory_role9!=$active_role3 and $inventory_role9!=$active_role4 and $inventory_role9!=$active_role5){echo $select9;}?></option>;
            <option value= <?php if($select10!=$active_name1 and $select10!=$active_name2 and $select10!=$active_name3 and $select10!=$active_name4 and $select10!=$active_name5 and$inventory_role10!=$active_role1 and $inventory_role10!=$active_role2 and $inventory_role10!=$active_role3 and $inventory_role10!=$active_role4 and $inventory_role10!=$active_role5 ){echo $select10;}?> ><?php if($select10!=$active_name1 and $select10!=$active_name2 and $select10!=$active_name3 and $select10!=$active_name4 and $select10!=$active_name5 and$inventory_role10!=$active_role1 and $inventory_role10!=$active_role2 and $inventory_role10!=$active_role3 and $inventory_role10!=$active_role4 and $inventory_role10!=$active_role5 ){echo $select10;}?></option>;
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
                                <option value= <?php if($select21!=$active_name1 and $select21!=$active_name2 and $select21!=$active_name3 and $select21!=$active_name4 and $select21!=$active_name5 and $inventory_role1!=$active_role1 and $inventory_role1!=$active_role2 and $inventory_role1!=$active_role3 and $inventory_role1!=$active_role4 and $inventory_role1!=$active_role5){echo $select21;}?> ><?php if($select21!=$active_name1 and $select21!=$active_name2 and $select21!=$active_name3 and $select21!=$active_name4 and $select21!=$active_name5 and $inventory_role1!=$active_role1 and $inventory_role1!=$active_role2 and $inventory_role1!=$active_role3 and $inventory_role1!=$active_role4 and $inventory_role1!=$active_role5){echo $select21;}?></option>;
                                <option value= <?php if($select22!=$active_name1 and $select22!=$active_name2 and $select22!=$active_name3 and $select22!=$active_name4 and $select22!=$active_name5 and $inventory_role2!=$active_role1 and $inventory_role2!=$active_role2 and $inventory_role2!=$active_role3 and $inventory_role2!=$active_role4 and $inventory_role2!=$active_role5){echo $select22;}?> ><?php if($select22!=$active_name1 and $select22!=$active_name2 and $select22!=$active_name3 and $select22!=$active_name4 and $select22!=$active_name5 and $inventory_role2!=$active_role1 and $inventory_role2!=$active_role2 and $inventory_role2!=$active_role3 and $inventory_role2!=$active_role4 and $inventory_role2!=$active_role5){echo $select22;}?></option>;
                                <option value= <?php if($select23!=$active_name1 and $select23!=$active_name2 and $select23!=$active_name3 and $select23!=$active_name4 and $select23!=$active_name5 and $inventory_role3!=$active_role1 and $inventory_role3!=$active_role2 and $inventory_role3!=$active_role3 and $inventory_role3!=$active_role4 and $inventory_role3!=$active_role5){echo $select23;}?> ><?php if($select23!=$active_name1 and $select23!=$active_name2 and $select23!=$active_name3 and $select23!=$active_name4 and $select23!=$active_name5 and $inventory_role3!=$active_role1 and $inventory_role3!=$active_role2 and $inventory_role3!=$active_role3 and $inventory_role3!=$active_role4 and $inventory_role3!=$active_role5){echo $select23;}?></option>;
                                <option value= <?php if($select24!=$active_name1 and $select24!=$active_name2 and $select24!=$active_name3 and $select24!=$active_name4 and $select24!=$active_name5 and $inventory_role4!=$active_role1 and $inventory_role4!=$active_role2 and $inventory_role4!=$active_role3 and $inventory_role4!=$active_role4 and $inventory_role4!=$active_role5){echo $select24;}?> ><?php if($select24!=$active_name1 and $select24!=$active_name2 and $select24!=$active_name3 and $select24!=$active_name4 and $select24!=$active_name5 and $inventory_role4!=$active_role1 and $inventory_role4!=$active_role2 and $inventory_role4!=$active_role3 and $inventory_role4!=$active_role4 and $inventory_role4!=$active_role5){echo $select24;}?></option>;
                                <option value= <?php if($select25!=$active_name1 and $select25!=$active_name2 and $select25!=$active_name3 and $select25!=$active_name4 and $select25!=$active_name5 and $inventory_role5!=$active_role1 and $inventory_role5!=$active_role2 and $inventory_role5!=$active_role3 and $inventory_role5!=$active_role4 and $inventory_role5!=$active_role5){echo $select25;}?> ><?php if($select25!=$active_name1 and $select25!=$active_name2 and $select25!=$active_name3 and $select25!=$active_name4 and $select25!=$active_name5 and $inventory_role5!=$active_role1 and $inventory_role5!=$active_role2 and $inventory_role5!=$active_role3 and $inventory_role5!=$active_role4 and $inventory_role5!=$active_role5){echo $select25;}?></option>;
                                <option value= <?php if($select26!=$active_name1 and $select26!=$active_name2 and $select26!=$active_name3 and $select26!=$active_name4 and $select26!=$active_name5 and $inventory_role6!=$active_role1 and $inventory_role6!=$active_role2 and $inventory_role6!=$active_role3 and $inventory_role6!=$active_role4 and $inventory_role6!=$active_role5){echo $select26;}?> ><?php if($select26!=$active_name1 and $select26!=$active_name2 and $select26!=$active_name3 and $select26!=$active_name4 and $select26!=$active_name5 and $inventory_role6!=$active_role1 and $inventory_role6!=$active_role2 and $inventory_role6!=$active_role3 and $inventory_role6!=$active_role4 and $inventory_role6!=$active_role5){echo $select26;}?></option>;
                                <option value= <?php if($select27!=$active_name1 and $select27!=$active_name2 and $select27!=$active_name3 and $select27!=$active_name4 and $select27!=$active_name5 and $inventory_role7!=$active_role1 and $inventory_role7!=$active_role2 and $inventory_role7!=$active_role3 and $inventory_role7!=$active_role4 and $inventory_role7!=$active_role5){echo $select27;}?> ><?php if($select27!=$active_name1 and $select27!=$active_name2 and $select27!=$active_name3 and $select27!=$active_name4 and $select27!=$active_name5 and $inventory_role7!=$active_role1 and $inventory_role7!=$active_role2 and $inventory_role7!=$active_role3 and $inventory_role7!=$active_role4 and $inventory_role7!=$active_role5){echo $select27;}?></option>;
                                <option value= <?php if($select28!=$active_name1 and $select28!=$active_name2 and $select28!=$active_name3 and $select28!=$active_name4 and $select28!=$active_name5 and $inventory_role8!=$active_role1 and $inventory_role8!=$active_role2 and $inventory_role8!=$active_role3 and $inventory_role8!=$active_role4 and $inventory_role8!=$active_role5){echo $select28;}?> ><?php if($select28!=$active_name1 and $select28!=$active_name2 and $select28!=$active_name3 and $select28!=$active_name4 and $select28!=$active_name5 and $inventory_role8!=$active_role1 and $inventory_role8!=$active_role2 and $inventory_role8!=$active_role3 and $inventory_role8!=$active_role4 and $inventory_role8!=$active_role5){echo $select28;}?></option>;
                                <option value= <?php if($select29!=$active_name1 and $select29!=$active_name2 and $select29!=$active_name3 and $select29!=$active_name4 and $select29!=$active_name5 and $inventory_role9!=$active_role1 and $inventory_role9!=$active_role2 and $inventory_role9!=$active_role3 and $inventory_role9!=$active_role4 and $inventory_role9!=$active_role5){echo $select29;}?> ><?php if($select29!=$active_name1 and $select29!=$active_name2 and $select29!=$active_name3 and $select29!=$active_name4 and $select29!=$active_name5 and $inventory_role9!=$active_role1 and $inventory_role9!=$active_role2 and $inventory_role9!=$active_role3 and $inventory_role9!=$active_role4 and $inventory_role9!=$active_role5){echo $select29;}?></option>;
                                <option value= <?php if($select210!=$active_name1 and $select210!=$active_name2 and $select210!=$active_name3 and $select210!=$active_name4 and $select210!=$active_name5 and $inventory_role10!=$active_role1 and $inventory_role10!=$active_role2 and $inventory_role10!=$active_role3 and $inventory_role10!=$active_role4 and $inventory_role10!=$active_role5 ){echo $select210;}?> ><?php if($select210!=$active_name1 and $select210!=$active_name2 and $select210!=$active_name3 and $select210!=$active_name4 and $select210!=$active_name5 and$inventory_role10!=$active_role1 and $inventory_role10!=$active_role2 and $inventory_role10!=$active_role3 and $inventory_role10!=$active_role4 and $inventory_role10!=$active_role5 ){echo $select210;}?></option>;
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
                                                                    <option value= <?php if($select31!=$active_name1 and $select31!=$active_name2 and $select31!=$active_name3 and $select31!=$active_name4 and $select31!=$active_name5 and $inventory_role1!=$active_role1 and $inventory_role1!=$active_role2 and $inventory_role1!=$active_role3 and $inventory_role1!=$active_role4 and $inventory_role1!=$active_role5){echo $select31;}?> ><?php if($select31!=$active_name1 and $select31!=$active_name2 and $select31!=$active_name3 and $select31!=$active_name4 and $select31!=$active_name5 and $inventory_role1!=$active_role1 and $inventory_role1!=$active_role2 and $inventory_role1!=$active_role3 and $inventory_role1!=$active_role4 and $inventory_role1!=$active_role5){echo $select31;}?></option>;
                                                                    <option value= <?php if($select32!=$active_name1 and $select32!=$active_name2 and $select32!=$active_name3 and $select32!=$active_name4 and $select32!=$active_name5 and $inventory_role2!=$active_role1 and $inventory_role2!=$active_role2 and $inventory_role2!=$active_role3 and $inventory_role2!=$active_role4 and $inventory_role2!=$active_role5){echo $select32;}?> ><?php if($select32!=$active_name1 and $select32!=$active_name2 and $select32!=$active_name3 and $select32!=$active_name4 and $select32!=$active_name5 and $inventory_role2!=$active_role1 and $inventory_role2!=$active_role2 and $inventory_role2!=$active_role3 and $inventory_role2!=$active_role4 and $inventory_role2!=$active_role5){echo $select32;}?></option>;
                                                                    <option value= <?php if($select33!=$active_name1 and $select33!=$active_name2 and $select33!=$active_name3 and $select33!=$active_name4 and $select33!=$active_name5 and $inventory_role3!=$active_role1 and $inventory_role3!=$active_role2 and $inventory_role3!=$active_role3 and $inventory_role3!=$active_role4 and $inventory_role3!=$active_role5){echo $select33;}?> ><?php if($select33!=$active_name1 and $select33!=$active_name2 and $select33!=$active_name3 and $select33!=$active_name4 and $select33!=$active_name5 and $inventory_role3!=$active_role1 and $inventory_role3!=$active_role2 and $inventory_role3!=$active_role3 and $inventory_role3!=$active_role4 and $inventory_role3!=$active_role5){echo $select33;}?></option>;
                                                                    <option value= <?php if($select34!=$active_name1 and $select34!=$active_name2 and $select34!=$active_name3 and $select34!=$active_name4 and $select34!=$active_name5 and $inventory_role4!=$active_role1 and $inventory_role4!=$active_role2 and $inventory_role4!=$active_role3 and $inventory_role4!=$active_role4 and $inventory_role4!=$active_role5){echo $select34;}?> ><?php if($select34!=$active_name1 and $select34!=$active_name2 and $select34!=$active_name3 and $select34!=$active_name4 and $select34!=$active_name5 and $inventory_role4!=$active_role1 and $inventory_role4!=$active_role2 and $inventory_role4!=$active_role3 and $inventory_role4!=$active_role4 and $inventory_role4!=$active_role5){echo $select34;}?></option>;
                                                                    <option value= <?php if($select35!=$active_name1 and $select35!=$active_name2 and $select35!=$active_name3 and $select35!=$active_name4 and $select35!=$active_name5 and $inventory_role5!=$active_role1 and $inventory_role5!=$active_role2 and $inventory_role5!=$active_role3 and $inventory_role5!=$active_role4 and $inventory_role5!=$active_role5){echo $select35;}?> ><?php if($select35!=$active_name1 and $select35!=$active_name2 and $select35!=$active_name3 and $select35!=$active_name4 and $select35!=$active_name5 and $inventory_role5!=$active_role1 and $inventory_role5!=$active_role2 and $inventory_role5!=$active_role3 and $inventory_role5!=$active_role4 and $inventory_role5!=$active_role5){echo $select35;}?></option>;
                                                                    <option value= <?php if($select36!=$active_name1 and $select36!=$active_name2 and $select36!=$active_name3 and $select36!=$active_name4 and $select36!=$active_name5 and $inventory_role6!=$active_role1 and $inventory_role6!=$active_role2 and $inventory_role6!=$active_role3 and $inventory_role6!=$active_role4 and $inventory_role6!=$active_role5){echo $select36;}?> ><?php if($select36!=$active_name1 and $select36!=$active_name2 and $select36!=$active_name3 and $select36!=$active_name4 and $select36!=$active_name5 and $inventory_role6!=$active_role1 and $inventory_role6!=$active_role2 and $inventory_role6!=$active_role3 and $inventory_role6!=$active_role4 and $inventory_role6!=$active_role5){echo $select36;}?></option>;
                                                                    <option value= <?php if($select37!=$active_name1 and $select37!=$active_name2 and $select37!=$active_name3 and $select37!=$active_name4 and $select37!=$active_name5 and $inventory_role7!=$active_role1 and $inventory_role7!=$active_role2 and $inventory_role7!=$active_role3 and $inventory_role7!=$active_role4 and $inventory_role7!=$active_role5){echo $select37;}?> ><?php if($select37!=$active_name1 and $select37!=$active_name2 and $select37!=$active_name3 and $select37!=$active_name4 and $select37!=$active_name5 and $inventory_role7!=$active_role1 and $inventory_role7!=$active_role2 and $inventory_role7!=$active_role3 and $inventory_role7!=$active_role4 and $inventory_role7!=$active_role5){echo $select37;}?></option>;
                                                                    <option value= <?php if($select38!=$active_name1 and $select38!=$active_name2 and $select38!=$active_name3 and $select38!=$active_name4 and $select38!=$active_name5 and $inventory_role8!=$active_role1 and $inventory_role8!=$active_role2 and $inventory_role8!=$active_role3 and $inventory_role8!=$active_role4 and $inventory_role8!=$active_role5){echo $select38;}?> ><?php if($select38!=$active_name1 and $select38!=$active_name2 and $select38!=$active_name3 and $select38!=$active_name4 and $select38!=$active_name5 and $inventory_role8!=$active_role1 and $inventory_role8!=$active_role2 and $inventory_role8!=$active_role3 and $inventory_role8!=$active_role4 and $inventory_role8!=$active_role5){echo $select38;}?></option>;
                                                                    <option value= <?php if($select39!=$active_name1 and $select39!=$active_name2 and $select39!=$active_name3 and $select39!=$active_name4 and $select39!=$active_name5 and $inventory_role9!=$active_role1 and $inventory_role9!=$active_role2 and $inventory_role9!=$active_role3 and $inventory_role9!=$active_role4 and $inventory_role9!=$active_role5){echo $select39;}?> ><?php if($select39!=$active_name1 and $select39!=$active_name2 and $select39!=$active_name3 and $select39!=$active_name4 and $select39!=$active_name5 and $inventory_role9!=$active_role1 and $inventory_role9!=$active_role2 and $inventory_role9!=$active_role3 and $inventory_role9!=$active_role4 and $inventory_role9!=$active_role5){echo $select39;}?></option>;
                                                                    <option value= <?php if($select310!=$active_name1 and $select310!=$active_name2 and $select310!=$active_name3 and $select310!=$active_name4 and $select310!=$active_name5 and$inventory_role10!=$active_role1 and $inventory_role10!=$active_role2 and $inventory_role10!=$active_role3 and $inventory_role10!=$active_role4 and $inventory_role10!=$active_role5){echo $select310;}?> ><?php if($select310!=$active_name1 and $select310!=$active_name2 and $select310!=$active_name3 and $select310!=$active_name4 and $select310!=$active_name5 and$inventory_role10!=$active_role1 and $inventory_role10!=$active_role2 and $inventory_role10!=$active_role3 and $inventory_role10!=$active_role4 and $inventory_role10!=$active_role5){echo $select310;}?></option>;
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
                                                                                                        <option value= <?php if($select41!=$active_name1 and $select41!=$active_name2 and $select41!=$active_name3 and $select41!=$active_name4 and $select41!=$active_name5 and $inventory_role1!=$active_role1 and $inventory_role1!=$active_role2 and $inventory_role1!=$active_role3 and $inventory_role1!=$active_role4 and $inventory_role1!=$active_role5){echo $select41;}?> ><?php if($select41!=$active_name1 and $select41!=$active_name2 and $select41!=$active_name3 and $select41!=$active_name4 and $select41!=$active_name5 and $inventory_role1!=$active_role1 and $inventory_role1!=$active_role2 and $inventory_role1!=$active_role3 and $inventory_role1!=$active_role4 and $inventory_role1!=$active_role5){echo $select41;}?></option>;
                                                                                                        <option value= <?php if($select42!=$active_name1 and $select42!=$active_name2 and $select42!=$active_name3 and $select42!=$active_name4 and $select42!=$active_name5 and $inventory_role2!=$active_role1 and $inventory_role2!=$active_role2 and $inventory_role2!=$active_role3 and $inventory_role2!=$active_role4 and $inventory_role2!=$active_role5){echo $select42;}?> ><?php if($select42!=$active_name1 and $select42!=$active_name2 and $select42!=$active_name3 and $select42!=$active_name4 and $select42!=$active_name5 and $inventory_role2!=$active_role1 and $inventory_role2!=$active_role2 and $inventory_role2!=$active_role3 and $inventory_role2!=$active_role4 and $inventory_role2!=$active_role5){echo $select42;}?></option>;
                                                                                                        <option value= <?php if($select43!=$active_name1 and $select43!=$active_name2 and $select43!=$active_name3 and $select43!=$active_name4 and $select43!=$active_name5 and $inventory_role3!=$active_role1 and $inventory_role3!=$active_role2 and $inventory_role3!=$active_role3 and $inventory_role3!=$active_role4 and $inventory_role3!=$active_role5){echo $select43;}?> ><?php if($select43!=$active_name1 and $select43!=$active_name2 and $select43!=$active_name3 and $select43!=$active_name4 and $select43!=$active_name5 and $inventory_role3!=$active_role1 and $inventory_role3!=$active_role2 and $inventory_role3!=$active_role3 and $inventory_role3!=$active_role4 and $inventory_role3!=$active_role5){echo $select43;}?></option>;
                                                                                                        <option value= <?php if($select44!=$active_name1 and $select44!=$active_name2 and $select44!=$active_name3 and $select44!=$active_name4 and $select44!=$active_name5 and $inventory_role4!=$active_role1 and $inventory_role4!=$active_role2 and $inventory_role4!=$active_role3 and $inventory_role4!=$active_role4 and $inventory_role4!=$active_role5){echo $select44;}?> ><?php if($select44!=$active_name1 and $select44!=$active_name2 and $select44!=$active_name3 and $select44!=$active_name4 and $select44!=$active_name5 and $inventory_role4!=$active_role1 and $inventory_role4!=$active_role2 and $inventory_role4!=$active_role3 and $inventory_role4!=$active_role4 and $inventory_role4!=$active_role5){echo $select44;}?></option>;
                                                                                                        <option value= <?php if($select45!=$active_name1 and $select45!=$active_name2 and $select45!=$active_name3 and $select45!=$active_name4 and $select45!=$active_name5 and $inventory_role5!=$active_role1 and $inventory_role5!=$active_role2 and $inventory_role5!=$active_role3 and $inventory_role5!=$active_role4 and $inventory_role5!=$active_role5){echo $select45;}?> ><?php if($select45!=$active_name1 and $select45!=$active_name2 and $select45!=$active_name3 and $select45!=$active_name4 and $select45!=$active_name5 and $inventory_role5!=$active_role1 and $inventory_role5!=$active_role2 and $inventory_role5!=$active_role3 and $inventory_role5!=$active_role4 and $inventory_role5!=$active_role5){echo $select45;}?></option>;
                                                                                                        <option value= <?php if($select46!=$active_name1 and $select46!=$active_name2 and $select46!=$active_name3 and $select46!=$active_name4 and $select46!=$active_name5 and $inventory_role6!=$active_role1 and $inventory_role6!=$active_role2 and $inventory_role6!=$active_role3 and $inventory_role6!=$active_role4 and $inventory_role6!=$active_role5){echo $select46;}?> ><?php if($select46!=$active_name1 and $select46!=$active_name2 and $select46!=$active_name3 and $select46!=$active_name4 and $select46!=$active_name5 and $inventory_role6!=$active_role1 and $inventory_role6!=$active_role2 and $inventory_role6!=$active_role3 and $inventory_role6!=$active_role4 and $inventory_role6!=$active_role5){echo $select46;}?></option>;
                                                                                                        <option value= <?php if($select47!=$active_name1 and $select47!=$active_name2 and $select47!=$active_name3 and $select47!=$active_name4 and $select47!=$active_name5 and $inventory_role7!=$active_role1 and $inventory_role7!=$active_role2 and $inventory_role7!=$active_role3 and $inventory_role7!=$active_role4 and $inventory_role7!=$active_role5){echo $select47;}?> ><?php if($select47!=$active_name1 and $select47!=$active_name2 and $select47!=$active_name3 and $select47!=$active_name4 and $select47!=$active_name5 and $inventory_role7!=$active_role1 and $inventory_role7!=$active_role2 and $inventory_role7!=$active_role3 and $inventory_role7!=$active_role4 and $inventory_role7!=$active_role5){echo $select47;}?></option>;
                                                                                                        <option value= <?php if($select48!=$active_name1 and $select48!=$active_name2 and $select48!=$active_name3 and $select48!=$active_name4 and $select48!=$active_name5 and $inventory_role8!=$active_role1 and $inventory_role8!=$active_role2 and $inventory_role8!=$active_role3 and $inventory_role8!=$active_role4 and $inventory_role8!=$active_role5){echo $select48;}?> ><?php if($select48!=$active_name1 and $select48!=$active_name2 and $select48!=$active_name3 and $select48!=$active_name4 and $select48!=$active_name5 and $inventory_role8!=$active_role1 and $inventory_role8!=$active_role2 and $inventory_role8!=$active_role3 and $inventory_role8!=$active_role4 and $inventory_role8!=$active_role5){echo $select48;}?></option>;
                                                                                                        <option value= <?php if($select49!=$active_name1 and $select49!=$active_name2 and $select49!=$active_name3 and $select49!=$active_name4 and $select49!=$active_name5 and $inventory_role9!=$active_role1 and $inventory_role9!=$active_role2 and $inventory_role9!=$active_role3 and $inventory_role9!=$active_role4 and $inventory_role9!=$active_role5){echo $select49;}?> ><?php if($select49!=$active_name1 and $select49!=$active_name2 and $select49!=$active_name3 and $select49!=$active_name4 and $select49!=$active_name5 and $inventory_role9!=$active_role1 and $inventory_role9!=$active_role2 and $inventory_role9!=$active_role3 and $inventory_role9!=$active_role4 and $inventory_role9!=$active_role5){echo $select49;}?></option>;
                                                                                                        <option value= <?php if($select410!=$active_name1 and $select410!=$active_name2 and $select410!=$active_name3 and $select410!=$active_name4 and $select410!=$active_name5 and$inventory_role10!=$active_role1 and $inventory_role10!=$active_role2 and $inventory_role10!=$active_role3 and $inventory_role10!=$active_role4 and $inventory_role10!=$active_role5){echo $select410;}?> ><?php if($select410!=$active_name1 and $select410!=$active_name2 and $select410!=$active_name3 and $select410!=$active_name4 and $select410!=$active_name5 and$inventory_role10!=$active_role1 and $inventory_role10!=$active_role2 and $inventory_role10!=$active_role3 and $inventory_role10!=$active_role4 and $inventory_role10!=$active_role5){echo $select410;}?></option>;
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
                                                                                                                                     <option value= <?php if($select51!=$active_name1 and $select51!=$active_name2 and $select51!=$active_name3 and $select51!=$active_name4 and $select51!=$active_name5 and $inventory_role1!=$active_role1 and $inventory_role1!=$active_role2 and $inventory_role1!=$active_role3 and $inventory_role1!=$active_role4 and $inventory_role1!=$active_role5){echo $select51;}?> ><?php if($select51!=$active_name1 and $select51!=$active_name2 and $select51!=$active_name3 and $select51!=$active_name4 and $select51!=$active_name5 and $inventory_role1!=$active_role1 and $inventory_role1!=$active_role2 and $inventory_role1!=$active_role3 and $inventory_role1!=$active_role4 and $inventory_role1!=$active_role5){echo $select51;}?></option>;
                                                                                                                                     <option value= <?php if($select52!=$active_name1 and $select52!=$active_name2 and $select52!=$active_name3 and $select52!=$active_name4 and $select52!=$active_name5 and $inventory_role2!=$active_role1 and $inventory_role2!=$active_role2 and $inventory_role2!=$active_role3 and $inventory_role2!=$active_role4 and $inventory_role2!=$active_role5){echo $select52;}?> ><?php if($select52!=$active_name1 and $select52!=$active_name2 and $select52!=$active_name3 and $select52!=$active_name4 and $select52!=$active_name5 and $inventory_role2!=$active_role1 and $inventory_role2!=$active_role2 and $inventory_role2!=$active_role3 and $inventory_role2!=$active_role4 and $inventory_role2!=$active_role5){echo $select52;}?></option>;
                                                                                                                                     <option value= <?php if($select53!=$active_name1 and $select53!=$active_name2 and $select53!=$active_name3 and $select53!=$active_name4 and $select53!=$active_name5 and $inventory_role3!=$active_role1 and $inventory_role3!=$active_role2 and $inventory_role3!=$active_role3 and $inventory_role3!=$active_role4 and $inventory_role3!=$active_role5){echo $select53;}?> ><?php if($select53!=$active_name1 and $select53!=$active_name2 and $select53!=$active_name3 and $select53!=$active_name4 and $select53!=$active_name5 and $inventory_role3!=$active_role1 and $inventory_role3!=$active_role2 and $inventory_role3!=$active_role3 and $inventory_role3!=$active_role4 and $inventory_role3!=$active_role5){echo $select53;}?></option>;
                                                                                                                                     <option value= <?php if($select54!=$active_name1 and $select54!=$active_name2 and $select54!=$active_name3 and $select54!=$active_name4 and $select54!=$active_name5 and $inventory_role4!=$active_role1 and $inventory_role4!=$active_role2 and $inventory_role4!=$active_role3 and $inventory_role4!=$active_role4 and $inventory_role4!=$active_role5){echo $select54;}?> ><?php if($select54!=$active_name1 and $select54!=$active_name2 and $select54!=$active_name3 and $select54!=$active_name4 and $select54!=$active_name5 and $inventory_role4!=$active_role1 and $inventory_role4!=$active_role2 and $inventory_role4!=$active_role3 and $inventory_role4!=$active_role4 and $inventory_role4!=$active_role5){echo $select54;}?></option>;
                                                                                                                                     <option value= <?php if($select55!=$active_name1 and $select55!=$active_name2 and $select55!=$active_name3 and $select55!=$active_name4 and $select55!=$active_name5 and $inventory_role5!=$active_role1 and $inventory_role5!=$active_role2 and $inventory_role5!=$active_role3 and $inventory_role5!=$active_role4 and $inventory_role5!=$active_role5){echo $select55;}?> ><?php if($select55!=$active_name1 and $select55!=$active_name2 and $select55!=$active_name3 and $select55!=$active_name4 and $select55!=$active_name5 and $inventory_role5!=$active_role1 and $inventory_role5!=$active_role2 and $inventory_role5!=$active_role3 and $inventory_role5!=$active_role4 and $inventory_role5!=$active_role5){echo $select55;}?></option>;
                                                                                                                                     <option value= <?php if($select56!=$active_name1 and $select56!=$active_name2 and $select56!=$active_name3 and $select56!=$active_name4 and $select56!=$active_name5 and $inventory_role6!=$active_role1 and $inventory_role6!=$active_role2 and $inventory_role6!=$active_role3 and $inventory_role6!=$active_role4 and $inventory_role6!=$active_role5){echo $select56;}?> ><?php if($select56!=$active_name1 and $select56!=$active_name2 and $select56!=$active_name3 and $select56!=$active_name4 and $select56!=$active_name5 and $inventory_role6!=$active_role1 and $inventory_role6!=$active_role2 and $inventory_role6!=$active_role3 and $inventory_role6!=$active_role4 and $inventory_role6!=$active_role5){echo $select56;}?></option>;
                                                                                                                                     <option value= <?php if($select57!=$active_name1 and $select57!=$active_name2 and $select57!=$active_name3 and $select57!=$active_name4 and $select57!=$active_name5 and $inventory_role7!=$active_role1 and $inventory_role7!=$active_role2 and $inventory_role7!=$active_role3 and $inventory_role7!=$active_role4 and $inventory_role7!=$active_role5){echo $select57;}?> ><?php if($select57!=$active_name1 and $select57!=$active_name2 and $select57!=$active_name3 and $select57!=$active_name4 and $select57!=$active_name5 and $inventory_role7!=$active_role1 and $inventory_role7!=$active_role2 and $inventory_role7!=$active_role3 and $inventory_role7!=$active_role4 and $inventory_role7!=$active_role5){echo $select57;}?></option>;
                                                                                                                                     <option value= <?php if($select58!=$active_name1 and $select58!=$active_name2 and $select58!=$active_name3 and $select58!=$active_name4 and $select58!=$active_name5 and $inventory_role8!=$active_role1 and $inventory_role8!=$active_role2 and $inventory_role8!=$active_role3 and $inventory_role8!=$active_role4 and $inventory_role8!=$active_role5){echo $select58;}?> ><?php if($select58!=$active_name1 and $select58!=$active_name2 and $select58!=$active_name3 and $select58!=$active_name4 and $select58!=$active_name5 and $inventory_role8!=$active_role1 and $inventory_role8!=$active_role2 and $inventory_role8!=$active_role3 and $inventory_role8!=$active_role4 and $inventory_role8!=$active_role5){echo $select58;}?></option>;
                                                                                                                                     <option value= <?php if($select59!=$active_name1 and $select59!=$active_name2 and $select59!=$active_name3 and $select59!=$active_name4 and $select59!=$active_name5 and $inventory_role9!=$active_role1 and $inventory_role9!=$active_role2 and $inventory_role9!=$active_role3 and $inventory_role9!=$active_role4 and $inventory_role9!=$active_role5){echo $select59;}?> ><?php if($select59!=$active_name1 and $select59!=$active_name2 and $select59!=$active_name3 and $select59!=$active_name4 and $select59!=$active_name5 and $inventory_role9!=$active_role1 and $inventory_role9!=$active_role2 and $inventory_role9!=$active_role3 and $inventory_role9!=$active_role4 and $inventory_role9!=$active_role5){echo $select59;}?></option>;
                                                                                                                                     <option value= <?php if($select510!=$active_name1 and $select510!=$active_name2 and $select510!=$active_name3 and $select510!=$active_name4 and $select510!=$active_name5 and$inventory_role10!=$active_role1 and $inventory_role10!=$active_role2 and $inventory_role10!=$active_role3 and $inventory_role10!=$active_role4 and $inventory_role10!=$active_role5){echo $select510;}?> ><?php if($select510!=$active_name1 and $select510!=$active_name2 and $select510!=$active_name3 and $select510!=$active_name4 and $select510!=$active_name5 and$inventory_role10!=$active_role1 and $inventory_role10!=$active_role2 and $inventory_role10!=$active_role3 and $inventory_role10!=$active_role4 and $inventory_role10!=$active_role5){echo $select510;}?></option>;
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