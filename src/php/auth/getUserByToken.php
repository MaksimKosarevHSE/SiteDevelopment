<?php
$path = __DIR__;
include_once "$path/../classes/User.php";
function getUserByToken() : ?User{
    global $path;
    if (isset($_COOKIE["token"])){
        include_once "$path/../DB/dbConnections.php";
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
            setcookie("token", "", time()-3600, "/", "24knt9develop.ru", false, true);
        }
    }
    setcookie("token", "", time()-3600, "/", "24knt9develop.ru", false, true);
    return null;
}

function getUserByTokenOrRedirect() : User{
    $user = getUserByToken();
    if ($user == null){
        header("Location: ../../src/html/login.php");
    }
    return $user;
}


function closeAccessForAuthPages() : void{
    $user = getUserByToken();
    if ($user != null){
        header("Location: ../../src/html/index.php");
    }
}
