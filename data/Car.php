<?php

namespace Data;

interface HasBrand
{
    function getBrand(): string;
}

interface IsMaintenance
{
    function isMaintenance(): bool;
}

interface Car extends HasBrand
{
    function drive(): void;

    function getTired(): int;
}

class Avanza implements Car, IsMaintenance
{
   public function drive(): void
   {
       echo "Drive Avanza " . PHP_EOL;
   }

   public function getTired(): int
   {
       return 4;
   }

   public function getBrand(): string
   {
        return "Toyota" . PHP_EOL;
   }

   public function isMaintenance(): bool
   {
        return false;
   }
}
