<?php
namespace Ratchet\Command;
use Ratchet\SocketInterface;
use Ratchet\Command\CommandInterface;

class Pong implements CommandInterface {
    public function __construct(SocketInterface $socket) {
    }

    public function execute() {
    }
}