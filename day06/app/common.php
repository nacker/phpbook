<?php
session_start();
// 模型文件 model
//连接数据库
require '1-connect.php';

function checkName($name, $pwd)
{
    $sql = "SELECT `username`,`password` FROM `user` WHERE `username` = ? AND `password` = ? ";
    // prepare准备阶段
    global $pdo;

    $stmt = $pdo->prepare($sql);
    $res = $stmt->execute([$name, md5($pwd)]);
    if ($res) {
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        // 验证通过
        if ($res) {
            $_SESSION['username'] = $res['username'];
            return true;
        } else {
            return false;
        }
    }
}
