<?php

/**
 * 类的静态成员 static 关键字标识， 静态成员由类本身来调用的，为所有实例共享
 * 优点
 * 1.在内存中即使存在多个实例，静态成员在内存中只占一份，为所有实例共享，普通成员以实例的方式会占用多个内存块
 * 2.静态成员的执行效率比实例化高，不需要类的实例化就能够访问静态成员。
 * 缺点：静态成员不自动进行销毁，而实例化的结果会被自动销毁
 *  
 */
class User
{
    public static $name = '张学友';

    private $salary;
    static public $count = 0; //记录构造函数被实例化的次数
    public $count1 = 0;


    function __construct($name, $salary)
    {
        // self::类引用 在类中访问静态成员
        self::$name = $name;
        $this->salary = $salary;
        $this->count1++;
    }
    // 静态方法中不能访问普通成员 只能访问静态成员
    static function login()
    {
        return sprintf('目前该网站的在线人数为%d<br>', self::$count++);
    }


    function login1()
    {
        return sprintf('目前该网站的在线人数为%d<br>', $this->count1++);
    }


    // 注册
    function reg()
    {
    }

    // 验证码
    function captcha_check()
    {
    }

    //退出登录
    function logout()
    {
    }

    function __destruct()
    {
        echo '销毁' . $this->salary;
    }
}


// mvc架构模式 那么任何一个url请求都会定位到某一个具体的类(控制器)的方法中