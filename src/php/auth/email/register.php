<?php
session_start();
$attrFirstName = "firstName";
$attrLastName = "lastName";
$attrEmail = "email";
$attrPassword = "password";
$attrConfirmPassword = "confirmPassword";
$attrPoliticAccept = "politicAccept";

$_SESSION["validation"] = [];
$_SESSION["values"] = [
    $attrFirstName => $_POST["firstName"],
    $attrLastName => $_POST["lastName"],
    $attrEmail => $_POST["email"],
    $attrPassword => $_POST["password"],
    $attrConfirmPassword => $_POST["confirmPassword"]
];

function redirect(){
    header("location: ../../../../index.php");
    die();
}

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
    $_SESSION["validation"] = ["captcha" => "Капча не пройдена"];
    redirect();
}

if (empty($_POST[$attrFirstName]) || strlen(trim($_POST[$attrFirstName])) == 0) {
    $_SESSION["validation"][$attrFirstName] = "Некорректное имя";
}
if (empty($_POST[$attrLastName]) || strlen(trim($_POST[$attrLastName])) == 0) {
    $_SESSION["validation"][$attrLastName] = "Некорректная фамилия";
}
if (empty($_POST[$attrEmail])) {
    $_SESSION["validation"][$attrEmail] = "Некорректный email";
} else {
    if (!filter_var(trim($_POST[$attrEmail]), FILTER_VALIDATE_EMAIL)){
        $_SESSION["validation"][$attrEmail] = "Некорректный email";
    }
}
if (empty($_POST[$attrPoliticAccept])) {
    $_SESSION["validation"][$attrPoliticAccept] = "Политика не принята";
} else {
    if ($_POST[$attrPoliticAccept] !== "on"){
        $_SESSION["validation"][$attrPoliticAccept] = "Политика не принята";
    }
}

$passPattern = "/^[^а-яё\s]{8,32}$/iu";

if (empty($_POST[$attrPassword]) || empty($_POST[$attrConfirmPassword])
|| !preg_match($passPattern, $_POST[$attrPassword]) || !preg_match($passPattern, $_POST[$attrConfirmPassword])) {
    $_SESSION["validation"][$attrPassword] = "Некорректный пароль";
} else {
    if ($_POST[$attrPassword] !== $_POST[$attrConfirmPassword]) {
        $_SESSION["validation"][$attrPassword] = "Пароли не совпадают";
    }
}
if(sizeof($_SESSION["validation"]) > 0) {
    redirect();
}
//конец валидации данных
//начало регистрации
include_once "../../DB/dbConnections.php";
echo "Вы успешно прошли валидацию данных";

