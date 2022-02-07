<?php
// 开启一个session会话
session_start();
/**
 * 会话跟踪 cookie session 
 * cookie是一个文件 记录了用户的信息，存放在客户端电脑上
 * session 文件存储 存放在服务器
 * 
 */


// setcookie('username', '张三', time() + 3600 * 24 * 3);
$_SESSION['username'] = '张三';
