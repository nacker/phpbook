<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>文件上传</title>
</head>

<body>
    <!-- application/x-www-urlencoded 不合适二进制数据或者包含ASCII字符的传输 -->
    <form action="doUpload.php" method="post" enctype="multipart/form-data">
        <label for="avatar">头像</label>
        <input type="file" name="avatar" id="avatar">
        <button>提交</button>
    </form>
</body>

</html>