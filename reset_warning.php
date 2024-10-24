<?php

session_start();
include_once "src/php/auth/getUserByToken.php";
closeAccessForAuthPages();

$msg = "";
if (!empty($_SESSION["errStatus"])){
    $msg = $_SESSION["errStatus"];
} else {
    header("location: reset.php");
}
unset($_SESSION["errStatus"]);
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
                            <div class="warning"><p style="margin-left: 1rem;"><?php echo $msg?></p></div>
                            <span class="padding-bottom--15" style="margin-top: 2rem;">Придумайте и введите новый пароль</span>
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
                                <div class="g-recaptcha" data-sitekey="6Ld16FEqAAAAAMNbQ-nmib4sw9wvM1OeCJvOunFv"></div>
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
</body>

</html>