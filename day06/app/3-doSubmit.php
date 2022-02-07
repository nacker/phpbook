<?php
// 控制器文件
require 'common.php';

// 后端可接受前端传过来的参数
$name = isset($_POST['uname']) ? $_POST['uname'] : null;
$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : null;
$type = strtolower($_GET['type']);
// var_dump($name, $pwd, $type);

// 请求分发器  注册 登录 退出登录
switch ($type) {
    case 'login':
        $res = checkName($name, $pwd);

        if ($res) {
            echo json_encode(['status' => 1, 'msg' => '登录成功'], 320);
            exit;
        }
        echo json_encode(['status' => 0, 'msg' => '用户名或密码错误'], 320);
        break;

        // case 'reg':
        //     // 插入

        // case :'logout':
        session_destroy();
}
