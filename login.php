<?php
session_start();
include_once "src/php/auth/getUserByToken.php";
closeAccessForAuthPages();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Подключение сервисов капчи капчи:-->
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <title>хз</title>
</head>
<body>

<form action="src/php/auth/email/login.php" method="POST">
    <input type="text" name="email" placeholder="@edu.hse.ru">
    <input type="password" name="password" placeholder="Параоль">
    <div class="g-recaptcha" data-sitekey="6Ld16FEqAAAAAMNbQ-nmib4sw9wvM1OeCJvOunFv"></div>
    <input type="submit" value="Войти">
</form>
<?php
    if(!empty($_SESSION["regSuccess"]) && $_SESSION["regSuccess"] == true){
        echo "Перейдите по ссылке из письма, чтобы активировать аккаунт";
        unset($_SESSION["captcha"]);
        unset($_SESSION["validation"]);
        unset($_SESSION["regSuccess"]);
        unset($_SESSION["regError"]);
        unset($_SESSION["lastUrl"]);
        unset($_SESSION["values"]);
    }
    if(!empty($_SESSION["confirmed_email"])){
        if($_SESSION["confirmed_email"] == true){
            echo "email успешно подтвержден!";
        } else {
            echo "Ошибка подтврерждения email";
        }
        unset($_SESSION["confirmed_email"]);
    }

    if(!empty($_SESSION["validationLogin"])){
        $result = [];
        $flag = true;
        foreach($_SESSION["validationLogin"] as $value){
            if ($value == 0){
                $flag = false;
            }
        }
        if($flag){
            $result["auth"] = $_SESSION["auth"];
        } else {
            $result["validationLogin"] = $_SESSION["validationLogin"];
        }
        print_r($result);
        unset($_SESSION["validationLogin"]);
        unset($_SESSION["auth"]);
    }

?>
</html>