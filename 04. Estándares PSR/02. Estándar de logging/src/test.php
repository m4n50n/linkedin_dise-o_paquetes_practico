<?php

// Aquí incluiríamos la clase de Monolog
require __DIR__ . '/Foo.php';

$foo = new Foo(new \Monolog\Logger("test"));
$foo->test();
