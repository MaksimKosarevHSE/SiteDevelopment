<?php
include_once "../classes/User.php";
function getUserByToken() : ?User{
    if (isset($_COOKIE["token"])){
        include_once "../DB/dbConnections.php";
        $conn = getDbConnectionUsers();
        try {
            $sql = "SELECT * FROM Tokens JOIN Users ON Tokens.user_id = Users.user_id WHERE token = :token AND browser = :browser";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(":token", $_COOKIE["token"]);
            $stmt->bindValue(":browser", $_SERVER['HTTP_USER_AGENT']);
            $stmt->execute();
            if ($stmt->rowCount() == 0) {
                throw new Exception("tokenNotFound");
            }
            $row = $stmt->fetch();
            $user = new User($row["user_id"], $row["email"], $row["first_name"], $row["last_name"], $row["third_name"], $row["confirmed_email"], $row["avatar"], $row["position_id"]);
            return $user;
        } catch (Exception $e) {
            if ($e->getMessage() == "tokenNotFound") {
                setcookie("token", "", time()-3600, "/", "24knt9develop.ru", false, true);
                header("location: ../../../login.php");
                die();
            }
        }

    }
    return null;
}

echo getUserByToken();