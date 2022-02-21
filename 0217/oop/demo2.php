<?php
// 单例模式连接数据库 应用程序跟设计库交互
namespace app\chloe;

use pdo;

interface idbBase
{
    // 数据库连接curd
    static function insert($db, $data);
    static function select($db, $where = []);
    static function update($db, $where = []);
    static function delete($db, $data, $where = []);

    // 数据库连接
    static function doconnect($dsn, $user, $password);
}





// 单例模式连接数据库
abstract class adb implements idbBase
{
    private static $_instance;

    private function __construct()
    {
    }

    private function __clone()
    {
    }


    static function doconnect($dsn, $user, $password)
    {
        // 创建adb类的唯一实例 获取唯一的pdo对象
        if (is_null(self::$_instance)) {
            echo 2;
            self::$_instance = new pdo($dsn, $user, $password);
        }
        return self::$_instance;
    }
}


//工作类 
class DB extends adb
{
    // 数据库连接curd
    static function insert($db, $data)
    {
    }
    static function select($db, $where = ['uid' => 1])
    {
        foreach ($where as $k => $v) {
            $sql = $k . ' > ' . $v;
        }
        return $db->query("SELECT * FROM `mj_user` WHERE " . $sql . " LIMIT 3;")->fetchAll(PDO::FETCH_ASSOC);
    }
    static function update($db, $where = [])
    {
    }
    static function delete($db, $data, $where = [])
    {
    }
}
//客户端代码
$config = [
    'type' => $type ?? 'mysql',
    'host' => $host ?? 'localhost',
    'dbname' => $dbname ?? 'phpcn',
    'username' => $username ?? 'root',
    'password' => $password ?? '',
    'port' => $port ?? '3308',
    'charset' => $charset ?? 'utf8'
];
extract($config);
$dsn = sprintf('%s:host=%s;port=%s;charset=%s;dbname=%s', $type, $host, $port, $charset, $dbname);

$pdo = DB::doconnect($dsn, $username, $password);
// var_dump(DB::select($pdo));


// 检查是否获取到pdo唯一实例
for ($i = 0; $i < 10; $i++) {
    adb::doconnect($dsn, $username, $password);
}
