<?php
function getDbConnection()
{
    $serverName = "localhost";
    $username = "root";
    $password = "";
    $dbName = "mms";

    try {
        $conn = new PDO("mysql:host=$serverName;dbname=$dbName", $username, $password);
        //Set the PDo error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo"connection fail: " . $e->getMessage();
    }
}