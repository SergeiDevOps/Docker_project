<?php
$host = 'mysql2';
$db   = 'testdb';
$user = 'Sergeiuser';
$pass = 'Sergeipass';

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db;charset=utf8",
        $user,
        $pass
    );
    echo "Подключение к MySQL успешно";
} catch (PDOException $e) {
    echo "Ошибка подключения: " . $e->getMessage();
}
