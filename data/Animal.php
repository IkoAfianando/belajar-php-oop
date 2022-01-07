<?php

namespace Data;

abstract class Animal // harus juga abstract
{
    public string $name;

    abstract public function run() : void; // jika kita membuat function abstract maka kita memaksa turunan dari abstract harus bikin function run
}

class Cat extends Animal
{
    public function run() : void {
        echo "Cat $this->name is running" . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run() : void {
        echo "Dog $this->name is running" . PHP_EOL;
    }
}