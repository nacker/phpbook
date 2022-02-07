<?php
require 'autoload.php';
$son1 = new Son('mac口红', '165', 5);
echo $son1->show();
echo $son1->name;
// echo $son1->discount;
ob_clean();
// echo User::$name;


// $u1 = new User('胡歌', 250000);
// echo User::$name;
// echo User::$count . '<hr>';
// echo User::login();
$u1 = new User('胡歌', 250000);
$u2 = new User('胡歌1', 260000);
$u3 = new User('胡歌2', 270000);
$u4 = new User('胡歌3', 280000);

// echo User::$count;


echo $u2->login1();
