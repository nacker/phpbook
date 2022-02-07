<?php

// $username = isset($_GET['name']) ? $_GET['name'] : null;

return [
    'type' => $type ?? 'mysql',
    'username' => $username ?? 'root',
    'password' => $password ?? '',
    'host' => $host ?? 'localhost',
    'port' => $port ?? '3308',
    'charset' => $charset ?? 'utf8',
    'dbname' => 'chloe'
];
