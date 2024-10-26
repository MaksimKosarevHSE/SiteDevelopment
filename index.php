<?php
session_start();
include_once "src/php/auth/getUserByToken.php";
closeAccessForAuthPages();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="src/css/main.css">
    <link rel="stylesheet" href="src/resources/fonts/Georgia/stylesheet.css" />
	<link rel="stylesheet" href="src/resources/fonts/Lato/stylesheet.css" />
    <title>Платформа «Онлайн-помощник студента ВШЭ»</title>
</head>
<body>
    <div class="loader_bg">
        <div class="loader"></div>
        <span class="loader__span">Загрузка данных...</span>
    </div>
    <section class="home">
        <div class="home-img">
            <img src="src/resources/img/main.webp" alt="">
        </div>
        <div class="home-content">
            <h1 style="margin-bottom: 3%;">Привет студент, это твой <span>онлайн-помощник ВШЭ</span></h1>
            <h3 class="typing-text">Я тебе могу помочь с <br><span></span></h3>
            <br>
            <br>
            <p>Можете познакомиться с нашим проектом в данных социальных сетях:</p>
            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-github"></i></a>
                <a href="#"><i class="fa-brands fa-telegram"></i></a>
                <a href="#"><i class="fa-brands fa-vk"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </div>
            <a href="login.php" class="btn">Войти</a>
        </div>
    </section>
    <footer style="background: rgb(24, 54, 118);">
      <nav style="display:none; flex-direction: row; width: 80%; align-items: center;" id="navUnder1">
        <ul id="navUnder" style="">
          <li><a href="https://few-types.ru">Главная</a></li>
          <li><a href="education.html">Обучение</a></li>
          <li><a href="practice.html">Практика</a></li>
          <li><a href="forBeginners.html">Для новичков</a></li>
          <li><a href="aboutUs.html">О сайте</a></li>
          <li><a href="communication.html">Связь с нами</a></li>
        </ul>
      </nav>
    <div id="foot"
      
      style="display: flex; justify-content: center; flex-direction: row; align-items: center;margin: auto auto;margin-top:70px;margin-bottom:10px">
      
        <address>
      <div id="address" style="display: flex; align-items: center; font-size: 3rem; gap: 10rem; margin-bottom: 1.5rem;">
      
                <a href="#" style="color: white;"><i class="fa-brands fa-github"></i></a>
                <a href="#" style="color: white;"><i class="fa-brands fa-telegram"></i></a>
                <a href="#" style="color: white;"><i class="fa-brands fa-vk"></i></a>
                <a href="#" style="color: white;"><i class="fa-brands fa-youtube"></i></a>

      </div>
    </address>
      <a id="politicConf" style="font-size:1.4rem;color:rgb(119, 119, 119); text-decoration: none;"
        href="aboutUs.html">Политика конфиденциальности</a>
        <p id="copyright" style="font-size:1.4rem;color:rgb(119, 119, 119);font-style: normal;">Copyright @ few-types.ru, 2024</p>
    </div>
  </footer>
    <script src="src/js/burger.js"></script>
    <script>setTimeout(function(){
        $('.loader_bg').fadeToggle();
    }, 1500);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>
