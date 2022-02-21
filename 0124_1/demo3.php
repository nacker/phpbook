<?php
/**
 * trait :实现扩展功能
 */


trait tDemo1{
    public function getProps()
     {
        printf('<pre>%s</pre>',print_r(get_class_vars(__CLASS__),true));
     }
   
}

trait tDemo2{
    public function getMethods()
     {
        printf('<pre>%s</pre>',print_r(get_class_methods(__CLASS__),true));
     }
}

trait tDemo3{
    use tDemo1,tDemo2;
}

 class Work1{
     use tDemo2;

    //扩展类功能:添加两个方法:1.打印所有的属性, 2.打印所有的方法

    
     public $name='西瓜';
     public $price = 2;

     public function getInfo(){
         return $this->name . ":" . $this->price;
     }

     
 }

 echo (new Work1)->getInfo();
//  echo (new Work1)->getProps();
 echo (new Work1)->getMethods();


echo '<hr>';
class Work2{
    use tDemo1;
   //扩展类功能:添加两个方法:1.打印所有的属性, 2.打印所有的方法  
    public $name='西瓜';
    public $price = 2;

    public function getInfo(){
        return $this->name . ":" . $this->price;
    }

    
}

echo (new Work2)->getInfo();
echo (new Work2)->getProps();
// echo (new Work2)->getMethods();