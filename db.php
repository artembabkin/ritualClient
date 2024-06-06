<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "registerUser";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn) {
    die("Произошла ошибка входа.". mysqli_connect_error());
} else {
    "Вход выполнен успешно!";
} 
?>