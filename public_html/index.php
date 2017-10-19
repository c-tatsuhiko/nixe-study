<?php

// smartyの設定ファイル読み込み
require_once("c:/nixe-study/www/lib/smarty/Autoloader.php");
Smarty_Autoloader::register();

$name = 'okutani';

$obj = new StdClass();
$obj->hello = 'こんにちは！';

$smarty = new Smarty();
$smarty->assign('name', $name);
$smarty->assign('obj', $obj);
$smarty->display('template/index.tpl');