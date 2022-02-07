<?php
//父类
class Product
{
    protected $name;
    private $price;
    protected $discount  = 5;
    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }



    public function show()
    {
        return "{$this->name} 的单价为{$this->price}元。<br>";
    }
}
