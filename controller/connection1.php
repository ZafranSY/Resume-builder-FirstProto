<?php
function connectDatabase() {
    $host = 'localhost';
    $db = 'resemunew';
    $user = 'root';
    $pass = 'root';

    $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    try {
        return new PDO($dsn, $user, $pass, $options);
    } catch (PDOException $e) {
        die('Connection failed: ' . $e->getMessage());
    }
}
?>
