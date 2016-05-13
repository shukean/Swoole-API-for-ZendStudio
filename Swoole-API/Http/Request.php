<?php

/**
 *
 * http://wiki.swoole.com/wiki/page/328.html
 */

namespace Swoole\Http;

class Request{

    public $header;
    public $server;
    public $get;
    public $post;
    public $cookie;
    public $files;

    public function rawContent(){

    }

}