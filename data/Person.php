<?php

class Person
{
    var string $name;
    var ?string $address = null; // ? digunakan untuk memperbolehkan null
    var string $country = "Indonesia"; // default value

    function sayHello(string $name)
    {
        echo "Hello $name" .PHP_EOL;
    }
}

