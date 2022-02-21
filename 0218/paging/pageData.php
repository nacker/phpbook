<?php
$pdo = new PDO('mysql:host=localhost;charset=utf8;port=3308;dbname=phpcn', 'root', '', [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);

// 每页的数据量
$pageSize = 8;
// 当前访问的是第几页
$page = $_GET['page'] ?? 1;

// 偏移量offset
$offset = ($page - 1) * $pageSize;


$sql = "SELECT `cou_id`,`title`,`pic`,`info`,`add_time`FROM `mj_course_lists` ORDER BY `cou_id` DESC LIMIT {$offset},{$pageSize}";
$lists = $pdo->query($sql)->fetchAll();

// 获取总页数
$sql1 = "SELECT COUNT(`cou_id`) AS `sum` FROM `mj_course_lists`";
$total = $pdo->query($sql1)->fetch()['sum'];
// var_dump($total);
//总页数
$pages = ceil($total / $pageSize);
// var_dump($pages);
