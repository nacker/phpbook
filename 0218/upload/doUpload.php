<?php
// 获取文件信息$_FILES
// var_dump($_FILES);


$originalFilename = $_FILES['avatar']['name'];
$type = $_FILES['avatar']['type'];
$tmp_name = $_FILES['avatar']['tmp_name'];
$error = $_FILES['avatar']['error'];
$size = $_FILES['avatar']['size'];

switch ($error):
    case 0:
        echo '<p style="color:green">文件上传成功</p> ';
        break;
    case 1:
        echo '<p style="color:red">文件超过`php.ini`中`upload_max_filesize`值</p>';
        break;
    case 2:
        echo '<p style="color:red">文件大小超过表单中`MAX_FILE_SIZE`指定的值</p>';
        break;
    case 3:
        echo '<p style="color:red">文件只有部分被上传</p>';
        break;
    case 4:
        echo '<p style="color:red">没有文件被上传</p>';
        break;
    case 6:
        echo '<p style="color:red">找不到临时文件夹</p>';
        break;
    case 6:
        echo '<p style="color:red">文件写入失败</p>';
        break;
    default:
        echo '<p style="color:red">系统错误</p>';
        break;
endswitch;


// 检查文件格式mine
$exts = ['png', 'jpg', 'jpeg', 'wbmp', 'gif'];
if (!in_array($ext, $exts)) {
    echo '非法的文件类型';
}

// 检查大小
// `is_uploaded_file()`   | 用来检测文件是否是通过http post方法上传的，而不是系统上的一个文件。作用是防止潜在攻击者通过问题脚本访问并非用于交互的文件




if ($error == 0) {
    //移动暂存区的图片到服务器指定的文件目录
    $des = 'storage/';
    if (!file_exists($des)) {
        mkdir($des, 0777, true);
    }

    // 为了确保同一秒钟两个用户上传的图片名称相同情况下，文件都能上传成功

    $arr = explode('.', $originalFilename);
    $ext = end($arr); //后缀
    $prefix = array_shift($arr);
    $newName = date('YmdHms', time()) . md5($prefix) . time() . '.' . $ext;
    move_uploaded_file($tmp_name, $des . $newName);
}
