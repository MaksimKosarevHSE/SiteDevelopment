<?php
session_start();
function redirect(){
    $c = $_GET["code"];
    header("Location: ../../../html/reset_warning.php?code=$c");
    die();
}

if(!empty($_GET["code"]) && strlen(trim($_GET["code"])) != 0){

    $_SESSION["errStatus"] = "";

    $CAPTCHA_KEY = '6Ld16FEqAAAAAI0Ag1r-dIExGXNc5y4ZWSL4FN-k';
    $accepted = false;
    if (!empty($_POST['g-recaptcha-response'])) {
        $out = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $CAPTCHA_KEY . '&response=' . $_POST['g-recaptcha-response']);
        $answer = json_decode($out);
        if ($answer->success) {
            $accepted = true;
        }
    }
    if (!$accepted) {
        $_SESSION["errStatus"] = "Капча не пройдена";
        redirect();
    }



    $passPattern = "/^[^а-яё\s]{8,32}$/iu";

    if (empty($_POST["password"]) || empty($_POST["confirmPassword"])
        || !preg_match($passPattern, $_POST["password"]) || !preg_match($passPattern, $_POST["confirmPassword"])) {
            $_SESSION["errStatus"] = "Пароль должен состоять минимум из 8 символов и не включать кириллицу";
            redirect();

    } else {
        if ($_POST["password"] !== $_POST["confirmPassword"]) {
                $_SESSION["errStatus"] = "Пароли не совпадают";
            redirect();

        }
    }



    $_SESSION["status"] = "";
    $code = trim($_GET["code"]);
    include_once "../../DB/dbConnections.php";
    $connUsers = getDbConnectionUsers();
    try{
        $connUsers->beginTransaction();
        $sql = "SELECT * FROM ResetCodes WHERE code = :code";
        $stmt = $connUsers->prepare($sql);
        $stmt->bindParam(':code', $code);
        $stmt->execute();
        if ($stmt->rowCount() == 0){
            $_SESSION["status"] = "Недействительная ссылка";
            throw new Exception("Activation code does not exist");
        }

        $userId = ($stmt->fetch())["user_id"];

        $sql = "SELECT * FROM Users WHERE user_id = :userId";
        $stmt = $connUsers->prepare($sql);
        $stmt->bindValue(":userId", $userId);
        $stmt->execute();
        $row = $stmt->fetch();
        if ($row["confirmed_email"] != 1) {
            $_SESSION["status"] = "Ваш аккаунт не активирован";
            throw new Exception("noActivate");
        }






        $sql = "UPDATE Users SET pass_hash = :ps WHERE user_id = :userId";
        $stmt = $connUsers->prepare($sql);
        $stmt->bindParam(':userId', $userId);
        $h = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $stmt->bindParam(':ps', $h);
        $stmt->execute();
        if($stmt->rowCount() == 0){
            throw new Exception("Ошибка БД");
        }
        $connUsers->commit();
        unset($_SESSION["status"]);
        unset($_SESSION["errStatus"]);
        header("Location: ../../../html/reset_sucsess.php");


    } catch (Exception $e) {
        if ($_SESSION["status"] == ""){
            $_SESSION["status"] = "Непредвиденная ошибка";
        }
        $connUsers->rollback();
        header("Location: ../../../html/forget_password_warning.php");
    }
} else {
   header("Location: ../../../html/forget_password.php");

}
?>