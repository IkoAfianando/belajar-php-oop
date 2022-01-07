<?php

namespace Data;

interface Car
{
    function Drive(): void;

    function getTired(): int;
}
