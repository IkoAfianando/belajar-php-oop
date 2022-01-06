<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";

use Data\One\{Conflict as Conflict1, Dummy as Dum, Sample};
use function Helper\{helpMe};

$conflict = new Conflict1();
$dummy = new Dum();
$sample = new Sample();