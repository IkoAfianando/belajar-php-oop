<?php

class Student
{
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    public function setSample(string $sample): void
    {
        $this->sample = $sample;
    }

    public function __clone() // untuk menghapus beberapa function di dalam cloning yang kedua
    {
        unset($this->sample);
    }

    public function __toString(): string // jika ingin dikonversi menjadi string harus dituliskan terlebih dahulu magic function stringnya
    {
        return "Student id:$this->id, name:$this->name, value:$this->value";
    }

    public function __invoke(...$argumenets): void
    {
        $join = join(",", $argumenets);
        echo "Invoke Students with Arguments $join" . PHP_EOL;
    }

    public function __debugInfo(): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->sample,
            "author" => "Iko",
            "version" => "1.0.0"
        ];
    }
}
