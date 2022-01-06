<?php
// menggunakan alias
require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\Conflict as Conflict1;
use Data\Two\Conflict as Conflict2;
use function Helper\helpMe as Help;
use const Helper\APPLICATION as APP;

$conflict = new Conflict1();
$conflict2 = new Conflict2();

help();

echo APP . PHP_EOL;
