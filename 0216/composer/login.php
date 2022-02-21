<?php
session_start();
require __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

use Gregwar\Captcha\CaptchaBuilder;

// header('Content-type: image/jpeg');
$builder = new CaptchaBuilder;
$builder->build();
// $builder->save('outs.jpg');

// 将验证码的文字信息存到session中
$_SESSION['phrase'] = $builder->getPhrase();



// 后端 验证码的验证
if ((strcasecmp($_POST['captcha'], $_SESSION['phrase'])) == 0) {
    echo json_encode('验证通过');
} else {
    echo json_encode('验证码错误');
}
// $builder->output();
?>
<input type="text" name="captcha" placeholder="请输入验证码">
<img src="<?= $builder->inline() ?>" />
<p><?= $_SESSION['phrase'] ?></p>