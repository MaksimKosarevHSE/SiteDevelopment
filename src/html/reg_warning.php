<?php
session_start();
include_once "../php/auth/getUserByToken.php";
closeAccessForAuthPages();
?>
<html>

<head>
    <meta charset="utf-8">
    <title>Регистрация</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!--Подключение капчи-->
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body>
    <div class="login-root">
        <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
            <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
                <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
                    <h1><a href="" rel="dofollow">Регистрация</a></h1>
                </div>
                <div class="formbg-outer">
                    <div class="formbg">
                        
                        <div class="formbg-inner padding-horizontal--48">
                            <img src="../img/fon.png" alt="" class="reg_img">
                            <br>
                            <div class="warning"><p style="margin-left: 1rem;">Пользователь уже существует в системе</p></div>
                            <span class="padding-bottom--15" style="padding-top: 1rem;">Введите данные</span>
                            <form id="stripe-login" action="../php/auth/email/register.php" method="POST">
                                <div class="field padding-bottom--24">
                                    <label for="email">Имя</label>
                                    <input type="name" name="firstName">
                                </div>
                                <div class="field padding-bottom--24">
                                    <div class="grid--50-50">
                                        <label for="password">Фамилия</label>
                                    </div>
                                    <input type="surname" name="lastName">
                                </div>
                                <div class="field padding-bottom--24">
                                    <div class="grid--50-50">
                                        <label for="password">Почта</label>
                                    </div>
                                    <input type="email" name="email">
                                </div>
                                <br>
                                <div class="field padding-bottom--24">
                                    <div class="grid--50-50">
                                        <label for="password">Пароль</label>
                                    </div>
                                    <input type="password" name="password">
                                </div>
                                <div class="field padding-bottom--24">
                                    <div class="grid--50-50">
                                        <label for="password">Повторите пароль</label>
                                    </div>
                                    <input type="password" name="confirmPassword">
                                </div>
                                <div class="f   ield field-checkbox padding-bottom--24 flex-flex align-center">
                                    <label for="checkbox">
                                        <input type="checkbox" name="politicAccept"> Соглащаюсь с политикой
                                    </label>
                                </div>
                                <div class="g-recaptcha" data-sitekey="6Ld16FEqAAAAAMNbQ-nmib4sw9wvM1OeCJvOunFv"></div>
                                <div class="field padding-bottom--24">
                                    <input type="submit" name="submit" value="Зарегистрироваться">
                                </div>
                                <div class="field">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="footer-link padding-top--24">
                        <span> Уже есть аккаунт? <a href="login.php">Войти</a></span>
                        <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>