<?php
/**
 * 开奖
 */

 //奖品 
 $prizes = ['电脑','手机','平板','耳机','拖鞋','口罩'];
 interface iCreateId
 {
     public static function generateId($min,$max);
 }


 trait CreateId {
     //生成唯一id,:抽象方法的实现
    public static function generateId($min,$max){
        return mt_rand($min,$max);
    }
 }


 //开奖类
 class DrawPrize implements iCreateId{
     use CreateId;
     public static function award($prizes,$id){
         return $prizes[$id];
     }
 }

$id = DrawPrize::generateId(0,5);

$prize = DrawPrize::award($prizes,$id);

printf('奖品是:<span style="color:red">%s</span>',$prize);

