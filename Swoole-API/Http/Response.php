<?php

/**
 * http://wiki.swoole.com/wiki/page/329.html
 *
 */

namespace Swoole\Http;

class Response{

    public function write($data){

    }

    public function end($data = null){

    }

    public function sendfile($filename){

    }

    public function cookie($name, $value = null, $expires = 0, $path = null, $domain = null,
        $secure = 0, $http_only = 0){

    }

    public function rawcookie($name, $value = null, $expires = 0, $path = null, $domain = null,
        $secure = 0, $http_only = 0){

    }

    public function status($http_status){

    }

    public function header($key, $value){

    }

    public function gzip($level = 1){

    }
}