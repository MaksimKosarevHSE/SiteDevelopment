<?php
const HOST = "server190.hosting.reg.ru";
const USER_NAME = "u2837693_default";
const PASSWORD = "IC8r6QJBJk5o2vaE";

function getServerConnection() : PDO{
    try{
        $conn = new PDO("mysql:host=" . HOST, USER_NAME, PASSWORD);
        return $conn;
    } catch(PDOException $e){
        die("Фатальная ошибка сервиса, обратитесь к администрации сайта");
    }
}

function getDbConnection(string $dbName) : PDO{
    try{
        $conn = new PDO("mysql:host=" . HOST . ";dbname=$dbName", USER_NAME, PASSWORD);
        return $conn;
    } catch(PDOException $e){
        die("Фатальная ошибка сервиса, обратитесь к администрации сайта");
    }

}

