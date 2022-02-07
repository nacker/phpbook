<?php
error_reporting(-1);
/**
 * 参数 1.  按值传递
 *     2.  按引用传递
 * 
 */
function totalneedtopay($days, $roomprice, $discount = 0.88)
{
    // $roomprice = $roomprice * $discount;
    $roomprice *=  $discount;
    $total = $roomprice * $days;
    return "您需要支付的总价为{$total}元。<br>";
}

// 全局变量
$rommprice = 320;
$days = 5;
// 后端拿到前端用户的信息 username  根据用户名去数据表里查询该用户的信息，发现 是vip用户 打7折
$discount = 0.7;

echo totalneedtopay($days, $rommprice, $discount);
echo totalneedtopay(2, 655);
echo $rommprice; //320 按值传递参数 不会改变全局变量的值  因为导入到函数中的只是$roomprice的副本 

ob_clean();




// !---------------------------------------------------------
function totalneedtopay1($days, &$roomprice, $discount = 0.88)
{
    // $roomprice = $roomprice * $discount;
    $roomprice *=  $discount;
    $total = $roomprice * $days;
    return "您需要支付的总价为{$total}元。<br>";
}

$rommprice = 320;
$days = 5;
$discount = 0.7;
echo totalneedtopay1($days, $rommprice, $discount);
echo '<hr>';
echo $rommprice; //224 按变量引用传参 会改变父程序里变量的值  $roomprice的变量内容所处的内存地址会被导入到函数中
echo totalneedtopay1($days, $rommprice, $discount);
echo '<hr>';
echo $rommprice;
echo '<hr>';
// echo '打印结果' . totalneedtopay1(2, 655); //Fatal error: Only variables can be passed by reference

die;


function addServiceFee(&$fee)
{
    $fee  += 50;
    return $fee;
}

$fee = 350; //已经给$FEE分配了一块内存地址
addServiceFee($fee);
var_dump($fee);
addServiceFee($fee);
var_dump($fee);
addServiceFee($fee);
var_dump($fee);
addServiceFee($fee);
var_dump($fee);
