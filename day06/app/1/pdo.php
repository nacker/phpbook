<?php
require '1-connect.php';
// 删除
// $sql = "DELETE FROM `user` WHERE `id`=?";
// $stmt = $pdo->prepare($sql);
// $stmt->execute([3]);
// // 返回sql语气受影响的函数
// if ($stmt->rowCount() !== 1) {

// }





// 更新数据
$sql = "UPDATE `user` SET `password` = ? WHERE `id`= ?";
$id = 1;
$pwd = md5('wwwphpcn');
$stmt = $pdo->prepare($sql);
$stmt->execute([$pwd, $id]);
var_dump($stmt->rowCount());
