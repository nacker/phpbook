<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- php短标签 -->
    <title><? echo '数组的遍历' ?></title>
</head>
<?php
/**
 * Created by phpbook PhpStorm
 * Created on: 2022/2/7$ 15:48$
 * Created by: nacker
 * desc:
 */

/**
 * foreach($arr as $k=>$v)
 * {
 *      echo $v['name];
 * }
 */
$navs = [
    ['id' => 1, 'name' => '前端相关'],
    ['id' => 2, 'name' => '后端相关'],
    ['id' => 3, 'name' => '微信相关'],
    ['id' => 4, 'name' => '辅助学习'],
    ['id' => 5, 'name' => '可视化布局'],
    ['id' => 6, 'name' => 'phpadmin管理系统']
];

// var_dump($navs);


// foreach ($navs as $key => $value) {
//     var_dump($value);
//     echo '<hr>';
//     echo $key;
// }
?>

<body>
<!--  -->
<h1 align="center">9:30上课</h1>
<div>
    <ul>
        <?php foreach ($navs as $k => $v) {  ?>
            <li><?= $v['name'] ?> </li>
        <?php } ?>

    </ul>

    <ul>
        <!-- php模板语法 用于php与html的混编  -->
        <? foreach ($navs as $k => $v) :  ?>
            <li><?= $k.$v['name'] ?> </li>
        <? endforeach ?>

    </ul>


    <ul>
        <?php

        foreach ($navs as $v) {
            echo "<li>{$v['name']}</li>";
        }

        ?>

    </ul>

</div>
</body>

</html>

<!-- php模板语法 为了省略流程控制中或者循环遍历中 的{}对齐问题 -->
<!-- foreach ...endforeach   if...endif   switch... endswitch  while...endwhile -->


