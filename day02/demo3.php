<?php
/**
 * Created by phpbook PhpStorm
 * Created on: 2022/2/7$ 15:51$
 * Created by: nacker
 * desc:
 */

/**
 * 数组的遍历（循环
 * foreach($arr as $k=>$v)  {循环体}
 * for($i=0;$i<count($arr);$i++)  {循环体}
 */

$navs = [
    ['id' => 1, 'name' => '前端相关'],
    ['id' => 2, 'name' => '后端相关'],
    ['id' => 3, 'name' => '微信相关'],
    ['id' => 4, 'name' => '辅助学习'],
    ['id' => 5, 'name' => '可视化布局'],
    ['id' => 6, 'name' => 'phpadmin管理系统']
];

// count()返回数组 的长度

for ($i = 0; $i < count($navs); $i++ ){
    echo $navs[$i]['name'] . '<br>';
}