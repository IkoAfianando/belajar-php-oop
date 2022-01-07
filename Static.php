<?php

require_once "helper/MathHelper.php";

use Helper\MathHelper;

$mathHelper = new MathHelper();

$result = $mathHelper::sum(10, 10, 10, 10);
echo "Result $result" . PHP_EOL;
echo MathHelper::$name . PHP_EOL;
echo MathHelper::$name = "Iko Afianando" . PHP_EOL; // cara mengubah isi name pada Helper
