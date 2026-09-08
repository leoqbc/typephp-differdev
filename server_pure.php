<?php

use Swoole\Http\Server;
use Swoole\Constant;

require __DIR__ . '/vendor/autoload.php';

function fib(int $n): int
{
    if ($n <= 1) return $n;
    return fib($n - 1) + fib($n - 2);
}

$server = new Server('0.0.0.0', 9501);

$server->set([
    'worker_num' => swoole_cpu_num() * 2,
]);

$server->on(Constant::EVENT_START, function ($server) {
    echo "Swoole http server is started at http://127.0.0.1:9501\n";
});

$server->on(Constant::EVENT_REQUEST, function ($request, $response) {
    fib(35);
    $response->end('Hello From PHP + Swoole' . PHP_EOL);
});

$server->start();
