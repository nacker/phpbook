<?php

/**
 * 接口是定义，类（抽象类）是实现。
 * interface的目的是建立通用的标准，只有实现了这些标准，才能被认为实现了接口。
 */


//  为计算机（主程序）扩展功能 计算机官方给出一种公开标准
interface USB
{
    // 接口中只能定义常量和抽象方法
    // 抽象方法 必须是公开的
    function run();
}

// 为计算机扩展键盘功能 USB键盘
class Ukey implements USB
{
    function run()
    {
        return "运行USB键盘设备";
    }
}



class Umemo implements USB
{
    // 工作类按照自己的需求去实现接口中定义的抽象方法（多态）
    function run()
    {
        return "运行USB键盘储存盘";
    }
}


class Umouse implements USB
{
    function run()
    {
        return "运行USB鼠标设备<br>";
    }
}


// 计算机主程序
class Computer
{
    function useUsb($usb)
    {
        return $usb->run();
    }
}


$c = new Computer;
echo $c->useUsb(new Umouse());
echo $c->useUsb(new UKey());

ob_clean();
/**
 * 1. 接口中定义的均是公开的抽象方法，类属性不能定义在接口中，类常量可以。
 * 2.一个工作类必须将接口中的所有方法按照自己的需求去实现，否则该类要定义成抽象类。
 * 3. 抽象类中可以有抽象方法和普通方法，不能被实例化。
 */


interface iDemo
{
    const APP_NAME = 'hidemi小铺';
    public static function getInfo(...$info);
    public static function cal($a, $b);
}

// 抽象类
abstract class aDemo implements Idemo
{
    static function getInfo(...$info)
    {
        return print_r($info, true);
    }
}

// 工作类

class Work extends aDemo
{
    static function cal($a, $b)
    {
        return pow($a, $b);
    }
}

echo Work::getInfo('胡歌', 36, '180cm', '内地男演员');
// 常量最好是以接口的方式去访问
echo Idemo::APP_NAME;
echo ademo::APP_NAME;
echo aDemo::getInfo('胡歌', 36, '180cm', '内地男演员');
echo '<hr>';
echo Work::cal(5, 3);


/**
 * php中，类的继承只能是单继承，即类C不能同时继承类A和类B，那么对于对特定类的功能进行拓展，可以use trait，还可以使用接口来实现类似于多方继承的好处，。
 * 先继承后实现
 * 工作类 extends 普通类（抽象类）implements 接口1，接口2....接口n
 */

/**
 * oop 三大特性  封装 多态 继承

 * 多态性是指同一操作作用于不同类的实例，将产生不同的效果，即不同类的对象收到相同的消息时，得到不同的结果。在PHP中实现多态的方式有2种：通过继承实现多态和通过接口实现多态。多态指的是方法的重写。 
 */



/**
 * 什么时候使用抽象类，接口，trait?
 *  1. 如果你想使用模型，为多个紧密想关的对象提供规范，就使用抽象类；如果你想创建一项功能，随后在多个不想管的对象中实现，就使用接口。
 *  2. 如果你的对象必须从多个源头继承行为，就使用接口；php中的类可以实现多个接口，但只能继承一个类（抽象类）。
 *  3.如果你知道所有类将共享一个方法实现时，就使用抽象类，并在抽象类中实现这个方法。你不能在接口中实现方法。
 *  4. 如果所有类都共享一段相同的代码，就使用trait。 
 *  
 */
