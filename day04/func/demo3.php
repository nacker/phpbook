<?php

/**
 * 递归函数： recursion  函数自身调用自身， 但必须调用自身之前有满足特定条件，否则会无线调用下去。
 */


// 封装一个递归函数，目的是删除所有缓存目录（及其子目录，文件）

echo md5('123456');
die;
$dir = __DIR__ . DIRECTORY_SEPARATOR . 'runtime';
// echo $dir;

function delete_dir_file($dir)
{
    $flag = false; //默认没删除成功runtime目录
    if (is_dir($dir)) {
        // 打开目录流 成功返回一个资源类型 目录句柄  否则false
        if ($handle = opendir($dir)) {
            while (($file = readdir($handle)) !== false) {
                // echo $file . '<br>';
                // 在php中删除一个文件夹的前提是该文件夹为空
                if ($file != '.'  &&  $file != '..') {
                    // var_dump(is_dir($dir . DIRECTORY_SEPARATOR . $file));
                    // die;
                    if (is_dir($dir . DIRECTORY_SEPARATOR . $file)) {
                        // 子内容是目录

                        delete_dir_file($dir . DIRECTORY_SEPARATOR . $file);
                    } else {
                        // 子内容是文件
                        unlink($dir . DIRECTORY_SEPARATOR . $file);
                    }
                }
            }
            closedir($handle);
            if (rmdir($dir)) {
                $flag = true;
            }
        }
    }

    return $flag;
}


$res = delete_dir_file($dir);
if ($res) {
    echo json_encode(['msg' => '清除成功', 'satatus' => 1], 320);
}
