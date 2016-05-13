<?php

/**
 * http://wiki.swoole.com/wiki/page/p-http_client.html
 *
 */
namespace Swoole\Http;

class Client{

    public $setting;
    public $requestHeaders;
    public $cookies;
    public $requestBody;
    public $requestMethod;

    public function __construct($host, $port = 80, $ssl = false){

    }

    public function __destruct(){

    }

    public function set($setting){

    }

    public function setMethod($requestMethod){

    }

    public function setHeaders($headers){

    }

    public function setCookies($cookies){

    }

    public function setData($requestBody){

    }

    public function execute($url, $callback){

    }

    public function push($data, $opcode = 0x1, $fin = 1){

    }

    public function get($url, $callback){

    }

    public function post($url, $post_data, $callback){

    }

    public function upgrade($url, $callback){

    }

    public function isConnected(){

    }

    public function close(){

    }

    /**
     *
     * @param unknown $type (onError, onClose, onMessage)
     * @param unknown $callback
     */
    public function on($type, $callback){

    }

}