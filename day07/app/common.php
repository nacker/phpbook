<?php
session_start();
// 模型文件 model
//连接数据库
require '1-connect.php';

function loginCheck($name, $pwd)
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
            // 开启session 将用户的信息储存在服务器上的某个文件中
            $_SESSION['username'] = $res['username'];
            return true;
        } else {
            return false;
        }
    }
}



function insertData($name, $pwd, $gender, $created_at)
{
    $flag = false;
    global $pdo;
    $sql = "INSERT INTO `user` SET `username` =?,`password`=?, `gender`=?,`created_at`=?  ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$name, $pwd, $gender, $created_at]);
    if ($stmt->rowCount() == 1) {
        // 插入数据成功
        $flag = true;
    }

    return $flag;
}
