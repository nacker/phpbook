<?php 
// md5()  // 32 
// sha1() // 40 

// 用户注册 后端程序员自定义 salt
$salt = 'tenacity.1';
// 后端接收用户数据
$pwd = $_GET['password'];
// echo $pwd;
// echo sha1($pwd);
// 给用户的密码加盐做散列处理
echo sha1($pwd.$salt);



// 登录
$pwd_real= 'wwwphpxn';
echo sha1($pwd_real.$salt);

ob_clean();


// 密码散列处理 创建密码的散列（hash）
$hash =  password_hash('wwwphpcn',PASSWORD_BCRYPT);


// 密码验证 password_verify() 验证密码是否和散列值匹配

$res = password_verify('wwwphpxn',$hash);
// var_dump($res);

if(!$res) echo '密码不正确';


// 获取query string的方法

// file http 80  https 443  ftp 21  tcp 
$url = 'http://chloe.io/0810/hash.php?name=admin&gender=1';

echo '<pre>';
// 1
print_r($_GET);
echo '<br>';
// 2
echo $_SERVER['QUERY_STRING'];
echo '<br>';
// 3 parse_url()解析URL 返回它的组成部分
$res = parse_url($url);
print_r($res);





// parse_str()将字符串解析成多个变量  如果设置了第二个变量 result， 变量将会以数组元素的形式存入到这个数组，作为替代。

parse_str($_SERVER['QUERY_STRING'],$result);

 var_dump($result);






//  http_build_query()  api接口安全 生成url_encode之后的请求字符串
$params = ['name'=>'张丹','gender'=>1,'email'=>'4543543@qq.com'];
 
$res = http_build_query($params);
print_r($res);
ob_clean();

// 请求的接口URL
$apiUrl = 'http://apis.juhe.cn/simpleWeather/query';
// 请求参数
$params = [
    'city' => '合肥', // 要查询的城市
    'key' => '0f590369d3d3c9f902282fcc886b8ad1'
];

$paramsString = http_build_query($params);

// 发起接口网络请求
$response = juheHttpRequest($apiUrl, $paramsString , 1);
$result = json_decode($response, true);

print_r($result);









/**
 * 发起网络请求函数
 * @param $url 请求的URL
 * @param bool $params 请求的参数内容
 * @param int $ispost 是否POST请求
 * @return bool|string 返回内容
 */
function juheHttpRequest($url, $params = false, $ispost = 0)
{
    $httpInfo = array();
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.118 Safari/537.36');
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 3);
    curl_setopt($ch, CURLOPT_TIMEOUT, 12);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    if ($ispost) {
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        curl_setopt($ch, CURLOPT_URL, $url);
    } else {
        if ($params) {
            curl_setopt($ch, CURLOPT_URL, $url.'?'.$params);
        } else {
            curl_setopt($ch, CURLOPT_URL, $url);
        }
    }
    $response = curl_exec($ch);
    if ($response === FALSE) {
        // echo "cURL Error: ".curl_error($ch);
        return false;
    }
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $httpInfo = array_merge($httpInfo, curl_getinfo($ch));
    curl_close($ch);
    return $response;
}



