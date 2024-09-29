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
    $attrEmail => $_POST["email"]
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

if (empty($_POST[$attrFirstName]) || strlen(trim($_POST[$attrFirstName])) == 0 || strlen(trim($_POST[$attrFirstName])) > 44) {
    $_SESSION["validation"][$attrFirstName] = "Некорректное имя";
}
if (empty($_POST[$attrLastName]) || strlen(trim($_POST[$attrLastName])) == 0 || strlen(trim($_POST[$attrLastName])) > 44) {
    $_SESSION["validation"][$attrLastName] = "Некорректная фамилия";
}
if (empty($_POST[$attrEmail])) {
    $_SESSION["validation"][$attrEmail] = "Некорректный email";
} else {
    if (!filter_var(trim($_POST[$attrEmail]), FILTER_VALIDATE_EMAIL) || strlen(trim($_POST[$attrEmail])) > 99 ){
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
include_once "../../classes/Student.php";



//проверить зареган ли пользователь уже с таким email
$connUsers = getDBConnectionUsers();
$connUsers->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
try{
    $sql = "SELECT * FROM Users WHERE email = :email";
    $stmt = $connUsers->prepare($sql);
    $stmt->bindValue(":email", trim($_POST[$attrEmail]));
    $stmt->execute();
    if($stmt->rowCount() > 0){
        $_SESSION["registration"]["userAlreadyExist"] = true;
        redirect();
    }
} catch (PDOException $e){
    die($e->getMessage());
}

try{
    $connUsers->beginTransaction();
    $sql = "INSERT INTO Users (email, pass_hash, first_name, last_name, position_id) VALUES (?, ?, ?, ?, ?)";
    $stmt = $connUsers->prepare($sql);
    //проверить, что дообавилась строка
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

    $to  = trim($_POST[$attrEmail]);
    $subject = "Подтверждение регистрации";
    $href = "https://24knt9develop.ru/src/php/auth/email/confirm_email.php/?code=$confirmEmailHash";
    $message = " <p>Перейдите по ссылке, чтобы завершить регистрацию</p>
  </br> <a href=\"$href\">Подтвердить</a>";
    $headers = "Content-type: text/html; charset=utf-8 \r\n";

    if(!mail($to, $subject, $message, $headers)){
        throw new Exception("Ошибка отправки письма");
    }
    $connUsers->commit();
} catch (Exception $e) {
    $connUsers->rollBack();
    die($e->getMessage());
}
echo "Чтобы активировать аккаунт перейдите по ссылке из письма. Важно: письмо могло попасть в папку \"Спам\"";
//https://www.php.net/manual/ru/pdo.transactions.php СМОТРИ ЭТО
// и это https://webistore.ru/php/ispolzovanie-tranzakcij-v-pdo-na-php/
//везде закрыть подключение к базе