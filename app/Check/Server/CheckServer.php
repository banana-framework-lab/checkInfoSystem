<?php
namespace App\Check\Server;

use Library\Abstracts\Server\AbstractSwooleServer;
use Swoole\WebSocket\Server as SwooleSocketServer;

class CheckServer extends AbstractSwooleServer
{
    /**
     * @inheritDoc
     */
    public function onStart(SwooleSocketServer $server, int $workerId): bool
    {
        return true;
    }

    /**
     * @inheritDoc
     */
    public function exit(SwooleSocketServer $server, int $workerId)
    {
    }
}