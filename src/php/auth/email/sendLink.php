<?php
session_start();

function redirect(){
    header("location: ../../../../forget_password_warning.php");
    die();
}
if($_SERVER["REQUEST_METHOD"] != "POST"){die();}

const CAPTCHA_KEY = '6LekM2wqAAAAAOcq_kgcsvOjz64EOgesDjwrk-X2';
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
    if ($row["confirmed_email"] != 0) {
        $_SESSION["status"] = "Ваш аккаунт уже активирован";
        throw new Exception("noActivate");
    }
    //








    $confirmEmailHash = bin2hex(random_bytes(32));
    $sql = "INSERT INTO ActivationCodes (user_id, code) VALUES (:user_id, :code)";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(":user_id", $row["user_id"]);
    $stmt->bindValue(":code", $confirmEmailHash);
    $rowsCount = $stmt->execute();
    if($rowsCount == 0){throw new Exception("Ошибка добавления кода");}


    $href = "https://hsehelpers.ru/src/php/auth/email/confirm_email.php/?code=$confirmEmailHash";


    if(!sendCode(trim($_POST["email"]), "пользователь", $href)){
        throw new Exception("Ошибка отправки письма");
    }
    $conn->commit();
    unset($_SESSION["status"]);
    unset($_SESSION["email"]);
    header("location: ../../../../activate_account_success.php");

} catch (Exception $e) {
    $conn->rollBack();
    if ($_SESSION["status"] == ""){
        $_SESSION["status"] = "Непредвиденная ошибка сервера";
    }

    redirect();
}
