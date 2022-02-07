<?php
// 控制器文件
require 'common.php';

// 后端可接受前端传过来的参数
$name = isset($_POST['uname']) ? $_POST['uname'] : null;
$pwd = isset($_POST['pwd']) ? $_POST['pwd'] : null;
$gender = isset($_POST['gender']) ? $_POST['gender'] : null;
$created_at = time();

$type = strtolower($_GET['type']);


// 请求分发器  注册 登录 退出登录
switch ($type) {
    case 'login':
        $res = loginCheck($name, $pwd);

        if ($res) {
            echo json_encode(['status' => 1, 'msg' => '登录成功'], 320);
            exit;
        }
        echo json_encode(['status' => 0, 'msg' => '用户名或密码错误'], 320);
        break;

    case 'reg':
        // 新增数据;
        $res = insertData($name, $pwd, $gender, $created_at);
        if ($res) {
            echo json_encode(['status' => 1, 'msg' => '注册成功'], 320);
            exit;
        }
        echo json_encode(['status' => 0, 'msg' => '注册失败'], 320);
        break;

    case 'logout':
        // 删除注册的session数据的文件 关闭session会话
        // unset($_SESSION);
        session_destroy();
        header('Location:index.php');
        break;
    default:
        exit('非法请求');
}
