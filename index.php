<?php
require __DIR__ . '/config/bootstrap.php';

require_once  VENDOR . DS . 'Routing/Dispatcher.php';

$dispatcher = new Dispatcher();
$dispatcher->setSystemRoot(ROOT);
$dispatcher->dispatch();
