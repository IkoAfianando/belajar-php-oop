<?php

class Zero
{
    private array $properties = [];

    public function __get($name)
    {
        return $this->properties[$name];
    }

    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function __isset($name): bool
    {
        return isset($this->properties[$name]);
    }

    public function __unset($name)
    {
        unset($this->properties[$name]);
    }

    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call Function $name with arguments $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call Static Function $name with arguments $join" . PHP_EOL;
    }

}

$zero = new Zero();
$zero->firstName = "Iko";
$zero->lastName = "Afianando";
$zero->fullName = "Iko Afianando";

echo "First Name : $zero->firstName" . PHP_EOL;
echo "Last Name : $zero->lastName" . PHP_EOL;
echo "Full Name : $zero->fullName" . PHP_EOL;

$zero->sayHello("Iko", "Afianando");
Zero::sayHello("Iko", "Afianando");


// jika tidak ada property function get yang akan dipanggil
//echo $zero->lastName . PHP_EOL; // jika tidak ada property function get yang akan dipanggil