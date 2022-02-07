<?php
/**
 * 数组:是一组有序成员(键值对)的集合
 * 1. 索引数组 键是从0开始的正整数
 * 2. 关联数组 键是语义化的字符串 id name email gender 
 */


//  多维数组
$sql = "SELECT `config_info`, `config_desc` FROM `bew_admin_config`";

$demo = function($dsn,$username,$pwd) use ($sql)
{
    $pdo = new PDO($dsn,$username,$pwd);
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

};

// $demo('mysql:dbname=chloe','root','zhoujielun521');

$res = call_user_func_array($demo,['mysql:dbname=chloe','root','zhoujielun521']);
print_r($res);
// echo $res[4]['config_info'];


foreach($res as $k=>$v){
    echo $v['config_info'].'<br>';
}







  