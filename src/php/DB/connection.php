<?php

try{
    $conn = new PDO("mysql:host=server190.hosting.reg.ru", "u2837693_default", "IC8r6QJBJk5o2vaE");
    echo "Connected successfully";
} catch(PDOException $e){
    die("Фатальная ошибка сервиса, обратитесь к администрации сайта");
}