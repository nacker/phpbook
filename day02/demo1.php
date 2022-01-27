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

$foo = 2;
echo "$foo \t is $foo \n,next\n";
echo '$foo \t is $foo \n,next\n';


// 定界符
$stu = ['name' => 'Tim', 'stuNo' => 202201, 'mobile' => 18956785474];

$table = <<<HELLO
    <table border="1" cellspacing="0">
        <thead>您的信息如下</thead>
        <tbody>
            <tr>
                <td>姓名</td>
                <td>学号</td>
                <td>手机号</td>
            </tr>
            <tr>
                <td>{$stu['name']}</td>
                <td>{$stu['stuNo']}</td>
                <td>{$stu['mobile']}</td>
            </tr>
        </tbody>
    </table>
HELLO;
echo $table;


// 数组 是键值对的集合 $key => $value

$stu = ['name' => 'Tim', 'stuNo' => 202201, 'mobile' => 18956785474];
var_dump($stu);

// 数组成员的访问
echo $stu['mobile'];

// 多维数组
$stus = [
    ['name' => 'Tim', 'stuNo' => 202201, 'mobile' => 18956785474],
    ['name' => 'Tom', 'stuNo' => 202202, 'mobile' => 19956785474]
];

var_dump($stus);
echo $stus[0]['name'];
ob_clean();

// 2种特殊类型（resource, null）

// resource 保存到外部资源的一个引用,资源是由专门的函数来建立和使用的
$handle = fopen('log.log', 'w');
var_dump($handle);

file_put_contents('log.log', 'hello world');


// null只是代表一个变量没有值  不代表变量内容为0，也不代表为''
$avatar =  null;
unset($stus);
var_dump($stus);







