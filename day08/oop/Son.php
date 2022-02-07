<?php

/**
 * 类的继承（扩展）extends 
 * PHP oop具有单继承的诟病->带来程序的高耦合性：如果程序通过深层次继承绑定到某个具体的类，即使对父类做一些简单的修改，也会对子类带来严重的破坏性。 trait trait是为类似php这种单继承的语言而准备的一种代码复用的机制
 * 要追加的新功能放到一个trait里，然后让A组子类去use trait 不是类
 */
class Son extends Product
{
    // 扩展属性
    private $num;

    // 重写 override
    public function __construct($name, $price, $num)
    {
        // parent 调用父类的成员
        parent::__construct($name, $price);
        $this->num = $num;
    }


    // 重写父类中的普通方法
    public function show(): string
    {
        return parent::show() . "该商品的库存为{$this->num}件。折扣为{$this->discount}折<br>";
    }

    // 扩展方法
    public function total()
    {
        return "商品{$this->name}的总价为" . ($this->price * $this->num) . '元<br>';
    }
}


// trait T1
// {

// }
