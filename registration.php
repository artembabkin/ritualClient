<?php

require_once('db.php');

$email = $_POST['email'];
$login = $_POST['login'];
$password = $_POST['password'];

if (empty($email) || empty($login) || empty($password)) {
    echo "Заполните все поля!";
}

$sql = "INSERT INTO users (email,login,password) VALUES ('$email', '$login', '$password')";
if ($conn -> query($sql) === TRUE) {
    echo "Успешная регистрация";
    include "aut.php";
}
else {
    echo "Ошибка:" . $conn->error;
    
}
