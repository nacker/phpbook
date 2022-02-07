<?php

// 1. 把数据库连接配置文件引过来
$config = require_once __DIR__ . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'database.php';
extract($config);

// 2. 数据库的连接

$dsn = sprintf('%s:host=%s;port=%s;charset=%s;dbname=%s', $type, $host, $port, $charset, $dbname);
try {
    $pdo = new PDO($dsn, $username, $password);
    // var_dump($pdo);
} catch (PDOException $e) {
    die('Connection error : ' . $e->getMessage());
}
