<?php

// 查询语句  LIMIT子句 SELECT * FROM table LIMIT offset,length
// limit使用场景  分页    $page=1  $pageSize=2  
// 偏移量的计算 $offset = ($page-1)*$pageSize


// 数据的操作 查询 新增 删除 更改 CURD

// 1. 把数据库连接配置文件引过来
$config = require_once __DIR__ . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'database.php';
extract($config);
// 2. 数据库的连接

// 借助php扩展库 mysqli(该库只能对mysql这种数据库数据进行操作)   
//  pdo  


// phpinfo();
//dsn  data source name 数据源名称 包括pdo驱动名称，host,port,数据库名称。
// $dsn = 'mysql:host=localhost;port=3308;dbname=chloe';
// $username = 'roots';
// $password = '';
// $pdo = new PDO($dsn, $username, $password);
// var_dump($pdo);
$dsn = sprintf('%s:host=%s;port=%s;charset=%s;dbname=%s', $type, $host, $port, $charset, $dbname);
try {
    $pdo = new PDO($dsn, $username, $password);
    // var_dump($pdo);
} catch (PDOException $e) {
    die('Connection error : ' . $e->getMessage());
}

// $stmt = $pdo->query('SELECT * FROM `user` LIMIT 0,3');
// // var_dump($stmt);

// foreach ($stmt as $row) {
//     print $row['username'] . "\t";
//     print $row['password'] . "\t";
//     print $row['id'] . "\n";
// }
