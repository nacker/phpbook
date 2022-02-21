<?php
// 传统的类的自动加载
// spl_autoload_register(function ($name) {

// });

// composer 自动加载机制
require __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';


use Chloe\Login\Account;
use Chloe\Login\Article;
use lib\Rule;

// echo Account::index();
echo Article::index();
// echo Rule::RuleLayer();
