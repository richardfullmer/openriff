<?php
use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use Openriff\Service\QueueService;

require dirname(__DIR__) . '/../../vendor/autoload.php';

$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new QueueService()
        )
    ),
    8080
);

$server->run();
