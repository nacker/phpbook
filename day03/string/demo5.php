<?php
//base64_encode()使用MIME base64对二进制数据进行编码 编码成只有含{A-Z a-z 0-9 + =}这64个字符的串 =用于填充
// header('Content-type:image/jpeg');
$file = file_get_contents('liu.jpg'); //获取到的是二进制数据
var_dump($file);
die;
$img_64 = base64_encode($file);
echo $img_64;

?>
    <img src="data:image/jpeg;base64,<?= $img_64 ?>" alt="天仙">

    die;
<?php
// md5()  // 32
// sha1() // 40

$salt = 'dfsfsdf';
echo sha1('phpcn' . $salt);

// password_hash()  创建密码的散列（hash）
echo '<hr>';
$pwd = password_hash('wwwphpcn', PASSWORD_BCRYPT);
echo $pwd;


// password_verify — 验证密码是否和散列值匹配

if (!password_verify('wwwphpcn', $pwd)) echo ' 密码不正确';;


//parse_str()将字符串解析成多个变量 如果 string 是 URL 传递入的查询字符串（query string），则将它解析为变量并设置到当前作用域,如果设置了第二个参数,解析出的变量将会以数组元素的形式存入到这个数组，作为替代。

$url = 'http://php.edu/0430/str_func/demo4.php?id=1&name=peter&gender=1';

echo '<pre>';
print_r($_GET);

echo '<br>';
echo $_SERVER['QUERY_STRING'];
echo '<br>';
parse_str($_SERVER['QUERY_STRING'], $result);
print_r($result);


// parse_url()解析 URL，返回其组成部分

print_r(parse_url($url));
print_r(parse_url($url, PHP_URL_QUERY));
print_r(parse_url($url, PHP_URL_PATH));
echo '<br>';

//http_build_query  生成 URL-encode 之后的请求字符串

$params = ['name' => 'peter', 'age' => 20, 'email' => 'chloe@php.cn'];

echo http_build_query($params);
echo '<br>';


echo http_build_query(new class
{
    public $name = 'admin';
    public $email = 'admin@php.cn';
    // private $gender = 'male';
    public $gender = 'male';
});
