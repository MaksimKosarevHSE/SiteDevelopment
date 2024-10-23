<?php
session_start();
include_once "../php/auth/getUserByToken.php";
$user = getUserByTokenOrRedirect();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" href="../css/fonts/Georgia/stylesheet.css" />
	<link rel="stylesheet" href="../css/fonts/Lato/stylesheet.css" />
    <title>Платформа «Онлайн-помощник студента ВШЭ» | Личный кабинет</title>
</head>
<body>
    <header class="header">
        <a href="#" class="logo" ><img src="../img/back_reg.png" alt=""></a>
        <nav>
            <a href="#" class="active">Главная</a>
            <a href="Personal_account/plan.html">Расписание</a>
            <a href="Personal_account/homework.html">Домашние задания</a>
            <a href="Personal_account/important.html">Важные объявления</a>
            <a href="Personal_account/achievements.html">Достижения</a>
            <a href="Personal_account/contacts.html">Контакты</a>
        </nav>
    </header>
    <section class="home">
        <div class="home-img">
            <img src="../img/main.webp" alt="">
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
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <a href="Personal_account/serves.html" class="btn">Перейти к сервисам</a>
        </div>
    </section>
</body>
</html>
