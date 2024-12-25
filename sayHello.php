<?php

use AbdullahMuchsin\Data\Muchsin;

require_once __DIR__ . "/vendor/autoload.php";

$muchsin = new Muchsin("Muchsin");

echo $muchsin->sayHello("Hasan") . PHP_EOL;
