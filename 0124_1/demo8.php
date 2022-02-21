<?php

//魔术方法__set() ,__get()
class db{
    public $c = 0; 

    public function select(){
        ....code
        return $this;
    }
}

$obj = new test;
//赋值 __set()
$obj ->b = 2;
//访问  __get()
echo $obj->b;

//

$db->select()->filed()->where()->limit()->toArray();