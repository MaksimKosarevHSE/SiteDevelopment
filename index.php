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
                <a href="https://t.me/hse_studentHelper"><i class="fa-brands fa-telegram"></i></a>
                <a href="https://vk.com/club228012977"><i class="fa-brands fa-vk"></i></a>
                <a href="https://www.youtube.com/channel/UCsTUuWHxDhq5TnsYqFdRwRQ"><i class="fa-brands fa-youtube"></i></a>
            </div>
            <a href="login.php" class="btn">Войти</a>
        </div>
    </section>
    <script src="src/js/burger.js"></script>
    <script>setTimeout(function(){
        $('.loader_bg').fadeToggle();
    }, 1500);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>
