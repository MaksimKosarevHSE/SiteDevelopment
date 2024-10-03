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
    <title>24KNT9</title>
</head>
<body>
    <form action="src/php/auth/email/register.php" method="POST">
        <input type="text" name="firstName" placeholder="Имя">
        <input type="text" name="lastName" placeholder="Фамилия">
        <input type="text" name="email" placeholder="@edu.hse.ru">
        <input type="password" name="password" placeholder="Параоль">
        <input type="password" name="confirmPassword" placeholder="Подтверждение пароля">
        <p><input type="checkbox" name="politicAccept">Я согласен с политикой</p>
        <div class="g-recaptcha" data-sitekey="6Ld16FEqAAAAAMNbQ-nmib4sw9wvM1OeCJvOunFv"></div>
        <input type="submit" value="Зарегаться">
    </form>
    <?php

    if(!empty($_SESSION["lastUrl"]) && $_SESSION["lastUrl"] == "register.php"){
        $result = [];
        $result["values"] = $_SESSION["values"];
        if(!$_SESSION["captcha"]){
            $result["captcha"] = false;
        } else {
            $result["captcha"] = true;
            $result["validation"] = $_SESSION["validation"];
            $flag = true;
            foreach ($_SESSION["validation"] as $value) {
                if($value != 1){
                    $flag = false;
                }
            }
            if($flag){
                $result["regSuccess"] = $_SESSION["regSuccess"];
                $result["regError"] = $_SESSION["regError"];
            }

        }
        echo "Ошибка регистрации <br>";
        print_r($result);
    }
     ?>
</body>
</html>

<?php
unset($_SESSION["captcha"]);
unset($_SESSION["validation"]);
unset($_SESSION["regSuccess"]);
unset($_SESSION["regError"]);
unset($_SESSION["lastUrl"]);
unset($_SESSION["values"]);


?>

