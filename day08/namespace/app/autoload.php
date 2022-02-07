<?php
spl_autoload_register(function ($class) {
    echo '类名' . $class . '<br>';
    // $file = __DIR__ . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR . $class . '.php';
    // 命名空间分隔符跟目录分隔符不是一回事 
    // linux /  命名空间分隔符依然是\
    // 为了解决linux系统下 类文件引用错误 
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    // var_dump(is_file($file));
    echo '文件路径：' . $file . '<hr>';
    require $file;
});
