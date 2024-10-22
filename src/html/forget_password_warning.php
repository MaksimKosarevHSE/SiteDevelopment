<?php

include_once "../php/auth/getUserByToken.php";
closeAccessForAuthPages();

session_start();
$msg = "";
if (!empty($_SESSION["status"])){
    $msg = $_SESSION["status"];
} else {
    header("location: forget_password.php");
}
$email = "";
if (!empty($_POST["email"])){
    $email = $_POST["email"];
}
unset($_SESSION["status"]);
unset($_SESSION["email"]);
?>


<html>

<head>
    <meta charset="utf-8">
    <title>Вход</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!--Подключение капчи-->
    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>

<body>
    <div class="login-root">
        <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
            <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
                <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
                    <h1><a href="" rel="dofollow">Ввостановление пароля</a></h1>
                </div>
                <div class="formbg-outer">
                    <div class="formbg">
                        
                        <div class="formbg-inner padding-horizontal--48">
                            <img src="../img/forget.jpg" alt="" class="reg_img" style="width: 100%; border-radius: 5%; padding-bottom: 5%;">
                            <br>
                            <div class="warning"><p style="margin-left: 1rem;"><?php echo $msg?></p></div>
                            <span class="padding-bottom--15" style="padding-top: 1rem;">Введите почту, мы отправим вам письмо для восстановления</span>
                            <form id="stripe-login" action="../php/auth/email/sendResetCode.php" method="POST">
                                <div class="field padding-bottom--24">
                                    <div class="grid--50-50">
                                        <label for="password">Почта</label>
                                    </div>
                                    <input type="email" name="email" value = "<?php echo $email?>">
                                </div>
                                <div class="g-recaptcha" data-sitekey="6Ld16FEqAAAAAMNbQ-nmib4sw9wvM1OeCJvOunFv"></div>
                                <div class="field padding-bottom--24">
                                    <input type="submit" name="submit" value="Отправить">
                                </div>
                                <div class="field">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="footer-link padding-top--24">
                        <span> Вас ещё нет в системе? <a href="registration.php">Зарегистрироваться</a></span>
                        <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>