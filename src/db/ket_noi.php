<?php

// Khoi tao ket noi
function getConnection(){
    $dbUrl = "mysql: host=localhost; dbname=we16305";
    $dbUser = "root";
    $dbPass = "";
    $connection = new PDO($dbUrl, $dbUser, $dbPass);
    return $connection;
}