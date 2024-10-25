<?php
session_start();
include_once "src/php/auth/getUserByToken.php";
closeAccessForAuthPages();

if (empty($_GET["code"])){
    header('Location: forget_password.php');
}

?>
<html>

<head>
    <meta charset="utf-8">
    <title>Изменение пароля</title>
    <link rel="stylesheet" type="text/css" href="src/css/style.css">
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
                    <h1><a href="" rel="dofollow">Изменение пароля</a></h1>
                </div>
                <div class="formbg-outer">
                    <div class="formbg">
                        
                        <div class="formbg-inner padding-horizontal--48">
                            <img src="src/resources/img/reset.webp" alt="" class="reg_img" style="width: 100%; border-radius: 5%; padding-bottom: 5%;">
                            <br>
                            <span class="padding-bottom--15">Придумайте и введите новый пароль</span>
                            <form id="stripe-login" action="src/php/auth/email/resetPassword.php<?php
                            if (!empty($_GET["code"])){
                                echo "?code=".$_GET["code"];
                            }
                            ?>" method="POST">
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
                                <div class="g-recaptcha" data-sitekey="6LekM2wqAAAAAE7ZNWCZaCeIFb_ZgkuoM9R7r-IE"></div>
                                <div class="field padding-bottom--24">
                                    <input type="submit" name="submit" value="Изменить">
                                </div>
                                <div class="field">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="src/js/preloader.js"></script>
    <script>setTimeout(function(){
        $('.loader_bg').fadeToggle();
    }, 1500);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>

</html>