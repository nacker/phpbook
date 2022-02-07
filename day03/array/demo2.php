<?php
$url = 'http://chloe.io?www=23233s&timestamp=23232';
//&times x
echo parse_url($url)['query'];
echo '<hr>';
echo  htmlspecialchars(parse_url($url)['query']);
//  html < > &nbsp;


 


// range()快速创建数组
$arr = range(1,100,3);
$arr = range('a','z',3);
echo '<pre>';
print_r($arr);



// 添加数组成员 
// array_unshift()从头部添加

$arr = ['uniapp'];
array_unshift($arr,'css3');
array_unshift($arr,'composer');
print_r($arr);



// array_push()从尾部添加数组成员

array_push($arr,'vue-webpack');
array_push($arr,'vue-cli');
print_r($arr);



// 删除数组元素
// 1 array_shift() 从头部删除 返回删除的数组元素

$num = range(1,39,4);
print_r($num);

echo '<pre>';
var_dump(array_shift($num));
var_dump(array_shift($num));
var_dump(array_shift($num));
print_r($num);

ob_clean();


$letter = range('a','z',3);
echo '<pre>';
print_r($letter);
// array_pop()从尾部删除 返回删除的数组元素
echo array_pop($letter);
echo array_pop($letter);
echo array_pop($letter);
echo array_pop($letter);
echo array_pop($letter);

print_r($letter);

ob_clean();


// array_splice() 任意位置删除任意数量的数组元素 返回被删除的数据集合


$arr = range(1,36,4);
echo '<pre>';
print_r($arr);
$res = array_splice($arr,2,4);
print_r($res);
