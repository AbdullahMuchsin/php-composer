<?php

use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;

require_once __DIR__ ."/vendor/autoload.php";

$log = new Logger("AbdullahMuchsin");
$log->pushHandler(new StreamHandler("Application.log", Level::Info));

$log->info("Abdullah Muchsin");
$log->info("Belajar PHP Composer");