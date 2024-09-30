<?php
session_start();
$_SESSION["validation"] = [];
function redirect(){
    header("location: ../../../../login.php");
    die();
}

if($_SERVER["REQUEST_METHOD"] != "POST"){
    redirect();
}

$attrEmail = "email";
$attrPassword = "password";

$captchaKey = '6Ld16FEqAAAAAI0Ag1r-dIExGXNc5y4ZWSL4FN-k';
$accepted = false;
if (!empty($_POST['g-recaptcha-response'])) {
    $out = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $captchaKey . '&response=' . $_POST['g-recaptcha-response']);
    $answer = json_decode($out);
    if ($answer->success) {
        $accepted = true;
    }
}

if (!$accepted) {
    $_SESSION["validation"]["captcha"] = "Капча не пройдена";
    redirect();
}

$passPattern = "/^[^а-яё\s]{8,32}$/iu";
if(empty(trim($_POST[$attrEmail])) || empty(trim($_POST[$attrPassword]))  || !filter_var(trim($_POST[$attrEmail]), FILTER_VALIDATE_EMAIL) || !preg_match($passPattern, $_POST[$attrPassword])){
    $_SESSION["validation"]["personData"] = "Введены недопустимые значения полей";
}
if(!empty($_SESSION["validation"])){
    redirect();
}

include_once "../../DB/dbConnections.php";
include_once "../../classes/Student.php";

$conn = getDbConnectionUsers();

try{
    $conn->beginTransaction();
    $sql = "SELECT * FROM Users WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":email", trim($_POST[$attrEmail]));
    $stmt->execute();
    if($stmt->rowCount() == 0) {
        $_SESSION["auth"] = "Такого пользователя не зарегано";
        throw new Exception();
    }
        $row = $stmt->fetch();
        if ($row["confirmed_email"] != 1) {
            $_SESSION["auth"] = "Ваш аккаунт не активирован. Для активации перейдите по ссылке из письма.";
            throw new Exception();
        }
        if (!password_verify(trim($_POST[$attrPassword]), $row["pass_hash"])){
            $_SESSION["auth"] = "Неверный пароль";
        }

        $token = bin2hex(random_bytes(128));
        $timestamp = time();
        $sql = "INSERT INTO Tokens (token, user_id, timestamp) VALUES (:token, :user_id, :timestamp)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":token", $token);
        $stmt->bindValue(":user_id", $row["user_id"]);
        $stmt->bindValue(":timestamp", $timestamp);
        $rowsCount = $stmt->execute();

        $bool = setcookie("token", $token, time() +  31536000, "/", "24knt9develop.ru", false, true);
        if(!$bool){
            throw new Exception("Ошибка сервера");
        }
        $conn->commit();
        echo "Вы успешно вошли!";
} catch (Exception $e){
    print_r($e->getTrace());
    die("Ошибка входа");

}