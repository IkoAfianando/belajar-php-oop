<?php

class Manager
{
    var string $name;

    var string $title;

    public function __construct(string $name = "", string $title = "")
    {
        $this->name = $name;
        $this->title = $title;
    }


    function sayHello(string $name): void
    {
        echo "Hi $name, My Name is Manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager // child turunan dari Manager
{

    public function __construct(string $name = "")
    {
        // tidak wajib tapi direkomendasikan
        parent::__construct($name, "VP");
    }

    function sayHello(string $name): void
    {
        echo "Hi $name My Name is VP $this->name" . PHP_EOL; // dapat di over ridding
    }
}

