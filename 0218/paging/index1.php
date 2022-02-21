<? require 'pageData.php' ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>layPage快速使用</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/layui/2.6.8/css/layui.css" integrity="sha512-gK5o6RvUyTWSY+nO4Q9kJKGXbffUbV+u/R3bOAnCiOSIGt8GNDkvLvsQC2WaxyIQwGS56zpwt1TajavwKXBwKA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="static/css/style.css">
</head>

<body>
    <table>
        <caption>课程信息表</caption>
        <thead>
            <tr>
                <td>编号</td>
                <td>名称</td>
                <td>封面</td>
                <td>课程简介</td>
                <td>创建时间</td>
                <td>操作</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lists as $list) : ?>
                <tr>
                    <td><?= $list['cou_id'] ?></td>
                    <td><?= $list['title'] ?></td>
                    <td><img style="width:100px" src=" <?= $list['pic'] ?>" alt="课程封面"></td>
                    <td><?= $list['info'] ?></td>
                    <td><?= date("Y-m-d H:m:s", $list['add_time']) ?></td>
                    <td><button>删除</button><button>编辑</button></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div id="pages"></div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/layui/2.6.8/layui.min.js" integrity="sha512-EKrFvch3qTzLFQgjbcjpsRmF8T3UCtc9ojtMAu6dvvP+bV8qYUDOaQ84nwYCkSLT7lbqGoya/Kf+8fyCBE0vRg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        layui.use('laypage', function() {
            var laypage = layui.laypage;

            //执行一个laypage实例
            laypage.render({
                elem: 'pages' //注意，这里的 test1 是 ID，不用加 # 号
                    ,
                count: <?= $total ?> //数据总数，从服务端得到
                    ,
                limit: <?= $pageSize ?>,
                curr: <?= $page ?>,
                jump: function(obj, first) {
                    if (!first) {
                        window.location.href = '?page=' + obj.curr
                    }
                }
            });
        });
    </script>
</body>

</html>