<?php
require_once __DIR__ . 'Bootstrap.php';

use Shahed\IO\Input;
use Shahed\IO\Argument;

echo "\n";
$date = new Java('java.util.Date');
$ptrn = new Java('java.text.SimpleDateFormat', 'MMM dd, yyyy');
echo $ptrn->format($date)."\n";

$map = new Java('java.util.HashMap');
$map->put('Shahed', Input::readLine("Enter Shahed's Mobile : "));
$map->put('Khokon',Input::readLine("Enter Khokon's Mobile : "));
echo $map->get('Shahed')."\n\n";
