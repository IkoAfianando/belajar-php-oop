<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGOodBye};

$person = new Person();
$person->hello("Iko");
$person->goodBye("Joko");
$person->name = "Iko";
$person->run("Iko");
var_dump($person->name);
