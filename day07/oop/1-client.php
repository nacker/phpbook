<?php
// 客户端代码 调用封装的类 
// require 'Play.php';
// require 'User.php';
// require 'Order.php';
// require 'Play.php';
// require 'Play.php';
// require 'Play.php';
// require 'Play.php';
// require 'Play.php';
// require 'Play.php';
require 'autoload.php';

// 如果需要引用的类文件过多，调用类的自动加载器
$j = new Player('jordan', '195cm', 'Bull', 23, '80kg');
// echo $j->name;
$u = new User('james', '205cm', 'Bull', 23, '80kg');
var_dump($j, $u);
$o = new Order('ORDER', '205cm', 'Bull', 23, '80kg');
var_dump($j, $u, $o);
