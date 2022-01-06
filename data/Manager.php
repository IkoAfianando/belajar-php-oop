<?php

class Manager
{
    var string $name;

    function sayHello(string $name)
    {
        echo "Hi $name, My Name is $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager // child turunan dari Manager
{

}

