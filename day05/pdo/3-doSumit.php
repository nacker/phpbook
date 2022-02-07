<?php
// 后端可接受前端穿过来的参数
$name = isset($_POST['username']) ? $_POST['username'] : null;
$pwd = isset($_POST['password']) ? $_POST['password'] : null;
// var_dump($pwd, $name);


// 1.连接数据库
require_once '1-connect.php';
// var_dump($pdo);


// 查询数据表里有没有joe
// $stmt = $pdo->query("SELECT * FROM `user` WHERE `username`='{$name}'");
// foreach ($stmt as $row) {
//     print $row['username'] . "\t";
//     print $row['password'] . "\t";
//     print $row['id'] . "\n";
// }


// 检查密码的正确性
$pwd = md5($pwd);

$stmt = $pdo->query("SELECT * FROM `user` WHERE `username`='{$name}' AND `password` = '{$pwd}' ");
// var_dump($stmt);
// foreach ($stmt as $row) {
//     print $row['username'] . "\t";
//     print $row['password'] . "\t";
//     print $row['id'] . "\n";
// }


// sql注入语句 ' or 1=1#   SELECT * FROM `user` WHERE `username`='' or 1=1#' AND `password` = '2e764b112746e6f1398559962bfe0a03' '

// pdo预处理接入

// 准备一条预处理sql语句
$sql = "SELECT * FROM `user` WHERE `username`= ? AND `password` = ? ";
// 准备要执行的语句，并返回语句对象
$stmt = $pdo->prepare($sql);
// 绑定参数到指定的变量名
$stmt->bindParam(1, $name);
$stmt->bindParam(2, $pwd);

// 执行一条预处理语句
$stmt->execute();

$res = $stmt->fetchAll(PDO::FETCH_ASSOC);
var_dump($res);
