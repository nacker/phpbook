<?php

namespace app\admin\controller;
// 需要将模型层的User类引过来 调用他的getUserInfo()方法

// use 引用带有命名空间的类
use app\admin\model\User as UserModel;

class User
{
    public function index()
    {
        return UserModel::getUserInfo();
    }
}
