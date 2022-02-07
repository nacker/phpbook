<?php
// 允许跨域请求
header("access-control-allow-origin: *");

// 用户数据
$users = require('data.php');

// 如果没有get参数,就返回全部用户数据
if (!isset($_GET['id'])) {
    echo json_encode($users);
    die;
}

// 如果有get参数,如 id=1,则返回指定的一个用户信息
$id =  $_GET['id'] ?? false;
if (in_array($id, array_column($users, 'id'))) {
    foreach ($users as $user) {
        if ($user['id'] == $id) {
            // 密码不需要返回,过滤掉
            array_pop($user);
            echo json_encode($user);
        }
    }
} else {
    echo json_encode('没有该用户');
}
