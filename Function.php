<?php

require_once "data/Person.php";

$iko = new Person("Iko", "Malang");
$iko->name = "Iko";
$iko->sayHello("Joko");


$joko = new Person("Iko", null);
$joko->name = "Joko";
$joko->sayHello(null);