<?php
session_start();

function redirect(){
    header("location: ../../../html/forget_password_warning.php");
    die();
}
if($_SERVER["REQUEST_METHOD"] != "POST"){die();}

const CAPTCHA_KEY = '6Ld16FEqAAAAAI0Ag1r-dIExGXNc5y4ZWSL4FN-k';
$accepted = false;
if (!empty($_POST['g-recaptcha-response'])) {
    $out = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . CAPTCHA_KEY . '&response=' . $_POST['g-recaptcha-response']);
    $answer = json_decode($out);
    if ($answer->success) {
        $accepted = true;
    }
}
$_SESSION["status"] = "";
$_SESSION["em"] = "";
if (!empty($_POST["email"])) {
    $_SESSION["em"] = $_POST["email"];
}
if (!$accepted) {
    $_SESSION["status"] = "Капча не пройдена";
    redirect();
}


    if (empty($_POST["email"]) || !filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL) || strlen(trim($_POST["email"])) > 99 ){
        $_SESSION["status"] = "Введен некорректный email";
        redirect();
    }


include_once "../../DB/dbConnections.php";
include_once "../../classes/Student.php";
include_once "sendCode.php";
$conn = getDbConnectionUsers();

try{
    $conn->beginTransaction();
    $sql = "SELECT * FROM Users WHERE email = :email";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":email", trim($_POST["email"]));
    $stmt->execute();
    if($stmt->rowCount() == 0) {
        $_SESSION["status"] = "Пользователь не найден";
        throw new Exception("userNotFound");
    }
    $row = $stmt->fetch();
    if ($row["confirmed_email"] != 1) {
        $_SESSION["status"] = "Ваш аккаунт не активирован";
        throw new Exception("noActivate");
    }
    //
    $hash_code = bin2hex(random_bytes(128));
    $sql = "INSERT INTO ResetCodes (user_id, code) VALUES (:user_id, :code)";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":user_id", $row["user_id"]);
    $stmt->bindValue(":code", $hash_code);
    $rowsCount = $stmt->execute();
    if($rowsCount == 0){throw new Exception("Ошибка добавления кода");}


    $href = "https://24knt9develop.ru/src/html/reset.php?code=$hash_code";


    if(!sendResetCode(trim($_POST["email"]), "Пользователь", $href)){
        throw new Exception("Ошибка отправки письма");
    }
    $conn->commit();
    unset($_SESSION["status"]);
    unset($_SESSION["email"]);
    header("location: ../../../html/forget_password_sucsess.php");

    } catch (Exception $e) {
    $conn->rollBack();
    if ($_SESSION["status"] == ""){
        $_SESSION["status"] = "Непредвиденная ошибка сервера";
    }

    redirect();
}
