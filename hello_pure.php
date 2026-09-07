<?php

use Swoole\Http\Server;
use Swoole\Constant;

require __DIR__ . '/vendor/autoload.php';

$server = new Server('0.0.0.0', 9501);

Swoole\Runtime::enableCoroutine();

$server->set([
    'worker_num' => swoole_cpu_num() * 4,
]);

$server->on(Constant::EVENT_START, function ($server) {
    echo "Swoole http server is started at http://127.0.0.1:9501\n";
});

$server->on(Constant::EVENT_REQUEST, function ($request, $response) {
    $sum = 0;
    for ($i = 0; $i < 10; $i++) {
        $sum += factorial($i);
    }
    $response->end('Hello From TypePHP ' . $sum);
});

$server->start();

function factorial($n) {
    if ($n < 0) {
        return "Factorial is not defined for negative numbers.";
    }

    $result = 1;

    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }

    return $result;
}
