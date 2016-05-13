<?php

/**
 * http://wiki.swoole.com/wiki/page/397.html
 */

namespace Swoole\WebSocket;

class Server {

    public function on($event, $callback){

    }

    public function push($fd, $data, $opcode = 1, $finish = true){

    }

    public function pack($data, $opcode = 1, $finish = true, $mask = 0){

    }

    public function unpack($buffer){

    }

    public function exist(){

    }
}