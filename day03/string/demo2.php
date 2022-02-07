<?php
$str = 'watch';
echo $str[2];
echo $str{2};

$str{2} = 'w';
echo $str;


// 一个汉字占3个字符
$name = '张三';
echo $name{0}.$name{1}.$name{2};
ob_clean();

// 生成颜色随机 内容随机 字数4位的验证码
$codes = 'dbsnjdbjsbdksgladdsjkahdQEWEWRETXFDGBCBGBHJHK125545786312987';
//获取随机索引
// echo mt_rand(0,strlen($codes)-1);
// echo $codes{mt_rand(0,strlen($codes)-1)};

$code = '';
for ($i=0; $i < 4 ; $i++) {
    // 随机颜色 rgb([参数0-255])
    $code .= '<span style="color:rgb( '.mt_rand(0,255).','.mt_rand(0,255).','.mt_rand(0,255).' )">' .$codes{mt_rand(0,strlen($codes)-1)}. '</span>'  ;
}

echo $code;


// strcmp($string1,$string2):比较两个字符串的大小 区分大小写 验证用户密码确认是否一致 一致返回0


if(strcmp('wwwphpcn','wwwphpcn') !== 0)
{
    echo json_encode(['status'=>0,'msg'=>'两次密码须一致'],320);
}else{
    echo json_encode(['status'=>1,'msg'=>'密码确认通过'],320);

}

// strcasecmp($string1,$string2):忽略大小写的比较字符串的大小 验证码的验证
ob_clean();
echo strcasecmp('412D','412d');



