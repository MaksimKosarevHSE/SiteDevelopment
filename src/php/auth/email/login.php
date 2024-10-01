<?php
session_start();
$_SESSION["validationLogin"] = [];
function redirect(){
    header("location: ../../../../login.php");
    die();
}

if($_SERVER["REQUEST_METHOD"] != "POST"){die();}

$attrEmail = "email";
$attrPassword = "password";

const CAPTCHA_KEY = '6Ld16FEqAAAAAI0Ag1r-dIExGXNc5y4ZWSL4FN-k';
$accepted = false;
if (!empty($_POST['g-recaptcha-response'])) {
    $out = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . CAPTCHA_KEY . '&response=' . $_POST['g-recaptcha-response']);
    $answer = json_decode($out);
    if ($answer->success) {
        $accepted = true;
    }
}

if (!$accepted) {
    $_SESSION["validationLogin"]["captcha"] = "Капча не пройдена";
    redirect();
}
$_SESSION["validationLogin"]["personData"] = true;
$passPattern = "/^[^а-яё\s]{8,32}$/iu";
if(empty(trim($_POST[$attrEmail])) || empty(trim($_POST[$attrPassword]))  || !filter_var(trim($_POST[$attrEmail]), FILTER_VALIDATE_EMAIL) || !preg_match($passPattern, $_POST[$attrPassword])){
    $_SESSION["validationLogin"]["personData"] = false;
}
foreach($_SESSION["validationLogin"] as $value){
    if ($value == false){
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
        $_SESSION["auth"] = "userNotFound";
        throw new Exception("userNotFound");
    }
        $row = $stmt->fetch();
        if ($row["confirmed_email"] != 1) {
            $_SESSION["auth"] = "noActivate";
            throw new Exception("noActivate");
        }
        if (!password_verify(trim($_POST[$attrPassword]), $row["pass_hash"])){
            $_SESSION["auth"] = "incorrectPassword";
            throw new Exception("incorrectPassword");
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

        $bool = setcookie("token", $token, time() +  31536000, "/", "24knt9develop.ru", false, true);
        if(!$bool){
            throw new Exception("Ошибка сервера");
        }
        $conn->commit();
        $_SESSION["auth"] = "success";
        header("location: ../../../../home.php");


} catch (Exception $e){
    if($e instanceof PDOException || $e->getMessage() == "Ошибка сервера"){
        $_SESSION["auth"] = "serverError";
    }
    redirect();
}