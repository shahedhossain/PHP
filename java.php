<?php
require_once "http://localhost:8080/JavaBridge/java/Java.inc";
require_once __DIR__ . 'Input.php';
require_once __DIR__ . 'Argument.php';

use Shahed\IO\Input;
use Shahed\IO\Argument;

$date = new Java('java.util.Date');
echo "\n";
echo "Millis : " . $date->getTime()."\n";
echo "Month : " . $date->getMonth()."\n";
echo "Day : " . $date->getDay() . "\n";

$str = new Java('java.lang.String','Hello world');
echo $str . "\n";

$map = new Java('java.util.HashMap');
$map->put('Shahed','01914221077');
$map->put('Khokon','01199157077');
echo $map->get('Shahed')."\n\n";

$system = new Java('java.lang.System');
$os = $system->getProperty('os.name') ."\n\n";
echo $os;

$hello = $str->format("Hello %s , hello %s!\n", array('Dhaka', 'Bangladesh'));
echo $hello;

$ptrn = new Java('java.text.SimpleDateFormat', 'MMM dd, yyyy');
echo $ptrn->format($date)."\n";

$list = new Java('java.util.ArrayList');
$list->add('Shahed');
$list->add('Dhaka');

echo $list->get(1) . "\n";