<?php
const HOST = "server128.hosting.reg.ru";
const USER_NAME = "u2876006_default";
const PASSWORD = "WlZt6d26iEuUb7MF";

function getServerConnection() : PDO{
    try{
        $conn = new PDO("mysql:host=" . HOST, USER_NAME, PASSWORD);
        return $conn;
    } catch(PDOException $e){
        die("Фатальная ошибка сервиса, обратитесь к администрации сайта");
    }
}

function getDbConnectionUsers() : PDO{
    try{
        $conn = new PDO("mysql:host=" . HOST . ";charset=utf8;  dbname=u2876006_default", USER_NAME, PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e){
        die("Фатальная ошибка сервиса, обратитесь к администрации сайта");
    }

}

