<?php

include 'vendor/autoload.php';

use TravisTest\Calculator;

$calculator = new Calculator();

echo $calculator->add(1, 1) . PHP_EOL;
