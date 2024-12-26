<?php

use AbdullahMuchsin\Belajar\Customer;

require_once __DIR__ ."/vendor/autoload.php";

$customer = new Customer();
echo $customer->sayHello("Muchsin");