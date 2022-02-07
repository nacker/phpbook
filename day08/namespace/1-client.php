<?php

namespace ns1;
// 引类的自动加载器
require __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'autoload.php';

// 在一个空间中 实例化另一个空间中的类（带有自己的命名空间),如果不做处理，系统会默认将该类归到当前空间。

// use 1. 引一个带有命名空间的类并且起别名  2.引一个空间为该空间起别名

use app\admin\controller\User;

echo (new User)->index();



// 为了更好的实现类的自动加载 psr-4规范->类文件所在的目录跟命名空间保持一一映射
