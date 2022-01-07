<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Iko");
var_dump($company);
$company->programmer = new BackEndProgrammer("Eko");
var_dump($company);
$company->programmer = new FrontEndProgrammer("Oko");
var_dump($company);

sayHelloProgrammer(new Programmer("Iko"));
sayHelloProgrammer(new BackEndProgrammer("Iko"));
sayHelloProgrammer(new FrontEndProgrammer("Iko"));