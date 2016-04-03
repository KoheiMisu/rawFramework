<?php
require_once VENDOR.'/Loader/AutoLoader.php';

$autoLoader = new AutoLoader();

//サーチ対象のディレクトリを取得
$loadDir = require_once VENDOR.'/Loader/ClassMap.php';

//directoryをサーチ対象として登録
foreach($loadDir as $d) {
    $autoLoader->registerDir($d);
}

$autoLoader->register();
