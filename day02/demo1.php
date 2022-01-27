<?php
/**
 * Created by phpbook PhpStorm
 * Created on: 2022/1/27$ 16:29$
 * Created by: nacker
 * desc:
 */
error_reporting(0);

/**
 * php变量类型
 *  4种标量类型(字符串，布尔类型，整型，浮点型)
 *  2种复合类型（数组,对象）
 *  2种特殊类型（resource, null）
 * */
$int = 23;
$int = '23';
var_dump($int);
echo $int;

/**
 * 字符串 定义在单引号、双引号、定界符
 * 单引号:无法解析变量与转义符
 * 双引号、定界符:可以解析变量与转义符
 * 定界符 用于输出长字符串，可以解析变量
 */
$age = '35';
// echo $age;
echo '小李今年' . $age .  '岁';
echo '<hr>';
echo '小李今年$age岁';
echo '<hr>';

echo "小李今年{$age}岁";
