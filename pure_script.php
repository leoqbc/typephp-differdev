<?php

use native_types;

function fib(int $n): int
{
    if ($n <= 1) { return $n; }
    return fib($n - 1) + fib($n - 2);
}

function main(): void
{
    echo fib(40);
}
