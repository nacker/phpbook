<?php
class Product
{
    // 普通属性的访问 不需要加$
    public $name;
    public $price;
    protected $discount = 5;




    function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }


    public function show()
    {
        return "{$this->name}的单价为{$this->price}元。";
    }
}
