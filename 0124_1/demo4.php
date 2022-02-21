<?php
//trait 功能3:在trait组合中命名冲突的解决方案

trait tDemo1{
    public function display(){
        return __METHOD__;
    }
}

trait tDemo2{
    public function display(){
        return __METHOD__;
    }
}

trait tDemo3{
    use tDemo2,tDemo1{
        //给tDemo2::display()起个别名td2
        tDemo2::display as td2;

        //调用 tDemo1::display()替换掉tDemo2::display()
        tDemo1::display insteadof tDemo2;
    }
}
// class Work {
//     use tDemo2,tDemo1{
//         //给tDemo2::display()起个别名td2
//         tDemo2::display as td2;

//         //调用 tDemo1::display()替换掉tDemo2::display()
//         tDemo1::display insteadof tDemo2;
//     }
// }

// echo (new Work)->display().'<br>';
// echo (new Work)->td2().'<br>';

// echo '<hr>';

class Work_pro{
    use tDemo3;
}

echo (new Work_pro)->display().'<br>';
echo (new Work_pro)->td2().'<br>';