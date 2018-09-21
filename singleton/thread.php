<?php
class ThreadSafe extends Thread
{
    private static $instance;
    private function __construct()
    {

    }
    public function getInstance()
    {
        $this->synchronized(function ($thread) {
            if (self::$instance == null) {
                self::$instance = new ThreadSafe();
            }
            return self::$instance;
        }, $this);
    }
}
$n = new ThreadSafe();
var_dump($n);


?>