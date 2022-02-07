<?php
/**
 * 函数是全局成员 不受作用域限制。
 * php函数的作用：完成特定功能的代码块，封装成函数可以实现复用性，提高代码的可维护性。
 * php内置了上千种函数可供我们直接调用，函数库文件已经编译到我们所使用的发行版中了，可以直接指定函数名称来调用，当然我们也可以自定义函数来完成特定功能。
 * 函数的命名规则基本和变量的命名规则一致，可以以字母或下划线开头，后跟字母数字或下划线，但不能以数字开头，函数不区分大小写。
 * 函数有三大要素 参数，返回值，函数体
 *
 *
 * php函数语法
 * function 函数名称([ 参数类型限定 参数列表]) :返回值
 * {
 *    函数体
 *    return 返回值
 *    1. 函数只能返回单一的值,返回值的数据类型可以是任意类型
 *    2. 函数碰到return语句,立即结束程序执行,
 *       return后面的代 码不会被执行

 * }
 */

namespace ns1 {
    echo date_default_timezone_get(); //获取默认时区
    echo date_default_timezone_set("PRC");
    echo date("Y-m-d H:m:s");
    echo sayhello('张学友');
    function sayhello(string $name): string //返回string类型
    {
        var_dump($name);
        return "{$name},欢迎您下榻喜来登酒店。";
    }

    echo sayhello('张学友');
    echo sayhello(23);





    /**
     * 参数：可选的，对外提供一个接口，供函数调用者按照自己的意愿改变函数体内的执行行为
     * 参数 形参 实参
     * 默认参数：有默认值的参数，如果不传参或者少传参数，就会默认参数的值
     * 参数是从左往右求值，所以默认参数放到最右边
     */
    function totalneedtopay($days, $roomprice, $discount = 0.88)
    {
        $total = $roomprice * $days * $discount;
        return "您需要支付的总价为{$total}元。<br>";
    }
    echo totalneedtopay(2, 655);


    var_dump(function_exists('var_dump'));


    if (!function_exists('totalneedtopay1')) {
        echo 124;
    }
    ob_clean();
}



// 同一个脚本不能存在同名函数

namespace ns2 {
    function totalneedtopay($days, $roomprice, $discount = 0.88)
    {
        // $roomprice = $roomprice * $discount;
        $roomprice *=  $discount;
        $total = $roomprice * $days;
        return "您需要支付的总价为{$total}元。<br>";
    }

    // 全局变量
    $rommprice = 1500;
    $days = 2;
    $discount = 0.7;
    // 按值传递参数 不会改变全局变量的值  导入到函数中的只是$roomprice的副本
    echo totalneedtopay($days, $rommprice, $discount);
    // echo totalneedtopay(5, 320, 1);
    echo '<hr>';
    echo $rommprice; //1500
}

namespace ns3 {
    // 按变量引用传参 会改变父程序里变量的值  $roomprice的变量内容所处的内存地址会被导入到函数中
    function totalneedtopay1($days, &$roomprice, $discount = 0.88)
    {
        // $roomprice = $roomprice * $discount;
        $roomprice *=  $discount;
        $total = $roomprice * $days;
        return "您需要支付的总价为{$total}元。<br>";
    }

    // 全局变量
    $rommprice = 1500;
    $days = 2;
    $discount = 0.8;
    echo '<hr>';
    // echo totalneedtopay1($days, $rommprice, $discount);

    echo '<hr>';
    echo $rommprice;
}


