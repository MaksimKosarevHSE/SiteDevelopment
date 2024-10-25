<?php
session_start();
include_once "src/php/auth/getUserByToken.php";
$user = getUserByTokenOrRedirect();
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
    <title>Платформа «Онлайн-помощник студента ВШЭ» | Личный кабинет</title>
</head>
<body>
    <div class="loader_bg">
        <div class="loader"></div>
        <span class="loader__span">Загрузка данных...</span>
    </div>
    <header class="header">
        <a href="#" class="logo" ><img src="src/resources/img/back_reg.png" alt=""></a>
        <nav>
            <a href="#" class="active">Главная</a>
            <a href="Personal_account/plan.php">Расписание</a>
            <a href="Personal_account/homework.php">Домашние задания</a>
            <a href="Personal_account/important.php">Важные объявления</a>
            <a href="Personal_account/achievements.php">Полезные материалы</a>
            <a href="Personal_account/contacts.php">Контакты</a>
        </nav>
    </header>
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
            <a href="Personal_account/plan.php" class="btn">Перейти к сервисам</a>
        </div>
    </section>
    <script src="src/js/preloader.js"></script>
    <script>setTimeout(function(){
        $('.loader_bg').fadeToggle();
    }, 1500);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>
