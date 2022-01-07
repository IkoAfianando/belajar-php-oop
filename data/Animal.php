<?php

namespace Data;

require_once "Food.php";

abstract class Animal // harus juga abstract
{
    public string $name;

    abstract public function run(): void; // jika kita membuat function abstract maka kita memaksa turunan dari abstract harus bikin function run

    abstract public function eat(AnimalFood $animalFood) : void;
}

class Cat extends Animal
{
    public function run(): void
    {
        echo "Cat $this->name is running" . PHP_EOL;
    }

    public function eat(AnimalFood $animalFood): void
    {
        echo "Cat is eating" . PHP_EOL;
    }
}

class Dog extends Animal
{
    public function run(): void
    {
        echo "Dog $this->name is running" . PHP_EOL;
    }

    public function eat(Food $animalFood): void // Contravariance dari child dijadikan sebuah parents
    {
        echo "Dog is Eating" . PHP_EOL;
    }
}