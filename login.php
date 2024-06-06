<?php

require_once('db.php');

$login = $_POST['login'];
$password = $_POST['password'];

if(empty($login) || empty($password)) {
    echo "Необходимо ввести данные.";
} else {
    $sql = "SELECT * FROM users WHERE login = '$login' AND password = '$password'";
    $result = $conn->query($sql);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Добро пожаловать " . $row['login'];
            include "profile.html"; 
        }
        } else { 
            echo "Такого пользователя не существует. " . $conn->error;
        }
}