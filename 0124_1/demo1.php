<?php
//假如A类与B类有一个共同的方法m1(),为了代码复用,我们可以使用类的继承将方法m1()放到单独的父类P中, 让A类与B类继承父类P

class A 
{
    public function m1()
    {
        return __METHOD__;
    }
}
class B 
{
    public function m1()
    {
        return __METHOD__;
    }
}

echo (new A)->m1(), '<br>';
echo (new B)->m1(), '<br>';


// A类与B类有一个共同的方法m1(),为了代码复用,使用类的继承
class P 
{
    public function m1()
    {
        return __METHOD__;
    }
}

class A extends P
{
    
}
class B extends P
{
    
}

echo (new A)->m1(), '<br>';
echo (new B)->m1(), '<br>';

// 对于这样的小需求,就出动了父类,太重了,可以用" trait"实现它
// trait: 理解为一个公共方法集
// trait 借用了class语法实现的一个轻量级的"类",但不是类,所以不能"实例化"

trait T
{
    public function m1()
    {
        return __METHOD__;
    }
}

class A 
{
    // 在要使用trait的类中,使用use关键字引用它即可
    use T;
}
class B 
{
    use T;
}

echo (new A)->m1(), '<br>';
echo (new B)->m1(), '<br>';


//现在思考一个问题:如果子类,trait,父类中存在同名成员方法,优先级 :
trait show {

    public static function getAge(){
        return __METHOD__;
    }
   
}


class One {
    
    public static function getAge(){
        return __METHOD__;
    }
}

class two extends One {

    use show;
    
    public static function getAge(){
        return __METHOD__;
    }

}

echo two::getAge();



//子类>trait>父类



