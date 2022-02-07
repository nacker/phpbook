<?php
/**
 * Created by phpbook PhpStorm
 * Created on: 2022/2/7$ 15:56$
 * Created by: nacker
 * desc:
 */

/**
 * 函数 完成特定功能的代码块
 *
 * function 函数名称([参数列表,])
 * {
 *      函数体
 *      return 返回值
 * }
 */
//echo mt_rand(0, 20). '<br>';
//$password = md5('imzchloe');
//echo $password. '<br>';
// 绝对值
// echo abs(-6.2);
// 大写
// echo strtoupper('hello world');
// 快速生成一个数组
//$arr = range(1, 100, 3);
//var_dump($arr);
// 字符串长度
//echo strlen('hello world');

// 自定义函数
function add($a, $b) //形式参数
{
    return $a + $b;
}
// 调用函数
echo add(2, 3);

ob_clean();

// 变量是否区分大小写？（严格区分大小写） 函数是否区分大小写（不区分）？
$username = 'peter';
if (isset($userName)) {
    echo $userName;
}

echo POW(5, 3);
VAR_DUMP($username);

ob_clean();

$msg = "想和你交友，你可以通过微信或者支付宝转账给我就可以了。";
$res = str_replace("转账", "**", $msg);
$res = str_replace(["转账", "交友"], ["**", "&&"], $msg);
echo $res;
