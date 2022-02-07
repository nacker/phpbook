<?php
//加载多个类文件 类的自动加载器
require 'autoload.php';
$b = new Product('被子', 50);
// echo $b->show();

$son = new Son('皮草', 2000);
// echo $son->show();
