<?php
session_start();
include_once "src/php/auth/getUserByToken.php";
$user = getUserByTokenOrRedirect();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>домик</title>
    <p>Привет, <?php echo $user->getFirstName()?></p>
</head>
<body>

</html>