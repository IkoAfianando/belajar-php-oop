<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Iko";
$manager->sayHello("Joko");

$vp = new VicePresident();
$vp->name = "Budi";
$vp->sayHello("Iko");


