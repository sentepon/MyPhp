<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "sorter";

// Подключение к базе данных MySQL
$mysqli = mysqli_connect($host, $username, $password, $dbname);

// Проверка соединения
if (!$mysqli) {
    die("Ошибка подключения: " . mysqli_connect_error());
}
