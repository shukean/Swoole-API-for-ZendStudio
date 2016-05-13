<?php

/**
 * http://wiki.swoole.com/wiki/page/p-process.html
 */

namespace Swoole;

class Process{

    public function __construct($callback, $redirect_stdin_stdout = false, $create_pipe = true){

    }

    public function __destruct(){

    }

    public function wait($blocking){

    }

    public function useQueue($msg_key = 0, $mode = 2){

    }

    public function freeQueue(){

    }

    public function kill($pid, $signo = SIGTERM){

    }

    public function signal($signo, $callback){

    }

    public function start(){

    }

    public function read($buf_size = 8192){

    }

    public function write($data){

    }

    public function push($data){

    }

    public function pop($size = 8192){

    }

    public function exec($execfile, array $args){

    }

    public function daemon($nochdir = false, $noclose = false){

    }

    public function setaffinity(array $setting){

    }

    //exit, add pre underline to avoid sdk error
    public function _exit($status = 0){

    }

    public function close(){

    }
}