<?php
//trait功能1: 实现代码的复用



trait show{
    public function show(){
        printf('<pre>%s</pre>',print_r(get_class_vars(__CLASS__),true));
    }
}

class User1 {
    use show;
    protected $name = "胡歌";
    protected $gender = "男";  
}
(new User1)->show();

echo '<hr>';

class User2 {
    use show;
    protected $name = "古力娜扎";
    protected $gender = "女";  
}
(new User2)->show();
