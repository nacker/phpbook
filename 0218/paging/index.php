<? require 'pageData.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/style.css">
    <title>Document</title>
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

    <!-- 生成分页条 -->
    <p>
        <? for ($i = 1; $i <= $pages; $i++) : ?>
            <? $jump = sprintf('?page=%d', $i) ?>
            <? $active = ($i == $page) ? 'active' : '' ?>
            <a class="<?= $active ?>" href="<?= $jump ?>"><?= $i ?></a>

            <!-- 生成高亮分页条 -->

        <? endfor ?>
    </p>
</body>

</html>