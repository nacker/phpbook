<?php

//trait功能4: trait和interface组合

interface iDemo{
    public static function index();
}

trait tDemo {
    //将接口方法中的抽象方法的实现过程交给trait来处理
    public static function index(){
        return __METHOD__;
    }
}
//工作类

class Hello implements iDemo
{
    use tDemo;

}

//客户端

echo Hello::index();//tDemo::index