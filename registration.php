<?php
session_start();
include_once "src/php/auth/getUserByToken.php";
closeAccessForAuthPages();
?>
<html>

<head>
    <meta charset="utf-8">
    <title>Регистрация</title>
    <link rel="stylesheet" type="text/css" href="src/css/style.css">
    <link rel="stylesheet" type="text/css" href="src/css/captcha.css">
    <!--Подключение капчи-->
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body>
    <div class="loader_bg">
        <div class="loader"></div>
        <span class="loader__span">Загрузка данных...</span>
    </div>
    <div class="login-root">
        <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
            <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
                <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
                    <h1><a href="" rel="dofollow">Регистрация</a></h1>
                </div>
                <div class="formbg-outer">
                    <div class="formbg">
                        
                        <div class="formbg-inner padding-horizontal--48">
                            <img src="src/resources/img/fon.png" alt="" class="reg_img">
                            <br>
                            <span class="padding-bottom--15">Введите данные</span>
                            <form id="stripe-login" action="src/php/auth/email/register.php" method="POST">
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
                                <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                                    <label for="checkbox">
                                        <input type="checkbox" name="politicAccept" class="hide">Я соглашаюсь с <a href="politic.pdf">&nbsp;политикой конфидециальности</a>
                                    </label>

                                </div>
                                <div class="g-recaptcha" data-sitekey="6LekM2wqAAAAAE7ZNWCZaCeIFb_ZgkuoM9R7r-IE"></div>
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
<script>
    let checbox = document.querySelector('.hide');
		let submitButton = document.querySelector('.submit-button');
		if (checbox.checked) {
			submitButton.disabled = false
		} else {submitButton.disabled = true}
</script>
<script src="src/js/preloader.js"></script>
    <script>setTimeout(function(){
        $('.loader_bg').fadeToggle();
    }, 1500);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</html>