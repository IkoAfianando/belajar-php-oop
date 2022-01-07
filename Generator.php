<?php

function getGenap(int $max): Iterator
{
    $array = [];

    for ($i = 1; $i <= $max; $i++) {
        if ($i % 2 == 0) {
            $array[] = $i;
        }

    }
    return new ArrayIterator($array);
}

function getGanjil(int $max): Iterator
{
    for($i = 1; $i <= $max; $i++) {
        if($i % 2 == 0) {
            yield $i; // mempermudah menggunakan perulangan dengan yield
        }
    }
}

foreach (getGenap(100) as $value) {
    echo "Genap : $value" . PHP_EOL;
}
foreach (getGanjil(100) as $value) {
    echo "Genap : $value" . PHP_EOL;
}
