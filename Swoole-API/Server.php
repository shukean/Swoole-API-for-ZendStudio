<?php

class swoole_server{

    public $master_pid;
    public $manager_pid;

    public $work_id;
    public $work_pid;

    public $connections;

    public $taskworker;

    public $setting = [
        'worker_num' => null,
        'task_worker_num' => null,
        'pipe_buffer_size' => null,
        'buffer_output_size' => null,
        'max_connection' => null
    ];

    /**
     * http://wiki.swoole.com/wiki/page/14.html
     * @param unknown $host
     * @param unknown $port
     * @param unknown $mode
     * @param unknown $type
     */
    public function __construct($host, $port, $mode, $type){

    }

    /**
     * http://wiki.swoole.com/wiki/page/13.html
     * @param array $setting
     */
    public function set(array $setting){

    }

    /**
     * http://wiki.swoole.com/wiki/page/142.html
     * @param unknown $event_type
     * @param unknown $callback
     */
    public function on($event_type, $callback){

    }

    /**
     * http://wiki.swoole.com/wiki/page/16.html
     * @param unknown $host
     * @param unknown $port
     * @param unknown $type
     */
    public function addListener($host, $port, $type){

    }

    /**
     * alias addListener
     * @param unknown $host
     * @param unknown $prot
     * @param unknown $type
     */
    public function listen($host, $prot, $type){

    }

    /**
     * http://wiki.swoole.com/wiki/page/390.html
     * @param unknown $process
     */
    public function addProcess($process){

    }

    /**
     * http://wiki.swoole.com/wiki/page/19.html
     */
    public function start(){

    }

    /**
     * http://wiki.swoole.com/wiki/page/547.html
     */
    public function stop(){

    }

    /**
     * http://wiki.swoole.com/wiki/page/p-server/reload.html
     * @param string $only_reload_task
     */
    public function reload($only_reload_task = false){

    }

    /**
     * http://wiki.swoole.com/wiki/page/138.html
     */
    public function shutdown(){

    }

    /**
     * http://wiki.swoole.com/wiki/page/p-server/close.html
     * @param unknown $fd
     * @param unknown $reset
     */
    public function close($fd, $reset){

    }

    /**
     * http://wiki.swoole.com/wiki/page/p-server/send.html
     * @param unknown $fd
     * @param unknown $data
     * @param number $from_id
     */
    public function send($fd, $data, $from_id = 0){

    }

    /**
     * http://wiki.swoole.com/wiki/page/187.html
     * @param unknown $fd
     * @param unknown $filename
     */
    public function sendfile($fd, $filename){

    }

    /**
     * http://wiki.swoole.com/wiki/page/434.html
     * @param unknown $fd
     * @param unknown $data
     */
    public function sendwait($fd, $data){

    }

    /**
     * http://wiki.swoole.com/wiki/page/363.html
     * @param unknown $message
     * @param unknown $worker_id
     */
    public function sendMessage($message, $worker_id){

    }

    /**
     * http://wiki.swoole.com/wiki/page/381.html
     * @param unknown $ip
     * @param unknown $prot
     * @param unknown $data
     * @param unknown $server_socket
     */
    public function sendto($ip, $prot, $data, $server_socket = -1){

    }

    /**
     * http://wiki.swoole.com/wiki/page/414.html
     */
    public function tick($after_ms, $callback, $param = null){
        return swoole_timer_tick($after_ms, $callback, $param);
    }

    /**
     * http://wiki.swoole.com/wiki/page/320.html
     * @param unknown $ms
     * @param unknown $callback
     * @param unknown $params
     */
    public function after($after_ms, $callback, $param = null){
        return swoole_timer_after($after_ms, $callback, $param);
    }

    /**
     * http://wiki.swoole.com/wiki/page/415.html
     * @param unknown $id
     */
    public function clearTimer($id){
        return swoole_timer_clear($id);
    }

    /**
     * http://wiki.swoole.com/wiki/page/516.html
     * @param unknown $callback
     */
    public function defer($callback){
        return swoole_event_defer($callback);
    }

    /**
     * http://wiki.swoole.com/wiki/page/454.html
     * @param unknown $fd
     */
    public function exist($fd){

    }

    /**
     * http://wiki.swoole.com/wiki/page/p-connection_info.html
     * @param unknown $fd
     * @param unknown $from_id
     * @param string $ignore_close
     */
    public function connection_info($fd, $from_id, $ignore_close = false){

    }

    /**
     * http://wiki.swoole.com/wiki/page/p-connection_list.html
     * @param number $start_fd_id
     * @param number $page_size
     */
    public function connection_list($start_fd_id = 0, $page_size = 10){

    }

    /**
     * http://wiki.swoole.com/wiki/page/369.html
     * @param unknown $fd
     * @param unknown $uid
     */
    public function bind($fd, $uid){

    }

    /**
     * http://wiki.swoole.com/wiki/page/288.html
     */
    public function stats(){

    }

    /**
     * http://wiki.swoole.com/wiki/page/134.html
     * @param unknown $data
     * @param unknown $work_id
     */
    public function task($data, $work_id = -1){

    }

    /**
     * http://wiki.swoole.com/wiki/page/p-server/taskwait.html
     * @param unknown $data
     * @param unknown $work_id
     */
    public function taskwait($data, $work_id = -1){

    }

    /**
     * http://wiki.swoole.com/wiki/page/493.html
     * TODO
     * @param number $port
     */
    public function getSocket($port = 0){

    }

    /**
     * http://wiki.swoole.com/wiki/page/531.html
     * TODO
     * @param unknown $fd
     * @param number $value
     */
    public function proect($fd, $value = 1){

    }

    /**
     * http://wiki.swoole.com/wiki/page/539.html
     * TODO
     */
    public function getLastError(){

    }

    /**
     * http://wiki.swoole.com/wiki/page/135.html
     * @param unknown $data
     */
    public function finish($data){

    }

    /**
     * http://wiki.swoole.com/wiki/page/151.html
     */
    public function heartbeat($if_close_connection = false){

    }
}