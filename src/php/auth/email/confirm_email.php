<?php
session_start();
function redirect(){
    header('Location: ../../../../../login.php');
    die();
}

if(!empty($_GET["code"]) && strlen(trim($_GET["code"])) != 0){
    $_SESSION["confirmed_email"] = false;
    $code = trim($_GET["code"]);
    include_once "../../DB/dbConnections.php";
    $connUsers = getDbConnectionUsers();
    try{
        $connUsers->beginTransaction();
        $sql = "SELECT * FROM ActivationCodes WHERE code = :code";
        $stmt = $connUsers->prepare($sql);
        $stmt->bindParam(':code', $code);
        $stmt->execute();
        if ($stmt->rowCount() == 0){
            throw new Exception("Activation code does not exist");
        }
        $userId = ($stmt->fetch())["user_id"];
        $sql = "UPDATE Users SET confirmed_email = 1 WHERE user_id = :userId";
        $stmt = $connUsers->prepare($sql);
        $stmt->bindParam(':userId', $userId);
        $stmt->execute();
        if($stmt->rowCount() == 0){
            throw new Exception("Ошибка БД");
        }
        $connUsers->commit();
        $_SESSION["confirmed_email"] = true;
        redirect();
    } catch (Exception $e) {
        $connUsers->rollBack();
        redirect();
    }
}
redirect();