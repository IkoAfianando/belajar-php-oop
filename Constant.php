<?php

require_once "data/Person.php";

define("APPLICATION", "Belajar PHP OOP");
const APP_VERSION = "1.0.0";

echo APPLICATION . PHP_EOL;
echo APP_VERSION . PHP_EOL;

echo Person::Author . PHP_EOL; // cara mengakses constant

$iko = new Person("Iko", "Banyuwangi");
$iko->info();
