<?php

use native_types;

// Operação de CPU-Bound
function fib(int $n): int
{
    if ($n <= 1) return $n;
    return fib($n - 1) + fib($n - 2);
}

function main(): void
{
    echo fib(40) . PHP_EOL;
}

