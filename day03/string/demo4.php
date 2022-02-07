<?php
/**
 * 字符串替换函数 str_replace($search,$replace,$string):在指定字符串中查找另外一个字符串，找到之后将其替换成指定字符串
 */


//  echo DIRECTORY_SEPARATOR;
$path = "D:\phpstudy_pro\Extensions\php\php7.3.4nts";
echo str_replace('\\','/', $path);

echo str_replace('转账','--','你可以转账到我的支付宝或者转账到微信都可以？',$count);

echo '\'转账\'被替换了'.$count.'次';

ob_clean();

$search = ['交友','广告','带货','陪聊','异性'];
$flag = ['**','$$','%%','&&','!!'];


$news = '本公司承接各类广告代理，提供直播和带货教学,提供异性交友陪聊服务...';

echo str_replace($search,$flag,$news);







