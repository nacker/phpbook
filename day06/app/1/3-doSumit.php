<?php
// 后端可接受前端传过来的参数
$name = isset($_POST['username']) ? $_POST['username'] : null;
$pwd = isset($_POST['password']) ? $_POST['password'] : null;
// var_dump($pwd, $name);


// 1.连接数据库
require_once '1-connect.php';
// var_dump($pdo);



// 检查密码的正确性
$pwd = md5($pwd);
// 查询数据表里有没有joe

/**
 * 查询仅需解析（或预处理）一次，但可以用相同或不同的参数执行多次。当查询准备好后，数据库将分析、编译和优化执行该查询的计划。对于复杂的查询，此过程要花费较长的时间，如果需要以不同参数多次重复相同的查询，那么该过程将大大降低应用程序的速度。通过使用预处理语句，可以避免重复分析/编译/优化周期。简言之，预处理语句占用更少的资源，因而运行得更快。
 *提供给预处理语句的参数不需要用引号括起来，驱动程序会自动处理。如果应用程序只使用预处理语句，可以确保不会发生SQL 注入。（然而，如果查询的其他部分是由未转义的输入来构建的，则仍存在 SQL 注入的风险）。
 */
// sql模板
$sql = "SELECT `username`,`password` FROM `user` WHERE `username` = ? AND `password` = ? ";
// prepare准备阶段
$stmt = $pdo->prepare($sql);
// 为占位符绑定参数
// $stmt->bindParam(1, $name);
// $stmt->bindParam(2, $pwd);
$res = $stmt->execute([$name, $pwd]);
if ($res) {
    $res = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($res) {
        echo json_encode(['status' => 1, 'msg' => '登录成功']);
    }
}
