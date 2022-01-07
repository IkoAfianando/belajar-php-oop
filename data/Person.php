<?php

class Person
{
    const Author = "Programming With Iko";

    var string $name;
    var ?string $address = null; // ? digunakan untuk memperbolehkan null
    var string $country = "Indonesia"; // default value

    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi, My Name is $this->name" . PHP_EOL;
        } else {
            echo "Hi, $name My Name is $this->name" . PHP_EOL;
        }
    }

    function info()
    {
        echo "Author : " . self::Author . PHP_EOL; // self digunakan mengakses sebuah constant // untuk class yang sama
    }

    function __destruct()
    {
        echo "Object person $this->name is destroyed" . PHP_EOL;
    }
}

