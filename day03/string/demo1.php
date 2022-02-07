<?php
/**
 * 1.单引号定义字符串
 * 2. 双引号定义字符串
 * 3. 定界符定义字符串
 */

//  单引号定义字符串
// echo 'this is 'my' mother';
echo 'this is \'my\' mother<br>';

// 单引号不能解析转义符 \n 换行 \t缩进
echo 'this \n is a simple \t string<br>';

$username = 'admin';
echo '欢迎您，$username<br>';


echo '<hr>';

// 双引号定义字符串
// 双引号能解析转义符 \n 换行 \t缩进

echo "this \n is a simple \t string<br>";

$name = 'APPLE watch';
$price = 3000;

echo "想买一部$name";
echo "我想买两部 {$name}es";

// 预定义常量 目录分隔符
echo DIRECTORY_SEPARATOR;

// 魔术常量
// require __DIR__ .'\\..\\0806\\1-cal.php' ;

// ECHO __FILE__;


ECHO __LINE__;
ob_clean();


// 定界符定义字符串 解析转义符 解析变量 比较适合输出大量的多行的内部存在多个变量的php字符串

echo <<<HI
    <table border="1" cellspacing="0" bgColor="pink">
        <tr>
            <th>品名</th><td>{$name}</td>
            <th>价格</th><td>{$price}</td>
        </tr>
    </table>
HI;









