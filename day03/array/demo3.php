<?php
/**
 * 键值操作函数
 * 
 */

//  array_keys() 获取数组的键组成新的数组返回

$stdInfo = ['name'=>'何四','stdNum'=>2232232,'tel'=>15845458545,'bonus'=>8000];

var_dump(array_keys($stdInfo));


// 判断某个键是否存在
$flag = false;
foreach($stdInfo as $k=>$v)
{
    if($k === 'bonus')  $flag = true;
}

echo $flag ? '存在' : '不存在';


// array_key_exists()判断数组中是否存在指定的键名（索引）
var_dump( array_key_exists('bonus',$stdInfo));ob_clean();



// in_array()判断数组中是否存在某个值  存在返回true 否则返回false

var_dump(in_array(80220,$stdInfo));

// 作业 

// 返回数组中所有的值并给其建立从0开始递增的数字索引
$arr = [4=>10,1=>22,9=>55,0=>255];
print_r($arr);


// array_map() array_walk() array_filter()