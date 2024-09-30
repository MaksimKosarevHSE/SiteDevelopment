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
    <title>хз</title>
</head>
<body>
<form action="src/php/auth/email/login.php" method="POST">
    <input type="text" name="email" placeholder="@edu.hse.ru">
    <input type="password" name="password" placeholder="Параоль">
    <div class="g-recaptcha" data-sitekey="6Ld16FEqAAAAAMNbQ-nmib4sw9wvM1OeCJvOunFv"></div>
    <input type="submit" value="Войти">
</form>
</html>