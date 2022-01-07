<?php

class Manager
{
    var string $name;

    function sayHello(string $name)
    {
        echo "Hi $name, My Name is Manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager // child turunan dari Manager
{
    function sayHello(string $name)
    {
        echo "Hi $name, My Name is VP $this->name" . PHP_EOL; // dapat di over ridding
    }
}

