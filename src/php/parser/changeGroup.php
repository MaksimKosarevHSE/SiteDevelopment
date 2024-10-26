<?php
session_start();
function redirect(){
    header("location: ../../../Personal_account/plan.php");
    die();
}
include_once "../auth/getUserByToken.php";
$user = getUserByTokenOrRedirect();
if ($user != null && !empty($_GET["group"]) &&
    ((int)$_GET["group"] === 1 || (int)$_GET["group"] == 2 || (int)$_GET["group"] == 3 || (int)$_GET["group"] == 4 || (int)$_GET["group"] == 5 || (int)$_GET["group"] == 6 || (int)$_GET["group"] == 7 || (int)$_GET["group"] == 8 || (int)$_GET["group"] == 9)) {
    $group = (int)$_GET["group"];
    include_once "../DB/dbConnections.php";
    $connUsers = getDbConnectionUsers();
    try{
        $connUsers->beginTransaction();

        $sql = "UPDATE Users SET group_st = :gr WHERE user_id = :id";
        $stmt = $connUsers->prepare($sql);
        $id = $user->getUserId();
        $stmt->bindParam(':id', $id );
        $stmt->bindParam(':gr', $_GET["group"]);
        $stmt->execute();
        $connUsers->commit();
    } catch (Exception $e) {
        $connUsers->rollback();
    }
}
redirect();

?>
