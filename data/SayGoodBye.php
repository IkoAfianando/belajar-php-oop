<?php

namespace Data\Traits;

trait SayGoodBye
{
    public function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good Bye" . PHP_EOL;
        } else {
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    public function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello " . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

trait CanRun
{
    public abstract function run(string $name): void;
}

trait All
{
    use SayGoodBye, SayHello, HasName, CanRun {
        // bisa di override
        // hello as private;
        // goodBye as private;
    }
}

class ParentPerson
{
    public function goodBye(?string $name): void
    {
        echo "Good Bye in Person" . PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Hello in Person" . PHP_EOL;
    }
}

class Person extends ParentPerson
{
    use All;
    public function run(string $name): void
    {
        echo "Person $this->name is running, Hello $name" . PHP_EOL;
    }

}