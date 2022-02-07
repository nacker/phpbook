<?php
/**
 * 
 * use 在命名空间中的作用
 * 1. use 引入别的命名空间到当前空间  as 为引过来的命名空间起别名
 * 2. use 引入别的命名空间中的类到当前空间  as 为引过来的命名空间中的类起别名
 */
 namespace app\admin\controller;

// 控制器类 index
class Index{
    public function index()
    {
        return __METHOD__;
    }
}



namespace extend\lib;
// \ 代表根 root 空间
// echo (new \app\admin\controller\Index)->index();//app\admin\controller\Index::index
//1. use 导入命名空间 
use app\admin\controller;
// 2. 成功导入命名空间以后 就可以不使用类的完全限定名称 来调用类元素
echo (new controller\Index)->index();//app\admin\controller\Index::index


// 3. 为空间起一个别名

use app\admin\controller as app;

echo (new app\Index)->index();//app\admin\controller\Index::index



echo '<hr>';

//使用use 导入别的空间中的类   可以为该类起别名

// use app\admin\controller\Index as Index ;
use app\admin\controller\Index as In ;


// echo (new Index)->index();
echo (new In)->index();
