<?php
// implode|join($delimiter,$array):以指定分隔符将数组中的键值连接成字符串

// implode|join 数组转字符串
$course = ['html','css','js','vue','uniapp'];

echo implode(",",$course);



// 字符串转数组 explode($delimiter,$string):将指定字符串拆分成数组
$res = explode(',','html,css,js,vue,uniapp');

print_r($res);

//ob_clean();

// 字符串截取 substr($string,$start[,$length]):截取字符串

$str =  md5(rand());
echo $str;
echo '<hr>';
echo substr($str,0,6);
$color = '#'.substr($str,0,6);
?>
<p style="color:<?=$color?>">你好</p>