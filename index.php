<?php
session_start();
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
    if(!empty($_SESSION['validation'])){
        print_r($_SESSION);

    }

     ?>
</body>
</html>

<?php
$_SESSION["validation"] = [];
?>