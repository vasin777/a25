<?php
    //константы:
    $user = "root"; // имя пользователя
    $pass = ""; // пароль
    $host = "localhost"; // хост
    $db = "a25"; // имя базы данных

    // подключение базы данных
    $conn = new PDO("mysql:dbname=$db;host=$host", $user, $pass);
?>