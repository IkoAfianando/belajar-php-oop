<?php

class Programmer
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackEndProgrammer extends Programmer
{

}

class FrontEndProgrammer extends Programmer
{

}

class Company
{
    public Programmer $programmer;
}

function sayHelloProgrammer(Programmer $programmer)
{
    if($programmer instanceof BackEndProgrammer) { // instance of digunakan untuk pengecekan data pada object
        echo "Hello BackEndProgrammer $programmer->name" . PHP_EOL;
    }else if($programmer instanceof FrontEndProgrammer) {
        echo "Hello FrontEndProgrammer $programmer->name" . PHP_EOL;
    }else {
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    }
}
