<?php

require_once "data/Student.php";

$student1 = new Student();
$student1->id = "1";
$student1->name = "Iko";
$student1->value = 100;

$student2 = new Student();
$student2->id = "1";
$student2->name = "Iko";
$student2->value = 100;

var_dump($student1 == $student2);
var_dump($student1 === $student2);
var_dump($student1 === $student1);