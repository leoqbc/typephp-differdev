<?php

require __DIR__ . '/vendor/autoload.php';

use Swoole\Http\Server;
use Swoole\Constant;

$server = new Server('0.0.0.0', 9501);

$server->set([
    'worker_num' => swoole_cpu_num() * 2,
]);

$server->on(Constant::EVENT_START, function ($server) {
    echo "Swoole http server is started at http://127.0.0.1:9501\n";
});

$server->on(Constant::EVENT_REQUEST, function ($request, $response) {
    $response->end('Hello From PHP + Swoole' . PHP_EOL);
});

$server->start();
