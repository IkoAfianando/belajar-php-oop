<?php

require_once "data/Person.php";

$array = [
    "firstName" => "Iko",
    "lastName" => "Afianando",
    "fullName" => "Iko Afianando"
];

echo "FirstName {$array["firstName"]}". PHP_EOL;

$object = (object) $array;

var_dump($object);


echo "First Name $object->firstName" . PHP_EOL;
echo "Last Name $object->lastName" . PHP_EOL;
echo "Full Name $object->fullName" . PHP_EOL . PHP_EOL;

$arrayLagi = (array) $object;
var_dump($arrayLagi);

$person = new Person("Iko", "Jakarta");
var_dump($person);

$arrayPerson = (array) $person;
var_dump($arrayPerson);
