<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="/Style/playStyle.css">

</head>
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
<div class="main center">
    <ul class="hr">
      <li><h1 align="center" id="yourteam">Твоя команда</h1></li>
  </div>
  <section class="memory-game">
      <div class="memory-card" data-framework="aurelia">
        <img class="front-face" src="img/aurelia.svg" alt="Aurelia" />

          <button onclick="myFunction1()" class="dropbtn"/button>
            <div id="myDropdown1" class="dropdown-content">
                <a href="#">Ссылка 1</a>
                <a href="#">Ссылка 2</a>
                <a href="#">Ссылка 3</a>
                <a href="#">Ссылка 4</a>
                <a href="#">Ссылка 5</a>
            </div>
      </div>


      <div class="memory-card" data-framework="vue">
        <img class="front-face" src="img/vue.svg" alt="Vue" />

         <button onclick="myFunction2()" class="dropbtn"/button>
            <div id="myDropdown2" class="dropdown-content">
                <a href="#">Ссылка 1</a>
                <a href="#">Ссылка 2</a>
                <a href="#">Ссылка 3</a>
                <a href="#">Ссылка 4</a>
                <a href="#">Ссылка 5</a>
            </div>
      </div>


      <div class="memory-card" data-framework="angular">
        <img class="front-face" src="img/angular.svg" alt="Angular" />

        <button onclick="myFunction3()" class="dropbtn"/button>
            <div id="myDropdown3" class="dropdown-content">
                <a href="#">Ссылка 1</a>
                <a href="#">Ссылка 2</a>
                <a href="#">Ссылка 3</a>
                <a href="#">Ссылка 4</a>
                <a href="#">Ссылка 5</a>
            </div>
      </div>


      <div class="memory-card" data-framework="ember">
        <img class="front-face" src="img/ember.svg" alt="Ember" />

        <button onclick="myFunction4()" class="dropbtn"/button>
            <div id="myDropdown4" class="dropdown-content">
                <a href="#">Ссылка 1</a>
                <a href="#">Ссылка 2</a>
                <a href="#">Ссылка 3</a>
                <a href="#">Ссылка 4</a>
                <a href="#">Ссылка 5</a>
            </div>
      </div>


      <div class="memory-card" data-framework="backbone">
        <img class="front-face" src="img/backbone.svg" alt="Backbone" />

        <button onclick="myFunction5()" class="dropbtn"/button>
            <div id="myDropdown5" class="dropdown-content">
                <a href="#">Ссылка 1</a>
                <a href="#">Ссылка 2</a>
                <a href="#">Ссылка 3</a>
                <a href="#">Ссылка 4</a>
                <a href="#">Ссылка 5</a>
            </div>
      </div>
    </section>
  <div class="left">
    <ul class="hr">
      <li><h1 align="left" id="stat">Статистика</h1></li>
  </div>
  <div class="right">
      <ul class="hr">
        <li><h1 align="right" id="money">Бюджет команды</h1></li>
    </div>
    <div class="left">
          <ul class="hr">
            <li><h1 align="left" id="stat">$$$</h1></li>
        </div>
  <div class="right">
    <ul class="hr">
      <li><h1 align="right" id="money">@@@</h1></li>
</div>

<script>
/* Когда пользователь нажимает на кнопку,
переключение между скрытием и отображением раскрывающегося содержимого */
function myFunction1() {
  document.getElementById("myDropdown1").classList.toggle("show");
}
function myFunction2() {
  document.getElementById("myDropdown2").classList.toggle("show");
}
function myFunction3() {
  document.getElementById("myDropdown3").classList.toggle("show");
}
function myFunction4() {
  document.getElementById("myDropdown4").classList.toggle("show");
}
function myFunction5() {
  document.getElementById("myDropdown5").classList.toggle("show");
}

// Закройте выпадающее меню, если пользователь щелкает за его пределами.
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</body>
</html>
