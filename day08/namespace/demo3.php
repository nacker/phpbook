<?php
// 子空间和公共空间中存在同名的全局成员 函数 类  优先级 子空间>全局空间
namespace php\ns\one;

function var_dump($name)
{
    echo 'HI DUDE' . $name;
}
