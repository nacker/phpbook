<?php
session_start();

// if(empty($_SESSION['uname'])){
// 	header("location:login.php");
// }

?>


<!DOCTYPE html>
<html>

<head>
    <title>首页</title>
    <style type="text/css">
        html {

            background: url('/public/static/img/bg.png');

        }

        header {
            display: flex;
            background-color: #333;
            padding: 0.5em 1em;
            opacity: 0.5;
        }

        a {
            color: #bbb;
            text-decoration: none;
        }

        a:hover,
        span {
            color: white;
        }

        header nav {
            margin-left: auto;
        }
    </style>
</head>

<body>
    <header>
        <a href="">首页</a>
        <nav>
            <!-- 如果没有session信息 代表未登录  显示登录 注册按钮-->
            <?php if (!isset($_SESSION['username']) || empty($_SESSION['username'])) : ?>
                <a href="2-login.php">登录</a>&nbsp;
                <a href="4-reg.php">注册</a>
            <?php else : ?>
                <a href="javascript:;"><?= $_SESSION['username'] ?></a>&nbsp;
                <a href="3-doSubmit.php?type=logout" id="logOut">退出</a>
            <?php endif ?>
        </nav>
    </header>

</body>

</html>