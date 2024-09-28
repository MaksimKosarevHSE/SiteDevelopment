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
$accepted = true;
if (!empty($_POST['g-recaptcha-response'])) {
    $out = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $captchaKey . '&response=' . $_POST['g-recaptcha-response']);
    $answer = json_decode($out);
    if ($answer->success) {
        $accepted = false;
    }
}

if ($accepted) {
    $_SESSION["validation"] = ["captcha" => "Капча не пройдена"];
    redirect();
}
if (empty($_POST["firstName"])) {
    $_SESSION["validation"][$attrFirstName] = "Некорректное имя";
}
if (empty($_POST["lastName"])) {
    $_SESSION["validation"][$attrLastName] = "Некорректная фамиилия";
}
if (empty($_POST["email"])) {
    $_SESSION["validation"][$attrEmail] = "Некорректный email";
}

if (empty($_POST["password"])) {
    $_SESSION["validation"][$attrPassword] = "Некорректный пароль";
}
if (empty($_POST["confirmPassword"])) {
    $_SESSION["validation"][$attrConfirmPassword] = "Некорректное подтверждение пароля";
}

if (empty($_POST["politicAccept"]) || $_POST["politicAccept"] == "off" ) {
    $_SESSION["validation"][$attrPoliticAccept] = "Политика не принята";
}

if(sizeof($_SESSION["validation"]) > 0) {
    redirect();
}

