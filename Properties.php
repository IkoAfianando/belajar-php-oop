<?php

require_once "data/Person.php";

$person = new Person("Iko", "Banyuwangi");
$person->name = "Iko";
$person->address = "Malang";
$person->country = "Indonesia";


var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;
echo "\n";

$person2 = new Person("Iko", "Malang");
$person2->name = "Iko";
$person2->address = "Banyuwangi";
$person2->address = "Indonesia";


echo "Name : $person2->name" . PHP_EOL;
echo "Address : $person2->address" . PHP_EOL;
echo "Country : $person2->country" . PHP_EOL;

var_dump($person2);

//error
//$person2->name = [];
