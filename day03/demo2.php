<?php

// !函数返回值
function demo()
{
    return md5('223444');
    return new stdClass();
    return '1' === 1;
    return '1' == 1;
    return array('123', '西西子');
    return 22.33;
    return 1;
}

// $res = demo();
// var_dump($res);


// !接口开发 函数返回值会转为通用的json格式的数据返回，这样以来就可以和其他的编程语言进行数据交互，例如js与java php  python



function login(): string
{

    //json_encode()第二个参数是一个常量，JSON_UNESCAPED_UNICODE（中文不转为unicode ，对应的数字 256），JSON_UNESCAPED_SLASHES （不转义反斜杠，对应的数字 64）
    return json_encode(['status' => 1, 'message' => '登录/成功'], 320);
}
$jsonstr = login();
// var_dump($jsonstr);
ob_clean();
$res = file_get_contents('http://v.juhe.cn/todayOnhistory/queryEvent.php?key=e2836bfee1edf69a7493429a2b2133c0&date=1/19');

$answers = file_get_contents('http://v.juhe.cn/jztk/query?subject=1&model=c1&key=1e76bc85918154b85371591692606cdb');
// echo $res;
file_put_contents('driver.txt', $answers);
$arr = json_decode($answers, true);
// var_dump($arr);
