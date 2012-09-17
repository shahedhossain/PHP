<?php

require_once __DIR__ . 'Input.php';
require_once __DIR__ . 'Argument.php';

use Shahed\IO\Input;
use Shahed\IO\Argument;

$args = new Argument();
$args->prints();

$name = Input::readLine('Enter your Name : ');
echo  "Welcome ". $name . "!\n";
