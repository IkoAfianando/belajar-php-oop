<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Iko";
$student1->value = 100;
$student1->setSample("XXX");

var_dump($student1);

$student2 = clone $student1; // semua property yang ada di object akan di cloning

var_dump($student2);

