<?php
namespace phpcn\cart;

class Demo
{
    public static function getSite()
    {
        return 'php中文网进阶课购物车<br>';
    }
}

echo Demo::getSite();

// 查看Demo类的完全限定名称
// echo Demo::class;//phpcn\cart\Demo




namespace phpcn\order;
class Demo
{
    public static function getSite()
    {
        return 'php中文网进阶课订单<br>';
    }
}
echo Demo::getSite();


// 在一个空间中访问另外一个子空间中的成员 需要先回到全局空间再进入子空间
echo \phpcn\cart\Demo::getSite();

