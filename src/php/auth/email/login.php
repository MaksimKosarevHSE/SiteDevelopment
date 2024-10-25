<?php
session_start();

function redirect(){
    header("location: ../../../../login_warning.php");
    die();
}

if($_SERVER["REQUEST_METHOD"] != "POST"){die();}
$_SESSION["validationLogin"] = [];
$attrEmail = "email";
$attrPassword = "password";

const CAPTCHA_KEY = '6LekM2wqAAAAAOcq_kgcsvOjz64EOgesDjwrk-X2';
$accepted = false;
if (!empty($_POST['g-recaptcha-response'])) {
    $out = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . CAPTCHA_KEY . '&response=' . $_POST['g-recaptcha-response']);
    $answer = json_decode($out);
    if ($answer->success) {
        $accepted = true;
    }
}
$_SESSION["auth"] = "";
$_SESSION["last_email"] = "";
if (!empty($_POST[$attrEmail])) {
    $_SESSION["last_email"] = $_POST[$attrEmail];
}
if (!$accepted) {
    $_SESSION["validationLogin"]["captcha"] = 0;
    $_SESSION["auth"] = "Капча не пройдена";
    redirect();
}
$_SESSION["validationLogin"]["personData"] = 1;
$passPattern = "/^[^а-яё\s]{8,32}$/iu";
if(empty(trim($_POST[$attrEmail])) || empty(trim($_POST[$attrPassword]))  || !filter_var(trim($_POST[$attrEmail]), FILTER_VALIDATE_EMAIL) || !preg_match($passPattern, $_POST[$attrPassword])){
    $_SESSION["validationLogin"]["personData"] = 0;
    $_SESSION["auth"] = "Введены некорректные данные";
}
foreach($_SESSION["validationLogin"] as $value){
    if ($value == 0){
        redirect();
    }
}
include_once "../../DB/dbConnections.php";
include_once "../../classes/Student.php";

$conn = getDbConnectionUsers();
$_SESSION["auth"] = "";
try{
    $conn->beginTransaction();
    $sql = "SELECT * FROM Users WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":email", trim($_POST[$attrEmail]));
    $stmt->execute();
    if($stmt->rowCount() == 0) {
        $_SESSION["auth"] = "Пользователь не найден";
        throw new Exception("userNotFound");
    }
        $row = $stmt->fetch();
    if (!password_verify(trim($_POST[$attrPassword]), $row["pass_hash"])){
        $_SESSION["auth"] = "Неверный пароль";
        throw new Exception("incorrectPassword");
    }
        if ($row["confirmed_email"] != 1) {
            $_SESSION["auth"] = "Ваш аккаунт не активирован";
            throw new Exception("noActivate");
        }


        $token = bin2hex(random_bytes(128));
        $timestamp = time();
        $sql = "INSERT INTO Tokens (token, user_id, timestamp, browser) VALUES (:token, :user_id, :timestamp, :browser)";
        $stmt = $conn->prepare($sql);
        $stmt->bindValue(":token", $token);
        $stmt->bindValue(":user_id", $row["user_id"]);
        $stmt->bindValue(":timestamp", $timestamp);
        $stmt->bindValue(":browser", $_SERVER["HTTP_USER_AGENT"]);
        $rowsCount = $stmt->execute();

        $bool = setcookie("token", $token, time() +  31536000, "/", "hsehelpers.ru", false, true);
        if(!$bool){
            throw new Exception("Ошибка сервера");
        }
        $conn->commit();
    unset($_SESSION["last_email"]);
    unset($_SESSION["auth"]);
    unset($_SESSION["validationLogin"]);
        header("location: ../../../../home.php");


} catch (Exception $e){
    if($e instanceof PDOException || $e->getMessage() == "Ошибка сервера"){
        $_SESSION["auth"] = "Непредвиденная ошибка сервера";
    }
    redirect();
}