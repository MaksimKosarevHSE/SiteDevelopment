<?php
session_start();
if($_SERVER["REQUEST_METHOD"] != "POST"){die();}

$attrFirstName = "firstName";
$attrLastName = "lastName";
$attrEmail = "email";
$attrPassword = "password";
$attrConfirmPassword = "confirmPassword";
$attrPoliticAccept = "politicAccept";
function redirect(){
    header("location: ../../../html/reg_warning.php");
    die();
}
$_SESSION["lastUrl"] = "register.php";
$_SESSION["validation"] = [];
$_SESSION["values"] = [
    $attrFirstName => $_POST["firstName"] ?? "",
    $attrLastName => $_POST["lastName"] ?? "",
    $attrEmail => $_POST["email"] ?? ""
];

const CAPTCHA_KEY = '6Ld16FEqAAAAAI0Ag1r-dIExGXNc5y4ZWSL4FN-k';
$accepted = false;
if (!empty($_POST['g-recaptcha-response'])) {
    $out = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . CAPTCHA_KEY . '&response=' . $_POST['g-recaptcha-response']);
    $answer = json_decode($out);
    if ($answer->success) {
        $accepted = true;
    }
}
$_SESSION["err"] = "";
if (!$accepted) {
    $_SESSION["captcha"] = false;
    $_SESSION["err"] = "Капча не пройдена";
    redirect();
} else {
    $_SESSION["captcha"] = true;
}
$_SESSION["validation"] = [
    $attrFirstName => 1,
    $attrLastName => 1,
    $attrEmail => 1,
    $attrPassword => 1,
    $attrPoliticAccept => 1
];

if (empty($_POST[$attrFirstName]) || strlen(trim($_POST[$attrFirstName])) == 0 || strlen(trim($_POST[$attrFirstName])) > 44) {
    $_SESSION["validation"][$attrFirstName] = 0;
    $_SESSION["err"] = "Введите имя";
}
if (empty($_POST[$attrLastName]) || strlen(trim($_POST[$attrLastName])) == 0 || strlen(trim($_POST[$attrLastName])) > 44) {
    $_SESSION["validation"][$attrLastName] = 0;
    if ($_SESSION["err"] == "") {
        $_SESSION["err"] = "Введите фамилию";
    }

}
if (empty($_POST[$attrEmail])) {
    $_SESSION["validation"][$attrEmail] = 0;
    if ($_SESSION["err"] == "") {
        $_SESSION["err"] = "Введите email";
    }
} else {
    if (!filter_var(trim($_POST[$attrEmail]), FILTER_VALIDATE_EMAIL) || strlen(trim($_POST[$attrEmail])) > 99 ){
        if ($_SESSION["err"] == "") {
            $_SESSION["err"] = "Некорректный email";
        }

        $_SESSION["validation"][$attrEmail] = 0;
    }
}


$passPattern = "/^[^а-яё\s]{8,32}$/iu";

if (empty($_POST[$attrPassword]) || empty($_POST[$attrConfirmPassword])
|| !preg_match($passPattern, $_POST[$attrPassword]) || !preg_match($passPattern, $_POST[$attrConfirmPassword])) {
    $_SESSION["validation"][$attrPassword] = 2;
    if ($_SESSION["err"] == "") {
        $_SESSION["err"] = "Пароль должен состоять минимум из 8 символов и не включать кириллицу";
    }

} else {
    if ($_POST[$attrPassword] !== $_POST[$attrConfirmPassword]) {
        $_SESSION["validation"][$attrPassword] = 3;
        if ($_SESSION["err"] == "") {
            $_SESSION["err"] = "Пароли не совпадают";
        }

    }
}

if (empty($_POST[$attrPoliticAccept]) || $_POST[$attrPoliticAccept] !== "on") {
    $_SESSION["validation"][$attrPoliticAccept] = 0;
    if ($_SESSION["err"] == "") {
        $_SESSION["err"] = "Политика конфидециальности не принята";
    }

}

foreach ($_SESSION["validation"] as $value) {
    if($value != 1){
        redirect();
    }
}



include_once "../../DB/dbConnections.php";
include_once "../../classes/Student.php";
include_once "sendCode.php";

$_SESSION["regSuccess"] = false;
$_SESSION["err"] = "";
$connUsers = getDBConnectionUsers();
try{
    $sql = "SELECT * FROM Users WHERE email = :email";
    $stmt = $connUsers->prepare($sql);
    $stmt->bindValue(":email", trim($_POST[$attrEmail]));
    $stmt->execute();
    if($stmt->rowCount() > 0){
        $_SESSION["err"] = "Пользователь с таким email уже существует";
        redirect();
    }
} catch (PDOException $e){
    $_SESSION["err"] = "Непредвиденная ошибка сервера";
    die();
}

try{
    $connUsers->beginTransaction();
    $sql = "INSERT INTO Users (email, pass_hash, first_name, last_name, position_id) VALUES (?, ?, ?, ?, ?)";
    $stmt = $connUsers->prepare($sql);

    $rowsCount = $stmt->execute([trim($_POST["email"]), password_hash($_POST["password"], PASSWORD_DEFAULT), trim($_POST["firstName"]), trim($_POST["lastName"]), 1]);
    if($rowsCount == 0){
        throw new Exception("Ошибка добавления");
    }

    $sql = "SELECT * FROM Users WHERE email = :email";
    $stmt = $connUsers->prepare($sql);
    $stmt->bindValue(":email", trim($_POST[$attrEmail]));
    $stmt->execute();
    $id = 0;
    if($stmt->rowCount() > 0){
        $row = $stmt->fetch();
        $id = $row["user_id"];
    } else {
        throw new Exception("Ошибка получения ID");
    }

    $sql = "INSERT INTO Students (user_id) VALUES (:user_id)";
    $stmt = $connUsers->prepare($sql);
    $stmt->bindValue(":user_id", $id);
    $rowsCount = $stmt->execute();
    if ($rowsCount == 0){throw new Exception("Ошибка добавления студента");}

    $confirmEmailHash = bin2hex(random_bytes(32));
    $sql = "INSERT INTO ActivationCodes (user_id, code) VALUES (:user_id, :code)";
    $stmt = $connUsers->prepare($sql);
    $stmt->bindValue(":user_id", $id);
    $stmt->bindValue(":code", $confirmEmailHash);
    $rowsCount = $stmt->execute();
    if($rowsCount == 0){throw new Exception("Ошибка добавления кода");}


    $href = "https://24knt9develop.ru/src/php/auth/email/confirm_email.php/?code=$confirmEmailHash";


    if(!sendCode(trim($_POST[$attrEmail]), trim($_POST[$attrFirstName]), $href)){
        throw new Exception("Ошибка отправки письма");
    }
    $connUsers->commit();
    $_SESSION["regSuccess"] = true;
    header("location: ../../../html/registration_sucsess.php");
    die();
} catch (Exception $e) {
    $connUsers->rollBack();
    $_SESSION["err"] = "Непредвиденная ошибка сервера";
    redirect();
}
