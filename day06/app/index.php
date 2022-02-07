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

            background: url(http://api.easys.ltd/api/api/api.php);

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
            <?php if (!isset($_SESSION['username']) || empty($_SESSION['username'])) : ?>
                <a href="2-login.php">登录</a>&nbsp;
                <a href="register.php">注册</a>
            <?php else : ?>
                <a href="#"><?= $_SESSION['username'] ?></a>&nbsp;
                <a href="3-doSubmit.php?type=logout" id="logOut">退出</a>
            <?php endif ?>
        </nav>
    </header>
    <script type="text/javascript" src="
https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        // $("#logOut").click(function(){
        //     $.post(",{},function(res){

        //         },"json")
        // })
    </script>
</body>

</html>